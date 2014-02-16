@extends('template')

@section('content')
<div id="test"></div>
	@if( $songs->isEmpty())
		<p>Sorry no songs have been queued yet! :(</p>
	@else
		<table>
			<th>
				<td>Song</td>
				<td>User</td>
			</th>
		@foreach($songs as $song)
		<tr>
			<td>
				{{$song->title}}
			</td>
			<td>
				{{$song->artist}}
			</td>
		</tr>
		</table>
		<br>

		@endforeach
	@endif

	<form action="{{action('SongController@handleSearch')}}" method="post">
	<input type="text" name="query" placeholder="Song Name" />
	<input type="submit" value="Add Song" class="btn btn-primary">
@stop