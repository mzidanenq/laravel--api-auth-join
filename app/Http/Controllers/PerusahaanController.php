<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perusahaan;
use DB;


class PerusahaanController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth:api');
    }
    public function getPerusahaan()
    {
        $perusahaans = DB::table('perusahaans')->select('nama', 'total_aset', 'total_karyawan')->get();

        return response()->json([
            'data' => $perusahaans
        ]);
    }

    public function getEventPerusahaanKaryawan()
    {
        $getEventPerusahaanKaryawan = DB::table('perusahaans')
                                        ->join('karyawans', 'karyawans.perusahaan_id', '=', 'perusahaans.id')
                                        ->join('events', 'events.perusahaan_id', '=', 'perusahaans.id')
                                        ->select('perusahaans.nama as namaperusahaan', 'karyawans.nama as namakaryawan', 'karyawans.posisi', 'events.nama as namaevent', 'lokasi', 'kategori', 'tanggal')
                                        ->get();
        return response()->json([
            'data' => $getEventPerusahaanKaryawan
        ]);
        
    }
}
