<?php
# @Date:   2019-09-17T15:45:42+01:00
# @Last modified time: 2019-09-24T15:07:20+01:00




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

Route::get('/EoinClancy', function () {
    return view('EoinClancy');
});

Route::get('/about', function () {
    return '<p>Out and About</p>';
});

Route::get('/hello', 'HelloController@hello');
