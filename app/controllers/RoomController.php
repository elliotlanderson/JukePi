<?php

class RoomController extends BaseController {

	public function index()
	{
		$rooms = Room::all();
		return View::make('Rooms.index')->with($rooms);
	}

	public function add()
	{

	}

	public function remove()
	{

	}


}