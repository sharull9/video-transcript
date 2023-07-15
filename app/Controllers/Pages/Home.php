<?php
namespace App\Controllers\Pages;
use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        // $data['users'] =  $this->userModel->findAll();
        // print_r($data);
        // $data['bookmarks'] =  $this->bookmarkModel->findAll();
        // print_r($data);
        // $data['videos'] =  $this->videoModel->findAll();
        // print_r($data);
        // $data['playlists'] =  $this->playlistModel->findAll();
        // print_r($data);
        // $data['playlist_videos'] =  $this->playlistVideoModel->findAll();
        // print_r($data);
        // $data['ministries'] =  $this->ministryModel->findAll();
        // print_r($data);
        // $data['portfolios'] =  $this->portfolioModel->findAll();
        // print_r($data);
        // $data['parties'] =  $this->partyModel->findAll();
        // print_r($data);
        // $data['members'] =  $this->memberModel->findAll();
        // print_r($data);
        $data['pageName'] = "home";
        $data['subPage'] = "home";
        $data['members'] = $this->memberModel->findAll();
        echo view('Common/page-header', $data);
        echo view('Common/navbar', $data);
        echo view('Common/header', $data);
        echo view('Common/search', $data);
        echo view('home', $data);
        echo view('Common/page-footer', $data);
    }
}