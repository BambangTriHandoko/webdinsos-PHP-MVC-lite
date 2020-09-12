<?php
include_once("app/core/function.php");

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $remember_token = $_POST['remember_token'];

        $password = password_hash($password, PASSWORD_DEFAULT);

        // include database connection file
        // Insert user data into table
        mysqli_query($conn, "INSERT INTO users VALUES('','$name','$email','','$password','$remember_token','','')");

        // Show message when user added
        echo "<script>alert('Data berhasil ditambah.');window.location='../forms_admins/user';</script>";
    ?>