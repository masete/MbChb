<?php

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

// Route::get('/gmaps', function () {
//     return view('gmaps');
// });

// Route::get('/home', function () {
//     return view('home');
// });

Route::get('addbillboard', function () {
    return view('addbillboard');
});

Route::get('editbillboard', function () {
    return view('editbillboard');
});

Route::get('viewbillboard', function () {
    return view('viewbillboard');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('addbillboard', function () {
    return view('addbillboard');
});

Route::get('editbillboard', function () {
    return view('editbillboard');
});

Route::get('viewbillboard', function () {
    return view('viewbillboard');
});

Route::get('addreport', function () {
    return view('addreport');
});

Route::get('editreport', function () {
    return view('editreport');
});

Route::get('viewreport', function () {
    return view('viewreport');
});

Route::get('addclient', function () {
    return view('addclient');
});

Route::get('editclient', function () {
    return view('editclient');
});

Route::get('viewclient', function () {
    return view('viewclient');
});

Route::get('settings', function () {
    return view('settings');
});
