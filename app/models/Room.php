<?php

	class Room extends Eloquent {

		public function songs()
		{
			return $this->belongsToMany('Song');
		}

	}
?>