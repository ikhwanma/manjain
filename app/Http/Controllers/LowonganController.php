<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LowonganController extends Controller
{
    function index(){
        return view('buatLowongan');
    }

    function addLowongan(Request $request){
        $request->validate([
            'judul'=>'required',
            'kategori'=>'required',
            'gaji'=>'required',
            'jadwal'=>'required',
            'deskripsi'=>'required',
            'cara'=>'required'
        ]);

        $query = DB::table('lowongan')->insert([
            'judul'=>$request->input('judul'),
            'kategori'=>$request->input('kategori'),
            'gaji'=>$request->input('gaji'),
            'jadwal'=>$request->input('jadwal'),
            'deskripsi'=>$request->input('deskripsi'),
            'cara'=>$request->input('cara')
        ]);

        if($query){
            return back()->with('success','Perusahaan ditambahkan');
        }else{
            return back()->with('fail','Something went wrong');
        }
    }
}
