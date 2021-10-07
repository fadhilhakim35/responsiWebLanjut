<?php

namespace App\Controllers;

class PostController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Jess'
        ];
        echo view('layout/header', $data);
        echo view('layout/navbar');
        echo view('pages/v_home');
        echo view('layout/footer');
    }
}
