<?php

class TwitterController extends BaseController {
	public function handleSearch()
	{
		$query = Input::get('query');

		include(app_path().'/includes/TwitterAPIExchange.php');

 		/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
        $settings = array(
            'oauth_access_token' => "59949285-2Dr6rZu4ntIWavxbpmwQglI9H9ywXR2EDDudzlNDy",
            'oauth_access_token_secret' => "BtiMURW0alclPK31y9h9tHtOuZFUglu6tYjknBvamj7WA",
            'consumer_key' => "XNtuChTOTiCTbnPhzsAuA",
            'consumer_secret' => "QAJ0mB29XBokBt80wowS2OPrdzllAPOrutPxs4hU"
        );
        $query = '@twitterapi';
        $search = urlencode($query);
        /** Perform a GET request and echo the response **/
        /** Note: Set the GET field BEFORE calling buildOauth(); **/
        $url = 'https://api.twitter.com/1.1/search/tweets.json';
        $getfield = '?q=' . $search . '&count=50&lang=en';;
        $requestMethod = 'GET';
        $twitter = new TwitterAPIExchange($settings);
        $Tweets = $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();
        
        $Tweets = json_decode($Tweets,true);
        dd($Tweets);
        $tweetRecords = tweets2array($Tweets);

        return View::make('Twitter.result')->with('tweetRecords', $tweetRecords);
	}
}
?>