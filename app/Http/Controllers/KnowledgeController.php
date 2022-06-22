<?php

namespace App\Http\Controllers;

use App\Models\Knowledge;
use App\Models\PendingKnowledge;
use Illuminate\Http\Request;
use GuzzleHttp\Psr7\Uri;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class KnowledgeController extends Controller
{
    public function index()
    {
        $pendingKnowledge = DB::table('pending_knowledge')->get();

        return view('knowledge', compact('pendingKnowledge'));
    }

    public function ajax(Request $request)
    {
        $category = $request->category;

        $entry = DB::table('knowledge')->where('category', $category)->get();

        echo $entry;
    }

    public function pendingKnowledge(Request $request)
    {
        $entry = DB::table('pending_knowledge')->get();

        echo $entry;
    }
}
