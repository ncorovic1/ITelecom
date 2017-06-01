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

Auth::routes();

Route::post('/login', 'Auth\LoginController@authenticate');

Route::get('/register', function() {
    return view('auth.register');
})->middleware('auth', 'admin');

Route::get('politika-sigurnosti', function() {
    return view('politika-sigurnosti');
});

Route::get('/moj-nalog', 'UserController@getUser')->middleware('auth')->name('moj-nalog');

Route::post('/register', 'Auth\RegisterController@create')->middleware('auth', 'admin');

Route::get('/dnevnik-prijava', 'LoginAttemptController@getPlus')->middleware('auth', 'admin');

Route::post('/dnevnik-prijava', 'LoginAttemptController@getAll')->middleware('auth', 'admin');

Route::get('/dnevnik-posjeta', 'PageVisitController@getAll')->middleware('auth', 'admin');

Route::post('/dnevnik-posjeta', 'PageVisitController@getAll')->middleware('auth', 'admin');

Route::get('/home', 'HomeController@index');

Route::get('/contact', function() {
    return view('contact');
})->middleware('auth', 'admin');

/*Route::get('/novosti', function () {
    return view('novosti');
})->middleware('auth.basic');*/

Route::get('/novosti', 'PageVisitController@create');

Route::get('/fiksna-telefonija', 'PageVisitController@create');

Route::get('/mobilna-telefonija', 'PageVisitController@create');

Route::get('/internet', 'PageVisitController@create');

Route::get('/tv', 'PageVisitController@create');

Route::get('/test', 'PageVisitController@create');