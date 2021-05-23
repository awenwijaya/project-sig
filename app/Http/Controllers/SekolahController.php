<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SekolahModel;
use App\Models\JenjangSekolahModel;
use App\Models\JenisSekolahModel;

class SekolahController extends Controller
{
    public function __construct() {
    	$this->middleware('auth');
    	$this->SekolahModel = new SekolahModel();
    	$this->JenjangSekolahModel = new JenjangSekolahModel();
    	$this->JenisSekolahModel = new JenisSekolahModel();
    }

    public function index() {
    	$data = [
    		'title' => 'Sekolah',
    		'sekolah' => $this->SekolahModel->AllData(),
    	];
    	return view('admin.sekolah/index', $data);
    }

    public function add() {
    	$data = [
    		'title' => 'Tambah Sekolah',
    		'jenjang' => $this->JenjangSekolahModel->AllData(),
    		'jenis' => $this->JenisSekolahModel->AllData()
    	];
    	return view('admin.sekolah/add', $data);
    }

    public function insert() {
    	Request()->validate(
    		[
    			'nama_sekolah' => 'required',
    			'id_jenjang_sekolah' => 'required',
    			'id_jenis_sekolah' => 'required',
    			'alamat_sekolah' => 'required',
    			'koordinat' => 'required',
    		],
    		[
    			'nama_sekolah.required' => 'Nama sekolah belum diisi',
    			'id_jenjang_sekolah.required' => 'Jenjang sekolah belum terisi',
    			'id_jenis_sekolah.required' => 'Jenis sekolah belum terisi',
    			'alamat_sekolah.required' => 'Alamat sekolah belum terisi',
    			'koordinat.required' => 'Koordinat belum terisi',
    	]);

    	$data = [
            'id_jenis_potensi' => '1',
            'id_jenjang_sekolah' => Request()->id_jenjang_sekolah,
            'id_jenis_sekolah' => Request()->id_jenis_sekolah,
            'nama_sekolah' => Request()->nama_sekolah,
            'alamat' => Request()->alamat_sekolah,
            'koordinat' => Request()->koordinat,
        ];

    	$this->SekolahModel->InsertData($data);

        return redirect()->route('sekolah');
    }

    public function edit($id) {
        $data = [
            'title' => 'Edit Sekolah',
            'sekolah' => $this->SekolahModel->DetailData($id),
            'jenjang' => $this->JenjangSekolahModel->AllData(),
            'jenis' => $this->JenisSekolahModel->AllData(),
        ];

        return view('admin.sekolah/edit', $data);
    }

    public function update($id) {
        Request()->validate(
            [
                'nama_sekolah' => 'required',
                'id_jenjang_sekolah' => 'required',
                'id_jenis_sekolah' => 'required',
                'alamat_sekolah' => 'required',
                'koordinat' => 'required',
            ],
            [
                'nama_sekolah.required' => 'Nama sekolah belum diisi',
                'id_jenjang_sekolah.required' => 'Jenjang sekolah belum terisi',
                'id_jenis_sekolah.required' => 'Jenis sekolah belum terisi',
                'alamat_sekolah.required' => 'Alamat sekolah belum terisi',
                'koordinat.required' => 'Koordinat belum terisi',
        ]);

        $data = [
            'id_jenis_potensi' => '1',
            'id_jenjang_sekolah' => Request()->id_jenjang_sekolah,
            'id_jenis_sekolah' => Request()->id_jenis_sekolah,
            'nama_sekolah' => Request()->nama_sekolah,
            'alamat' => Request()->alamat_sekolah,
            'koordinat' => Request()->koordinat,
        ];

        $this->SekolahModel->UpdateData($data, $id);
        return redirect()->route('sekolah');
    }

    public function delete($id) {
        $this->SekolahModel->DeleteData($id);
        return redirect()->route('sekolah');
    }
}
