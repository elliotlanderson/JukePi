@extends('template')
@stop
@section('content')
<h1>Add song to {{$room->name}}'s playlist</h1>
{{Form::open(array('action' => 'SongController@handleAdd', 'method' => 'post'))}}
	{{Form::label('Search for Song', 'Search for Song')}}
	{{Form::text('query', 'Search for Song...')}}

	{{Form::submit()}}

{{Form::close()}}
@stop