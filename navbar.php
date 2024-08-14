<!-- Navbar Start -->
<div class="max-w-full py-2 lg:px-20 bg-white">
    <div class="px-7">
        <div class="flex justify-between items-center">
            <div>
                <i class="fa-solid fa-phone"></i>
            </div>
            <div class="flex gap-4">
                <a href="/" class="hover:text-[#06D001] text-lg"><i class="fa-brands fa-instagram"></i></a>
                <a href="/" class="hover:text-[#06D001] text-lg"><i class="fa-brands fa-facebook"></i></a>
                <a href="/" class="hover:text-[#06D001] text-lg"><i class="fa-brands fa-youtube"></i></a>
                <a href="/" class="hover:text-[#06D001] text-lg"><i class="fa-brands fa-tiktok"></i></a>
            </div>
        </div>

    </div>
</div>

<div class="container lg:px-20 max-w-full bg-[#06D001] absolute z-10 shadow-md">
    <div class="px-7 lg:py-0 py-5">
        <div class="flex items-center justify-between">
            <div class="text-base text-white lg:text-2xl outline-none">
                <a href="index.php">
                    <div class="flex items-center gap-2">
                        <div id="width">
                            <img src="assets/pemkab.png" alt="">
                        </div>
                        <div>
                            <h1 class="font-bold">Desa Pandan</h1>
                            <p class="text-xs font-light">Kec. Galis Kab. Pamekasan</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="lg:flex gap-4 text-white font-semibold text-md hidden">
                <a href="index.php" class="hover:text-black py-5">Beranda</a>
                <button class="hover:text-black py-5" id="hover-desa">Tentang Desa <i class="fa-solid fa-caret-down"></i></button>
                <ul class="absolute bg-white w-52 px-6 py-2 top-full right-nav text-black hidden rounded-md shadow-md" id="dropdown">
                    <li class="py-2"><a href="profile.php" class="text-md hover:text-[#06D001] flex">Profil Desa</a></li>
                    <li class="py-2"><a href="visi-misi.php" class="text-md hover:text-[#06D001] flex">Visi & Misi</a></li>
                    <li class="py-2"><a href="perangkat.php" class="text-md hover:text-[#06D001] flex">Perangkat</a></li>
                </ul>
                <a href="potensi.php" class="hover:text-black py-5">Potensi Desa</a>
                <a href="berita.php" class="hover:text-black py-5">Berita</a>
                <a href="galeri.php" class="hover:text-black py-5">Galeri</a>
                <a href="kontak.php" class="hover:text-black py-5">Kontak</a>
                <a href="peta-desa.php" class="hover:text-black py-5">Peta</a>
            </div>
            <!-- start hamburger menu -->
             <button class="lg:hidden" id="hamburger-menu"><i class="fa-solid fa-bars text-white" id="fa"></i></button>
            <!-- end hamburger menu -->

            <!-- start menu -->
            <div class="absolute bg-white py-2 top-full right-0 text-black rounded-md shadow-md hidden lg:hidden" id="menu">
                <a href="index.php" class="py-2 px-6 text-sm hover:text-[#06D001] block">Beranda</a>
                <button class="py-2 px-6 text-sm hover:text-[#06D001]" id="toggle-profil">Tentang Desa <i class="fa-solid fa-caret-down ml-10"></i></button>
                <div class="top-full hidden text-black" id="dropdown-desa">
                    <a href="profile.php" class="py-2 text-sm hover:text-[#06D001] block px-5">Profil Desa</a>
                    <a href="visi-misi.php" class="py-2 text-sm hover:text-[#06D001] block px-5">Visi & Misi</a>
                    <a href="perangkat.php" class="py-2 text-sm hover:text-[#06D001] block px-5">Perangkat</a>
                </div>
                <a href="potensi.php" class="py-2 px-6 text-sm hover:text-[#06D001] block">Potensi Desa</a>
                <a href="berita.php" class="py-2 px-6 text-sm hover:text-[#06D001] block">Berita</a>
                <a href="galeri.php" class="py-2 px-6 text-sm hover:text-[#06D001] block">Galeri</a>
                <a href="kontak.php" class="py-2 px-6 text-sm hover:text-[#06D001] block">Kontak</a>
                <a href="peta-desa.php" class="py-2 px-6 text-sm hover:text-[#06D001] block">Peta</a>
            </div>
            <!-- end menu -->
        </div>
    </div>
</div>
<!-- Navbar End -->