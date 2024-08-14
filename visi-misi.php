<?php

require 'admin-desa/function.php';

$visi = jabatan("SELECT * FROM visi");
$misi = jabatan("SELECT * FROM misi");

?>


<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="nav.css">
  <link rel="icon" type="image/x-icon" href="assets/pemkab.png">
  <!-- AOS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- Font Awesomw -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Font google -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<title>Visi & Misi | Web Desa Pandan</title>

    <style>
        body {
            background-color: #F5F7F8;
            font-family: "Poppins", sans-serif;
        }
        .mx-7 {
            margin: 0 5rem;
        }
        .right-nav {
            right: 26rem;
        }
        .py-12 {
            padding: 3rem 0
        }
        .my-12 {
            margin-top: 1rem;
            margin-bottom: 1rem;
        }
        .border-left {
            border-left: 2px solid #06D001 ;
        }
        @media (max-width: 640px) {
            .mx-7 {
                margin: 0 1.7rem;
            }
            .my-12 {
            margin-top: 1rem;
            margin-bottom: 1rem;
        }
        }
    </style>
</head>
<body>
    
<?php
include 'navbar.php';
?>

<!-- Breadcrumb Strart -->
<div class="max-w-full pt-24">
    <div class="px-7 lg:px-20">
        <div class="flex items-center gap-3 font-semibold">
            <a href="/web-desa" class="text-sm lg:text-base"><i class="fa-solid fa-house"></i></a>
            <p>/</p>
            <p class="text-[#06D001] text-sm lg:text-base">Visi & Misi</p>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<div class="mx-w-full bg-white my-12 py-10 mx-7 border rounded-md shadow-md">
    <div class="px-7 lg:px-20">
        <div class="bg-slate-50 flex items-center py-2 border-left shadow-md">
            <h1 class="text-sm uppercase text-[#06D001] px-6 font-bold lg:text-2xl">Visi dan misi</h1>
        </div>
        <div class="mt-10">
            <h1 class="text-xl font-semibold lg:text-3xl pb-2">Visi</h1>
            <?php foreach($visi as $v) : ?>
            <p class="text-xs lg:text-base"><?= $v['deskripsi']; ?></p>
            <?php endforeach; ?>
        </div>
        <div class="mt-10">
            <h1 class="text-xl font-semibold lg:text-3xl pb-2">Misi</h1>
            <?php foreach($misi as $m) : ?>
            <p class="text-xs lg:text-base"><?= $m['deskripsi']; ?></p>
            <?php endforeach; ?>
        </div>
    </div>
</div>


<!-- Footer Start -->
<?php
include 'footer.php'
?>
<!-- Footer End -->

<script src="script.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
		AOS.init();
	  </script>
</body>
</html>