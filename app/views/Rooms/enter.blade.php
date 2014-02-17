@extends('template')

@section('content')

<script>
function loadXMLDoc()
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","/twitter/TwitterScript.php?t=" + Math.random(),true);
xmlhttp.send();
}

window.setInterval(function() {
	loadXMLDoc();
}, 5000);
</script>
<div id="test"></div>
	<div class="row" style="background-color: #f0f1f5; max-width:100%; ">
      <div style="margin-top:30px;"><div class="large-7 columns" style=" margin-left:3%;">
        <div class="row" style="height: 70px; width:100%;">
          <div class="large-2 columns navtile">
              <img src="{{asset('img/logo.png')}}"></img>
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
    <div class="overlay">
      <div class="row">
        @foreach ($songs as $song)
        {{$song->title}}<br />
        @endforeach
      </div>
    </div>

	<form action="{{action('SongController@handleSearch')}}" method="post">
	<input type="text" name="query" placeholder="Song Name" />
	<input type="submit" value="Add Song" class="btn btn-primary">
@stop