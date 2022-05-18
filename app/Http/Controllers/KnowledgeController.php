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

        echo "<div class='card-header'>";
        echo "<p id='testTitle' class='card-header-title'> How do I extend my Microsoft Office subscription?</p>";
        echo "<a href='#' data-action='collapse' class='card-header-icon is-hidden-fullscreen' aria-label='more options'>";
        echo "<span class='icon'>";
        echo "<i class='fas fa-angle-down' aria-hidden='true'></i>";
        echo "</span>";
        echo "</a>";
        echo "</div>";

    }
}
