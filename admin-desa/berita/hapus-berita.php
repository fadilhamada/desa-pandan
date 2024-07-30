<?php

    require '../function.php';

    $id = $_GET['id'];

    if(deleteBerita($id) > 0) {
        echo "<script>
                alert('Data berhasil dihapus');
                document.location.href = '../berita.php';
            </script>";
    }

?>