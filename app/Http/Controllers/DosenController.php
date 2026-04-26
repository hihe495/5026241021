<?php

namespace App\Http\Controllers;
//package kuliah.pert3

use Illuminate\Http\Request;
// import

class DosenController extends Controller
{
    //

public function inde(){
    return "<h1>Halo ini adalah method index, dalam controller DosenController. - www.malasngoding.com<h1>";
}

public function biodata(){
        $name = "Syauqi Rifan";
    	$pelajaran = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];
        return view('biodata',['name' => $name , 'matkul' => $pelajaran]);
    }

}
