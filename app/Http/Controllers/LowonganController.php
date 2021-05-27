<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;
use App\Models\Perusahaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LowonganController extends Controller
{
    function index(){
        $data = array(
            'list'=>DB::table('lowongan')->get()
        );
        return view('list', $data);
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
            'idperusahaan'=>$request->input('idperusahaan'),
            'kategori'=>$request->input('kategori'),
            'gaji'=>$request->input('gaji'),
            'jadwal'=>$request->input('jadwal'),
            'deskripsi'=>$request->input('deskripsi'),
            'cara'=>$request->input('cara')
        ]);

        if($query){
            return back()->with('success','Lowongan ditambahkan');
        }else{
            return back()->with('fail','Something went wrong');
        }
    }
}
