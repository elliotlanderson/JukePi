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
		$query = urlencode($query);
		$apiKey = "2dfa3f29f99827ba5358e6a8d5fb0bce";
		$songs = file_get_contents("http://tinysong.com/s/$query?format=json&limit=10&key=$apiKey");
		$songs = json_decode($songs, TRUE);
		return View::make('Song.choose')->with('songs', $songs);
	}

	public function result()
	{

	}

	public function handleAdd()
	{
		if (is_array(Input::get('add')))
		{
			foreach (Input::get('add') as $songName)
			{
				//search for the song name to get info on it
				// take the first one
				$songName = urlencode($songName);
				$apiKey = "2dfa3f29f99827ba5358e6a8d5fb0bce";
				$songShit = file_get_contents("http://tinysong.com/b/$songName?format=json&key=$apiKey");
				$songShit = json_decode($songShit);
				$song = new Song;
				$song->title = $songShit->SongName;
				$song->artist = $songShit->ArtistName;
				$song->url = $songShit->Url;
				$song->save();

				$room = Room::find(Session::get('room_id'));
				$room->songs()->attach($song);
			}
			return Redirect::to("room/$room->id");
		}
		else
		{
			return "hey, fuck you";
		}
	}
	public function ajaxSong()
	{
		return 'works!';
	}

}