<?php

namespace App\Http\Controllers;


use App\Models\FacilitiesServices;
use App\Models\HRServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HRServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $hrServices = HRServices::get();
        return view('Catalogs.hr', compact('hrServices'));
    }


    public function ajax(Request $request)
    {
        $category = $request->category;

        $entry = DB::table('h_r_services')->where('category', $category)->get();

        echo $entry;
    }

}
