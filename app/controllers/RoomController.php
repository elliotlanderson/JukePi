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
		$room = Room::new();
		return View::make('Rooms.index')->with('message', 'Room ' . $room->name . ' has been created');
	}

	public function remove()
	{

	}


}