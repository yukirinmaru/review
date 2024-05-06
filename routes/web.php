<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;

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

Route::get('/comics', [ComicController::class, 'index']);   
Route::get('/', [ComicController::class, 'index']);
Route::get('/comics/create', [ComicController::class, 'create']);
Route::get('/comics/{comic}', [ComicController::class ,'show']);
// '/posts/{対象データのID}'にGetリクエストが来たら、PostControllerのshowメソッドを実行する
Route::post('/comics', [ComicController::class, 'store']);
Route::get('/comics/{comic}/edit', [ComicController::class, 'edit']);
Route::put('/comics/{comic}', [ComicController::class, 'update']);
Route::delete('/comics/{comic}', [ComicController::class,'delete']);