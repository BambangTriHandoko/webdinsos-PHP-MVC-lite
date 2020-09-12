<?php
include_once("app/core/function.php");

        $kecamatan = $_POST['kecamatan'];
        $PMKS = $_POST['PMKS'];
        $PSKS = $_POST['PSKS'];


        // include database connection file
        // Insert user data into table
        mysqli_query($conn, "INSERT INTO visual VALUES('','$kecamatan','$PMKS','$PSKS','','')");

        // Show message when user added
        echo "<script>alert('Data berhasil ditambah.');window.location='../forms_admins/visual';</script>";
    ?>