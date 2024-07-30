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
        .mx-3 {
            margin-left: 1rem;
            margin-right: 1rem;
        }
        .py-12 {
            padding: 3rem 0
        }
        .pl-3 {
            padding-left: 1rem;
        }
        .px-3 {
            padding-left: 0.75rem;
            padding-right: 0.75rem;
        }
        .my-12 {
            margin-top: 1rem;
            margin-bottom: 1rem;
        }
        .mb-2 {
            margin-bottom: 0.5rem
        }
        a.space {
            word-spacing: 10px;
        }
        .border-left {
            border-left: 2px solid #06D001 ;
        }
        .w-30 {
            width: 20%;
        }
        .w-50 {
            width: 50%;
        }
        .text-slate-50 {
            color: #757575;
        }
        #sosmed {
            width: 40%;
        }
        #kontak {
            width: 50%;
        }
        #submit {
            background-color: blue;
            padding: 0.4rem 1rem;
            color: white
        }
        @media (max-width: 640px) {
            .mx-7 {
                margin: 0 1.7rem;
            }
            .my-12 {
                margin-top: 1rem;
                margin-bottom: 1rem;
            }
            #sosmed {
                width: 100%;
            }
            #kontak {
                width: 100%;
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
            <p class="text-[#06D001] text-sm lg:text-base">Kontak</p>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<div class="mx-w-full bg-white my-12 py-10 mx-7 border rounded-md shadow-md">
    <div class="px-7 lg:px-20">
        <div class="bg-slate-50 flex items-center py-2 border-left shadow-md">
            <h1 class="text-xl uppercase text-[#06D001] px-6 font-bold lg:text-2xl">Kontak</h1>
        </div>
        <div class="flex flex-col lg:flex-row gap-10 lg:justify-between mt-5">
            <div class="text-black mt-3 flex flex-col lg:items-center justify-center py-2" id="sosmed">
                <div class="w-50 mb-5">
                    <h1 class="mb-2 font-bold">Alamat</h1>
                    <p class="text-slate-50">Desa Pandan</p>
                    <p class="text-slate-50">Kecamatan Galis</p>
                    <p class="text-slate-50">Kabupaten Pamekasan</p>
                </div>
                <div class="w-50 mb-5 font-semibold">
                    <h1 class="mb-2 font-bold">Sosial media</h1>
                    <a href="/" class="block text-slate-50 space"><i class="fa-brands fa-square-instagram"></i> Instagram</a>
                    <a href="/" class="block text-slate-50 space"><i class="fa-brands fa-youtube"></i> gfsgsfh</a>
                </div>
                <div class="w-50">
                    <h1 class="mb-2 font-bold">No kontak</h1>
                    <p class="text-slate-50">(+62) 896 9867 0374</p>
                </div>
            </div>
            <form action="" method="post" class="flex flex-col justify-between" id="kontak">
                <div class="mb-2">
                    <label for="nama" class="mb-2 block">Nama</label>
                    <input class="border outline-none w-full py-2 px-3 rounded-md" type="text" name="nama" id="nama" placeholder="Masukkan nama anda">
                </div>
                <div class="mb-2">
                    <label for="no" class="mb-2 block">No. handphone</label>
                    <input class="border outline-none w-full py-2 px-3 rounded-md" type="text" name="no" id="no" placeholder="Masukkan no. hanphone">
                </div>
                <div class="mb-2">
                    <label for="pesan" class="mb-2 block">Pesan</label>
                    <textarea class="border w-full py-2 px-3 rounded-md outline-none" name="pesa" id="" rows="4" cols="50" placeholder="Masukkan pesan anda"></textarea>
                </div>
                <div>
                    <button type="submit" name="submit" id="submit" class="rounded-md">Kirim</button>
                </div>
            </form>
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