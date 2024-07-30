<?php

require '../function.php';

$id = $_GET['id'];

if( deleteGaleri($id) > 0) {
    echo "<script>
                alert('Data bahasil dihapus');
                document.location.href = '../galeri.php';
            </script>";
}

?>