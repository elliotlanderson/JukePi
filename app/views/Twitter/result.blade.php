@extends('template')
@stop
@section('content')
	@if(empty($tweetRecords))
	<p>no tweets found :(</p>
	@else
        <table class = 'table table-striped'>
            <tr>
                <th>
                    Tweet
                </th>
                <th>
                    From Username
                </th>
                <th>
                    Created At
                </th>
            </tr>

		@foreach($tweetRecords as $tweetRecord)
            <tr>
                <td>
					{{ $tweetRecord->text }}
                </td>
                <td>
					{{$tweetRecord->from_user_name }}
                </td>
                <td>
					{{ $tweetRecord->created_at }}
                </td>
            </tr>
		@endforeach
	@endif
        </table>
@stop
