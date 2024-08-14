<?php

require 'admin-desa/function.php';

$galeri = jabatan("SELECT * FROM galeri ORDER BY id DESC LIMIT 0, 6");
$berita = jabatan("SELECT * FROM berita ORDER BY id DESC LIMIT 0, 3");

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
 <title>Beranda | Web Desa Pandan</title>

    <style>
        body {
            background-color: #F5F7F8;
            font-family: "Poppins", sans-serif;
        }
        .right-nav {
            right: 26rem;
        }
        #hero-image {
            height: 100vh;
            /* width: 50%; */
        /* background-image: url("assets/balai.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover; */
        }
        #bg {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        #text-shadow {
            text-shadow: 2px 2px 4px #000000;
        }
        #text {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            height: 4.5rem;
            overflow: hidden;
        }
        .py-12 {
            padding: 3rem 0
        }
        .px-7 {
            padding-left: 1.75rem;
            padding-right: 1.75rem;
        }
        .mx-10 {
            margin: 0 5rem;
        }
        .mr-2 {
            margin-right: 0.5rem;
        }
        
        @media (max-width: 540px) {
            #hero-image {
                height: 70%;
            }
            #text {
                height: 3rem;
            }
            .mx-10 {
                margin: 0 2rem
            }
            .w-30 {
                width: 7rem;
            }
        }
    </style>
</head>
<body>
    
<?php
include 'navbar.php';
?>

<!-- Start Hero Section -->
<div class="max-w-full pt-16 relative overflow-hidden">
    <div id="hero-image">
        <img src="assets/balai.jpg" alt="" class="mx-auto" id="hero">
    </div>
    <div class="flex items-center justify-center w-full h-[14.5rem] lg:h-full absolute" id="bg">
        <div class="h-full flex flex-col justify-center items-center" id="text-shadow">
            <p class="text-sm uppercase text-white text-center px-20 font-semibold lg:text-xl">Selamat Datang Di Website Resmi</p>
            <h1 class="text-xl text-white px-16 uppercase lg:text-7xl font-bold">Desa Pandan</h1>
            <span class="text-sm text-center uppercase lg:text-xl px-20 text-white lg:mt-4">Kec. Galis Kabupaten Pamekasan</span>
        </div>
    </div>
</div>
<!-- End Hero Section -->

<!-- Start Fitur Section -->
<div class="max-w-full py-12 overflow-hidden">
    <div class="px-2 lg:px-20">
        <div class="flex justify-center flex-wrap gap-2 lg:gap-5">
            <a href="profile.php" data-aos="fade-up" data-aos-diration="7000">
                <div class="bg-[#06D001] flex flex-col items-center lg:w-52 w-30 rounded-lg lg:py-5 py-2 shadow-lg">
                    <div class="text-sm lg:text-2xl bg-white rounded-full lg:px-4 lg:py-4 px-3 py-2">
                        <i class="fa-solid fa-user"></i>  
                    </div>
                    <h1 class="text-xs lg:text-xl font-medium text-white mt-3">Profil Desa</h1>
                </div>
            </a>
            <a href="visi-misi.php" data-aos="fade-up" data-aos-diration="7000" data-aos-delay="100">
                <div class="bg-[#06D001] flex flex-col items-center lg:w-52 w-30 rounded-lg lg:py-5 py-2 shadow-lg">
                    <div class="text-sm lg:text-2xl bg-white rounded-full lg:px-4 lg:py-4 px-3 py-2">
                        <i class="fa-solid fa-book-open"></i>   
                    </div>
                    <h1 class="text-xs lg:text-xl font-medium text-white mt-3">Visi dan misi</h1>
                </div>
            </a>
            <a href="perangkat.php" data-aos="fade-up" data-aos-diration="7000" data-aos-delay="150">
                <div class="bg-[#06D001] flex flex-col items-center lg:w-52 w-30 rounded-lg lg:py-5 py-2 shadow-lg">
                    <div class="text-sm lg:text-2xl bg-white rounded-full lg:px-4 lg:py-4 px-3 py-2">
                        <i class="fa-solid fa-users"></i>   
                    </div>
                    <h1 class="text-xs lg:text-xl font-medium text-white mt-3">Perangkat</h1>
                </div>
            </a>
            <a href="berita.php" data-aos="fade-up" data-aos-diration="7000" data-aos-delay="200">
                <div class="bg-[#06D001] flex flex-col items-center lg:w-52 w-30 rounded-lg lg:py-5 py-2 shadow-lg">
                    <div class="text-sm lg:text-2xl bg-white rounded-full lg:px-4 lg:py-4 px-3 py-2">
                        <i class="fa-solid fa-newspaper"></i>   
                    </div>
                    <h1 class="text-xs lg:text-xl font-medium text-white mt-3">Berita Desa</h1>
                </div>
            </a>
            <a href="galeri.php" data-aos="fade-up" data-aos-diration="7000" data-aos-delay="250">
                <div class="bg-[#06D001] flex flex-col items-center lg:w-52 w-30 rounded-lg lg:py-5 py-2 shadow-lg">
                    <div class="text-sm lg:text-2xl bg-white rounded-full lg:px-4 lg:py-4 px-3 py-2">
                        <i class="fa-solid fa-image"></i>   
                    </div>
                    <h1 class="text-xs lg:text-xl font-medium text-white mt-3">Galeri Desa</h1>
                </div>
            </a>
          
        </div>
    </div>
</div>
<!-- End Fitur Section -->

<!-- Start Profil Singkat Section -->
<div class="mx-w-full lg:px-20 py-10 mx-10 bg-white shadow-md border rounded-md">
    <div class="px-7 lg:px-20">
        <h1 class="text-xl text-center uppercase text-[#06D001] pb-5 font-bold lg:text-3xl">Profil Singkat</h1>
        <div class="flex flex-col  lg:flex-row lg:justify-between pt-7 border-t border-black">
            <div class="text-black mt-3 lg:w-1/2 flex flex-col justify-center order-2 lg:order-1" data-aos="fade-up" data-aos-diration="5000" data-aos-delay="300">
                <h1 class="py-2 font-bold text-xl lg:text-3xl text-[#06D001]">Desa Pandan</h1>
                <p class="text-xs text-slate-500 lg:text-base" id="text">Desa pandan merupakan desa yang terletak di Kecamatan Galis Kabupaten Pamekasan
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio voluptatum ducimus consequatur sapiente iste libero dolor? Sit praesentium quibusdam unde distinctio aut odio velit debitis! Accusamus itaque illum fuga quod.
                </p>
            </div>
            <div class="lg:w-1/2 order-1 lg:order-2" data-aos="fade-down" data-aos-diration="5000" data-aos-delay="300">
                <img src="./assets/desa-pandan.jpg" alt="" class="mx-auto rounded-lg shadow-md w-full">
            </div>
        </div>
    </div>
</div>
<!-- End Profil Singkat Section -->

<!-- Start Galeri Section -->
<div class="max-w-full my-12 py-10 bg-[#06D001]">
    <h1 class="text-xl text-center uppercase text-white font-bold pb-6 lg:text-3xl">Galeri Desa Pandan</h1>
    <div class="px-7 lg:px-20">
        <div class="flex justify-center gap-7 flex-wrap border-t border-black py-10">
            <?php foreach($galeri as $g) : ?>
            <div class="py-1" data-aos="zoom-in" data-aos-diration="2000" data-aos-delay="200">
                <img src="admin-desa/img/<?= $g['gambar']; ?>" alt="" class="lg:w-72 lg:h-56 shadow-md border rounded-lg">
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- End Galeri Section -->

<!-- Start Agenda Section -->
<div class="max-w-full py-10 mx-10 bg-white overflow-hidden shadow-md rounded-md border">
    <h1 class="text-xl text-center text-[#06D001] uppercase font-bold pb-6 lg:text-3xl">Berita Desa Pandan</h1>
    <div class="px-7 lg:px-20">
        <div class="flex flex-col border-t border-black">
            <?php foreach($berita as $b) : ?>
            <div class="flex flex-col lg:flex-row lg:justify-between py-10">
                <div class="w-full lg:w-[40%]" data-aos="fade-right" data-aos-diration="2000" data-aos-delay="200">
                    <img src="admin-desa/img/<?= $b['gambar']; ?>" alt="" class="w-full mx-auto rounded-md shadow-md">
                </div>
                <div class="w-full mt-5 lg:mt-0 lg:w-[80%]" data-aos="fade-left" data-aos-diration="2000" data-aos-delay="200">
                    <div class="flex flex-col lg:justify-center lg:pl-10 mb-6">
                        <h1 class="text-xl font-bold text-[#06D001] lg:text-2xl mb-1"><?= $b['judul']; ?></h1>
                        <span class="text-sm font-semibold my-2 lg:text-base"><i class="mr-2 fa-solid fa-calendar-days"></i>Desa Pandan : <?= $b['tanggal']; ?></span>
                        <p class="text-xs text-slate-500 lg:text-base" id="text"><?= $b['deskripsi']; ?></p>
                    </div>
                    <a href="detail-berita.php?berita=<?= $b['judul']; ?>" class="lg:ml-10 px-3 py-2 bg-[#06D001] text-white rounded-lg font-semibold shadow-lg">Baca Selengkapnya</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- End Agenda Section -->

<div class="mx-w-full text-center mt-10">
    <div>
        <h1 class="text-xl text-center uppercase text-[#06D001] pb-5 font-bold lg:text-3xl">Kantor desa pandan</h1>
        <div class="w-full mt-4">
            <iframe class="w-full"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25837.52515698296!2d113.54692021685386!3d-7.182014685740641!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd77d208ed05c35%3A0xbf16dfe9d025e7a4!2sPandan%2C%20Kec.%20Galis%2C%20Kabupaten%20Pamekasan%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1722323722203!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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