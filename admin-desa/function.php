<?php

// Connection
$conn = mysqli_connect('localhost', 'root', '', 'web_desa');

// Jabatan read
function jabatan ($query) {
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = []; 
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// Jabatan create
function createJabatan ($data) {
    global $conn;

    $jabatan = htmlspecialchars($data['jabatan']);

    if(!$jabatan || $jabatan == '') {
        echo "<script>
                alert('Silahkan isi data yang masih kosong');
             </script>";
    }
    if(empty(trim($jabatan))) {
        return false;
    }
    
    $query = "INSERT INTO jabatan VALUES ('', '$jabatan')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// Jabatan edit
function editJabatan ($data, $id) {
    global $conn;

    // $id = htmlspecialchars($data['id']);
    $jabatan = htmlspecialchars($data['jabatan']);

    $query = "UPDATE jabatan SET jabatan = '$jabatan' WHERE id = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// Jabatan delete
function deleteJabatan ($id) {
    global $conn;

    $query = "DELETE FROM jabatan WHERE id = $id";
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}


// Perangkat create
function createPerangkat ($data) {
    global $conn;

    $nama = htmlspecialchars($data['nama']);
    $jabatan = htmlspecialchars($data['jabatan']);
    $gambar = upload();

    if(!$nama || $nama == '' || $jabatan == 'pilih') {
        echo "<script>
                alert('Silahkan isi data yang masih kosong atau pilih jabatan');
             </script>";
        return false;
    }

    if(!$gambar) {
        return false;
    }

    $query = "INSERT INTO perangkat VALUES ('', '$nama', '$gambar', '$jabatan')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

// Perangkat edit
function editPerangkat ($data, $id) {
    global $conn;

    // $id = htmlspecialchars($data['id']);
    $nama = htmlspecialchars($data['nama']);
    $jabatan = htmlspecialchars($data['jabatan']);
    $gambarLama = htmlspecialchars($data['gambarLama']);

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
    $query = "SELECT * FROM perangkat WHERE id = $id";
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
    $query = "UPDATE perangkat SET nama = '$nama', gambar = '$namaFile', id_jabatan = $jabatan WHERE id = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

// Perangkat delete
function deletePerangkat ($id) {
    global $conn;

    $query = "SELECT * FROM perangkat WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($result);
    $location = '../img/'.$data['gambar'];
    unlink($location);

    $query = "DELETE FROM perangkat WHERE id = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// Galeri create
function createGaleri ($data) {
    global $conn;

    $keterangan = htmlspecialchars($data['keterangan']);
    $gambar = $_FILES['gambar']['name'];
    $error = $_FILES['gambar']['error'];
    $tmp_name = $_FILES['gambar']['tmp_name'];

    if(!$keterangan || $keterangan == '') {
        echo "<script>
                alert('Silahkan isi data yang masih kosong');
             </script>";
        return false;
    }

    $ekstensi = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $gambar);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if(!in_array($ekstensiGambar, $ekstensi)) {
        echo "<script>
                alert('Yang anda upload bukan gambar');
             </script>";
        return false;
    }

    $namaFile = uniqid();
    $namaFile .= '.';
    $namaFile .= $ekstensiGambar;

    move_uploaded_file($tmp_name, '../img/' . $namaFile);

    $query = "INSERT INTO galeri VALUES ('', '$keterangan', '$namaFile')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// Galeri edit
function editGaleri ($data, $id) {
    global $conn;

    // $id = htmlspecialchars($data['id']);
    $keterangan = htmlspecialchars($data['keterangan']);
    $gambarLama = htmlspecialchars($data['gambarLama']);

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
    $query = "SELECT * FROM galeri WHERE id = $id";
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
    $query = "UPDATE galeri SET keterangan = '$keterangan', gambar = '$namaFile' WHERE id = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

// Galeri delete
function deleteGaleri ($id) {
    global $conn;

    $query = "SELECT * FROM galeri WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($result);
    $location = '../img/'.$data['gambar'];
    unlink($location);

    $query = "DELETE FROM galeri WHERE id = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// Berita create
function createBerita ($data) {
    global $conn;

    $judul = htmlspecialchars($data['judul']);
    $deskripsi_singkat = htmlspecialchars($data['deskripsi_singkat']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $tanggal = date("Y-F-j");
    $gambar = upload();

    if(!$judul || $judul == '' || !$deskripsi_singkat || $deskripsi_singkat == '' || !$deskripsi || $deskripsi == '') {
        echo "<script>
                alert('Silahkan isi data yang masih kosong');
             </script>";
        return false;
    }

    if(!$gambar) {
        return false;
    }

    $query = "INSERT INTO berita VALUES ('', '$judul', '$tanggal', '$deskripsi_singkat', '$deskripsi', '$gambar')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

// Berita delete
function deleteBerita ($id) {
    global $conn;

    $query = "SELECT * FROM berita WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($result);
    $location = '../img/'.$data['gambar'];
    unlink($location);

    $query = "DELETE FROM berita WHERE id = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// Berita edit
function editBerita ($data, $id) {
    global $conn;

    // $id = htmlspecialchars($data['id']);
    $judul = htmlspecialchars($data['judul']);
    $deskripsi_singkat = htmlspecialchars($data['deskripsi_singkat']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $gambarLama = htmlspecialchars($data['gambarLama']);
    $tanggal = date("Y F j");

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
    }
    $query = "SELECT * FROM berita WHERE id = $id";
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
    $query = "UPDATE berita SET judul = '$judul', tanggal = '$tanggal', deskripsi_singkat = '$deskripsi_singkat', deskripsi = '$deskripsi', gambar = '$namaFile' WHERE id = '$id'";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

// Admin create
function createAdmin ($data) {
    global $conn;

    $nama = strtolower(stripslashes(htmlspecialchars($data['nama'])));
    $username = strtolower(stripslashes(htmlspecialchars($data['username'])));
    $pass = strtolower(mysqli_real_escape_string($conn, $data["pass"]));
    $pass2 = strtolower(mysqli_real_escape_string($conn, $data["pass2"]));
    $no = htmlspecialchars($data['no']);
    $alamat = htmlspecialchars($data['alamat']);
    $kelamin = $data['kelamin'];
    $type = $data['type'];

    if(!$nama || $nama == '' || !$username || $username == '' || !$pass || $pass == '' || !$pass2 || $pass2 == '' || !$no || $no == 0 || !$alamat || $alamat == '') {
        echo "<script>
                alert('Silahkan isi data yang masih kosong');
            </script>";
        return false;
    }

    $cekUser = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    if( mysqli_fetch_assoc($cekUser) ) {
        echo "<script>
                alert('Username sudah ada');
            </script>";
        return false;
    }
    
    if($pass2 !== $pass) {
        echo "<script>
                alert('Konfirmasi password tidak sesuai');
            </script>";
        return false;
    }

    $pass = password_hash($pass, PASSWORD_DEFAULT);
    $query = "INSERT INTO user VALUES ('', '$nama', '$username', '$pass', '$kelamin', '$no', '$alamat', '$type')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// Admin edit
// function editBerita ($data, $id) {
//     global $conn;

//     // $id = htmlspecialchars($data['id']);
//     $judul = htmlspecialchars($data['judul']);
//     $deskripsi_singkat = htmlspecialchars($data['deskripsi_singkat']);
//     $deskripsi = htmlspecialchars($data['deskripsi']);
//     $gambarLama = htmlspecialchars($data['gambarLama']);
//     $tanggal = date("Y F j");

//     if( $_FILES['gambar']['error'] === 4 ) {
//         $namaFile = $gambarLama;
//     } else {
//         $gambar = $_FILES['gambar']['name'];
//         $error = $_FILES['gambar']['error'];
//         $tmp_name = $_FILES['gambar']['tmp_name'];

//         $ekstensi = ['jpg', 'jpeg', 'png'];
//         $ekstensiGambar = explode('.', $gambar);
//         $ekstensiGambar = strtolower(end($ekstensiGambar));
//     if(!in_array($ekstensiGambar, $ekstensi)) {
//         echo "<script>
//                 alert('Yang anda upload bukan gambar');
//              </script>";
//     }
//     $query = "SELECT * FROM berita WHERE id = $id";
//     $result = mysqli_query($conn, $query);
//     $data = mysqli_fetch_assoc($result);
//     $location = '../img/'.$data['gambar'];

//     if(file_exists($location)) {
//         unlink($location);
//     }

//     $namaFile = uniqid();
//     $namaFile .= '.';
//     $namaFile .= $ekstensiGambar;

//     move_uploaded_file($tmp_name, '../img/' . $namaFile);
//     }
//     $query = "UPDATE berita SET judul = '$judul', tanggal = '$tanggal', deskripsi_singkat = '$deskripsi_singkat', deskripsi = '$deskripsi', gambar = '$namaFile' WHERE id = '$id'";
//     mysqli_query($conn, $query);

//     return mysqli_affected_rows($conn);

// }

// Admin delete
function deleteAdmin ($id) {
    global $conn;

    $query = "DELETE FROM user WHERE id = '$id'";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload () {
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

    $namaFile = uniqid();
    $namaFile .= '.';
    $namaFile .= $ekstensiGambar;

    move_uploaded_file($tmp_name, '../img/' . $namaFile);
    return $namaFile;
}
?>