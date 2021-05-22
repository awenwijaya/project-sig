<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PenggunaModel;

class PenggunaController extends Controller
{
    public function __construct() {
    	$this->PenggunaModel = new PenggunaModel();
    	$this->middleware('auth');
    }

    public function index() {
    	$data = [
    		'title' => 'Pengguna',
    		'pengguna' => $this->PenggunaModel->AllData(),
    	];
    	return view('admin.user/index', $data);
    }
}
