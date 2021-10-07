<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Templating extends BaseController
{
	public function __construct(){
		$this->userModel = new UserModel();
	}
	public function index()
	{
		$data = [
			'title' => "Admin"
		];
		// echo view('layout/header', $data);
		// echo view('layout/navbar');
		// echo view('pages/v_posts');
		// echo view('layout/footer');		
        return view('pages/view_admin', $data);
	}
	public function register()
	{
		$data = [
			'title' => "Register"
		];
		// echo view('layout/header', $data);
		// echo view('layout/navbar');
		// echo view('pages/v_posts');
		// echo view('layout/footer');		
        return view('pages/view_register', $data);
	}

	public function saveRegister(){
		$request = service('request');
		$data = [
			'fullname' => $request->getVar('fullname'),
			'email' => $request->getVar('email'),
			'password' => $request->getVar('password'),
		];
		$this->userModel->insert($data);
		return redirect()->to(base_url('register'));
	}
}