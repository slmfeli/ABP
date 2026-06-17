<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $path = public_path('mahasiswa.json');

        $data = json_decode(
            file_get_contents($path),
            true
        );

        return response()->json($data);
    }
}
