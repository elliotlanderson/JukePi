@extends('template')

@stop
@section('content')

<h1>Active Rooms</h1>

@if($rooms->isEmpty())
<p>No rooms at the moment :(</p>
@else
  @foreach($rooms as $room)
<table class = 'table table-striped'>
  <th>
    <td>Room</td>
    <td>Description</td>
    <td>Queue</td>
  </th>
  <tr>
    <td>
      {{$room->name}}
    </td>
    <td>
      {{$room->description}}
    </td>
    <td>
      songs will be here
    </td>
    <td>
      <a href='#'>Join Room</a>
    </td>
  </tr>
</table>
  @endforeach
@endif

<a href = " {{action('RoomController@add')}}">Create Room</a>

@stop