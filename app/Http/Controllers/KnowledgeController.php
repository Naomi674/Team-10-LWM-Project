<?php

namespace App\Http\Controllers;

use App\Models\Knowledge;
use App\Models\PendingKnowledge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KnowledgeController extends Controller
{
    public function index()
    {
        $pendingKnowledge = DB::table('pending_knowledge')->get();

        return view('knowledge', compact('pendingKnowledge'));
    }

    public function storeNewQuestion(Request $request) {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
        ]);

        PendingKnowledge::create([
            'author' => auth()->user()->name,
            'title' => $request->title,
            'category' => $request->category,
        ]);

        return redirect(route('knowledge.index'));
    }

    public function storeAnsweredQuestion(Request $request) {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'category' => 'required',
        ]);

        $pendingQuestion = PendingKnowledge::where('id', $request->id)->first();

//        if ($pendingQuestion->count() > 1) $pendingQuestion = $pendingQuestion->first();

        Knowledge::create([
            'author' => $pendingQuestion->author,
            'title' => $request->title,
            'body' => $request->body,
            'category' => $request->category,
            'created_at' => $pendingQuestion->created_at,
        ]);

        PendingKnowledge::where('id', $request->id)->delete();

        return redirect(route('knowledge.index'));
    }

    public function delete(Request $request) {
        PendingKnowledge::where('id' ,$request->id)->delete();

        return redirect(route('knowledge.index'));
    }

    // APIs
    public function getKnowledgeCategoryEntries(Request $request)
    {
        $category = $request->category;

        $entry = DB::table('knowledge')->where('category', $category)->get();

        echo $entry;
    }

    public function getPendingKnowledgeEntries(Request $request)
    {
        $entry = DB::table('pending_knowledge')->get();

        echo $entry;
    }
}
