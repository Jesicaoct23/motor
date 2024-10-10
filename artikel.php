<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel - Jejes MotoClub</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
    <style>
        .article-card {
            margin-bottom: 20px;
        }
        .article-card img {
            max-height: 200px;
            object-fit: cover;
        }
        .section-header {
            margin-bottom: 1.5rem;
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
                    <li class="nav-item"><a class="nav-link" href="artikel.php">Artikel</a></li>
                    <li class="nav-item"><a class="nav-link" href="event.php">Event</a></li>
                    <li class="nav-item"><a class="nav-link" href="galeri.php">Galeri Foto</a></li>
                    <li class="nav-item"><a class="nav-link" href="klien.php">Klien Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="#login">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="#signin">Sign In</a></li>
                    <li class="nav-item"><a class="nav-link" href="#signup">Sign Up</a></li>
                </ul>
            </aside>
            <main class="col-md-9">
                <section id="articles" class="section-content">
                    <h2 class="section-header">Artikel</h2>
                    <div class="row">
                        <!-- Article 1 -->
                        <div class="col-md-4">
                            <div class="card article-card">
                                <img src="gambar/galeri2.jpeg" class="card-img-top" alt="Article 1">
                                <div class="card-body">
                                    <h5 class="card-title">Artikel 1</h5>
                                    <p class="card-text">Deskripsi singkat tentang artikel 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <a href="https://www.motorkux.id/article/d/astra-motor-papua-gelar-festival-hari-pelanggan-nasional-2024" class="btn btn-primary" target="_blank">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <!-- Article 2 -->
                        <div class="col-md-4">
                            <div class="card article-card">
                                <img src="gambar/galeri6.jpeg" class="card-img-top" alt="Article 2">
                                <div class="card-body">
                                    <h5 class="card-title">Artikel 2</h5>
                                    <p class="card-text">Deskripsi singkat tentang artikel 2. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <a href="https://p2k.stekom.ac.id/ensiklopedia/Sepeda_motor" class="btn btn-primary" target="_blank">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <!-- Article 3 -->
                        <div class="col-md-4">
                            <div class="card article-card">
                                <img src="gambar/galeri4.jpeg" class="card-img-top" alt="Article 3">
                                <div class="card-body">
                                    <h5 class="card-title">Artikel 3</h5>
                                    <p class="card-text">Deskripsi singkat tentang artikel 3. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <a href="https://terasmaluku.com/headline/2020/07/31/tiga-klub-motor-di-ambon-bakal-tembus-daerah-bencana-bagikan-hewan-kurban-ini-mereka/" class="btn btn-primary" target="_blank">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <!-- Add more articles as needed -->
                    </div>
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
