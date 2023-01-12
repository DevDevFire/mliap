<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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
//*************************************************************************
// ブログ
//*************************************************************************
// ブログ一覧画面表示
Route::get('/', [BlogController::class, 'index'])->name('blogs');
// ブログ投稿画面表示
Route::get('/blog/post', [BlogController::class, 'post'])->name('blogPost');
// ブログ新規作成実行
Route::post('/blog/create', [BlogController::class, 'create'])
->middleware('role')->name('blogCreate');
// ブログ詳細画面表示
Route::get('/blog/{id}', [BlogController::class, 'detail'])->name('blogDetail');
// ブログ編集画面表示
Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->name('blogEdit');
// ブログ更新
Route::post('/blog/update', [BlogController::class, 'update'])
->middleware('role')->name('blogUpdate');
// ブログ削除
Route::post('/blog/delete/{id}', [BlogController::class, 'delete'])
->middleware('role')->name('blogDelete');