@extends('template')
@stop
@section('content')
	@if(empty($tweets))
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
                <td>
                	In Response to
                </td>
                <td>
                    Hashtag
                </td>
                <td>
                	Profile Image
                </td>
            </tr>

		@foreach($tweets as $tweet)

            <tr>
                <td>
					{{ $tweet['text'] }}
                </td>
                <td>
					{{$tweet['user']['screen_name'] }}
                </td>
                <td>
					{{ $tweet['created_at'] }}
                </td>
                <td>
                    @if(!empty($tweet['entities']['hashtags'][0]['text']))
                        {{ $tweet['entities']['hashtags'][0]['text'] }}
                    @endif
                <td>
                	{{ $tweet['user']['screen_name'] }}
                </td>
                <td>
                	<img src = "{{$tweet['user']['profile_image_url']}}"/>
                </td>
            </tr>
		@endforeach
	@endif
        </table>
@stop
