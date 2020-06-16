<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Karyawan;
use DB;

class KaryawanController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    public function getKaryawan()
    {
        $Karyawans = DB::table('karyawans')->select('nama','posisi','tanggal_lahir','gaji')->get();

        return response()->json([
            'data' => $Karyawans
        ]);
    }

    public function getKaryawanID($id) 
    {
        $Karyawans = DB::table('karyawans')->select('nama','posisi','tanggal_lahir','gaji')->where('id', $id)->first();

        return response()->json([
            'data' => $Karyawans
        ]);
    }

}
