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