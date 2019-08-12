<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class role extends Controller
{
    //
    public function index(){
        $hasil = User::all();
        return view('datamembership',['lokit'=>$hasil]);
    }
}
