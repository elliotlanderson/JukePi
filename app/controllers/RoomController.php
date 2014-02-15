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

		return View::make('Rooms.index')->with('message', 'Room ' . $room->name . ' has been created');
	}

	public function remove()
	{
		
	}

	public function enter($room)
	{
		$room = Room::find($room);

		$songs = $room->songs()->orderBy('id','desc')->get();

		return View::make('Rooms.enter')->with('songs', $songs);
	}


}