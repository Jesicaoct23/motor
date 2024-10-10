<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Jejes MotoClub</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
    <style>
        .section-heading {
            border-bottom: 2px solid #ddd;
            padding-bottom: 10px;
            margin-bottom: 20px;
            font-size: 1.5rem;
        }
        .question {
            font-weight: bold;
            margin-top: 20px;
            color: #333;
        }
        .answer {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <header class="bg-dark text-white text-center py-4">
        <div class="container">
            <img src="gambar/logo_2.jpeg" class="logo img-fluid" alt="Jejes MotoClub Logo">
            <h1 class="mt-2">Jejes MotoClub</h1>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        <div class="container">
            <a class="navbar-brand" href="#">Jejes MotoClub</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="visi.php">Visi dan Misi</a></li>
                    <li class="nav-item"><a class="nav-link" href="produk.php">Produk Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="kontak.php">Kontak Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container mt-4">
        <div class="row">
            <aside class="col-md-3 bg-light p-4">
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link" href="about.php#articles">Artikel</a></li>
                    <li class="nav-item"><a class="nav-link" href="event.php">Event</a></li>
                    <li class="nav-item"><a class="nav-link" href="galeri.php">Galeri Foto</a></li>
                    <li class="nav-item"><a class="nav-link" href="klien.php">Klien Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php#login">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php#signin">Sign In</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php#signup">Sign Up</a></li>
                </ul>
            </aside>
            <main class="col-md-9">
                <section id="about">
                    <h2 class="section-heading">About Us</h2>
                    <p>Jejes MotoClub didirikan pada tahun 2000 oleh sekelompok penggemar motor yang memiliki kecintaan yang sama terhadap kecepatan dan kebersamaan. Berawal dari pertemuan kecil di Karang Anyer, Pematang Siantar, kami kini telah berkembang menjadi komunitas besar yang tersebar di berbagai daerah.</p>
                    
                    <div class="question">Apa yang Kami Lakukan:</div>
                    <p class="answer">Kami mengorganisir berbagai kegiatan motor, termasuk touring, balapan, dan pertemuan komunitas. Selain itu, kami juga aktif dalam kegiatan sosial dan kontribusi kepada masyarakat melalui berbagai program amal.</p>
                    
                    <div class="question">Sejarah Singkat:</div>
                    <p class="answer">Klub ini didirikan dengan visi untuk menyatukan para penggemar motor dan menciptakan platform bagi mereka untuk berbagi pengalaman dan kecintaan terhadap motor. Sejak saat itu, kami telah mengadakan berbagai acara, menjalin kerjasama dengan klub motor lain, dan berpartisipasi dalam banyak kegiatan yang berkaitan dengan motor.</p>
                </section>
            </main>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
            © 2024 Jejes MotoClub - All rights reserved.
        </div>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
