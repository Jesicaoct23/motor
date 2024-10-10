<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event- Jejes MotoClub</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
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
                    <li class="nav-item"><a class="nav-link" href="#articles">Artikel</a></li>
                    <li class="nav-item"><a class="nav-link" href="event.php">Event</a></li>
                    <li class="nav-item"><a class="nav-link" href="galeri.php">Galeri Foto</a></li>
                    <li class="nav-item"><a class="nav-link" href="klien.php">Klien Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="#login">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="#signin">Sign In</a></li>
                    <li class="nav-item"><a class="nav-link" href="#signup">Sign Up</a></li>
                </ul>
            </aside>

            <main class="col-md-9">
                <section id="Event">
                    <h2>Events</h2>
                    <div class="row">
                        <!-- Gambar 1 -->
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="gambar/Road Rash Biker Party Flyer.jpeg" class="card-img-top" alt="Foto 1">
                            </div>
                        </div>
                        <!-- Gambar 2 -->
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="gambar/event_2.jpeg" class="card-img-top" alt="Foto 2">
                            </div>
                        </div>
                        <!-- Gambar 3 -->
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="gambar/event3.jpeg" class="card-img-top" alt="Foto 3">
                            </div>
                        </div>
                        <!-- Gambar 4 -->
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="gambar/event4.jpeg" class="card-img-top" alt="Foto 4">
                            </div>
                        </div>
                        <!-- Gambar 5 -->
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="gambar/event5.jpeg" class="card-img-top" alt="Foto 5">
                            </div>
                        </div>
                        <!-- Gambar 6 -->
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="gambar/Motor Club Anniversary Event .jpeg" class="card-img-top" alt="Foto 6">
                            </div>
                        </div>
                        <!-- Tambah gambar lainnya sesuai kebutuhan -->
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
