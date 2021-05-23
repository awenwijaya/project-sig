<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SekolahModel extends Model
{
    public function AllData() {
    	return DB::table('tb_sekolah')
    	->join('tb_jenis_potensi_desa', 'tb_jenis_potensi_desa.id', '=', 'tb_sekolah.id_jenis_potensi')
    	->join('tb_jenjang_sekolah', 'tb_jenjang_sekolah.id', '=', 'tb_sekolah.id_jenjang_sekolah')
    	->join('tb_jenis_sekolah', 'tb_jenis_sekolah.id_jenis_sekolah', '=', 'tb_sekolah.id_jenis_sekolah')
    	->get();
    }

    public function InsertData($data) {
    	DB::table('tb_sekolah')->insert($data);
    }

    public function DetailData($id) {
    	return DB::table('tb_sekolah')
    	->join('tb_jenis_potensi_desa', 'tb_jenis_potensi_desa.id', '=', 'tb_sekolah.id_jenis_potensi')
    	->join('tb_jenjang_sekolah', 'tb_jenjang_sekolah.id', '=', 'tb_sekolah.id_jenjang_sekolah')
    	->join('tb_jenis_sekolah', 'tb_jenis_sekolah.id_jenis_sekolah', '=', 'tb_sekolah.id_jenis_sekolah')
    	->where('tb_sekolah.id', $id)->first();
    }

    public function UpdateData($data, $id) {
    	DB::table('tb_sekolah')
    	->where('id', $id)
    	->update($data);
    }

    public function DeleteData($id) {
    	DB::table('tb_sekolah')
    	->where('id', $id)
    	->delete();
    }
}
