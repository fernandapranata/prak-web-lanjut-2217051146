@extends('layouts.app') 
 
@section ('content') 
<table> 
   <thead> 
      <tr> 
         <th>ID</th> 
         <th>Nama</th> 
         <th>NPM</th> 
         <th>Kelas</th> 
         <th>Aksi</th> 
      </tr> 
   </thead> 
   <tbody> 
    @foreach($users as $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->nama }}</td>
        <td>{{ $user->npm }}</td>
        <td>{{ $user->kelas->nama_kelas ?? 'Kelas Tidak Ditemukan' }}</td>
        <td>
            <a href="/edit/{{ $user['id'] }}" class="btn btn-warning">Edit</a>
            <a href="/delete/{{ $user['id'] }}" class="btn btn-danger">Hapus</a>
        </td>
    </tr>
    @endforeach
   </tbody> 
</table> 
@endsection 


