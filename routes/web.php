<?php

use App\Http\Controllers\BusinessSupportServicesController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ChatController;
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
use App\Events\Message;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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
Route::get('/ticket/my', [TicketController::class,'myTickets'])->name('ticket.myTickets')->middleware('auth');
Route::post('/ticket/take/{ticket}', [TicketController::class,'take'])->name('ticket.take')->middleware('auth');
Route::resource('/', WelcomeController::class)->middleware('auth');
Route::resource('/catalog/facilities', FacilitiesController::class)->middleware('auth');
Route::resource('/catalog/hr', HRServicesController::class)->middleware('auth');
Route::resource('/catalog/it', ITServicesController::class)->middleware('auth');
Route::resource('/catalog/finance', FinanceServicesController::class)->middleware('auth');
Route::resource('/catalog/masterdata', MasterdataServicesController::class)->middleware('auth');
Route::resource('/catalog/businesssupport', BusinessSupportServicesController::class)->middleware('auth');
Route::get('/catalogticket/delete', [CatalogController::class, 'destroy'])->middleware('auth');
//Route::get('/main-service/facilities', [FacilitiesController::class, 'filter']);
Route::resource('/ticket', TicketController::class)->middleware('auth');
Route::resource('/status', SystemController::class)->middleware('auth');
Route::get('/knowledge', [KnowledgeController::class, 'index'])->name('knowledge.index')->middleware('auth');
Route::put('/knowledge/ask-question', [KnowledgeController::class, 'storeNewQuestion'])->middleware('auth');
Route::put('/knowledge/answer-question', [KnowledgeController::class, 'storeAnsweredQuestion'])->middleware('auth');
Route::delete('/knowledge/knowledge-question-delete',[KnowledgeController::class, 'delete'])->name('knowledge.delete')->middleware('auth');
Route::resource('/catalog', CatalogController::class)->middleware('auth');

Route::get('/catalogajax', [CatalogController::class, 'ajax'])->middleware('auth');
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

Route::resource('/chats', ChatController::class)->middleware('auth');
