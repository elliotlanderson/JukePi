@extends('template')

@stop
@section('content')
<div id="test"></div>
  <div class="row" style="background-color: #f0f1f5; max-width:100%; ">
      <div style="margin-top:30px;"><div class="large-7 columns" style=" margin-left:3%;">
        <div class="row" style="height: 70px; width:100%;">
          <div class="large-2 columns navtile">
              <img src="img/logo.png"></img>
          </div>
          <div class="large-2 columns navtile" style="padding-left:0px; padding-right: 0px;"><a style="color: black;" href="{{action('RoomController@index')}}"><div class="blue">ROOMS</div></a></div>
        </div>
      </div>
      <div class="large-3 columns" style="float:right; margin-right:3%;">
        <div class="row">
          <div class="large-4 columns navtile" style="margin-top:30px;"></div>
          <div class="large-8 columns">
            <div class="row">
            </div>
          </div>
        </div>
      </div></div>
    </div>
    <div class="row">
      <div class="small-3 columns">&nbsp;</div>
      <div class="small-8 columns">
        @if($rooms->isEmpty())
<p>No rooms at the moment :(</p>
@else
<table>
<thead>
  <tr>
    <td>Room</td>
    <td>Description</td>
    <td>Queue</td>
    <td>Option</td>
  </tr>
</thead>
<tbody>
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
  </tbody>
  </table>
@endif

<center>
<a href = " {{action('RoomController@add')}}" class="button [radius round]">Create Room</a>
</center>
      </div>
      <div class="small-2 columns">&nbsp;</div>
    </div>

@stop