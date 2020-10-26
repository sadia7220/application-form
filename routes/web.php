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

Route::group(['middleware' => 'back-history-prevent'],function(){
    
Route::get('/', function () {
    return redirect()->route('dashboard');
});
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::post('/application_management/forms/store','FormController@store')->name('store_applicationForm');
Route::get('/application_management/forms/create','FormController@create')->name('create_applicationForm');

Route::middleware(['auth'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/application_management/forms','FormController@index')->name('view_applicationFormList');
});
});