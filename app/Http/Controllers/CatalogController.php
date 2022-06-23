<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFacilitiesRequest;
use App\Http\Requests\UpdateFacilitiesRequest;
use App\Models\Facilities;
use GuzzleHttp\Psr7\Uri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Catalogs.index');
    }

    public function ajax(Request $request)
    {
        $category = $request->category;

        $table = $request->table;

        $entry = DB::table($table)->where('category', $category)->get();

        echo $entry;
    }

    private function validateTicket(Request $request)
    {
        return $request->validate([
            'title' => 'required',
            'description' => 'required',
            'time' => 'required',
            'location' => 'required'
        ]);
    }

}
