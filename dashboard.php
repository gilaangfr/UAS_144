<?php 
  include 'includes/config.php';
  session_start();
  if(!isset($_SESSION["user_username"])) {
    header("Location: index.php");
    die();
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/dashboard.css" />
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Rubik:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <!-- Bootstrap's css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <!-- Bootstrap's js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous" defer></script>
    <!-- font awesome's kit code -->
		<script
			src="https://kit.fontawesome.com/bc44dd7ee2.js"
			crossorigin="anonymous"
			defer
		></script>
    <!-- Title -->
    <link rel="icon" type="image/x-icon" href="./images/jl.jpg"/>
    <title>DC Universe</title>
  </head>
  <body>
    <!-- navbar -->
    <header>
      <nav class="navbar navbar-expand-lg fixed-top py-3">
        <div class="container-fluid">
          <a class="navbar-brand ps-5" href="#">DC Universe</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 navitem">
              <li class="nav-item">
                <a class="nav-link px-4" href="logout.php">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- navbar -->

    <!-- header -->
    <header class="text-center">
      <h1>Welcome back, <span><?php echo $_SESSION["user_username"] ?>!</span></h1>
    </header>
    <!-- header -->

    <!-- section table pegawai-->
    <section>
      <div class="container p-5">
        <h3>Data Pegawai</h3>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nama Pegawai</th>
              <th scope="col">Tanggal Lahir</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">Jabatan</th>
              <th class="text-center" scope="col">Edit</th>
              <th class="text-center" scope="col">Hapus</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              $query = mysqli_query($conn, "SELECT * FROM pegawai ORDER BY id_pegawai ASC");
              while($data = mysqli_fetch_array($query)) {
            ?>
            <tr>
              <td><?php echo $data['id_pegawai']; ?></td>
              <td><?php echo $data['nama_pegawai']; ?></td>
              <td><?php echo $data['tgl_lahir']; ?></td>
              <td><?php echo $data['jenis_kelamin']; ?></td>
              <td><?php echo $data['jabatan']; ?></td>
              <td class="text-center"><a href="<?php echo 'edit-pegawai.php?id='. $data['id_pegawai']; ?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
              <td class="text-center"><a href="<?php echo 'hapus-pegawai.php?id='. $data['id_pegawai']; ?>"><i class="fa-solid fa-trash"></i></a></td>
            </tr>
            <?php 
              }
            ?>
          </tbody>
        </table>
        <div class="text-center mt-5">
          <a class="btn-tambah" href="add-pegawai.php">Tambah</a>
        </div>
      </div>
    </section>

    

    <footer class="mt-5">
      <div class="mini-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="copyright-text">
                <p>
                  © 2022 <a href="#">DC Universe</a>. All rights reserved. Created by
                  <a href="#">magfreezkey</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

  </body>
</html>
