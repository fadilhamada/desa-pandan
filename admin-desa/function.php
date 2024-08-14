<?php

// Connection
$conn = mysqli_connect('localhost', 'root', '', 'web_desa');

// Jabatan read
function jabatan ($query) {
    global $conn;

    // $result = mysqli_query($conn, $query);
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $rows = []; 
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// Jabatan create
function createJabatan ($data) {
    global $conn;

    $jabatan = htmlspecialchars(mysqli_real_escape_string($conn, $data['jabatan']));

    if(!$jabatan || $jabatan == '') {
        echo "<script>
                alert('Silahkan isi data yang masih kosong');
             </script>";
    }
    if(empty(trim($jabatan))) {
        return false;
    }
    
    $query = "INSERT INTO jabatan (jabatan) VALUES (?)";
    // mysqli_query($conn, $query);
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "s", $jabatan);
    mysqli_stmt_execute($stmt);

    return mysqli_affected_rows($conn);
}

// Jabatan edit
function editJabatan ($data, $id) {
    global $conn;

    // $id = htmlspecialchars($data['id']);
    $jabatan = htmlspecialchars(mysqli_real_escape_string($conn, $data['jabatan']));

    $query = "UPDATE jabatan SET jabatan = ? WHERE id = ?";
    // mysqli_query($conn, $query);
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "si", $jabatan, $id);
    mysqli_stmt_execute($stmt);

    return mysqli_affected_rows($conn);
}

// Jabatan delete
function deleteJabatan ($id) {
    global $conn;

    $query = "DELETE FROM jabatan WHERE id = ?";
    // mysqli_query($conn, $query);
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    
    return mysqli_affected_rows($conn);
}


// Perangkat create
function createPerangkat ($data) {
    global $conn;

    $nama = htmlspecialchars(mysqli_real_escape_string($conn, $data['nama']));
    $jabatan = htmlspecialchars(mysqli_real_escape_string($conn, $data['jabatan']));
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

    $query = "INSERT INTO perangkat(nama, gambar, id_jabatan) VALUES (?, ?, ?)";
    // mysqli_query($conn, $query);
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ssi", $nama, $gambar, $jabatan);
    mysqli_stmt_execute($stmt);

    return mysqli_affected_rows($conn);

}

// Perangkat edit
function editPerangkat ($data, $id) {
    global $conn;

    // $id = htmlspecialchars($data['id']);
    $nama = htmlspecialchars(mysqli_real_escape_string($conn, $data['nama']));
    $jabatan = htmlspecialchars(mysqli_real_escape_string($conn, $data['jabatan']));
    $gambarLama = htmlspecialchars(mysqli_real_escape_string($conn, $data['gambarLama']));

    if(!$nama || $nama == '' || $jabatan == 'pilih') {
        echo "<script>
                alert('Silahkan isi data yang masih kosong atau pilih jabatan');
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
    if(!$gambar) {
        echo "<script>
                alert('Silahkan upload gambar');
             </script>";
        return false;
    }

    if(!in_array($ekstensiGambar, $ekstensi)) {
        echo "<script>
                alert('Yang anda upload bukan gambar');
             </script>";
        return false;
    }
    $query = "SELECT * FROM perangkat WHERE id = '$id'";
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
    $update = "UPDATE perangkat SET nama = ?, gambar = ?, id_jabatan = ? WHERE id = ?";
    // mysqli_query($conn, $query);
    $stmt2 = mysqli_prepare($conn, $update);
    mysqli_stmt_bind_param($stmt2, "ssii", $nama, $namaFile, $jabatan, $id);
    mysqli_stmt_execute($stmt2);

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

    $query = "DELETE FROM perangkat WHERE id = ?";
    // mysqli_query($conn, $query);
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);

    return mysqli_affected_rows($conn);
}

// Galeri create
function createGaleri ($data) {
    global $conn;

    $keterangan = htmlspecialchars(mysqli_real_escape_string($conn, $data['keterangan']));
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

    if(!$gambar) {
        echo "<script>
                alert('Silahkan upload gambar');
             </script>";
        return false;
    }
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

    $query = "INSERT INTO galeri(keterangan, gambar) VALUES (?, ?)";
    // mysqli_query($conn, $query);
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ss", $keterangan, $namaFile);
    mysqli_stmt_execute($stmt);

    return mysqli_affected_rows($conn);
}

// Galeri edit
function editGaleri ($data, $id) {
    global $conn;

    // $id = htmlspecialchars($data['id']);
    $keterangan = htmlspecialchars(mysqli_real_escape_string($conn, $data['keterangan']));
    $gambarLama = htmlspecialchars(mysqli_real_escape_string($conn, $data['gambarLama']));

    if(!$keterangan || $keterangan == '') {
        echo "<script>
                alert('Silahkan isi data yang masih kosong');
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

    if(!$gambar) {
        echo "<script>
                alert('Silahkan upload gambar');
             </script>";
        return false;
    }
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
    $update = "UPDATE galeri SET keterangan = ?, gambar = ? WHERE id = ?";
    // mysqli_query($conn, $query);
    $stmt = mysqli_prepare($conn, $update);
    mysqli_stmt_bind_param($stmt, "ssi", $keterangan, $namaFile, $id);
    mysqli_stmt_execute($stmt);

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

    $query = "DELETE FROM galeri WHERE id = ?";
    // mysqli_query($conn, $query);
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);

    return mysqli_affected_rows($conn);
}

// Berita create
function createBerita ($data) {
    global $conn;

    $judul = htmlspecialchars(mysqli_real_escape_string($conn, $data['judul']));
    $deskripsi = $data['deskripsi'];
    $tanggal = date("F, j Y");
    $gambar = upload();

    if(!$judul || $judul == '' || !$deskripsi || $deskripsi == '') {
        echo "<script>
                alert('Silahkan isi data yang masih kosong');
             </script>";
        return false;
    }

    if(!$gambar) {
        return false;
    }

    $query = "INSERT INTO berita(judul, tanggal, deskripsi, gambar) VALUES (?, ?, ?, ?)";
    // mysqli_query($conn, $query);
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ssss", $judul, $tanggal, $deskripsi, $gambar);
    mysqli_stmt_execute($stmt);
    echo nl2br($deskripsi);

    return mysqli_affected_rows($conn);

}

// Berita delete
function deleteBerita ($id) {
    global $conn;

    $query = "SELECT * FROM berita WHERE id = ?";
    // $result = mysqli_query($conn, $query);
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $data = mysqli_fetch_assoc($result);
    $location = '../img/'.$data['gambar'];
    unlink($location);

    $query2 = "DELETE FROM berita WHERE id = ?";
    // mysqli_query($conn, $query);
    $stmt2 = mysqli_prepare($conn, $query2);
    mysqli_stmt_bind_param($stmt2, "i", $id);
    mysqli_stmt_execute($stmt2);

    return mysqli_affected_rows($conn);
}

// Berita edit
function editBerita ($data, $id) {
    global $conn;

    // $id = htmlspecialchars($data['id']);
    $judul = htmlspecialchars(mysqli_real_escape_string($conn, $data['judul']));
    $deskripsi = $data['deskripsi'];
    $gambarLama = htmlspecialchars($data['gambarLama']);
    $tanggal = date("F, j Y");

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
    $query = "SELECT * FROM berita WHERE id = ?";
    // $result = mysqli_query($conn, $query);
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
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
    $query2 = "UPDATE berita SET judul = ?, tanggal = ?, deskripsi = ?, gambar = ? WHERE id = ?";
    // mysqli_query($conn, $query);
    $stmt2 = mysqli_prepare($conn, $query2);
    mysqli_stmt_bind_param($stmt2, "ssssi", $judul, $tanggal, $deskripsi, $namaFile, $id);
    mysqli_stmt_execute($stmt2);
    echo nl2br($deskripsi);

    return mysqli_affected_rows($conn);

}

// Admin create
function createAdmin ($data) {
    global $conn;

    $nama = strtolower(stripslashes(htmlspecialchars(mysqli_real_escape_string($conn, $data['nama']))));
    $username = strtolower(stripslashes(htmlspecialchars(mysqli_real_escape_string($conn, $data['username']))));
    $pass = strtolower(mysqli_real_escape_string($conn, $data["pass"]));
    $pass2 = strtolower(mysqli_real_escape_string($conn, $data["pass2"]));
    $no = htmlspecialchars(mysqli_real_escape_string($conn, $data['no']));
    $alamat = htmlspecialchars(mysqli_real_escape_string($conn, $data['alamat']));
    $kelamin = $data['kelamin'];
    $type = 'admin';

    if(!$nama || $nama == '' || !$username || $username == '' || !$pass || $pass == '' || !$pass2 || $pass2 == '' || !$no || $no == 0 || !$alamat || $alamat == '') {
        echo "<script>
                alert('Silahkan isi data yang masih kosong');
            </script>";
        return false;
    }

    $stmt = mysqli_prepare($conn, "SELECT * FROM user WHERE username = ?");
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if( mysqli_fetch_assoc($result) ) {
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
    $query = "INSERT INTO user(nama, username, pass, j_kelamin, no_hp, alamat, jenis) VALUES (?, ?, ?, ?, ?, ?, ?)";
    // mysqli_query($conn, $query);
    $stmt2 = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt2, "ssssiss", $nama, $username, $pass, $kelamin, $no, $alamat, $type);
    mysqli_stmt_execute($stmt2);

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

    $query = "DELETE FROM user WHERE id = ?";
    // mysqli_query($conn, $query);
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);

    return mysqli_affected_rows($conn);
}

function change ($data, $username) {
    global $conn;

    $pass = htmlspecialchars(mysqli_real_escape_string($conn, $data['pass']));
    $pass2 = htmlspecialchars(mysqli_real_escape_string($conn, $data['pass2']));

    if(!$pass || $pass == "" || !$pass2 || $pass == "") {
        echo "<script>
                alert('Silahkan masukkan data yang masih kosong');
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
    $query = "UPDATE user SET pass = ? WHERE username = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ss", $pass, $username);
    mysqli_stmt_execute($stmt);

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