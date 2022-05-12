<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\FacilitiesController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\SystemController;
use App\Http\Controllers\UserManagement;
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
Route::resource('/ticket', TicketController::class)->middleware('auth');
Route::resource('/status', SystemController::class)->middleware('auth');
Route::resource('/knowledge', KnowledgeController::class)->middleware('auth');
Route::resource('/catalog', CatalogController::class)->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'], function () {
       Route::resource('admin', AdminController::class);
       Route::resource('userManagement', UserManagement::class);
    });
});
