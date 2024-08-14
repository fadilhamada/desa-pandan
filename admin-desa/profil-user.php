<?php
    session_start();

    require 'function.php';

    $id = $_SESSION['id'];
    $data = jabatan("SELECT * FROM user WHERE id = $id")[0];

    if(isset($_POST['submit'])) {
        $nama = strtolower(stripcslashes(htmlspecialchars(mysqli_real_escape_string($conn, $_POST['nama']))));
        $username = strtolower(stripcslashes(htmlspecialchars(mysqli_real_escape_string($conn, $_POST['username']))));
        $nomor = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['no']));
        $alamat = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['alamat']));
        $kelamin = $_POST['kelamin'];

        if(!$nama || !$username || !$nomor || !$alamat) {
            echo "<script>
                alert('Silahkan isi data yang masih kosong');
                document.location.href = 'profil-desa.php';
            </script>";
            return false;
        }

        if(empty(trim($nama)) || empty(trim($username)) || empty(trim($nomor)) || empty(trim($alamat))) {
            echo "<script>
                alert('Silahkan isi data yang masih kosong');
                document.location.href = 'profil-desa.php';
            </script>";
            return false;
        }

        $query = "UPDATE user SET nama = ?, username = ?, j_kelamin = ?, no_hp = ?, alamat = ? WHERE id = ?";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "sssisi", $nama, $username, $kelamin, $nomor, $alamat, $_SESSION['id']);
        mysqli_stmt_execute($stmt);

        $sukses = mysqli_affected_rows($conn);
        if($sukses > 0) {
            echo "<script>
                alert('Data berhasil diubah');
                document.location.href = 'dashboard.php';
            </script>";
        } else {
            echo "<script>
                alert('Data gagal diubah');
                document.location.href = 'profil-desa.php';
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
  
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="admin.css">
  <link rel="stylesheet" href="jabatan.css">

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
<?php
    include '../header.php';
?>
<div class="flex">
    <?php
        include '../sidebar.php';
    ?>
    
    <div class="w-full pt-16" id="margin">
        <div class="px-5 py-2">
            <div class="font-bold py-3 text-base flex gap-3 mb-3">
                <a href="dashboard.php">Dashboard</a>
                <p>/</p>
                <h1 class="text-[#06D001]">Profil Admin</h1>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="flex gap-10">
                    <div class="w-full">
                        <div class="mb-5">
                            <label for="nama" class="block mb-2">Nama</label>
                            <input type="text" name="nama" id="nama" class="border px-3 py-1 rounded-md w-full outline-none" value=<?= $data['nama']; ?> placeholder="Masukkan nama" required>
                        </div>
                        <div class="mb-5">
                            <label for="username" class="block mb-2">Username</label>
                            <input type="text" name="username" id="username" class="border px-3 py-1 rounded-md w-full outline-none" value=<?= $data['username']; ?> placeholder="Masukkan username" required>
                        </div>
                        <div class="mb-5">
                            <label for="" class="block mb-2">Pilih jenis kelamin</label>
                            <?php if($data['j_kelamin'] == 'laki-laki') : ?>
                            <input type="radio" name="kelamin" id="kelamin" value="laki-laki" class="mr-2 cursor-pointer" checked>Laki-laki
                            <input type="radio" name="kelamin" id="kelamin" value="perempuan" class="mx-2 cursor-pointer">Perempuan   
                            <?php else : ?>
                            <input type="radio" name="kelamin" id="kelamin" value="laki-laki" class="mr-2 cursor-pointer">Laki-laki
                            <input type="radio" name="kelamin" id="kelamin" value="perempuan" class="mx-2 cursor-pointer" checked>Perempuan   
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="w-full">
                        <div class="mb-5">
                            <label for="no" class="block mb-2">No. handphone</label>
                            <input type="number" name="no" id="no" class="border px-3 py-1 rounded-md w-full outline-none" value=<?= $data['no_hp']; ?> placeholder="Masukkan no. handphone" required>
                        </div>
                        <div class="mb-5">
                            <label for="alamat" class="block mb-2">Alamat</label>
                            <input type="text" name="alamat" id="alamat" class="border px-3 py-1 rounded-md w-full outline-none" value=<?= $data['alamat']; ?> placeholder="Masukkan alamat" required>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end gap-4">
                    <button type="submit" name="submit" class="bg-blue-500 text-white px-3 py-2 rounded-md shadow-md">Simpan</button>
                    <a href="dashboard.php" class="bg-red-500 text-white px-3 py-2 rounded-md shadow-md">Kembali</a>
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