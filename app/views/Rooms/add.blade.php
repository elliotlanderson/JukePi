@extends('template')
@stop
@section('content')
<h1>Create a new Room</h1>

{{Form::open(array('action' => 'RoomController@handleCreate', 'method' => 'post'))}}

	{{Form::label('Room Name', 'Room Name')}}
	{{Form::text('roomName', 'Room Name')}}
	<br>

	{{Form::label('Description', 'Description')}}
	{{Form::textarea('description', 'description')}}
	<br>

	<b>Privacy?</b>
	{{Form::label('Public', 'Public?')}}
	{{Form::radio('privacy', 'public', true)}}
	<br>
	{{Form::label('Private','Private')}}
	{{Form::radio('privacy', 'private')}}
	<br>
	{{Form::submit()}}

{{Form::close()}}

@stop