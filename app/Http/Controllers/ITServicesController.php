<?php

namespace App\Http\Controllers;

use App\Models\FacilitiesServices;
use App\Models\ITServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ITServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $itServices = ITServices::get();
        return view('Catalogs.it', compact('itServices'));
    }


    public function ajax(Request $request)
    {
        $category = $request->category;

        $entry = DB::table('i_t_services')->where('category', $category)->get();

        echo $entry;
    }

}
