<?php


use App\Http\Controllers\CatalogController;
use App\Http\Controllers\KnowledgeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/knowledge', [KnowledgeController::class, 'getKnowledgeCategoryEntries']);
Route::get('/pendingKnowledge', [KnowledgeController::class, 'getPendingKnowledgeEntries']);
Route::get('/catalogtickets', [CatalogController::class, 'getCatalogTickets']);
