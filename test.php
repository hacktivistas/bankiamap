								<?php
					 $url='http://www.facebook.com/feeds/page.php?id=127892434049953&format=rss20'; //rss link for the twitter timeline
    //print_r(get_data($url)); //dumps the content, you can manipulate as you wish to
    $data = get_data($url);
    $obj = json_decode($data);
    print $obj->text;
    /* gets the data from a URL */

    function get_data($url)
    {
    $ch = curl_init();
    $timeout = 5;
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
    }
								?>
