<?php
require 'app/core/function.php';
$id = $data['id'];
        $kecamatan = $_POST['kecamatan'];
        $PMKS = $_POST['PMKS'];
        $PSKS = $_POST['PSKS'];

        mysqli_query($conn, "UPDATE visual set kecamatan='$kecamatan', PMKS='$PMKS', PSKS='$PSKS' where id='$id'");

        // Show message when user added
        echo "<script>alert('Data berhasil diubah.');window.location='../visual';</script>";
    ?>