<?php

namespace App\Http\Controllers;

use App\Models\ITServices;
use App\Models\MasterdataServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MasterdataServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $masterdataServices = MasterdataServices::get();
        return view('Catalogs.masterdata', compact('masterdataServices'));
    }


    public function ajax(Request $request)
    {
        $category = $request->category;

        $entry = DB::table('masterdata_services')->where('category', $category)->get();

        echo $entry;
    }

}
