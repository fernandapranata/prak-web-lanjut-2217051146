@extends('layouts.app')

@section('content')

<a href="{{ route('users.create') }}" class="btn-custom mb-2">Tambah Pengguna Baru</a>

<h1 class="list-data-title text-center mb-4">List Data</h1>

<div class="table-container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Nama</th>
                <th class="text-center">NPM</th>
                <th class="text-center">Kelas</th>
                <th class="text-center">Foto</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td class="text-center">{{ $user->id }}</td>
                <td class="text-center">{{ $user->nama }}</td>
                <td class="text-center">{{ $user->npm }}</td>
                <td class="text-center">{{ $user->kelas->nama_kelas ?? 'Kelas Tidak Ditemukan' }}</td>
                <td class="text-center">
                    @if($user->foto)
                    <img src="{{ asset($user->foto ?? 'uploads/img/default.jpg') }}" alt="Foto Pengguna" width="100">
                    @else
                        <span>Foto tidak tersedia</span>
                    @endif
                </td>
                <td class="text-center">
                    <a href="{{ route('user.show', $user->id) }}" class="btn btn-warning me-2">View</a>
                    <a href="{{ route('user.edit', $user['id']) }}" class="btn btn-primary me-2">Edit</a>
                    <form action="{{route('user.destroy', $user['id']) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Apakah anda yakin ingin menghapus user ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection