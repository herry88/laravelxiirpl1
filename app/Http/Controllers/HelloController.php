<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //buat index 
    public function index()
    {
        // echo '<h1>Hello World Dari controller</h1>';
        $hello = "Hello World Ini Dari Controller Ke View";
        $pelajaran = ["Algoritma", "PWPB", "Basis Data", 
                    "PPL","Pemrograman Desktop"];
        return view('hello.index', compact('hello','pelajaran'));
        // dd($pelajaran);

        // $hello = "Hello World Ini Dari Controller Ke View";
        // $pelajaran = ["Algoritma", "PWPB", "Basis Data", 
        //             "PPL","Pemrograman Desktop"];
        // return view('hello.index', ['hello'=> $hello,'pelajaran' => $pelajaran]);

        // $d['hello'] = "Hello World Ini Dari Controller Ke View";
        // $d['pelajaran'] = ["Algoritma", "PWPB", "Basis Data", 
        //             "PPL","Pemrograman Desktop"];
        // return view('hello.index', $d);
    }

    


}
