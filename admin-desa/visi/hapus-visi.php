<?php

    require '../function.php';

    $id = $_GET['id'];

    $query = "DELETE FROM visi WHERE id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $sukses = mysqli_affected_rows($conn);
    if($sukses > 0) {
        echo "<script>
                alert('Data berhasil dihapus');
                document.location.href = '../visi.php';
            </script>";
    } else {
        echo "<script>
                alert('Data gagal dihapus');
                document.location.href = '../profil-desa.php';
            </script>";
    }

?>