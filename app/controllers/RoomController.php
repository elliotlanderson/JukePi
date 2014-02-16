<?php

class RoomController extends BaseController {

	public function index()
	{
		$rooms = Room::all();
		return View::make('Rooms.index')->with('rooms', $rooms);
	}

	public function add()
	{
		return View::make('Rooms.add');
	}

	public function handleAdd()
	{
		$room = new Room;
		$room->name 		= Input::get('name');
		$room->description 	= Input::get('description');
		$room->privacy 		= Input::get('privacy');
		$room->save();

		return Redirect::to("/room/$room->id");
	}

	public function remove()
	{

	}

	public function enter($room_id)
	{
		
		$room = Room::find($room_id);
		Session::put('room_id', $room->id);


		$songs = $room->songs()->orderBy('id','asc')->get();

		return View::make('Rooms.enter')
			->with('room', $room)
			->with('songs', $songs);
	}


}