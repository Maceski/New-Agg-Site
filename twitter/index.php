<?php
require "twitteroauth/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

$consumer_key = "ix4adyEj6R2G89fZNscul9WeK";
$consumer_secret = "opnbn4msoFK42ku51HjdW5yQaW73PbT4YMS2BqblZBYdFRAOkt";
$access_token = "3296342837-SCLWfCm52xJPeXANeFVqMNwuAUyMhfj25AU5tOx";
$access_token_secret = "IvDTR9oUtQIFUKDKpWI1bv9ll2bzejFoYSjSpN8iEOoSE";
?>

<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Using twitter API</title>
    </head>
    <body>
       
    <?php

$connection = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);
$content = $connection->get("account/verify_credentials");


//https://api.twitter.com/1.1/search/tweets.json?q=&geocode=46.7681960,2.4326640,500km&result_type=popular

$statuses = $connection->get("search/tweets", array("q" => "", "geocode" => "46.7681960,2.4326640,500km", "result_type" => "popular"));

foreach ($statuses as $status) {
    foreach ($status as $s) {
        echo $s->text . '<br/>';
    }
}


print_r($statuses);
?>

        
            </body>
</html>