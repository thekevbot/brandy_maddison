<?php
    function scrape_insta($username) {
        $insta_source = file_get_contents('http://instagram.com/'.$username);
        $shards = explode('window._sharedData = ', $insta_source);
        $insta_json = explode(';</script>', $shards[1]);
        $insta_array = json_decode($insta_json[0], TRUE);
        return $insta_array;
    }
    $my_account = 'brandymaddisonevents';
    $results_array = scrape_insta($my_account);
    for($cnt=0; $cnt < $pull_cnt; $cnt++){
        $latest_array = $results_array['entry_data']['ProfilePage'][0]['user']['media']['nodes'][$cnt];
        echo '<a href="http://instagram.com/p/'.$latest_array['code'].'"><img src="'.$latest_array['display_src'].'"></a>';
    }
?>
