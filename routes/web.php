<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdvisoryController;
use App\Http\Controllers\InterruptionController;
use App\Http\Controllers\AboutController;
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

Route::get('/', [MainController::class, 'index'])->name('main');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/bill', [BillController::class, 'index']);
Route::get('/news', [NewsController::class, 'index']);

// Route::get('/addnews', [NewsController::class, 'create']);
// Route::get('/addint', [InterruptionController::class, 'create']);
// Route::get('/addadv', [AdvisoryController::class, 'create']);

Route::resource('news','App\Http\Controllers\NewsController');
Route::resource('advisory', 'App\Http\Controllers\AdvisoryController');
Route::resource('int', 'App\Http\Controllers\InterruptionController');
Route::resource('sites', 'App\Http\Controllers\SiteController');

// More //
Route::resource('history', 'App\Http\Controllers\More\HistoryController');
Route::resource('core', 'App\Http\Controllers\More\CoreController');
Route::resource('leaders', 'App\Http\Controllers\More\LeaderController');
Route::resource('awards', 'App\Http\Controllers\More\AwardController');