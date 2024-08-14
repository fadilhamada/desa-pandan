<?php

session_start();

require 'function.php';

if(isset($_SESSION['username'])) {
  header("Location: dashboard.php");
  exit;
}

if(isset($_POST['submit'])) {
  $username = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['username']));
  $pass = mysqli_real_escape_string($conn, $_POST['password']);

  if(!$username || $username == '' || !$pass || $pass == '') {
    echo "<script>
            alert('Silahkan isi data yang masih kosong');
        </script>";
      
  }

  $data = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
  if(mysqli_num_rows($data) === 1) {
    $row = mysqli_fetch_assoc($data);
    if(password_verify($pass, $row['pass'])) {
      $_SESSION['id'] = $row['id'];
      $_SESSION['nama'] = $row['nama'];
      $_SESSION['username'] = $row['username'];
      $_SESSION['kelamin'] = $row['j_kelamin'];
      $_SESSION['no'] = $row['no_hp'];
      $_SESSION['alamat'] = $row['alamat'];
      $_SESSION['jenis'] = $row['jenis'];
      header("Location: dashboard.php");
      exit;
      
    } 
  } 
  echo "<script>
            alert('Username atau password salah');
        </script>";
}

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
    <!-- Font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <title>Login Admin | Web Desa Pandan</title>

    <style>
      body {
            background-color: #F5F7F8;
            font-family: "Poppins", sans-serif;
        }
        .bg {
          width: 100%;
          height: 100vh;
        }
        .px-10 {
          padding-left: 2.5rem;
          padding-right: 2.5rem;
        }
        .mb-2 {
            margin-bottom: 1rem;
        }
        
        /* .absolute {
          top: 32%;
          left: 50%;
          transform: translate(-50%, -50%);
        } */
        #width {
          width: 30%;
        }
        #submit {
          background-color: #06D001;
        }
        #image {
          width: 10rem;
          height: 10rem;
        }

        @media (max-width: 540px) {
          #width {
            width: 80%;
          }
          #image {
            width: 10rem;
            height: 10rem;
          }
        }
    </style>
  
</head>
<body>
  <div class="bg flex flex-col justify-center items-center">
    <div id="image">
      <img src="../assets/pemkab.png" alt="">
    </div>
    <div class="mb-2">
      <h1 class="font-semibold">Admin Desa Pandan</h1>
    </div>
    <div class="bg-white shadow-md rounded-md px-5 py-2" id="width">
      <div class="w-full">
        <div class="my-2 py-2 border-b">
          <h1 class="text-xl font-semibold">Selamat Datang Admin</h1>
        </div>
        <form action="" method="POST">
              <div class="mb-5">
                  <label for="username" class="block mb-2">Username</label>
                  <input type="text" name="username" id="username" class="border px-3 py-1 rounded-md w-full outline-none" placeholder="Masukkan username" required>
              </div>
              <div class="mb-5">
                  <label for="password" class="block mb-2">Password</label>
                  <input type="password" name="password" id="password" class="border px-3 py-1 rounded-md w-full outline-none" placeholder="Masukkan password" required>
              </div>
              <div class="mb-5 w-full">
                  <button type="submit" name="submit" id="submit" class="w-full py-2 rounded-md font-semibold text-white">Login</button>
              </div>   
          </form>
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