<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Felita</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav class="navbar">

    <div class="logo">
        Portfolio Felita
    </div>

    <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>

</nav>

<section id="home" class="hero">

    <div class="hero-content">

        <h1>Halo, Saya Felita Salma Desmonda</h1>

        <h3>Mahasiswa Informatika</h3>

        <p>
            Fokus pada Web Development,
            Flutter Development,
            dan UI/UX Design.
        </p>

        <a href="#projects" class="btn">
            Lihat Project
        </a>

    </div>

</section>

<section id="about">

    <h2>Tentang Saya</h2>

    <p>
        Saya adalah mahasiswa Sistem Informasi yang memiliki
        minat dalam pengembangan website, aplikasi mobile,
        dan desain antarmuka pengguna.
    </p>

</section>

<section id="skills">

    <h2>Keahlian</h2>

    <div class="skills">

        <span>HTML</span>
        <span>CSS</span>
        <span>JavaScript</span>
        <span>PHP</span>
        <span>MySQL</span>
        <span>Laravel</span>
        <span>Flutter</span>
        <span>Figma</span>

    </div>

</section>

<section id="projects">

    <h2>Project Saya</h2>

    <div class="project-container">

        <div class="card">
            <h3>Website SSB HBS</h3>
            <p>
                Sistem manajemen sekolah sepak bola
                berbasis web.
            </p>
        </div>

        <div class="card">
            <h3>TaniMate</h3>
            <p>
                Prototype aplikasi informasi pertanian.
            </p>
        </div>

        <div class="card">
            <h3>SiBando</h3>
            <p>
                Aplikasi mobile berbasis Flutter.
            </p>
        </div>

        <div class="card">
            <h3>Braille ScanAI</h3>
            <p>
                Prototype AI pendeteksi huruf braille.
            </p>
        </div>

    </div>

</section>

<section id="contact">

    <h2>Hubungi Saya</h2>

    <form id="contactForm">

        <input
            type="text"
            placeholder="Nama"
            required
        >

        <input
            type="email"
            placeholder="Email"
            required
        >

        <textarea
            placeholder="Pesan"
            rows="5"
            required
        ></textarea>

        <button type="submit">
            Kirim Pesan
        </button>

    </form>

</section>

<footer>
    © 2026 Portfolio Felita
</footer>

<script src="js/script.js"></script>

</body>
</html>