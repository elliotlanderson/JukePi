@extends('template')

@section('content')
<script type='text/javascript'>

function loadXMLDoc()
{
	var xmlhttp;
	if (window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState == 4 && xmlhttp.status==200)
		{
			document.getElementById("test").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET", "http://www.jukepi.com/twitter/TwitterScript.php", true);
	xmlhttp.send();
}
window.setInterval(function(){
  /// call your function here
  loadXMLDoc();
}, 10000);
</script>

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
    <div class="behind">
      <center><ul style="padding-top:3%; margin:0px;" class="small-block-grid-5">
        <li><img src="http://placehold.it/200x150"></img></li>
        <li><img src="http://placehold.it/200x150"></img></li>
        <li><img src="http://placehold.it/200x150"></img></li>
        <li><img src="http://placehold.it/200x150"></img></li>
        <li><img src="http://placehold.it/200x150"></img></li>
      </ul></center>
        <center><ul style="margin:0px;" class="small-block-grid-5">
        <li><img src="http://placehold.it/200x150"></img></li>
        <li><img src="http://placehold.it/200x150"></img></li>
        <li><img src="http://placehold.it/200x150"></img></li>
        <li><img src="http://placehold.it/200x150"></img></li>
        <li><img src="http://placehold.it/200x150"></img></li>
      </ul></center>
      <center><ul style="margin:0px;" class="small-block-grid-5">
        <li><img src="http://placehold.it/200x150"></img></li>
        <li><img src="http://placehold.it/200x150"></img></li>
        <li><img src="http://placehold.it/200x150"></img></li>
        <li><img src="http://placehold.it/200x150"></img></li>
        <li><img src="http://placehold.it/200x150"></img></li>
      </ul></center>
    </div>
    <div class="overlay">
      <div class="row">
        <div class="large-6 columns">
          <img src="http://placehold.it/250x250">
        </div>
        <div class="large-6 columns">
          <p class="roboto">Artist</p>
          <p class="robotobig">Song Name</p>
        </div>
      </div>
    </div>

	<form action="{{action('SongController@handleSearch')}}" method="post">
	<input type="text" name="query" placeholder="Song Name" />
	<input type="submit" value="Add Song" class="btn btn-primary">
@stop