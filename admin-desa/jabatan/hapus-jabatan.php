<?php

    require '../function.php';

    $id = $_GET['id'];
    
    if( deleteJabatan($id) > 0) {
        echo "<script>
                alert('Data bahasil dihapus');
                document.location.href = '../jabatan.php';
            </script>";
    } else {
        echo "<script>
                alert('Data gagal dihapus');
            </script>";
    }

?>