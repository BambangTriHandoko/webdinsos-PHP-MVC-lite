<?php
require 'app/core/function.php';
$id = $data['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$remember_token = $_POST['remember_token'];
$password = password_hash($password, PASSWORD_DEFAULT);
mysqli_query($conn,"update users set name='$name', email='$email', password='$password',remember_token='$remember_token' where id='$id'");
echo "<script>alert('Data berhasil diubah.');window.location='../user';</script>";
?>