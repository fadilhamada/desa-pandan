<!-- Navbar Start -->
<div class="container max-w-full bg-[#06D001] fixed z-10 shadow-md">
    <div class="px-7 lg:px-20 lg:py-0 py-5">
        <div class="flex items-center justify-between">
            <div class="text-lg text-white lg:text-4xl font-bold outline-none">
                <a href="/web-desa">Desa Pandan</a>
            </div>
            <div class="lg:flex gap-4 text-white font-semibold text-xl hidden">
                <a href="/web-desa" class="hover:text-black py-5">Beranda</a>
                <button class="hover:text-black py-5" id="hover-desa">Tentang Desa</button>
                <ul class="absolute bg-white w-52 px-6 py-2 top-full right-[27rem] text-black hidden rounded-md shadow-md" id="dropdown">
                    <li class="py-2"><a href="/web-desa/profile.php" class="text-lg hover:text-[#06D001] flex">Profil Desa</a></li>
                    <li class="py-2"><a href="/web-desa/visi-misi.php" class="text-lg hover:text-[#06D001] flex">Visi & Misi</a></li>
                    <li class="py-2"><a href="/web-desa/perangkat.php" class="text-lg hover:text-[#06D001] flex">Perangkat</a></li>
                </ul>
                <a href="/" class="hover:text-black py-5">Potensi dan Pariwisata</a>
                <a href="/web-desa/berita.php" class="hover:text-black py-5">Berita</a>
                <a href="/web-desa/galeri.php" class="hover:text-black py-5">Galeri</a>
                <a href="/web-desa/kontak.php" class="hover:text-black py-5">Kontak</a>
            </div>
            <!-- start hamburger menu -->
             <button class="lg:hidden" id="hamburger-menu"><i class="fa-solid fa-bars text-white" id="fa"></i></button>
            <!-- end hamburger menu -->

            <!-- start menu -->
            <div class="absolute bg-white py-2 top-full right-0 text-black rounded-md shadow-md hidden lg:hidden" id="menu">
                <a href="/" class="py-2 px-6 text-base hover:text-[#06D001] block">Beranda</a>
                <button class="py-2 px-6 text-base hover:text-[#06D001]" id="toggle-profil">Tentang Desa <i class="fa-solid fa-caret-down ml-10"></i></button>
                <div class="top-full hidden text-black" id="dropdown-desa">
                    <a href="/web-desa/profile.php" class="py-2 text-base hover:text-[#06D001] block px-5">Profil Desa</a>
                    <a href="/web-desa/visi-misi.php" class="py-2 text-base hover:text-[#06D001] block px-5">Visi & Misi</a>
                    <a href="/web-desa/perangkat.php" class="py-2 text-base hover:text-[#06D001] block px-5">Perangkat</a>
                </div>
                <a href="/visi-misi" class="py-2 px-6 text-base hover:text-[#06D001] block">Potensi dan Pariwisata</a>
                <a href="/web-desa/berita.php" class="py-2 px-6 text-base hover:text-[#06D001] block">Berita</a>
                <a href="/web-desa/galeri.php" class="py-2 px-6 text-base hover:text-[#06D001] block">Galeri</a>
                <a href="/web-desa/kontak.php" class="py-2 px-6 text-base hover:text-[#06D001] block">Kontak</a>
            </div>
            <!-- end menu -->
        </div>
    </div>
</div>
<!-- Navbar End -->