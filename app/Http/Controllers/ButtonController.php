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
    public function showHalamanLowongan(){
        return view('halamanLowongan');
    }
    public function showProfilPerusahaan(){
        return view('profilPerusahaan');
    }
    public function showHomePemilik(){
        return view('homePemilik');
    }
}
