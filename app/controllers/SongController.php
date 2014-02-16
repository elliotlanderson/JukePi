<?php

class SongController extends BaseController {

	public function search($room_name)
	{
		$room = Room::where('name','=',$room_name)->firstOrFail();

		Session::put('room_id', $room->id);
		return View::make('Song.search')->with('room',$room);
	}

	public function handleSearch()
	{
		$query = Input::get('query');
		
	}

	public function result()
	{

	}

}