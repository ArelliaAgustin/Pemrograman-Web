<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php
echo '
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link active" href="kontak.php">Kontak</a></li>
            <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
        </ul>
    </div>
</nav>
';
?>

<div class="container mt-4">
    <h2>Hobby</h2>
    
    
    <form action="konfirm.php" method="POST">
        <div class="mb-3">
            <label class="form-label">Hobi:</label><br>
            <input type="checkbox" name="hobbies[]" value="Reading"> Reading<br>
            <input type="checkbox" name="hobbies[]" value="Traveling"> Traveling<br>
            <input type="checkbox" name="hobbies[]" value="Sports"> Sports<br>
        </div>

        <div class="mb-3">
            <label for="birthdate" class="form-label">Tanggal Lahir:</label>
            <input type="date" class="form-control" id="birthdate" name="birthdate" required>
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
</div>

</body>
</html>
