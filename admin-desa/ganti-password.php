<?php
session_start();

require('function.php');

if(isset($_POST['submit'])) {
    $username = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['username']));

    if(!$username || $username == "") {
        echo "<script>
                alert('Silahkan masukkan username anda');
            </script>";
        return false;
    }

   if($username !== $_SESSION['username']) {
    echo "<script>
            alert('Username yang anda masukkan salah');
            document.location.href = 'ganti-password.php';
        </script>";
   }else {
        header('Location: ganti.php');
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
<?php
    include '../header.php'
?>
<div class="flex">
    <?php
        include '../sidebar.php'
    ?>
    
    <div class="w-full pt-16" id="margin">
        <div class="px-5 py-2">
            <div class="font-bold py-3 text-base flex gap-3 mb-3">
                <a href="/web-desa/admin-desa/dashboard.php">Dashboard</a>
                <p>/</p>
                <h1 class="text-[#06D001]">Ganti password</h1>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="mb-5">
                    <label for="username" class="block mb-2">Username</label>
                    <input type="text" name="username" id="username" class="border px-3 py-1 rounded-md w-full outline-none" placeholder="Masukkan username" required>
                </div>
                <div class="flex justify-end gap-4">
                    <button type="submit" name="submit" class="bg-blue-500 text-white px-3 py-2 rounded-md shadow-md">Simpan</button>
                    <a href="dashboard.php" class="bg-red-500 text-white px-3 py-2 rounded-md shadow-md">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>    

<script src="./script.js"></script>
<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
</body>
</html>