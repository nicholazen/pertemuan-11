<?php

namespace App\Http\Controllers;

use App\Models\pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index(){
        $list_pasien = pasien::all();
        return view('pasien.index',['list_pasien'=>$list_pasien]);
    }
}
