<?php
    
    require 'admin-desa/function.php';

    $data = jabatan("SELECT nama, gambar, jabatan.jabatan FROM perangkat JOIN jabatan ON perangkat.id_jabatan = jabatan.id");

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
<title>Perangkat Desa | Web Desa Pandan</title>

    <style>
        body {
            background-color: #F5F7F8;
            font-family: "Poppins", sans-serif;
        }
        .mx-7 {
            margin: 0 5rem;
        }
        .py-12 {
            padding: 3rem 0
        }
        .right-nav {
            right: 26rem;
        }
        .my-12 {
            margin-top: 1rem;
            margin-bottom: 1rem;
        }
        .w-44 {
            width: 11rem;
        }
        .border-left {
            border-left: 2px solid #06D001 ;
        }
        #flex {
            width: 12rem;
            word-wrap: break-word;
        }
        @media (max-width: 640px) {
            .mx-7 {
                margin: 0 1.7rem;
            }
            .my-12 {
            margin-top: 1rem;
            margin-bottom: 1rem;
            }
            #flex {
            width: 11rem;
            word-wrap: break-word;
            }
        }
    </style>
</head>
<body>
    
<?php
include 'navbar.php';
?>

<!-- Breadcrumb Strart -->
<div class="max-w-full bg pt-24">
    <div class="px-7 lg:px-20">
        <div class="flex items-center gap-3 font-semibold">
            <a href="/web-desa" class="text-sm lg:text-base"><i class="fa-solid fa-house"></i></a>
            <p>/</p>
            <p class="text-[#06D001] text-sm lg:text-base">Perangkat Desa</p>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<div class="max-w-full bg-white my-12 py-10 mx-7 border rounded-md shadow-md">
    <div class="px-7 lg:px-20">
        <div class="bg-slate-50 flex items-center py-2 border-left shadow-md">
            <h1 class="text-sm uppercase text-[#06D001] px-6 font-bold lg:text-2xl">Perangkat Desa Pandan</h1>
        </div>
        <div class="flex flex-wrap justify-center gap-4 mt-5">
            <?php foreach($data as $d) : ?>
            <div class="bg-white shadow-md rounded-md text-center" id="flex">
                <img src="admin-desa/img/<?= $d['gambar']; ?>" alt="" class="inline-block mx-auto">
                <h1 class="font-semibold pt-3"><?= $d['nama']; ?></h1>
                <p class="py-2"><?= $d['jabatan']; ?></p>
            </div>
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