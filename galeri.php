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
            background-color: #F5F7F8;
        }
        .mx-7 {
            margin: 0 4rem;
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
        .w-30 {
            width: 20rem;
        }
        .flex-wrap {
            flex-wrap: wrap;
        }
        .keterangan {
            background-color: white;
            opacity: 0.8;
            width: 100%;
            position: absolute;
            bottom: 0;
            left: 0;
            text-align: center;
            /* z-index: 10; */
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
<div class="max-w-full bg pt-24">
    <div class="px-7 lg:px-20">
        <div class="flex items-center gap-3 font-semibold">
            <a href="/web-desa" class="text-sm lg:text-base">Beranda</a>
            <p>></p>
            <p class="text-[#06d001] text-sm lg:text-base">Galeri</p>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<div class="mx-w-full bg-white my-12 py-10 mx-7 border rounded-md shadow-md">
    <div class="px-7 lg:px-20">
        <div class="bg-slate-50 flex items-center py-2 border-left shadow-md">
            <h1 class="text-xl uppercase text-[#06D001] px-6 font-bold lg:text-2xl">Galeri desa</h1>
        </div>
        <div class="flex flex-col lg:flex-row flex-wrap gap-7 lg:justify-center pt-7">
            <div class="lg:w-30 order-1 lg:order-2 relative">
                <img src="./assets/desa-pandan.jpg" alt="" class="mx-auto rounded-lg shadow-md" width="330">
                <div class="keterangan py-2">
                    <h1 class="font-semibold">Kantor desa pandan</h1>
                </div>
            </div>
            <div class="lg:w-30 order-1 lg:order-2 relative">
                <img src="./assets/desa-pandan.jpg" alt="" class="mx-auto rounded-lg shadow-md" width="330">
                <div class="keterangan py-2">
                    <h1 class="font-semibold">Kantor desa pandan</h1>
                </div>
            </div>
            <div class="lg:w-30 order-1 lg:order-2 relative">
                <img src="./assets/desa-pandan.jpg" alt="" class="mx-auto rounded-lg shadow-md" width="330">
                <div class="keterangan py-2">
                    <h1 class="font-semibold">Kantor desa pandan</h1>
                </div>
            </div>
            <div class="lg:w-30 order-1 lg:order-2 relative">
                <img src="./assets/desa-pandan.jpg" alt="" class="mx-auto rounded-lg shadow-md" width="330">
                <div class="keterangan py-2">
                    <h1 class="font-semibold">Kantor desa pandan</h1>
                </div>
            </div>
            <div class="lg:w-30 order-1 lg:order-2 relative">
                <img src="./assets/desa-pandan.jpg" alt="" class="mx-auto rounded-lg shadow-md" width="330">
                <div class="keterangan py-2">
                    <h1 class="font-semibold">Kantor desa pandan</h1>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Footer Start -->
<div class="max-w-full bg-[#06D001] mt-10 py-12">
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