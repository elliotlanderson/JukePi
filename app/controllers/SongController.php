<?php

class SongController extends BaseController {

	public function showWelcome()
	{
		return View::make('hello');
	}

}