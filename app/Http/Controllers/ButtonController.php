<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ButtonController extends Controller
{
    //
    public function showList(){
        return view('list');
    }
    public function showBuatLowongan(){
        return view('buatLowongan');
    }
    public function showBuatPerusahaan(){
        return view('buatPerusahaan');
    }
    public function showEditLowongan(){
        return view('editLowongan');
    }
}
