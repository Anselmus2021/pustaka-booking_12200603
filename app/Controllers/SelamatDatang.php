<?php
namespace App\Controllers;

class SelamatDatang extends BaseController{

	public function hal_awal(){
		return 'hello saya belajar CI4';
	}

	public function beranda_login(){
	    return ('halaman/login');
	}

	public function daftar_member(){
	    return ('halaman/daftar_member');

	}
}