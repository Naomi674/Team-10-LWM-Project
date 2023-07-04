<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFacilitiesRequest;
use App\Http\Requests\UpdateFacilitiesRequest;
use App\Models\CatalogTickets;
use App\Models\Facilities;
use App\Models\Ticket;
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Catalogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFacilitiesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
            'author' => 'required'
        ]);

            CatalogTickets::create([
                'title' => $request->title,
                'description' => $request->description,
                'location' => $request->location,
                'author' => $request->author,
            ]);

        return view('Catalogs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Facilities  $facilities
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $entry = CatalogTickets::find($request->id);

        $entry->delete();

        return redirect(route('ticket.index'));
    }

    public function ajax(Request $request)
    {
        $category = $request->category;

        $table = $request->table;

        $entry = DB::table($table)->where('category', $category)->get();

        echo $entry;
    }

    public function getCatalogTickets(Request $request)
    {
        $entry = DB::table('catalog_tickets')->get();

        echo $entry;
    }

}
