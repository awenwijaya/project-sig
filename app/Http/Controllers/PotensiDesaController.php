<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PotensiDesaModel;

class PotensiDesaController extends Controller
{
    
	public function __construct() {
		$this->middleware('auth');
		$this->PotensiDesaModel = new PotensiDesaModel();
	}

    public function index() {

    	$data = [
    		'title' => 'Potensi Desa',
    		'potensiDesa' => $this->PotensiDesaModel->AllData(),
    	];

    	return view('admin.potensiDesa/index', $data);
    }

    public function add() {

    	$data = [
    		'title' => 'Potensi Desa',
    	];

    	return view('admin.potensiDesa/add', $data);
    }

    public function insert() {
    	Request()->validate([
    		'nama_potensi' => 'required',
    		'icon' => 'required|max:1024',
    	],
    	[
    		'nama_potensi.required' => 'Nama potensi desa belum terisi',
    		'icon.required' => 'Ikon belum terisi'
    	]);

    	$file = Request()->icon;
    	$filename = $file->getClientOriginalName();
    	$file->move(public_path('icon'), $filename);

    	$data = [
    		'nama_potensi' => Request()->nama_potensi,
    		'icon' => $filename,
    	];

    	$this->PotensiDesaModel->InsertData($data);

    	return redirect()->route('potensidesa');
    }

    public function edit($id) {
    	$data = [
    		'title' => 'Edit Potensi Desa',
    		'potensidesa' => $this->PotensiDesaModel->DetailData($id),
    	];
    	return view('admin.potensiDesa/edit', $data);
    }

    public function update($id) {
    	Request()->validate([
    		'nama_potensi' => 'required',
    	],[
    		'nama_potensi.required' => 'Nama potensi desa belum terisi',
    	]);

    	if(Request()->icon <> "") {
    		$potensidesa = $this->PotensiDesaModel->DetailData($id);
    		if($potensidesa->icon <> "") {
    			unlink(public_path('icon') . '/' . $potensidesa->icon);
    		}
    		$file = Request()->icon;
    		$filename = $file->getClientOriginalName();
    		$file->move(public_path('icon'), $filename);

    		$data = [
    			'nama_potensi' => Request()->nama_potensi,
    			'icon' => $filename,
    		];

    		$this->PotensiDesaModel->UpdateData($data, $id);
    	} else {
    		$data = [
    			'nama_potensi' => Request()->nama_potensi,
    		];

    		$this->PotensiDesaModel->UpdateData($data, $id);
    	}

    	return redirect()->route('potensidesa');
    }

    public function delete($id) {
    	$potensidesa = $this->PotensiDesaModel->DetailData($id);
    	unlink(public_path('icon') . '/' . $potensidesa->icon);
    	$this->PotensiDesaModel->DeleteData($id);
    	return redirect()->route('potensidesa');
    }
}
