FELITA SALMA DESMONDA
2311102216
Laporan Praktikum Laravel + AJAX
Menampilkan Data Mahasiswa dari File JSON Tanpa Database
1. Tujuan Praktikum
Praktikum ini bertujuan untuk membuat aplikasi Laravel sederhana yang dapat menampilkan data mahasiswa dari file JSON lokal menggunakan AJAX tanpa reload halaman.

2. Deskripsi Program
Program ini dibuat menggunakan Laravel dengan tampilan halaman utama berupa:

judul Data Mahasiswa
tombol Tampilkan Data
tabel hasil data mahasiswa
Data mahasiswa tidak disimpan di database, melainkan di file JSON lokal.
Ketika tombol Tampilkan Data diklik, data diambil menggunakan AJAX lalu ditampilkan ke halaman dalam bentuk tabel tanpa refresh.

3. Lokasi Folder Project
Project Laravel disimpan pada folder:

C:\xampp\htdocs\pertemuan6
4. Perintah CMD yang Digunakan
Masuk ke folder project
C:
cd "C:\xampp\htdocs\pertemuan6"
Menjalankan server Laravel
php artisan serve
Membuka project di browser Chrome
start chrome http://127.0.0.1:8000
Urutan lengkap perintah CMD
C:
cd "C:\xampp\htdocs\pertemuan6"
php artisan serve
start chrome http://127.0.0.1:8000
5. File yang Ditambahkan
Berikut file yang ditambahkan pada project:

1. File JSON
public/data/mahasiswa.json
File ini digunakan untuk menyimpan data mahasiswa secara lokal.

2. File Controller
app/Http/Controllers/MahasiswaController.php
File ini digunakan untuk membaca file JSON lalu mengembalikan data dalam format JSON.

3. File View Blade
resources/views/home.blade.php
File ini digunakan untuk menampilkan halaman utama beserta tombol dan tabel hasil data.

6. File yang Diedit
File routing
routes/web.php
File ini diedit untuk menambahkan route halaman utama dan route untuk mengambil data mahasiswa.

7. Isi Kode Program
A. File JSON
Lokasi file:

public/data/mahasiswa.json
Isi file:

[
    {
        "nama": "Felita",
        "nim": "2311102216",
        "kelas": "SI1F-11-04",
        "prodi": "Teknik Infromatika"
    },
    {
        "nama": "Salma",
        "nim": "2311102001",
        "kelas": "SI1F-11-04",
        "prodi": "Teknik Informatika"
    },
    {
        "nama": "Desmonda",
        "nim": "2311102002",
        "kelas": "SI1F-11-04",
        "prodi": "Sistem Informasi"
    }
]

Penjelasan
File JSON ini berfungsi sebagai sumber data utama. Karena pada tugas ini tidak diperbolehkan menggunakan database, maka data mahasiswa disimpan dalam file JSON lokal.

B. File Controller
Lokasi file:

app/Http/Controllers/MahasiswaController.php
Isi file:

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

Penjelasan
public_path('data/mahasiswa.json') digunakan untuk mengambil lokasi file JSON
file_get_contents($path) digunakan untuk membaca isi file JSON
json_decode(..., true) digunakan untuk mengubah isi JSON menjadi array
response()->json($data) digunakan untuk mengirim data ke browser dalam format JSON
C. File Route
Lokasi file:

routes/web.php
Isi file:

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('home');
});

Route::get('/data-mahasiswa', [MahasiswaController::class, 'index']);

Penjelasan
Route / digunakan untuk menampilkan halaman utama
Route /data-mahasiswa digunakan untuk mengambil data mahasiswa dari controller dalam format JSON

D. File Blade
Lokasi file:

resources/views/home.blade.php
Isi file:

<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            margin:40px;
        }

        h1{
            color:#333;
        }

        button{
            background:#0d6efd;
            color:white;
            border:none;
            padding:10px 20px;
            cursor:pointer;
            border-radius:5px;
        }

        button:hover{
            background:#0b5ed7;
        }

        table{
            width:100%;
            border-collapse:collapse;
            margin-top:20px;
        }

        table,th,td{
            border:1px solid #ccc;
        }

        th,td{
            padding:10px;
            text-align:left;
        }

        th{
            background:#f2f2f2;
        }
    </style>
</head>
<body>

<h1>Data Mahasiswa</h1>

<button id="btnData">
    Tampilkan Data
</button>

<div id="hasil"></div>

<script>

document.getElementById('btnData')
.addEventListener('click', function(){

    fetch('/data-mahasiswa')
    .then(response => response.json())
    .then(data => {

        let output = `
        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Kelas</th>
                <th>Program Studi</th>
            </tr>
        `;

        data.forEach((item,index)=>{

            output += `
            <tr>
                <td>${index+1}</td>
                <td>${item.nama}</td>
                <td>${item.nim}</td>
                <td>${item.kelas}</td>
                <td>${item.prodi}</td>
            </tr>
            `;
        });

        output += "</table>";

        document.getElementById('hasil').innerHTML = output;

    });

});

</script>

</body>
</html>

Penjelasan
Pada file Blade ini terdapat:

judul halaman Data Mahasiswa
tombol Tampilkan Data
area hasil data
script AJAX menggunakan fetch()
Saat tombol diklik, JavaScript mengirim permintaan ke route /data-mahasiswa.
Setelah data diterima, program menampilkan data ke dalam tabel dengan kolom:

No
Nama
NIM
Kelas
Prodi
Data ditampilkan tanpa reload halaman.

8. Alur Kerja Program
Alur kerja aplikasi adalah sebagai berikut:

User membuka halaman utama Laravel
Halaman menampilkan judul Data Mahasiswa dan tombol Tampilkan Data
Saat tombol diklik, AJAX fetch() dijalankan
Request dikirim ke route /data-mahasiswa
Route memanggil MahasiswaController
Controller membaca file mahasiswa.json
Data dikirim kembali ke browser dalam format JSON
JavaScript menerima data tersebut
Data ditampilkan ke dalam tabel tanpa reload halaman

9. Cara Menjalankan Program
Langkah-langkah menjalankan project:

1. Buka CMD
Masuk ke drive dan folder project:

E:
cd "C:\xampp\htdocs\pertemuan6"
2. Jalankan Laravel
php artisan serve
3. Buka browser
Akses alamat berikut:

http://127.0.0.1:8000
Atau langsung dari CMD:

start chrome http://127.0.0.1:8000
4. Tampilkan data
Klik tombol Tampilkan Data, maka data mahasiswa akan muncul dalam bentuk tabel.

10. Hasil Output Program
Output program menampilkan halaman dengan judul:

Data Mahasiswa
Lalu terdapat tombol:

Tampilkan Data
Setelah tombol ditekan, akan muncul tabel data mahasiswa dengan isi seperti berikut:

No	Nama	NIM	Kelas	Prodi
1	Felita	2311102216	SI1F-11-04	Teknik Informatika
2	Salma	2311102001	SI1F-11-04	Teknik Informatika
3	Desmonda	2311102002	SI1F-11-04	Sistem Informatika

11. Struktur File Project
Struktur file yang digunakan pada project ini adalah:

Modul_9-11/
├── app/
│   └── Http/
│       └── Controllers/
│           └── MahasiswaController.php
├── public/
│   └── data/
│       └── mahasiswa.json
├── resources/
│   └── views/
│       └── home.blade.php
└── routes/
    └── web.php

12. Kesimpulan
Berdasarkan praktikum yang telah dilakukan, dapat disimpulkan bahwa Laravel dapat digunakan untuk membuat aplikasi sederhana tanpa database dengan memanfaatkan file JSON sebagai sumber data. Dengan bantuan AJAX, data mahasiswa dapat ditampilkan secara dinamis tanpa reload halaman. Praktikum ini membantu memahami penggunaan Blade, route, controller, file JSON, dan AJAX dalam satu aplikasi Laravel.