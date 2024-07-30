<?php

require 'admin-desa/function.php';

$galeri = jabatan("SELECT * FROM galeri ORDER BY id DESC LIMIT 6");
$berita = jabatan("SELECT * FROM berita ORDER BY id DESC LIMIT 3");

?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <!-- AOS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- Font Awesomw -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body {
            background-color: #F5F7F8
        }
        #hero-image {
            height: 100vh;
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
        .py-12 {
            padding: 3rem 0
        }
        .px-7 {
            padding-left: 1.75rem;
            padding-right: 1.75rem;
        }
        .mx-7 {
            margin: 0 2rem
        }
        @media (max-width: 640px) {
            #hero-image {
                height: 70%;
            }
        }
    </style>
</head>
<body>
    
<?php
include 'navbar.php';
?>

<!-- Start Hero Section -->
<div class="max-w-full relative pt-16 overflow-hidden">
    <div id="hero-image">
        <img src="assets/balai.jpg" alt="" class="mx-auto" id="hero">
    </div>
    <div class="flex items-center justify-center w-full h-[14.5rem] lg:h-full absolute" id="bg">
        <div class="h-full flex flex-col justify-center items-center" id="text-shadow">
            <p class="text-sm uppercase text-white text-center px-20 font-semibold lg:text-xl">Selamat Datang Di Website Resmi</p>
            <h1 class="text-xl text-white px-16 uppercase lg:text-7xl font-bold">Desa Pandan</h1>
            <span class="text-sm uppercase lg:text-xl px-20 text-white lg:mt-4">Kec. Galis Kabupaten Pamekasan</span>
        </div>
    </div>
</div>
<!-- End Hero Section -->

<!-- Start Fitur Section -->
<div class="max-w-full py-12 overflow-hidden">
    <div class="px-2 lg:px-20">
        <div class="flex justify-center flex-wrap gap-2 lg:gap-5">
            <a href="/" data-aos="fade-up" data-aos-diration="7000">
                <div class="bg-[#06D001] flex flex-col items-center lg:w-52 w-36 rounded-lg lg:py-5 py-2 shadow-lg">
                    <div class="text-base lg:text-2xl bg-white rounded-full lg:px-4 lg:py-4 px-3 py-2">
                        <i class="fa-solid fa-users"></i>   
                    </div>
                    <h1 class="text-base lg:text-xl font-bold text-white mt-3">Profil Desa</h1>
                </div>
            </a>
            <a href="/" data-aos="fade-up" data-aos-diration="7000" data-aos-delay="100">
                <div class="bg-[#06D001] flex flex-col items-center lg:w-52 w-36 rounded-lg lg:py-5 py-2 shadow-lg">
                    <div class="text-base lg:text-2xl bg-white rounded-full lg:px-4 lg:py-4 px-3 py-2">
                        <i class="fa-solid fa-users"></i>   
                    </div>
                    <h1 class="text-base lg:text-xl font-bold text-white mt-3">Profil Desa</h1>
                </div>
            </a>
            <a href="/" data-aos="fade-up" data-aos-diration="7000" data-aos-delay="150">
                <div class="bg-[#06D001] flex flex-col items-center lg:w-52 w-36 rounded-lg lg:py-5 py-2 shadow-lg">
                    <div class="text-base lg:text-2xl bg-white rounded-full lg:px-4 lg:py-4 px-3 py-2">
                        <i class="fa-solid fa-users"></i>   
                    </div>
                    <h1 class="text-base lg:text-xl font-bold text-white mt-3">Profil Desa</h1>
                </div>
            </a>
            <a href="/" data-aos="fade-up" data-aos-diration="7000" data-aos-delay="200">
                <div class="bg-[#06D001] flex flex-col items-center lg:w-52 w-36 rounded-lg lg:py-5 py-2 shadow-lg">
                    <div class="text-base lg:text-2xl bg-white rounded-full lg:px-4 lg:py-4 px-3 py-2">
                        <i class="fa-solid fa-users"></i>   
                    </div>
                    <h1 class="text-base lg:text-xl font-bold text-white mt-3">Profil Desa</h1>
                </div>
            </a>
            <a href="/" data-aos="fade-up" data-aos-diration="7000" data-aos-delay="250">
                <div class="bg-[#06D001] flex flex-col items-center lg:w-52 w-36 rounded-lg lg:py-5 py-2 shadow-lg">
                    <div class="text-base lg:text-2xl bg-white rounded-full lg:px-4 lg:py-4 px-3 py-2">
                        <i class="fa-solid fa-users"></i>   
                    </div>
                    <h1 class="text-base lg:text-xl font-bold text-white mt-3">Profil Desa</h1>
                </div>
            </a>
          
        </div>
    </div>
</div>
<!-- End Fitur Section -->

<!-- Start Profil Singkat Section -->
<div class="mx-w-full py-10 mx-7 bg-white shadow-md border rounded-md">
    <div class="px-7 lg:px-20">
        <h1 class="text-xl text-center uppercase text-[#06D001] pb-5 font-bold lg:text-3xl">Profil Singkat</h1>
        <div class="flex flex-col  lg:flex-row lg:justify-between pt-7 border-t border-black">
            <div class="text-black mt-3 lg:w-1/2 flex flex-col justify-center order-2 lg:order-1" data-aos="fade-up" data-aos-diration="5000" data-aos-delay="300">
                <h1 class="py-2 font-bold text-xl lg:text-3xl text-[#06D001]">Desa Pandan</h1>
                <p class="text-sm text-slate-500 lg:text-base">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum esse repudiandae, obcaecati praesentium adipisci recusandae modi officia soluta distinctio, ullam blanditiis in molestiae similique asperiores consequuntur doloribus sequi fugit iusto.</p>
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
        <div class="flex justify-center gap-7 flex-wrap w-full border-t border-black py-10">
            <?php foreach($galeri as $g) : ?>
            <div class="py-1" data-aos="zoom-in" data-aos-diration="5000" data-aos-delay="200">
                <img src="admin-desa/img/<?= $g['gambar']; ?>" alt="" class="w-48 lg:w-72 h-36 lg:h-56 border border-black rounded-lg">
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- End Galeri Section -->

<!-- Start Agenda Section -->
<div class="max-w-full py-10 mx-7 bg-white overflow-hidden shadow-md rounded-md border">
    <h1 class="text-xl text-center uppercase font-bold pb-6 lg:text-3xl">Berita Desa Pandan</h1>
    <div class="px-7 lg:px-20">
        <div class="flex flex-col border-t border-black">
            <?php foreach($berita as $b) : ?>
            <div class="flex flex-col lg:flex-row lg:justify-between py-10">
                <div class="w-full lg:w-[40%]" data-aos="fade-right" data-aos-diration="5000" data-aos-delay="200">
                    <img src="admin-desa/img/<?= $b['gambar']; ?>" alt="" class="w-full mx-auto rounded-md shadow-md">
                </div>
                <div class="w-full mt-5 lg:mt-0 lg:w-[80%]" data-aos="fade-left" data-aos-diration="5000" data-aos-delay="200">
                    <div class="flex flex-col lg:justify-center lg:pl-10 mb-6">
                        <h1 class="text-xl font-bold text-[#06D001] lg:text-2xl mb-1"><?= $b['judul']; ?></h1>
                        <span class="text-sm font-semibold my-2 lg:text-base">Desa Pandan : <?= $b['tanggal']; ?></span>
                        <p class="text-sm lg:text-base"><?= $b['deskripsi_singkat']; ?></p>
                    </div>
                    <a href="/" class="lg:ml-10 px-3 py-2 bg-[#06D001] text-white rounded-lg font-semibold shadow-lg">Baca Selengkapnya</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- End Agenda Section -->

<div class="max-w-full mt-10">
    <iframe class="w-full" 
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7917.355387688918!2d113.54416368899935!3d-7.1632089762276525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd77d4003151e3f%3A0x39c459789a15abb9!2sPandan%2C%20Kec.%20Galis%2C%20Kabupaten%20Pamekasan%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1720523011102!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" title="Pandan" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<!-- Footer Start -->
<div class="max-w-full bg-[#06D001] py-7">
    <div class="px-7 lg:px-20">
        <div class="flex flex-col lg:flex-row lg:justify-between mb-5">
            <div class="text-white border-b pb-3 lg:border-none">
                <h1 class="text-lg lg:text-4xl uppercase font-bold">Desa Pandan</h1>
                <p class="text-xs lg:text-base">Kec. Galis Kabupaten Pamekasan</p>
            </div>
            <div class="flex justify-between gap-10 mt-5 lg:mt-0">
                <div class="text-white">
                    <h1 class="text-lg lg:text-2xl font-bold">Jelajahi</h1>
                    <div class="pt-3">
                        <a href="/" class="block text-sm lg:text-base">Beranda</a>
                        <a href="/" class="block text-sm lg:text-base">Berita</a>
                        <a href="/" class="block text-sm lg:text-base">Galeri</a>
                        <a href="/" class="block text-sm lg:text-base">Kontak Kami</a>
                    </div>
                </div>
                <div class="text-white">
                    <h1 class="text-lg lg:text-2xl font-bold">Kontak</h1>
                    <div class="pt-3">
                        <p class="text-sm lg:text-base">(+62) 896 9867 0374</p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <p class="text-center pt-6 text-white font-semibold">Copyright By nkok</p>
    </div>
</div>
<!-- Footer End -->

<script src="script.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
		AOS.init();
	  </script>
</body>
</html>