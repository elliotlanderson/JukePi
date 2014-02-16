<?php
//Model Bindings
Route::model('song', 'Song');
Route::model('remove', 'remove');

//Room Routes
Route::get('/room', 'RoomController@index');
Route::get('/room/add', 'RoomController@add');
Route::get('/room/remove', 'RoomController@remove');
Route::get('/room/{room_name}', 'RoomController@enter');

Route::post('/room/add', 'RoomController@handleAdd');

//Song Routes
Route::get('/room/{room_name}/song/add', 'SongController@search');
Route::post('/song/search', 'SongController@handleSearch');
Route::get('/song/results', 'SongController@results');
Route::post('/room/song/add', 'SongController@handleAdd');

//Twitter Routes
Route::post('/twitter/search', 'TwitterController@handleSearch');