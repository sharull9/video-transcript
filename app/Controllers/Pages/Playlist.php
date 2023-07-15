<?php

namespace App\Controllers\Pages;

use App\Controllers\BaseController;

class Playlist extends BaseController
{
    public function index()
    {
        $data['pageName'] = "playlist";
        $data['subPage'] = "playlist";
        echo view('Common/page-header', $data);
        echo view('Common/navbar');
        echo view('Common/header');
        echo view('playlist');
        echo view('Common/page-footer');
    }
}
