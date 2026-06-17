@extends('layouts.app')

@section('content')

<div class="col-md-6 mx-auto">

<div class="glass p-4">

<h2 class="text-white mb-4">
Tambah Mahasiswa
</h2>

<form action="{{ route('mahasiswa.store') }}"
      method="POST">

@csrf

<input
type="text"
name="nama"
class="form-control mb-3"
placeholder="Nama Mahasiswa">

<input
type="text"
name="nim"
class="form-control mb-3"
placeholder="NIM">

<input
type="text"
name="jurusan"
class="form-control mb-3"
placeholder="Jurusan">

<button
class="btn btn-success">
Simpan
</button>

<a href="{{ route('mahasiswa.index') }}"
class="btn btn-secondary">
Kembali
</a>

</form>

</div>

</div>

@endsection
