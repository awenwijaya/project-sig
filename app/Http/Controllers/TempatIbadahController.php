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

	public function add() {
		$data = [
			'title' => 'Tambah Tempat Ibadah',
			'agama' => $this->AgamaModel->AllData(),
		];
		return view('admin.tempatIbadah/add', $data);
	}

	public function insert() {
		Request()->validate(
			[
				'nama_tempat_ibadah' => 'required',
				'id_agama' => 'required',
				'alamat' => 'required',
				'koordinat' => 'required',
			],
			[
				'nama_tempat_ibadah.required' => 'Nama tempat ibadah belum diisi',
				'id_agama.required' => 'ID Agama belum diisi',
				'alamat.required' => 'Alamat belum diisi',
				'koordinat' => 'Koordinat belum diisi'
			]);

			$data = [
				'nama_tempat_ibadah' => Request()->nama_tempat_ibadah,
				'id_jenis_potensi' => '3',
				'id_agama' => Request()->id_agama,
				'alamat' => Request()->alamat,
				'koordinat' => Request()->koordinat
			];

			$this->TempatIbadahModel->InsertData($data);

			return redirect()->route('tempatibadah');
	}

	public function edit($id) {
		$data = [
            'title' => 'Edit Tempat Ibadah',
            'tempatibadah' => $this->TempatIbadahModel->DetailData($id),
            'agama' => $this->AgamaModel->AllData(),
        ];

        return view('admin.tempatIbadah/edit', $data);
	}

	public function update($id) {
		Request()->validate(
			[
				'nama_tempat_ibadah' => 'required',
				'id_agama' => 'required',
				'alamat' => 'required',
				'koordinat' => 'required',
			],
			[
				'nama_tempat_ibadah.required' => 'Nama tempat ibadah belum diisi',
				'id_agama.required' => 'ID Agama belum diisi',
				'alamat.required' => 'Alamat belum diisi',
				'koordinat' => 'Koordinat belum diisi'
			]);

			$data = [
				'nama_tempat_ibadah' => Request()->nama_tempat_ibadah,
				'id_jenis_potensi' => '3',
				'id_agama' => Request()->id_agama,
				'alamat' => Request()->alamat,
				'koordinat' => Request()->koordinat
			];

			$this->TempatIbadahModel->UpdateData($data, $id);
			return redirect()->route('tempatibadah');
	}

	public function delete($id) {
        $this->TempatIbadahModel->DeleteData($id);
        return redirect()->route('tempatibadah');
    }

}
