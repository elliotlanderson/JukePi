@extends('template')

@section('content')


{{Form::open(array(
	'url'=>action("SongController@handleAdd")
))}}

<table class="table">
<thead>
<tr>
	<td>Name</td>
	<td>Artist</td>
	<td>Album Name</td>
	<td>Add?</td>
</tr>
</thead>
@foreach($songs as $song)
<tbody>
<tr>
	<td>{{$song['SongName']}}</td>
	<td>{{$song['ArtistName']}}</td>
	<td>{{$song['AlbumName']}}</td>
	<td><input type="checkbox" name="add[]" value="{{$song['SongName']}}"></td>
</tr>
</tbody>
@endforeach
</table>
{{Form::submit('Add Song(s)', array('class'=>'btn btn-primary'))}}
{{Form::close()}}
@stop