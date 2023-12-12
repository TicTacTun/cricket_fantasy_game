<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class cricketapicontroller extends Controller
{
    public function fetchLiveScores(){
        
        $APIkey = '05ad036247c32261443de00f69d928698bcd1e521eb31afa51aa52238ccffc23';

        
        $curl_options = array(
            CURLOPT_URL => "https://apiv2.api-cricket.com/?method=get_livescore&APIkey=$APIkey",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER => false,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_CONNECTTIMEOUT => 5
        );

        $curl = curl_init();
        curl_setopt_array($curl, $curl_options);
        $result = curl_exec($curl);
        
        $result = (array) json_decode($result);

        $result_all = [];
        foreach ($result['result'] as $item) {
            if ($item->event_status == 'In Progress') {
                $result_all[] = $item;
            }
        }

        return $result_all;
    }
    public function cricInfo()
    {
        $result_all = $this->fetchLiveScores();
         
        return view('cricinfo',['result_all' => $result_all]);
        
    }

    public function playerdetails($key){

        $result_all = $this->fetchLiveScores();

        return view('playerdetails',['result_all' => $result_all,'key'=>$key]);

    }
    public function fixture(){
        $APIkey = '05ad036247c32261443de00f69d928698bcd1e521eb31afa51aa52238ccffc23';

        $curl_options = array(
            CURLOPT_URL => "https://apiv2.api-cricket.com/cricket/?method=get_leagues&APIkey=$APIkey",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER => false,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_CONNECTTIMEOUT => 5
        );

        $curl = curl_init();
        curl_setopt_array($curl, $curl_options);
        $result = curl_exec($curl);
       


        $result = (array) json_decode($result);
        $result_all = [];
        foreach ($result['result'] as $item) {
            
                $result_all[] = $item;
            
        }
        

        return view('fixture',['fixure'=>$result_all]);

    }

}
