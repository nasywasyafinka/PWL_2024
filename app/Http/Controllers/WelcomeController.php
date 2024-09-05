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
        return 'Profil Pengguna <br>Nama : Nasywa Syafinka Widyamara <br>Absen : 23 <br>NIM : 2241760002';
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

    //praktikum 3
    // public function greeting(){ 
    //     return view('blog.hello', ['name' => 'Nasywa Syafinka W']); 
    //     } 


        public function greeting(){ 
            return view('blog.hello') 
                ->with('name','Nasywa Syafinka Widyamara') 
                ->with('occupation','Karyawan tetap Petro Kimia Gresik'); 
        }


    // tugas
    public function home(){
        return view('blog.home');
    }
    public function food(){
        return view('blog.food');
    }
    public function beauty(){
        return view('blog.beauty');
    }
    public function homecare(){
        return view('blog.homecare');
    }
    public function baby(){
        return view('blog.baby');
    }
    public function user(){
        return 'Profil Pengguna <br>Nama : Nasywa Syafinka Widyamara <br>Absen : 23 <br>NIM : 2241760002';
    }
    public function pos(){
        return 'Point Of Sales <br>Product : Chitato <br>Price : IDR 15.000';
    }

}