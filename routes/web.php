<?php

use Illuminate\Support\Facades\Auth;
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

/*Route::get('/', function () {
        return view('authentication.login');
});*/

##Route::get('/', 'PageController@loginn');


Route::get('/post','PageController@Publish');
Route::get('/create','PageController@create');
Route::post('/store','PageController@store');
Route::get('/edit/{id}','PageController@edit');
Route::post('/update','PageController@update');
Route::get('/remove/{id}','PageController@remove');
Route::get('/logout','PageController@logout');
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function() {
        /**
        * Logout Route
        */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
     });
