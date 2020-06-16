<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    public function buatEvent(Request $request) 
    {
        Event::create([
            'perusahaan_id' => $request->perusahaan_id,
            'nama' => $request->nama,
            'lokasi' => $request->lokasi,
            'kategori' => $request->kategori,
            'tanggal' => $request->tanggal,
        ]);

        return response()->json([
            'message' => 'Berhasil membuat event'
        ]);
    }

    public function getEvent()
    {
        $events = $perusahaans = DB::table('events')->select('nama', 'lokasi', 'kategori', 'tanggal')->get();


        return response()->json([
            'data' => $events
        ]);
    }


}
