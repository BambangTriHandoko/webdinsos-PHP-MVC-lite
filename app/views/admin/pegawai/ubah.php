<?php
require 'app/core/function.php';
$id = $data['id'];
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$jabatan_struk = $_POST['jabatan_struk'];
$jabatan_umum = $_POST['jabatan_umum'];
$image = $_FILES['image']['name'];
$uploads_dir = 'public/pegawai';
if($image != "") {
  $ekstensi_diperbolehkan = array('png','jpg','jpeg'); //ekstensi file image yang bisa diupload 
  $x = explode('.', $image); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['image']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_image_baru = $angka_acak.'-'.$image; //menggabungkan angka acak dengan nama file sebenarnya
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp,"$uploads_dir/$nama_image_baru"); //memindah file image ke folder image
                  // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                  $query  = "UPDATE pegawai SET nip = '$nip', nama = '$nama', jabatan_struk = '$jabatan_struk', jabatan_umum = '$jabatan_umum', image = '$nama_image_baru'";
                    $query .= "WHERE id = '$id'";
                    $result = mysqli_query($conn, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($conn).
                           " - ".mysqli_error($conn));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='../pegawai';</script>";
                  }

            } else {     
             //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi image yang boleh hanya jpg atau png.');window.location='../pegawai/createpeg';</script>";
            }
} else {
    $query  = "UPDATE pegawai SET nip = '$nip', nama = '$nama', jabatan_struk = '$jabatan_struk', jabatan_umum = '$jabatan_umum'";
    $query .= "WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
                   // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($conn).
                           " - ".mysqli_error($conn));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil diubah.');window.location='../pegawai';</script>";
                  }
}
?>