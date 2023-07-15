<?php

namespace App\Controllers\Pages;

use App\Controllers\BaseController;

class Parties extends BaseController
{
    public function index()
    {
        $data['pageName'] = "parties";
        $data['parties'] = $this->partyModel->findAll();
        echo view('Common/page-header', $data);
        echo view('Common/navbar');
        echo view('Categories/parties', $data);
        echo view('Common/page-footer');
    }
}
