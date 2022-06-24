<?php

namespace App\Http\Controllers;

use App\Models\FacilitiesServices;
use App\Models\FinanceServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FinanceServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $financeServices = FinanceServices::get();
        return view('Catalogs.finance', compact('financeServices'));
    }

}
