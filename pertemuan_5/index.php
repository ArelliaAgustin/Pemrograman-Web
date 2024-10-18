<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Website Bootstrap in PHP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php
echo '
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="kontak.php">Kontak</a></li>
            <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
        </ul>
    </div>
</nav>

<!-- Section untuk artikel -->
<section class="container my-5">
    <!-- Artikel 1 -->
    <div class="row mb-4">
        <div class="col-md-12">
            <div class="d-flex align-items-center">
                <img src="https://via.placeholder.com/150" class="img-fluid me-3" alt="Artikel 1" style="width: 200px; height: auto;">
                <div>
                    <h5 class="card-title">Artikel 1</h5>
                    <p class="card-text">Ini adalah artikel tentang topik yang menarik. Bacalah untuk informasi lebih lanjut.</p>
                    <a href="artikel.php?id=1" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Artikel 2 -->
    <!-- Tambahkan artikel lainnya sesuai kebutuhan -->
</section>

<!-- Footer -->
<footer class="bg-dark text-light py-4">
    <div class="container text-center">
        <h4>Link Rekomendasi</h4>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="https://www.facebook.com/informatika.upj/" class="text-light">Facebook</a></li>
            <li class="list-inline-item"><a href="https://www.instagram.com/himaforka_upj/" class="text-light">Instagram</a></li>
            <li class="list-inline-item"><a href="https://www.youtube.com/@himaforkaupj6563/videos" class="text-light">YouTube</a></li>
        </ul>
    </div>
</footer>
';
?>

</body>
</html>
