<?php

use App\Http\Controllers\FacilitiesController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\SystemController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KnowledgeController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ChatsController;

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

Route::get('/chat', [ChatsController::class, 'index']);
Route::get('messages', [ChatsController::class, 'fetchMessages']);
Route::post('messages', [ChatsController::class, 'sendMessages']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Addchat::routes();
