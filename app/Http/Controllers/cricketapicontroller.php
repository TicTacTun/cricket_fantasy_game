<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class cricketapicontroller extends Controller
{
    public function cricInfo()
    {
        $APIkey='66df8206820105d49a6716c7b0a45e0e80356bdfdbf1cbb1f995cc02e7ac350a';
        

        $curl_options = array(
        CURLOPT_URL => "https://apiv2.api-cricket.com/?method=get_livescore&APIkey=$APIkey",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HEADER => false,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_CONNECTTIMEOUT => 5
        );

        $curl = curl_init();
        curl_setopt_array( $curl, $curl_options );
        $result = curl_exec( $curl );

        $result = (array)json_decode($result);

        $teams = array('India','Bangladesh','New Zealand','Australia','South Africa','Pakistan','Afghanistan');

        $result_items_withoutScore = [];
        foreach ($result['result'] as $item) {
            $result_items_withoutScore[] = $item;
        }
        $score = [];
        foreach ($result['result'] as $item) {
            if ( in_array($item->event_home_team, $teams) || in_array($item->event_away_team, $teams) ) {
                foreach ($item->scorecard as $item1) {
                    
                    $score[] = $item1;
                }
            }
            
        }
        
        return view('points',['results' => $result_items_withoutScore,'score'=>$score]);
        
    }

}
