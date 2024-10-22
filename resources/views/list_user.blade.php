@extends('layouts.app')

@section('content')

<a href="{{ route('users.create') }}" class="btn-custom mb-2">Tambah Pengguna Baru</a>

<h1 class="list-data-title text-center mb-4">List Data</h1>

<div class="row">
    @foreach($users as $user)
    <div class="col-md-4 mb-4">
        <div class="card" style="width: 18rem;">
            @if($user->foto)
            <img src="{{ asset($user->foto ?? 'uploads/img/default.jpg') }}" class="card-img-top" alt="Foto Pengguna">
            @else
            <img src="{{ asset('uploads/img/default.jpg') }}" class="card-img-top" alt="Foto Pengguna">
            @endif

            <div class="card-body">
                <h5 class="card-title">{{ $user->nama }}</h5>
                <p class="card-text"><strong>NPM:</strong> {{ $user->npm }}</p>
                <p class="card-text"><strong>Kelas:</strong> {{ $user->kelas->nama_kelas ?? 'Kelas Tidak Ditemukan' }}</p>
                <p class="card-text"><strong>Jurusan:</strong> {{ $user->jurusan }}</p>
                <p class="card-text"><strong>Semester:</strong> {{ $user->semester }}</p> 
                <a href="{{ route('user.show', $user->id) }}" class="btn btn-warning">View</a>
                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"
                        onclick="return confirm('Apakah anda yakin ingin menghapus user ini?')">Hapus</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection
