<?php

class TwitterController extends BaseController {
	public function handleSearch()
	{

		$query = Input::get('query');

		require_once(app_path() . '/includes/TwitterAPIExchange.php');
        
        /** Set access tokens here - see: https://dev.twitter.com/apps/ **/
        $settings = array(
            'oauth_access_token' => "2344778472-OmGpg8ZCjEgAcpD2tAjMCNlSiVrIYZjeMqo7uZm",
            'oauth_access_token_secret' => "KsivNmg2ibvcl4pCPrLemfuLqWR9JPf6ageIV179kQUKy",
            'consumer_key' => "SFPlrHBspXm1BBJHPldxA",
            'consumer_secret' => "SrvUz1Ud9CUncI42102RWSqcH9cJU8lJ6KtjmfKBwI"
        );

        $search = urlencode($query);
        /** Perform a GET request and echo the response **/
        /** Note: Set the GET field BEFORE calling buildOauth(); **/
        $url = 'https://api.twitter.com/1.1/statuses/mentions_timeline.json';
        $getfield = '?q=' . $search . '&count=50&lang=en';;
        $requestMethod = 'GET';
        $twitter = new TwitterAPIExchange($settings);
        $tweets = $twitter
            //->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();
        
        $tweets = json_decode($tweets,true);
        //dd($tweets);
        //$tweetRecords = tweets2array($Tweets);

        return View::make('Twitter.result')->with('tweets', $tweets);
	}
}
?>