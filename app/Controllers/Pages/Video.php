<?php

namespace App\Controllers\Pages;

use App\Controllers\BaseController;

class Video extends BaseController
{
    public function index()
    {
        $data['pageName'] = "home";
        $data['subPage'] = "video";
        echo view('Common/page-header', $data);
        echo view('Common/navbar');
        echo view('Common/header');
        echo view('video');
        echo view('Common/page-footer');
    }

    public function showVideo($videoId){
        $data['pageName'] = "home";
        $data['subPage'] = "video";
        $data['videoId'] = $videoId;
        $data['speakers'] = array();
        if($videoId == '032d47dd98'){
            $speakers = array('032d47dd98-name1' =>'Dr V kalanidhi', '032d47dd98-name2' => 'Hardeep Singh puri', '032d47dd98-name3' => 'Nitin gadkari' );
            $data['speakers'] = $speakers;
        }
        if($videoId == 'e272024dcb'){
            $speakers = array('e272024dcb-name1' =>'Jamyang  Namgyal');
            $data['speakers'] = $speakers;
        }
        echo view('Common/page-header', $data);
        echo view('Common/navbar');
        echo view('Common/header');
        echo view('video', $data);
        echo view('Common/page-footer');
    }
}
