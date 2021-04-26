<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\ConversationController;
use App\Http\Controllers\UserNotificationsController;
use App\Http\Controllers\BestReplyController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contact', [ContactController::class, 'show']);
Route::post('/contact', [ContactController::class, 'store']);
Route::get('/payments/create', [PaymentsController::class, 'show'])->middleware('auth');
Route::post('/payments', [PaymentsController::class, 'store'])->middleware('auth');
Route::get('/notifications', [UserNotificationsController::class, 'show'])->middleware('auth');

Route::get('/conversation', [ConversationController::class, 'index']);
Route::get('/conversation/{conversation}', [ConversationController::class, 'show']);
Route::post('/best-replies/{reply}', [BestReplyController::class, 'store']);