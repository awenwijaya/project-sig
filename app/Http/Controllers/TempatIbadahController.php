<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TempatIbadahModel;
use App\Models\AgamaModel;

class TempatIbadahController extends Controller
{
    public function __construct() {
    	$this->middleware('auth');
    	$this->TempatIbadahModel = new TempatIbadahModel();
    	$this->AgamaModel = new AgamaModel();
    }

    public function index() {
    	$data = [
    		'title' => 'Tempat Ibadah',
    		'tempatibadah' => $this->TempatIbadahModel->AllData(),
    	];
    	return view('admin.tempatIbadah/index', $data);
    }

}
