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
            max-width: 400px;
            margin: auto;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 25px;
            font-size: 24px;
            color: #333;
            letter-spacing: 1px;
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
            font-size: 14px;
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

<form action="{{ route('user.update', $user['id']) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="container mt-5">
        <h1 class="text-center">Edit Data</h1>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" value="{{ old('nama', $user->nama) }}">
        </div>
        <div class="mb-3">
            <label for="npm" class="form-label">NPM</label>
            <input type="text" class="form-control" name="npm" id="npm" value="{{ old('npm', $user->npm) }}">
        </div>
        <div class="form-group">
            <label for="kelas_id">Kelas</label>
            <select class="form-select" name="kelas_id" id="kelas_id" required>
                @foreach ($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}"
                        {{ $kelasItem->id == $user->kelas_id ? 'selected' : '' }}>
                        {{ $kelasItem->nama_kelas }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="foto">Foto</label>
            <input type="file" name="foto" class="form-control">
            @if($user->foto)
                <img src="{{ asset($user->foto) }}" alt="User Photo" width="100" class="mt-2">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

@endsection
