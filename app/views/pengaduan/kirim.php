<?php
include_once("app/core/function.php");

        $nama = $_POST['nama'];
        $no_telp = $_POST['no_telp'];
        $alamat = $_POST['alamat'];
        $isi = $_POST['isi'];
        $crated_at = date("Y-m-d h:i:sa");
        $updated_at = date("Y-m-d h:i:sa");


        // include database connection file
        // Insert user data into table
        mysqli_query($conn, "INSERT INTO pengaduan VALUES('','$nama','$no_telp','$alamat','$isi','$created_at','$updated_at')");

        // Show message when user added
        echo "<script>alert('Data berhasil dikirim.');window.location='../pengaduan';</script>";
    ?>