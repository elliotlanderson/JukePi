@extends('template')
@stop
@section('content')
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
				{{$song->name}}
			</td>
			<td>
				$song->user
			</td>
		</tr>
		</table>
		<br>

		@endforeach
	@endif
	<a href = '#'>Add Song</a>
@stop