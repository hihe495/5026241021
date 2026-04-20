<?php

namespace App\Http\Controllers;
//package kuliah.pert3

use Illuminate\Http\Request;
\\import

class DosenController extends Controller
{
    public function index(){
    	return "Halo ini adalah method index, dalam controller DosenController. - www.malasngoding.com";
    }

    public function biodata(){
        $nama = "hihe";
    	return view('biodata',['nama' => $nama]);
    }
}
