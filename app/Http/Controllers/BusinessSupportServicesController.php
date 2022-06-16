<?php

namespace App\Http\Controllers;

use App\Models\BusinessSupportServices;
use App\Models\FinanceServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BusinessSupportServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $businessSupportServices = BusinessSupportServices::get();
        return view('Catalogs.businesssupport', compact('businessSupportServices'));
    }


    public function ajax(Request $request)
    {
        $category = $request->category;

        $entry = DB::table('business_support_services')->where('category', $category)->get();

        echo $entry;
    }

}
