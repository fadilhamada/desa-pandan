<?php

require '../function.php';

$id = $_GET['id'];

if(deleteAdmin($id) > 0) {
    echo "<script>
                alert('Data berhasil dihapus');
                document.location.href = '../admin.php';
            </script>";
}

?>