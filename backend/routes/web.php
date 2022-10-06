<?php

use App\Http\Controllers\InquiryController;
use Illuminate\Support\Facades\Route;

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

//入力ページ
Route::get('/inquiry', [InquiryController::class, 'index'])->name('inquiry.index');

//確認ページ
Route::post('/inquiry/confirm', [InquiryController::class, 'confirm'])->name('inquiry.confirm');

//送信完了ページ
Route::post('/inquiry/send', [InquiryController::class, 'send'])->name('inquiry.send');
