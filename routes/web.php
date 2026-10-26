<?php

use App\Http\Controllers\CAtegoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

//仮ルート
Route::middleware('auth')->group(function(){
    //カテゴリーのCRUDルート
    Route::resource('categories',CategoryController::class);
    //タスクの仮ルート
    Route::get('/tasks',fn()=>'タスク一覧（準備中)')->name('tasks.index');
    
});