<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $judul = [
            'title' => 'Dashboard',
            'desa' => DB::table('tb_desa')->count(),
            'sekolah' => DB::table('tb_sekolah')->count(),
            'tempatibadah' => DB::table('tb_tempat_ibadah')->count(),
            'tempatmakan' => DB::table('tb_tempat_makan')->count(),
        ];
        return view('home', $judul);
    }
}
