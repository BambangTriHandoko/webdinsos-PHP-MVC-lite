<?php

// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "dinsos");

if(!$conn){ //jika tidak terkoneksi maka akan tampil error
    die ("Koneksi dengan database gagal: ".mysql_connect_error());
  }

