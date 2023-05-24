<?php

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

//
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/company_profile', function () {
    return view('company_profile');
})->name('company_profile');

Route::get('/flow', function (){
    return view('flow');
})->name('flow');

Route::get('/performance', function (){
    return view('performance');
})->name('performance');

//入力ページ
Route::get('/inquiry', 'ContactsController@index')->name('inquiry');
//確認フォームページ
Route::post('/contact_confirm', 'ContactsController@confirm')->name('contact_confirm');
//送信完了ページ
Route::post('/contact_thanks', 'ContactsController@send')->name('send');

?>