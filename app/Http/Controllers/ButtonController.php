<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ButtonController extends Controller
{
    //
    public function showList(){
        return view('list');
    }
}