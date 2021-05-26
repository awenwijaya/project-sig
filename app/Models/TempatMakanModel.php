<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TempatMakanModel extends Model
{
    public function AllData() {
    	return DB::table('tb_tempat_makan')
        ->join('tb_jenis_potensi_desa', 'tb_jenis_potensi_desa.id', '=', 'tb_tempat_makan.id_jenis_potensi')
        ->get();
    }

    public function InsertData($data) {
    	DB::table('tb_tempat_makan')->insert($data);
    }

    public function DetailData($id) {
    	return DB::table('tb_tempat_makan')->where('id_tempat_makan', $id)->first();
    }

    public function UpdateData($data, $id) {
    	DB::table('tb_tempat_makan')
    	->where('id_tempat_makan', $id)
    	->update($data);	
    }

    public function DeleteData($id) {
    	DB::table('tb_tempat_makan')
    	->where('id_tempat_makan', $id)
    	->delete();
    } 
}
