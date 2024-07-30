<?php
    require '../function.php';

    if(isset($_POST['submit'])) {
        if(createAdmin($_POST) > 0) {
            echo "<script>
                    alert('Data berhasil ditambah');
                    document.location.href = '../admin.php';
                </script>";
        } else {
            mysqli_error($conn);    
        }
    } 

?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <link rel="stylesheet" href="../../style.css">
  <link rel="stylesheet" href="../admin.css">
  <link rel="stylesheet" href="./jabatan.css">

    <style>
        #margin {
            margin-top: 1.5rem;
        }
        .mb-3 {
            margin-bottom: 1rem;
        }
        .mx-2 {
            margin-right: 0.5rem;
            margin-left: 0.5rem;
        }
        .mb-2 {
            margin-bottom: 1rem;
        }
        .mr-2 {
            margin-right: 0.5rem;
        }
        .cursor-pointer {
            cursor: pointer;
        }
        .bg-blue-500 {
            background-color: blue;
        }
        .bg-red-500 {
            background-color: red;
        }
    </style>
  
</head>
<body>
<div class="w-full fixed top-0 left-0 py-5 bg-white border-b z-10">
    <div class="px-7">
        <div class="flex justify-between">
            <div class="flex gap-10">
                <h1>Desa Pandan</h1>
                <button id="toggle"><i class="fa-solid fa-bars"></i></button>
            </div>
            <a href="/">Admin</a>
        </div>
    </div>
</div>
<div class="flex">
    <?php
        include '../../sidebar.php'
    ?>
    
    <div class="w-full pt-16" id="margin">
        <div class="px-5 py-2">
            <div class="font-bold py-3 text-base flex gap-3 mb-3">
                <a href="/web-desa/admin-desa/dashboard.php">Dashboard</a>
                <p>></p>
                <a href="/web-desa/admin-desa/admin.php">Admin</a>
                <p>></p>
                <h1 class="text-[#06D001]">Tambah data</h1>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="flex gap-10">
                    <div class="w-full">
                        <div class="mb-5">
                            <label for="nama" class="block mb-2">Nama</label>
                            <input type="text" name="nama" id="nama" class="border px-3 py-1 rounded-md w-full outline-none" placeholder="Masukkan nama" required>
                        </div>
                        <div class="mb-5">
                            <label for="username" class="block mb-2">Username</label>
                            <input type="text" name="username" id="username" class="border px-3 py-1 rounded-md w-full outline-none" placeholder="Masukkan username" required>
                        </div>
                        <div class="mb-5">
                            <label for="pass" class="block mb-2">Password</label>
                            <input type="password" name="pass" id="pass" class="border px-3 py-1 rounded-md w-full outline-none" placeholder="Masukkan password" required>
                        </div>
                        <div class="mb-5">
                            <label for="pass2" class="block mb-2">Konfirmasi password</label>
                            <input type="password" name="pass2" id="pass2" class="border px-3 py-1 rounded-md w-full outline-none" placeholder="Masukkan konfirmasi password" required>
                        </div>
                    </div>
                    <div class="w-full">
                        <div class="mb-5">
                            <label for="" class="block mb-2">Pilih jenis kelamin</label>
                            <input type="radio" name="kelamin" id="kelamin" value="laki-laki" class="mr-2 cursor-pointer" checked>Laki-laki
                            <input type="radio" name="kelamin" id="kelamin" value="perempuan" class="mx-2 cursor-pointer">Perempuan   
                        </div>
                        <div class="mb-5">
                            <label for="no" class="block mb-2">No. handphone</label>
                            <input type="number" name="no" id="no" class="border px-3 py-1 rounded-md w-full outline-none" placeholder="Masukkan no. handphone" required>
                        </div>
                        <div class="mb-5">
                            <label for="alamat" class="block mb-2">Alamat</label>
                            <input type="text" name="alamat" id="alamat" class="border px-3 py-1 rounded-md w-full outline-none" placeholder="Masukkan alamat" required>
                        </div>
                        <div class="mb-5">
                            <label for="" class="block mb-2">Type</label>
                            <select name="type" id="type" class="border px-3 py-1 rounded-md w-full outline-none">
                                <option value="admin">Admin</option>
                                <option value="super admin">Super admin</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end gap-4">
                    <button type="submit" name="submit" class="bg-blue-500 text-white px-3 py-2 rounded-md shadow-md">Simpan</button>
                    <a href="/web-desa/admin-desa/berita.php" class="bg-red-500 text-white px-3 py-2 rounded-md shadow-md">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>    

<script src="../script.js"></script>
<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
</body>
</html>