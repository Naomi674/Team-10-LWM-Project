<?php

namespace App\Http\Controllers;

use App\Models\Knowledge;
use Illuminate\Http\Request;
use GuzzleHttp\Psr7\Uri;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class KnowledgeController extends Controller
{
    public function index()
    {
        return view('knowledge');
    }

    public function ajax(Request $request)
    {
        $category = $request->category;

        $entry = DB::table('knowledge')->where('category', $category)->get();

        echo $entry;
    }
}
