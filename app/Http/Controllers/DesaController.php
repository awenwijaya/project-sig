<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DesaModel;

class DesaController extends Controller
{
	public function __construct() {
		$this->DesaModel = new DesaModel();
		$this->middleware('auth');
	}

    public function index(){
    	$data = [
    		'title' => 'Desa',
    		'desa' => $this->DesaModel->AllData(),
    	];
      return view('admin.desa/index', $data);  
    }

    public function add() {
    	$judul = ['title' => 'Tambah Data Desa'];
    	return view('admin.desa/tambah', $judul);
    }

    public function tambah() {

    	Request()->validate(
    		[
    		'nama_desa' => 'required',
    		'warna' => 'required',
    		'batas_desa' => 'required'
    		],
    		[
    			'nama_desa.required' => 'Nama desa belum terisi',
    			'warna.required' => 'Warna belum terisi',
    			'batas_desa.required' => 'Batas desa belum terisi'
    		]
    	);

    	$data = [
    		'nama_desa' => Request()->nama_desa,
    		'warna' => Request()->warna,
    		'batas_desa' => Request()->batas_desa,
    	];

    	$this->DesaModel->InsertData($data);
    	return redirect()->route('desa');
    }

    public function edit($id) {
    	$data = [
    		'title' => 'Edit Data Desa',
    		'desa' => $this->DesaModel->DetailData($id),
    	];
    	return view('admin.desa/edit', $data);
    }

    public function update($id) {
    	Request()->validate(
    		[
    			'nama_desa' => 'required',
    			'warna' => 'required',
    			'batas_desa' => 'required',
    		],
    		[
    			'nama_desa.required' => 'Nama desa belum terisi',
    			'warna.required' => 'Warna belum terisi',
    			'batas_desa.required' => 'Batas desa belum terisi'
    		]
    	);

    	$data = [
    		'nama_desa' => Request()->nama_desa,
    		'warna' => Request()->warna,
    		'batas_desa' => Request()->batas_desa
    	];

    	$this->DesaModel->UpdateData($data, $id);
    	return redirect()->route('desa');
    }

    public function delete($id) {
    	$this->DesaModel->DeleteData($id);
    	return redirect()->route('desa');
    }
}
