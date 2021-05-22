<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebModel;

class WebController extends Controller
{

	public function __construct() {
		$this->WebModel = new WebModel();
	}

    public function index(){

    	$data = [
    		'desa' => $this->WebModel->DataDesa(),
    	];

        return view('view_frontend', $data);
    }
}
