<div class="w-full fixed top-0 left-0 py-5 bg-white border-b z-10">
    <div class="px-7">
        <div class="flex justify-between">
            <div class="flex gap-10">
                <h1>Desa Pandan</h1>
                <button id="toggle"><i class="fa-solid fa-bars"></i></button>
            </div>
            <button id="profile"><?= $_SESSION['username']; ?></button>
            <div class="absolute top-full right-0 border hidden py-2 bg-white rounded-md shadow-md" id="hide">
                <a href="profil-user.php" class="px-5 block">Profil</a>
                <a href="ganti-password.php" class="px-5 block mt-3">Ganti Password</a>
                <a href="logout.php" class="px-5 block mt-3">Logout</a>
            </div>
        </div>
    </div>
</div>