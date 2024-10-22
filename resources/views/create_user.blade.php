<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', Arial, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #ADD8E6;
        }

        .form-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 1200px;
            margin: auto;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 25px;
            font-size: 24px;
            color: #333;
            letter-spacing: 1px;
            font-weight: bold;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            font-weight: 600;
            margin-bottom: 5px;
            color: #333;
            font-size: 18px;
            width: 100%;
            text-align: left;
        }

        input, select {
            padding: 14px;
            margin-bottom: 20px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            width: 100%;
        }

        select option[disabled] {
            color: #999;
        }

        button {
            padding: 14px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        button:hover {
            background-color: #555;
        }

        button:active {
            transform: scale(0.98);
        }

        input::placeholder {
            color: #aaa;
        }
    </style>
</head>

@extends('layouts.app') 
@section('content') 
<div class="form-container">
    <h2>Create User</h2>

    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" placeholder="Nama" required>

        <label for="npm">NPM</label>
        <input type="text" id="npm" name="npm" placeholder="NPM" required>

        <label for="kelas_id">Kelas</label>
        <select id="kelas_id" name="kelas_id" required>
            <option value="" disabled selected>Pilih Kelas</option>
            @foreach($kelas as $kelasItem)
                <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
            @endforeach
        </select>
        
        <label for="jurusan" class="form-label">Jurusan</label>
        <input type="text" class="form-control" name="jurusan" id="jurusan" placeholder="jurusan anda">

        <label for="semester" class="form-label">Semester</label>
        <input type="text" class="form-control" name="semester" id="semester" placeholder="semester anda">

        <label for="foto">Foto</label>
        <input type="file" id="foto" name="foto"><br><br>

        <button type="submit">Submit</button>
    </form>
</div>
@endsection

</html>