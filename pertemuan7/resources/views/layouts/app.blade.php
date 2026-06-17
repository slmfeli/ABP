<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            min-height:100vh;
            background:linear-gradient(
                135deg,
                #0f172a,
                #312e81,
                #6d28d9
            );
        }

        .glass{
            background:rgba(255,255,255,0.1);
            backdrop-filter:blur(10px);
            border-radius:20px;
            border:1px solid rgba(255,255,255,0.2);
        }

        .card-custom{
            background:rgba(255,255,255,0.15);
            border:none;
            border-radius:20px;
            color:white;
        }

        .title{
            color:white;
            font-weight:bold;
        }

    </style>

</head>
<body>

<div class="container py-5">

    @yield('content')

</div>

</body>
</html>