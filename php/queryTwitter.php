<?php
require_once('../php/TwitterAPIExchange.php');

$hashtag = $_GET["q"];

$settings = array(
    'oauth_access_token' => "1382394401012391936-owW2joNEL8ZbaaR6H1ikO9HhIOiXFL",
    'oauth_access_token_secret' => "1fOVxYOBnAExRCtBwlW8ese1hvFJ3tnsSFvgR5n5V01HN",
    'consumer_key' => "NO4q6OykWGkOiwP3JX93mqln8",
    'consumer_secret' => "6Espm5xo3NZR6zqqRXZDQG3HsPL83fIeN7lpopUvcYStBMspCA"
);

$url = 'https://api.twitter.com/1.1/search/tweets.json';
$getfield = '?q=#'.$hashtag.' AND -filter:retweets AND -filter:replies&lang=en&count=20&tweet_mode=extended';
$requestMethod = 'GET';

$twitter = new TwitterAPIExchange($settings);
$response = $twitter->setGetfield($getfield)
     ->buildOauth($url, $requestMethod)
     ->performRequest();

echo $response;
?>