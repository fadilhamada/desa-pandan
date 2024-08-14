<?php
    session_start();

    require '../function.php';

    $id = $_GET['id'];

    $data = jabatan("SELECT * FROM potensi WHERE id = $id")[0];

    if(isset($_POST['submit'])) {
       $judul = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['judul']));
       $gambarLama = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['gambarlama']));
       $deskripsi = $_POST['deskripsi'];
       $tanggal = date("F, j Y");
       $gambar = $_FILES['gambar']['name'];
       $error = $_FILES['gambar']['error'];
       $tmp_name = $_FILES['gambar']['tmp_name'];

       if(!$deskripsi || $deskripsi == "" || !$judul || $judul == "") {
        echo "<script>
                alert('Silahkan isi data yang masih kosong');
                document.location.href = 'edit-potensi.php';
            </script>";
        return false;
        }

        if(empty(trim($deskripsi)) || empty(trim($judul))) {
            echo "<script>
                    alert('Silahkan isi data yang masih kosong');
                    document.location.href = 'edit-potensi.php';
                </script>";
            return false;
        }
       
        if( $_FILES['gambar']['error'] === 4 ) {
            $namaFile = $gambarLama;
        } else {
        $gambar = $_FILES['gambar']['name'];
        $error = $_FILES['gambar']['error'];
        $tmp_name = $_FILES['gambar']['tmp_name'];
    
        $ekstensi = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $gambar);
        $ekstensiGambar = strtolower(end($ekstensiGambar));

        if(!in_array($ekstensiGambar, $ekstensi)) {
            echo "<script>
                    alert('Yang anda upload bukan gambar');
                 </script>";
            return false;
        }
        $query = "SELECT * FROM potensi WHERE id = '$id'";
        $result = mysqli_query($conn, $query);
        $data = mysqli_fetch_assoc($result);
        $location = '../img/'.$data['gambar'];
    
        if(file_exists($location)) {
            unlink($location);
        }
    
        $namaFile = uniqid();
        $namaFile .= '.';
        $namaFile .= $ekstensiGambar;
    
        move_uploaded_file($tmp_name, '../img/' . $namaFile);
        }

        $update = "UPDATE potensi SET judul = ?, tanggal = ?, deskripsi = ?, gambar = ? WHERE id = ?";
        // mysqli_query($conn, $query);
        $stmt2 = mysqli_prepare($conn, $update);
        mysqli_stmt_bind_param($stmt2, "ssssi", $judul, $tanggal, $deskripsi, $namaFile, $id);
        mysqli_stmt_execute($stmt2);
       echo nl2br($deskripsi);
       
       $sukses = mysqli_affected_rows($conn);
       if($sukses > 0) {
        echo "<script>
                alert('Data berhasil disimpan');
                document.location.href = '../potensi-desa.php';
            </script>";
       }else{
        echo "<script>
                alert('Data gagal disimpan');
                document.location.href = 'edit-potensi.php';
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

    <style>
        #margin {
            margin-top: 1.5rem;
        }
        .mb-3 {
            margin-bottom: 0.75rem;
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
        .height {
            height: 10rem;
        }
    </style>
  
</head>
<body>
<?php
    include '../../header.php'
?>
<div class="flex">
    <?php
        include '../../sidebar.php'
    ?>
    
    <div class="w-full pt-16" id="margin">
        <div class="px-5 py-2">
            <div class="font-bold py-3 text-base flex gap-3 mb-3">
                <a href="/web-desa/admin-desa/dashboard.php">Dashboard</a>
                <p>/</p>
                <a href="/web-desa/admin-desa/potensi-desa.php">Potensi desa</a>
                <p>/</p>
                <h1 class="text-[#06D001]">Tambah data</h1>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="mb-5">
                    <input type="hidden" name="gambarlama" id="gambarlama" class="border px-3 py-1 rounded-md w-full outline-none" value=<?= $data['gambar']; ?> required>
                </div>
                <div class="mb-3">
                    <label for="judul" class="block mb-2">Judul</label>
                    <input type="text" name="judul" id="judul" class="border px-3 py-1 rounded-md w-full outline-none" placeholder="Masukkan judul" value=<?= $data['judul']; ?> required>
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="block mb-2">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" class="border w-full height rounded-md px-3 py-1" placeholder="Masukkan deskripsi"><?= $data['deskripsi']; ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="gambar" class="mb-2 block">Gambar</label>
                    <input type="file" name="gambar" id="gambar" class="border h-20 px-3 py-1 rounded-md w-full outline-none">
                    <img src="../img/<?= $data['gambar']; ?>" alt="" width="100" class="border mt-3">
                </div>
                <div class="flex justify-end gap-4">
                    <button type="submit" name="submit" class="bg-blue-500 text-white px-3 py-2 rounded-md shadow-md">Simpan</button>
                    <a href="/web-desa/admin-desa/potensi-desa.php" class="bg-red-500 text-white px-3 py-2 rounded-md shadow-md">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>    

<script src="../script.js"></script>
<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
</body>
</html>