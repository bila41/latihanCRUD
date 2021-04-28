<?php

Route::get('/','ujianController@index');
Route::get('/ujian/add','ujianController@create');
Route::post('/','ujianController@store');

// Route::get('/', function () {
//     return view('welcome');
// });
