@extends('layouts.app')

@section('content')

<div class="row justify-content-center">

    <div class="col-md-6">

        <div class="glass p-4 text-center">

            <h2 class="text-white mb-4">
                Konfirmasi Hapus Data
            </h2>

            <p class="text-white">
                Apakah Anda yakin ingin menghapus data mahasiswa berikut?
            </p>

            <hr class="text-white">

            <h4 class="text-white">
                {{ $mahasiswa->nama }}
            </h4>

            <p class="text-white">
                NIM : {{ $mahasiswa->nim }}
            </p>

            <p class="text-white">
                Jurusan : {{ $mahasiswa->jurusan }}
            </p>

            <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}"
                  method="POST">

                @csrf
                @method('DELETE')

                <button type="submit"
                        class="btn btn-danger">
                    Ya, Hapus
                </button>

                <a href="{{ route('mahasiswa.index') }}"
                   class="btn btn-secondary">
                    Batal
                </a>

            </form>

        </div>

    </div>

</div>

@endsection