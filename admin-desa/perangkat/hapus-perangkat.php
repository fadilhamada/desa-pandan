<?php

    require '../function.php';

    $id = $_GET['id'];

    if(deletePerangkat($id) > 0){
        echo "<script>
                alert('Data bahasil dihapus');
                document.location.href = '../perangkat-desa.php';
            </script>";
    } else {
        echo "<script>
                alert('Data gagal dihapus');
            </script>";
    }

?>