<?php

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/index', function (){
    return view('index');
});
Route::get('/task', function (){
    return view('task');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'PageController@home')->middleware('auth');
    Route::get('/profile', 'PageController@profile');
    Route::get('/student', 'PageController@student');
    Route::get('/contact', 'PageController@contact');
    Route::get('/student/search', 'PageController@search');
    Route::get('/student/formadd', 'PageController@formadd');
    Route::post('/student/save', 'PageController@save');
    Route::get('/student/edit/{id}', 'PageController@edit');
    Route::put('/student/update/{id}', 'PageController@update');
    Route::get('/student/delete/{id}', 'PageController@delete');
    Route::get('/logout', 'AuthController@logout');
});

Route::group(['middleware' => ['guest']], function () {
    Route::get('/register', 'AuthController@register');
    Route::post('/save', 'AuthController@simpan');
    Route::get('/', 'AuthController@login')->middleware('guest')->name('login');
    Route::post('/ceklogin', 'AuthController@ceklogin');
});

Route::get('/task/read', 'TaskAPIController@read');
Route::post('/task/create', 'TaskAPIController@create');
Route::post('/task/update/{id}', 'TaskAPIController@update');
Route::delete('/task/read{id}', 'TaskAPIController@delete');
