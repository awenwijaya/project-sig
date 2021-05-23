<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TempatMakanModel;


class TempatMakanController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        $this->TempatMakanModel = new TempatMakanModel();
    }

    public function index(){
    	$data = [
    		'title' => 'Tempat Makan',
    		'tempatmakan' => $this->TempatMakanModel->AllData(),
    	];
      return view('admin.tempatMakan/index', $data);  
    }

    public function add() {
    	$data = [
    		'title' => 'Tambah Tempat Makan',
    	];
    	return view('admin.tempatMakan/add', $data);
    }

    public function insert() {
    	Request()->validate(
    		[
    			'nama' => 'required',
    			'alamat' => 'required',
    			'koordinat' => 'required',
    		],
    		[
    			'nama.required' => 'Nama sekolah belum diisi',
    			'alamat_sekolah.required' => 'Alamat sekolah belum terisi',
    			'koordinat.required' => 'Koordinat belum terisi',
    	]);

    	$data = [
            'id_jenis_potensi' => '2',
            'nama' => Request()->nama,
            'alamat' => Request()->alamat,
            'koordinat' => Request()->koordinat,
        ];

    	$this->TempatMakanModel->InsertData($data);

        return redirect()->route('tempatmakan');
    }

    public function edit($id) {
        $data = [
            'title' => 'Edit Tempat Makan',
            'tempatmakan' => $this->TempatMakanModel->DetailData($id),
        ];
        return view('admin.tempatMakan/edit', $data);
    }

    public function update($id) {
        Request()->validate(
            [
                'nama' => 'required',
                'alamat' => 'required',
                'koordinat' => 'required',
            ],
            [
                'nama.required' => 'Nama belum diisi',
                'alamat.required' => 'Alamat belum terisi',
                'koordinat.required' => 'Koordinat belum terisi',
        ]);

        $data = [
            'id_jenis_potensi' => '2',
            'nama' => Request()->nama,
            'alamat' => Request()->alamat,
            'koordinat' => Request()->koordinat,
        ];

        $this->TempatMakanModel->UpdateData($data, $id);
        return redirect()->route('tempatmakan');
    }

    public function delete($id) {
        $this->TempatMakanModel->DeleteData($id);
        return redirect()->route('tempatmakan');
    } 

}
