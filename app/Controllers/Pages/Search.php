<?php

namespace App\Controllers\Pages;

use App\Controllers\BaseController;

class Search extends BaseController
{
    public function index()
    {
        $data['pageName'] = "home";
        $data['subPage'] = "search";
        $data['members'] = $this->memberModel->findAll();
        echo view('Common/page-header', $data);
        echo view('Common/navbar', $data);
        echo view('Common/header', $data);
        echo view('Common/search', $data);
        echo view('search');
        echo view('Common/page-footer');
    }
}
