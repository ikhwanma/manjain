<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class PerusahaanController extends Controller
{
    function index(){
        return view('buatPerusahaan');
    }

    function addPerusahaan(Request $request){

        $pemilik = Auth::user()->name;

        $request->validate([
            'nama'=>'required',
            'industri'=>'required',
            'alamat'=>'required',
            'situs'=>'required',
            'deskripsi'=>'required'
        ]);
        
        $query = DB::table('perusahaan')->insert([
            'perusahaan'=>$request->input('nama'),
            'pemilik'=>$pemilik,
            'industri'=>$request->input('industri'),
            'alamat'=>$request->input('alamat'),
            'situs'=>$request->input('situs'),
            'deskripsi'=>$request->input('deskripsi')
        ]);

        if($query){
            return view('Dashboard')->with('success','Perusahaan ditambahkan');
        }else{
            return back()->with('fail','Something went wrong');
        }
        
    }

    function showData(){
        $data = array(
            'list'=>DB::table('crud')->get()
        );

        return view('Dashboard', $data);
    }
}
