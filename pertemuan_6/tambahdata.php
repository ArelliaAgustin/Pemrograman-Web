<!DOCTYPE html>
<?php
$judul = "Formulir Input Data Karyawan"
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

<div class="container mt-3">
  <h2><?php echo $judul ?></h2>
  <form action="simpandata.php" method="POST">
    <div class="mb-3 mt-3">
      <label for="nama_depan">Nama Depan:</label>
      <input type="nama_depan" class="form-control" id="nama_depan" placeholder="Input Nama Depan" name="nama_depan">
    </div>
    <div class="mb-3 mt-3">
      <label for="nama_belakang">Nama Belakang:</label>
      <input type="nama_belakang" class="form-control" id="nama_belakang" placeholder="Input Nama Belakang" name="nama_belakang">
    </div>
    <button type="submit" class="btn btn-primary" name="tombol">Submit</button>
  </form>
</div>

</body>
</html>
