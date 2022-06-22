<?php

use App\Http\Controllers\BusinessSupportServicesController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\FacilitiesController;
use App\Http\Controllers\FinanceServicesController;
use App\Http\Controllers\HRServicesController;
use App\Http\Controllers\ITServicesController;
use App\Http\Controllers\MasterdataServicesController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\SystemController;
use App\Http\Controllers\UserManagement;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KnowledgeController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\SearchController;

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

Route::resource('/', WelcomeController::class)->middleware('auth');
Route::resource('/catalog/facilities', FacilitiesController::class)->middleware('auth');
Route::resource('/catalog/hr', HRServicesController::class)->middleware('auth');
Route::resource('/catalog/it', ITServicesController::class)->middleware('auth');
Route::resource('/catalog/finance', FinanceServicesController::class)->middleware('auth');
Route::resource('/catalog/masterdata', MasterdataServicesController::class)->middleware('auth');
Route::resource('/catalog/businesssupport', BusinessSupportServicesController::class)->middleware('auth');
//Route::get('/main-service/facilities', [FacilitiesController::class, 'filter']);
Route::resource('/ticket', TicketController::class)->middleware('auth');
Route::resource('/status', SystemController::class)->middleware('auth');
Route::resource('/knowledge', KnowledgeController::class)->middleware('auth');
Route::resource('/catalog', CatalogController::class)->middleware('auth');
Route::resource('/search', SearchController::class)->middleware('auth');
Route::get('/foobar', [FacilitiesController::class, 'ajax'])->middleware('auth');
Route::resource('/account', AccountController::class)->middleware('auth');
Route::get('/update-password', function () {
    return view('auth.update-password');
})->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'], function () {
       Route::resource('admin', AdminController::class);
       Route::resource('userManagement', UserManagement::class);
    });
});

Route::post('/userManagement/createUser', [UserManagement::class, 'createUser'])->name('userManagement.createUser');
