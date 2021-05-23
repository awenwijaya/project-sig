<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebModel;
use App\Models\PotensiDesaModel;
use App\Models\TempatIbadahModel;
use App\Models\SekolahModel;
use App\Models\TempatMakanModel;

class WebController extends Controller
{

	public function __construct() {
		$this->WebModel = new WebModel();
		$this->PotensiDesaModel = new PotensiDesaModel();
		$this->SekolahModel = new SekolahModel();
		$this->TempatMakanModel = new TempatMakanModel();
		$this->TempatIbadahModel = new TempatIbadahModel();
	}

    public function index(){
    	$data = [
    		'desa' => $this->WebModel->DataDesa(),
			'potensidesa' => $this->PotensiDesaModel->AllData(),
			'title' => 'Pemetaan',
			'sekolah' => $this->SekolahModel->AllData(),
			'tempatibadah' => $this->TempatIbadahModel->AllData(),
			'tempatmakan' => $this->TempatMakanModel->AllData(),
			'potensiDesa' => $this->PotensiDesaModel->AllData(),
    	];

        return view('view_frontend', $data);
    }

	public function ShowDataSekolah() {
		$data = [
    		'desa' => $this->WebModel->DataDesa(),
			'potensidesa' => $this->PotensiDesaModel->AllData(),
			'title' => 'Sekolah',
			'sekolah' => $this->SekolahModel->AllData(),
    	];

        return view('potensiDesa/sekolah', $data);
	}

	public function ShowDataTempatIbadah() {
		$data = [
    		'desa' => $this->WebModel->DataDesa(),
			'potensidesa' => $this->PotensiDesaModel->AllData(),
			'title' => 'Tempat Ibadah',
			'tempatibadah' => $this->TempatIbadahModel->AllData(),
    	];

        return view('potensiDesa/tempatibadah', $data);
	}

	public function ShowDataTempatMakan() {
		$data = [
    		'desa' => $this->WebModel->DataDesa(),
			'potensidesa' => $this->PotensiDesaModel->AllData(),
			'title' => 'Tempat Makan',
			'tempatmakan' => $this->TempatMakanModel->AllData(),
    	];

        return view('potensiDesa/tempatmakan', $data);
	}
}
