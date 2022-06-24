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

}
