@extends('template')

@stop

<script src="text/javascript">
function get_songs(){
  var feedback = $.ajax({
    type: "GET",
    url: "{{action('SongController@ajaxSong')}}",
    async: false
  }).success(function(){
    setTimeout(function(){get_songs();}, 5000);
  }).responseText;

  $('div.test').html(feedback);
}
$(function()
{
  get_songs();
});
</script>
@section('content')
{{Form::open(array('action'=>'TwitterController@handleSearch', 'method' => 'post'))}}
  {{Form::label('Search Tweets', 'Search Tweets')}}
  {{Form::text('query', 'Search Tweets')}}
  {{Form::submit()}}
{{Form::close()}}
<div id="test"></div>
<h1>Active Rooms</h1>
@if($rooms->isEmpty())
<p>No rooms at the moment :(</p>
@else
<table class = 'table table-striped'>
  <th>
    <td>Room</td>
    <td>Description</td>
    <td>Queue</td>
  </th>
  @foreach($rooms as $room)
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
      <a href='{{url("room/$room->id")}}'>Join Room</a>
    </td>
  </tr>

  @endforeach
  </table>
@endif

<a href = " {{action('RoomController@add')}}">Create Room</a>

@stop