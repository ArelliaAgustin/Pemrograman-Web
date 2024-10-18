<!DOCTYPE html>
<?php
$judul = "Simpan Data Karyawan"
?>
<html lang="en">
<head>
  <title><?= $judul?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php
    $namaDepan = $namaBelakang = "";
    if ($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["tombol"])) {
        include "koneksi.php"
        if (isset($_POST["nama_depan"])) {
            $namaDepan = $_POST["nama_depan"];
        }
        if (isset($_POST["nama_belakang"])){
            $namaBelakang = $_POST["nama_belakang"];
        }
        $sql = "INSERT INTO biodata (nama_depan, nama_belakang)
        VALUES ('$namaDepan', '$namaBelakang')";

        if (mysqli_query($koneksi, $sql)) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
        }
        
        mysqli_close($koneksi);
    }
    
    else {
        $pesan = "Akses Ilegal";
    }
?>
<div class="container mt-3">
  <h2><?php echo $judul ?></h2>
    <div class="mb-3 mt-3">
      <label for="nama_depan">Nama Depan: <?= $namaDepan?></label>
    </div>
    <div class="mb-3 mt-3">
      <label for="nama_belakang">Nama Belakang: <?= $namaBelakang ?></label>
    </div>
</div>
</body>
</html>
