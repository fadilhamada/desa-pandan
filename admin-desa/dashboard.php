<?php

session_start();

require 'function.php';


if(!isset($_SESSION['username'])) {
    return header("Location: login.php");
    exit;
}

// if(isset($_SESSION['username']) && !isset($_SESSION['username'])) {
//     header("Location: index.php");
//     exit;
// }

// length perangkat
$perangkat = mysqli_query($conn,  "SELECT * FROM perangkat");
$length_perangkat = mysqli_num_rows($perangkat);

// Length berita
$berita = mysqli_query($conn,  "SELECT * FROM berita");
$length_berita = mysqli_num_rows($berita);

// length galeri
$galeri = mysqli_query($conn,  "SELECT * FROM galeri");
$length_galeri = mysqli_num_rows($galeri);

// length admin
$admin = mysqli_query($conn,  "SELECT * FROM user");
$length_admin = mysqli_num_rows($admin);

?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- AOS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- Font Awesomw -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="admin.css">
  <title>Dashboard | Web Desa Pandan</title>

  <style>
    #margin-toggle {
        width: 100%;
    }
    .text-3xl {
        font-size: 3rem;
    }
    .text-2xl {
        font-size: 2rem;
    }
    .w-72 {
        width: 18rem;
    }

  </style>
</head>
<body>
 
<?php
    include '../header.php'
?>
<div class="flex">
    <?php
        include '../sidebar.php'
    ?>
    
    <div class="pt-16" id="margin-toggle">
        <div class="px-7 py-2">
            <div class="font-bold py-5">
                <h1>Dahboard</h1>   
            </div>
            <div class="flex flex-wrap gap-4 justify-center" id="data">
                <a href="perangkat-desa.php">
                    <div class="flex justify-center items-center bg-[#06D001] w-72 text-center rounded-md text-white font-semibold">
                        <div class="text-3xl">
                            <i class="fa-solid fa-users px-5"></i>
                        </div>
                        <div>
                            <p class="text-2xl px-5 font-bold"><?= $length_perangkat ?></p>
                            <h1 class="text-xl px-5">Perangkat Desa</h1>
                        </div>
                    </div>
                </a>
                <a href="berita.php">
                    <div class="flex justify-center items-center bg-[#06D001] w-72 text-center rounded-md text-white font-semibold">
                        <div class="text-3xl">
                            <i class="fa-solid fa-newspaper px-5"></i>
                        </div>
                        <div>
                            <p class="text-2xl px-5 font-bold"><?= $length_berita ?></p>
                            <h1 class="text-xl px-5">Berita</h1>
                        </div>
                    </div>
                </a>
                <a href="galeri.php">
                    <div class="flex justify-center items-center bg-[#06D001] w-72 text-center rounded-md text-white font-semibold">
                        <div class="text-3xl">
                            <i class="fa-solid fa-image px-5"></i> 
                        </div>
                        <div>
                            <p class="text-2xl px-5 font-bold"><?= $length_galeri ?></p>
                            <h1 class="text-xl px-5">Galeri</h1>
                        </div>
                    </div>
                </a>
                <a href="admin.php">
                    <div class="flex justify-center items-center bg-[#06D001] w-72 text-center rounded-md text-white font-semibold">
                        <div class="text-3xl">
                            <i class="fa-solid fa-user px-5"></i>
                        </div>
                        <div>
                            <p class="text-2xl px-5 font-bold"><?= $length_admin ?></p>
                            <h1 class="text-xl px-5">Admin</h1>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

</div>

<script src="./script.js"></script>
<!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
		AOS.init();
	  </script> -->
</body>
</html>