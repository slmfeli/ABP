@extends('layouts.app')

@section('content')

<div class="glass p-4 mb-4 text-center">

    <h1 class="title">
        Data Mahasiswa
    </h1>

    <a href="{{ route('mahasiswa.create') }}"
       class="btn btn-success mt-3">
       Tambah Data
    </a>

</div>

<div class="row">

@foreach($mahasiswa as $m)

<div class="col-md-4 mb-4">

    <div class="card card-custom p-3">

        <h4>{{ $m->nama }}</h4>

        <hr>

        <p>NIM : {{ $m->nim }}</p>

        <p>Jurusan : {{ $m->jurusan }}</p>

        <div class="d-flex gap-2">

            <a href="{{ route('mahasiswa.edit',$m->id) }}"
               class="btn btn-warning">
               Edit
            </a>

            <a href="{{ route('mahasiswa.show',$m->id) }}"
               class="btn btn-danger">
               Hapus
            </a>

        </div>

    </div>

</div>

@endforeach

</div>

@endsection