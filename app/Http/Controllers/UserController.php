<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\UserModel;

class UserController extends Controller
{
    public function create()
    {
        return view('create_user', [
            'kelas' => Kelas::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:255',
            'kelas_id' => 'required|exists:kelas,id',
        ]);
        $data = [
            'nama' => $request->input('nama'),
            'kelas' => $request->input('kelas'),
            'npm' => $request->input('npm'),
        ];
    
        $user = UserModel::create($validatedData);
    
        $user->load('kelas');
    
        return view('profile', [
            'nama' => $user->nama,
            'npm' => $user->npm,
            'nama_kelas' => $user->kelas->nama_kelas ?? 'Kelas tidak ditemukan',
        ]);
    }
    public function uploadProfilePicture(Request $request)
    {
        $request->validate([
            'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $file = $request->file('profile_picture');

        $fileName = time().'_'.$file->getClientOriginalName();

        $file->move(public_path('assets/img'), $fileName);

        $profile_picture_path = 'assets/img/' . $fileName;

        return back()->with([
            'profile_picture' => $profile_picture_path,
            'nama' => $request->input('nama'),
            'npm' => $request->input('npm'),
            'nama_kelas' => $request->input('kelas_id') 
        ]);
    }

    public function showProfile($id)
    {
        $user = User::findOrFail($id);

        return view('profile', [
            'nama' => $user->nama,
            'npm' => $user->npm,
            'nama_kelas' => $user->kelas->nama_kelas ?? 'Kelas tidak ditemukan', 
            'profile_picture' => session('profile_picture', 'public/assets/img/Fernanda Pranaata.jpg'),
        ]);
    }
}