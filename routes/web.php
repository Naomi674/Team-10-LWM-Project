<?php

use App\Http\Controllers\BusinessSupportServicesController;
use App\Http\Controllers\FacilitiesController;
use App\Http\Controllers\FinanceServicesController;
use App\Http\Controllers\HRServicesController;
use App\Http\Controllers\ITServicesController;
use App\Http\Controllers\MasterdataServicesController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\SystemController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KnowledgeController;
use App\Http\Controllers\CatalogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('/welcome');
})->middleware('auth');

Route::resource('/catalog/facilities', FacilitiesController::class)->middleware('auth');
Route::resource('/catalog/hr', HRServicesController::class)->middleware('auth');
Route::resource('/catalog/it', ITServicesController::class)->middleware('auth');
Route::resource('/catalog/finance', FinanceServicesController::class)->middleware('auth');
Route::resource('/catalog/masterdata', MasterdataServicesController::class)->middleware('auth');
Route::resource('/catalog/business_support', BusinessSupportServicesController::class)->middleware('auth');
//Route::get('/main-service/facilities', [FacilitiesController::class, 'filter']);
Route::resource('/ticket', TicketController::class)->middleware('auth');
Route::resource('/status', SystemController::class)->middleware('auth');
Route::resource('/knowledge', KnowledgeController::class)->middleware('auth');
Route::resource('/catalog', CatalogController::class)->middleware('auth');
Route::get('/foobar', [FacilitiesController::class, 'ajax'])->middleware('auth');

