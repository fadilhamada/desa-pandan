<?php
 
 require '../function.php';

 $id = $_GET['id'];

 $query = "SELECT * FROM potensi WHERE id = $id";
 $result = mysqli_query($conn, $query);
 $data = mysqli_fetch_assoc($result);
 $location = '../img/'.$data['gambar'];
 unlink($location);

 $query = "DELETE FROM potensi WHERE id = ?";
 // mysqli_query($conn, $query);
 $stmt = mysqli_prepare($conn, $query);
 mysqli_stmt_bind_param($stmt, "i", $id);
 mysqli_stmt_execute($stmt);

 $sukses = mysqli_affected_rows($conn);
 if($sukses > 0) {
    echo "<script>
            alert('Data berhasil dihapus');
            document.location.href = '../potensi-desa.php';
        </script>";
 }else{
    echo "<script>
            alert('Data gagal dihapus');
            document.location.href = '../potensi-desa.php';
        </script>";
 }

?>