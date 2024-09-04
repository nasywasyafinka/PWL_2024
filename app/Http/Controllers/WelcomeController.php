<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello(){
        return 'Hello World';
    }
    public function index(){
        return 'Selamat Datang';
    }
    public function about(){
        return 'Nama : Nasywa Syafinka Widyamara | NIM : 2241760002';
    }
    public function articles($id){
        return 'Halaman ke-'.$id;
    }
    public function modif($id){
        return 'Selamat datang <br>
                Nama : Nasywa Syafinka Widyamara <br> 
                NIM : 2241760002 <br>
                Halaman ke-'.$id;
    }
    // public function greeting(){ 
    //     return view('blog.hello', ['name' => 'Nasywa Syafinka W']); 
    //     } 


        public function greeting(){ 
            return view('blog.hello') 
                ->with('name','Nasywa Syafinka Widyamara') 
                ->with('occupation','Karyawan tetap Petro Kimia Gresik'); 
        }
}