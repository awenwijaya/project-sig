<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TempatIbadahModel extends Model
{
    public function AllData() {
    	return DB::table('tb_tempat_ibadah')
    	->join('tb_jenis_potensi_desa', 'tb_jenis_potensi_desa.id', '=', 'tb_tempat_ibadah.id_jenis_potensi')
    	->join('tb_agama', 'tb_agama.id', '=', 'tb_tempat_ibadah.id_agama')
    	->get();
    }

    public function InsertData($data) {
        DB::table('tb_tempat_ibadah')->insert($data);
    }

    public function DetailData($id) {
        return DB::table('tb_tempat_ibadah')
        ->join('tb_jenis_potensi_desa', 'tb_jenis_potensi_desa.id', '=', 'tb_tempat_ibadah.id_jenis_potensi')
    	->join('tb_agama', 'tb_agama.id', '=', 'tb_tempat_ibadah.id_agama')
        ->where('tb_tempat_ibadah.id', $id)->first();
    }

    public function UpdateData($data, $id) {
        DB::table('tb_tempat_ibadah')
    	->where('id', $id)
    	->update($data);
    }

    public function DeleteData($id) {
    	DB::table('tb_tempat_ibadah')
    	->where('id', $id)
    	->delete();
    }
}
