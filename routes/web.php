<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LangController;
use App\Http\Controllers\UploadFileController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/main/lang={lang}', function($lang) {
    App::setlocale($lang);
    return view('main');
})->name('main');

Route::get('/addworker/lang={lang}', function($lang) {
    App::setlocale($lang);
    return view('addworker');
})->name('addworker');



Route::get('/addwork/lang={lang}', function($lang) {
    App::setlocale($lang);
    return view('addwork');
})->name('addwork');

Route::get('/allworker/lang={lang}', function($lang) {
    App::setlocale($lang);
    return view('allworker');
})->name('allworker');

Route::get('/allwork/lang={lang}', function($lang) {
    App::setlocale($lang);
    return view('allwork');
})->name('allwork');

Route::get('/sendemail/lang={lang}', function($lang) {
    App::setlocale($lang);
    return view('sendemail');
})->name('sendemail');