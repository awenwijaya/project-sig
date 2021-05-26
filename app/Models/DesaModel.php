<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DesaModel extends Model
{
    public function AllData() {
    	return DB::table('tb_desa')->get();
    }

    public function InsertData($data) {
    	DB::table('tb_desa')->insert($data);
    }

    public function DetailData($id) {
    	return DB::table('tb_desa')->where('id_desa', $id)->first();
    }

    public function UpdateData($data, $id) {
    	DB::table('tb_desa')
    	->where('id_desa', $id)
    	->update($data);	
    }

    public function DeleteData($id) {
    	DB::table('tb_desa')
    	->where('id_desa', $id)
    	->delete();
    } 
}
