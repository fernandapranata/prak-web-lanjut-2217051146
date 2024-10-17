<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(){
        return view('create_user');
    }

    public function store(Request $request){ 
        $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'required|numeric',
            'kelas' => 'required|string|max:10',
        ]);
        
        $data = [
            'nama' => $request->input('nama'),
            'npm' => $request->input('npm'),
            'kelas' => $request->input('kelas')
        ];
        return view('profile', $data);
    }
}