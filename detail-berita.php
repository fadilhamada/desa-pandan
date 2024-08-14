<?php
    
    require 'admin-desa/function.php';

    $berita = $_GET['berita'];

    $data = jabatan("SELECT * FROM berita WHERE judul = '$berita'")[0];

?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="nav.css">
  <!-- AOS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- Font Awesomw -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Font google -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<title>Detail potensi | Web Desa Pandan</title>

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
        .mt-5 {
            margin-top: 1.25rem;
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
        .mr-2 {
            margin-right: 0.5rem;
        }
        #flex {
            width: 12rem;
            word-wrap: break-word;
        }
        #text {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            height: 4.5rem;
            overflow: hidden;
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
            <a href="index.php" class="text-sm lg:text-base"><i class="fa-solid fa-house"></i></a>
            <p>/</p>
            <a href="berita.php" class="text-sm lg:text-base">Berita</a>
            <p>/</p>
            <p class="text-[#06D001] text-sm lg:text-base">Detail Berita</p>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Start Agenda Section -->
<div class="max-w-full py-10 mx-7 my-12 bg-white overflow-hidden shadow-md rounded-md border">
    <div class="px-7 lg:px-20">
        <div class="bg-slate-50 flex items-center py-2 mb-2 border-left shadow-md">
            <h1 class="text-xl uppercase text-[#06D001] px-6 font-bold lg:text-2xl"><?= $data['judul']; ?></h1>
        </div>
            <div class="w-full py-10" data-aos="fade-right" data-aos-diration="5000" data-aos-delay="200">
                <img src="admin-desa/img/<?= $data['gambar']; ?>" alt="" class="lg:w-[40%] mx-auto rounded-md shadow-md">
            </div>
            <div class="w-full" data-aos="fade-left" data-aos-diration="5000" data-aos-delay="200">
                <div class="mb-5">
                    <p class="text-sm lg:text-base"><?= nl2br($data['deskripsi']); ?></p>
                </div>
                <hr>
                <div class="mt-5">
                    <span class="text-xs font-normal my-2 lg:text-sm"><i class="mr-2 fa-solid fa-calendar-days"></i>Desa Pandan : <?= $data['tanggal']; ?></span>
                </div>
            </div>
    </div>
</div>
<!-- End Agenda Section -->

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