<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Felita</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">
            Profile Felita
        </a>

        <button
            class="navbar-toggler"
            data-bs-toggle="collapse"
            data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#skills">Skills</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#projects">Projects</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<!-- Hero -->
<section class="hero text-center">

    <div class="container">

        <h1 class="display-4 fw-bold">
            Halo, Saya Felita
        </h1>

        <p class="lead">
            Mahasiswa Informatika
        </p>

        <a href="#about" class="btn btn-light btn-lg">
            Tentang Saya
        </a>

    </div>

</section>

<!-- About -->
<section id="about" class="container py-5">

    <h2 class="text-success mb-4">
        Tentang Saya
    </h2>

    <div class="card shadow">

        <div class="card-body">

            <p>
                Saya adalah mahasiswa Informatika yang
                memiliki minat dalam pengembangan website,
                aplikasi mobile, dan UI/UX Design.
            </p>

            <p>
                Saat ini saya aktif mempelajari Laravel,
                Flutter, dan MySQL.
            </p>

        </div>

    </div>

</section>

<!-- Skills -->
<section id="skills" class="container py-5">

    <h2 class="text-success mb-4">
        Keahlian
    </h2>

    <span class="badge bg-warning text-dark p-3">HTML</span>
    <span class="badge bg-warning text-dark p-3">CSS</span>
    <span class="badge bg-warning text-dark p-3">JavaScript</span>
    <span class="badge bg-warning text-dark p-3">PHP</span>
    <span class="badge bg-warning text-dark p-3">Laravel</span>
    <span class="badge bg-warning text-dark p-3">Flutter</span>
    <span class="badge bg-warning text-dark p-3">MySQL</span>

</section>

<!-- Projects -->
<section id="projects" class="container py-5">

    <h2 class="text-success mb-4">
        Project
    </h2>

    <div class="row">

        <div class="col-md-3 mb-3">

            <div class="card h-100 shadow">

                <div class="card-body">

                    <h5>Website SSB HBS</h5>

                    <p>
                        Sistem manajemen sekolah sepak bola.
                    </p>

                </div>

            </div>

        </div>

        <div class="col-md-3 mb-3">

            <div class="card h-100 shadow">

                <div class="card-body">

                    <h5>TaniMate</h5>

                    <p>
                        Prototype aplikasi pertanian.
                    </p>

                </div>

            </div>

        </div>

        <div class="col-md-3 mb-3">

            <div class="card h-100 shadow">

                <div class="card-body">

                    <h5>SiBando</h5>

                    <p>
                        Aplikasi mobile Flutter.
                    </p>

                </div>

            </div>

        </div>

        <div class="col-md-3 mb-3">

            <div class="card h-100 shadow">

                <div class="card-body">

                    <h5>Braille ScanAI</h5>

                    <p>
                        Prototype AI Braille Scanner.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- Contact -->
<section id="contact" class="container py-5">

    <h2 class="text-success mb-4">
        Contact
    </h2>

    <div class="card shadow">

        <div class="card-body">

            <p>Email : pefelisalma@gmail.com</p>
            <p>GitHub : github.com/slmfeli</p>
            <p>Instagram : @felita</p>

        </div>

    </div>

</section>

<footer class="bg-success text-white text-center p-3">
    © 2026 Profile Felita
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>