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

  <style>
    #margin-toggle {
        width: 100%;
    }

  </style>
</head>
<body>
 
<div class="w-full fixed top-0 left-0 py-5 bg-white border-b z-10">
    <div class="px-7">
        <div class="flex justify-between">
            <div class="flex gap-10">
                <h1>Desa Pandan</h1>
                <button id="toggle"><i class="fa-solid fa-bars"></i></button>
            </div>
            <a href="/"><?= $_SESSION['username']; ?></a>
        </div>
    </div>
</div>
<div class="flex">
    <?php
        include '../sidebar.php'
    ?>
    
    <div class="pt-16" id="margin-toggle">
        <div class="px-7 py-2">
            <div class="font-bold py-5">
                <h1>Dahboard</h1>   
            </div>
            <div class="flex flex-wrap gap-10 justify-center" id="data">
                <div class="bg-[#06D001] w-48 text-center rounded-md text-white font-semibold">
                    <p class="text-xl"><?= $length_perangkat ?></p>
                    <h1>Perangkat Desa</h1>
                </div>
                <div class="bg-[#06D001] w-48 text-center rounded-md text-white font-semibold">
                    <p class="text-xl"><?= $length_berita ?></p>
                    <h1>Berita</h1>
                </div>
                <div class="bg-[#06D001] w-48 text-center rounded-md text-white font-semibold">
                    <p class="text-xl"><?= $length_galeri ?></p>
                    <h1>Galeri</h1>
                </div>
                <div class="bg-[#06D001] w-48 text-center rounded-md text-white font-semibold">
                    <p class="text-xl"><?= $length_admin ?></p>
                    <h1>Admin</h1>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="./script.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
		AOS.init();
	  </script>
</body>
</html>