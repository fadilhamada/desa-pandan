<?php
session_start();
if(!isset($_SESSION['username'])) {
    return header("Location: login.php");
    exit;
}

require 'function.php';

$jumDataHalaman = 4;
$jumData = count(jabatan("SELECT * FROM galeri"));
$jumHalaman = ceil($jumData / $jumDataHalaman);
$actived = (isset($_GET['page'])) ? $_GET['page'] : 1;
$dataAwal = ($jumDataHalaman * $actived) - $jumDataHalaman;

$galeri = jabatan("SELECT * FROM galeri");

?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="./admin.css">
  <link rel="stylesheet" href="./jabatan.css">

    <style>
 
    </style>
  
</head>
<body>
<?php
    include '../header.php'
?>
<div class="flex">
    <?php
        include '../sidebar.php'
    ?>
    
    <div class="w-full pt-16" id="margin-toggle">
        <div class="px-5 py-2">
            <div class="font-bold py-3 flex gap-3 mb-3">
                <a href="/web-desa/admin-desa/dashboard.php">Dashboard</a>
                <p>></p>
                <h1 class="text-[#06D001]">Galeri</h1>
            </div>
            <div class="margin-top">
                <a href="/web-desa/admin-desa/galeri/post-galeri.php" class="px-4 py-2 bg-blue-500 font-semibold text-white rounded-md" id="tambah">Tambah Data</a>
                <div class="overflow-x-auto mt-8">
            </div>
                <table class="text-sm text-left w-full mb-5">
                    <thead class="text-xs uppercase bg-white text-center shadow-md">
                        <tr class="border-b border-t border-black">
                            <th scope="col" class="px-3 py-3 text-left">
                                No
                            </th>
                            <th scope="col" class="px-3 py-3">
                                Gambar
                            </th>
                            <th scope="col" class="px-3 py-3">
                                Keterangan
                            </th>
                            <th scope="col" class="px-3 py-3">
                                Opsi
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                    <?php $i = 1 ?>
                    <?php foreach( $galeri as $g ) : ?>
                    <tr class="bg-white border-b border-black">
                        <th scope="row" class="px-3 py-4 text-left">
                            <?= $i; ?>
                        </th>
                        <td class="px-3 py-4">
                        <img src="img/<?= $g['gambar']; ?>" alt="" width="50" class="mx-auto">
                        </td>
                        <td class="px-3 py-4">
                            <?= $g['keterangan']; ?>
                        </td>
                        <td class="px-3 py-4 text-white">
                           <button class="px-2 py-1 rounded-md" id="blue"><a href="galeri/edit-galeri.php?id=<?= $g['id']; ?>">Edit</a></button>
                           <button class="px-2 py-1 rounded-md" id="red"><a href="galeri/hapus-galeri.php?id=<?= $g['id']; ?>" onclick="return confirm('Apakah anda akan mengapus data tersebut?');">Hapus</a></button>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                    </tbody>
                </table>
                <?php for($i = 1; $i <= $jumHalaman; $i++) : ?>
                    <?php if($i == $actived) : ?>
                        <a href="?page=<?= $i; ?>" class="border text-white px-3 py-2 bg-[#06D001] rounded-md"><?= $i; ?></a>
                    <?php else :  ?>
                        <a href="?page=<?= $i; ?>" class="border px-3 py-2 rounded-md"><?= $i; ?></a>
                    <?php endif; ?>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</div>

<script src="./script.js"></script>
<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
</body>
</html>