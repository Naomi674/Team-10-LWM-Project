<?php

namespace App\Http\Controllers;

use App\Models\Knowledge;
use Illuminate\Http\Request;
use GuzzleHttp\Psr7\Uri;
use Illuminate\Support\Facades\URL;

class KnowledgeController extends Controller
{
    public function index()
    {
        return view('knowledge');
    }
}