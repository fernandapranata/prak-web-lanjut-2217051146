<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilrController extends Controller
{
//     public function profile(){
    
//         return view('profile');
//     }

public function profile()
    {
        $data = [
            'nama' => 'Fernanda Pranata',
            'kelas' => 'D',
            'npm' => '2217051146'
        ];
        return view('profile', $data);
    }

    // public function profile($nama= "", $kelas= "", $npm="")
    // {
    //     $data = [
    //         'nama' => $nama,
    //         'kelas' => $kelas,
    //         'npm' => $npm
    //     ];
    //     return view('profile', $data);
    // }
}
