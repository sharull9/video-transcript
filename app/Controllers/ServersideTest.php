<?php

namespace App\Controllers;

class ServersideTest extends BaseController
{
    public function index()
    {
        
    }

    public function test($testType){
        if($testType == 'video-list'){
            $this->getVideoList();
        }
        if($testType == 'video-transcript'){
            $this->getVideoTranscript();
        }
        if($testType == 'search'){
            $this->getVideoSearchResult();
        }
    }

    private function getVideoList(){
        $accessToken =  $this->getAccessToken();
        $url = "https://api.videoindexer.ai/Trial/Accounts/6ed32686-5190-472a-992b-34e9430294d1/Videos/Search?accessToken=".$accessToken;
        print_r($this->getCall($url));
       
    }

    private function getVideoTranscript(){
        $accessToken =  $this->getAccessToken();
        $url = "https://api.videoindexer.ai/trial/Accounts/6ed32686-5190-472a-992b-34e9430294d1/Videos/032d47dd98/Index?includedInsights=transcript&includeSummarizedInsights=true&accessToken=".$accessToken;
        print_r($this->getCall($url));
    }

    private function getVideoSearchResult(){
        $accessToken =  $this->getAccessToken();
        $url = 'https://api.videoindexer.ai/Trial/Accounts/6ed32686-5190-472a-992b-34e9430294d1/Videos/Search?query=public&accessToken='.$accessToken;
        print_r($this->getCall($url));
    }

    private function getAccessToken(){
        return trim($this->getAccessTokenFromAPICall(), '"');
    }

    private function getAccessTokenFromAPICall(){
        $url = "https://api.videoindexer.ai/Auth/trial/Accounts/6ed32686-5190-472a-992b-34e9430294d1/AccessToken";
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $headers = array(
        "Ocp-Apim-Subscription-Key: 99198a8cd5da4c03bdb75761c7fbd99e"
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $resp = curl_exec($curl);
        curl_close($curl);
        return $resp;
    }


    private function getCall($url){
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $resp = curl_exec($curl);
        curl_close($curl);
        return $resp;
    }
}
