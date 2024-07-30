<?php
    require '../function.php';

    $id = $_GET['id'];

    $data = jabatan("SELECT * FROM `perangkat` WHERE id = $id")[0];


    $perangkat = jabatan("SELECT * FROM jabatan");

    if(isset($_POST['submit'])) {
        if(editPerangkat($_POST, $id) > 0) {
            echo "<script>
                    alert('Data berhasil ditambah');
                    document.location.href = '../perangkat-desa.php';
                </script>";
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
        .mb-2 {
            margin-bottom: 1rem;
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
                <a href="/web-desa/admin-desa/perangkat-desa.php">Perangkat</a>
                <p>></p>
                <h1 class="text-[#06D001]">Tambah data</h1>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="mb-5">
                    <input type="hidden" name="gambarLama" id="gambarLama" class="border px-3 py-1 rounded-md w-full outline-none" placeholder="Masukkan jabatan" value="<?= $data['gambar']; ?>" required>
                    <label for="nama" class="block mb-2">Nama</label>
                    <input type="text" name="nama" id="nama" class="border px-3 py-1 rounded-md w-full outline-none" placeholder="Masukkan jabatan" value="<?= $data['nama']; ?>" required>
                </div>
                <div class="mb-5">
                    <label for="jabatan" class="block mb-2">Jabatan</label>
                    <select name="jabatan" id="jabatan" class="border px-3 py-1 rounded-md w-full outline-none">
                        <option value="pilih">--Pilih jabatan--</option>
                        <?php foreach( $perangkat as $j ) : ?>
                        <option value="<?= $j['id'] ?>" <?php if($j['id'] == $data['id_jabatan']){ ?> echo selected <?php } ?>><?= $j['jabatan']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-5">
                    <label for="gambar" class="block mb-2">Gambar</label>
                    <input type="file" name="gambar" id="gambar" class="border px-3 py-1 rounded-md w-full outline-none" placeholder="Masukkan jabatan">
                    <img src="../img/<?= $data['gambar']; ?>" alt="" width="100" class="border mt-3">
                </div>
                <div class="flex justify-end gap-4">
                    <button type="submit" name="submit" class="bg-blue-500 text-white px-3 py-2 rounded-md shadow-md">Simpan</button>
                    <a href="/admin-desa/jabatan" class="bg-red-500 text-white px-3 py-2 rounded-md shadow-md">Kembali</a>
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