<?php

	class Song extends Eloquent {

		public function rooms()
		{
			return $this->belongsToMany('Room');
		}

	}
?>