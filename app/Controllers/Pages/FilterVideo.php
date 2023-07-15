<?php

namespace App\Controllers\Pages;

use App\Controllers\BaseController;

class FilterVideo extends BaseController
{
    public function loksabha()
    {
        $data['pageName'] = "lok_sabha";
        $data['subPage'] = "lok_sabha";
        $data['members'] = $this->memberModel->findAll();
        echo view('Common/page-header', $data);
        echo view('Common/navbar');
        echo view('Common/header', $data);
        echo view('Common/search', $data);
        echo view('Categories/lok-sabha');
        echo view('Common/page-footer');
    }
    public function rajyasabha()
    {
        $data['members'] = $this->memberModel->findAll();
        $data['pageName'] = "rajya_sabha";
        $data['subPage'] = "rajya_sabha";
        $data['members'] = $this->memberModel->findAll();
        echo view('Common/page-header', $data);
        echo view('Common/navbar');
        echo view('Common/header', $data);
        echo view('Common/search', $data);
        echo view('Categories/rajya-sabha');
        echo view('Common/page-footer');
    }
    public function members()
    {
        $data['pageName'] = "members";
        $data['members'] = $this->memberModel->findAll();
        echo view('Common/page-header', $data);
        echo view('Common/navbar');
        echo view('Categories/members', $data);
        echo view('Common/page-footer');
    }

    public function applyFilter()
    {
        $data = array();
        if ($_POST['member_id']  != '') {
            $data['member_id'] = $_POST['member_id'];
        }
    }
}
