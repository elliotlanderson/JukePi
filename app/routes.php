<?php
//Model Bindings
Route::model('song', 'Song');
Route::model('remove', 'remove');

//Room Routes
Route::get('/room', 'RoomController@index');
Route::get('/room/add', 'RoomController@add');
Route::get('/room/remove', 'RoomController@remove');
Route::get('/room/{room}', 'RoomController@enter');

Route::post('/room/add', 'RoomController@handleAdd');

//Song Routes


//Twitter Routes
Route::post('/twitter/search', 'TwitterController@handleSearch');