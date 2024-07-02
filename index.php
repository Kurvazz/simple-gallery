<?php
session_start();
include 'config/koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Website Galeri Foto</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
<nav style="background-color: #e3f2fd;" class="navbar navbar-expand-lg  ">
  <div class="container">
    <a class="navbar-brand" href="index.php">Website Galeri Foto</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mt-2" id="navbarNav">
     <div class="navbar-nav me-auto">
    </div>
    <a href="register.php" class="btn btn-outline-primary m-1">Daftar</a>
    <a href="login.php" class="btn btn-outline-success m-1">Masuk</a>
	</div>
  </div>
</nav>

<div class="container mt-3">
	<div class="row">
	<?php
            // Fetch foto dari databse
            
            
            $sql = "SELECT * FROM foto";
            $result = $koneksi->query($sql);
            
            if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
                    echo '<div class="col-md-3">
                            <div class="card">
							<img src="' . "assets/img/" . $row["lokasifile"] . '" class="card-img-top" title="" style="height: 12rem;">
							<div class="card-footer text-center">
                                    <a href="#">0 Suka</a>
                                    <a href="#">0 Komentar</a>
                                </div>
                            </div>  
                        </div>';
                }
            } else {
                echo "Error: " . $koneksi->error;
            }
            $koneksi->close();
        ?>
	</div>
</div>

<footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
	<p>&copy;  Hisar Agustus Saragih</p>
</footer>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>
