<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Models\Perusahaan;

class PerusahaanController extends Controller
{
    function index(){
        $data = Perusahaan::where('pemilik', Auth::user()->name)->get();
        return view('dashboard',['data'=>$data]);
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
        
        $query = DB::table('perusahaans')->insert([
            'perusahaan'=>$request->input('nama'),
            'pemilik'=>$pemilik,
            'industri'=>$request->input('industri'),
            'alamat'=>$request->input('alamat'),
            'situs'=>$request->input('situs'),
            'deskripsi'=>$request->input('deskripsi')
        ]);

        if($query){
            return back()->with('success','Perusahaan ditambahkan');
        }else{
            return back()->with('fail','Something went wrong');
        }
        
    }

}
