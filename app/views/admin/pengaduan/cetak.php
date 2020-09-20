<?php require 'app/core/function.php';
$id = $data['id'];
$date = mysqli_query($conn,"select * from pengaduan where id='$id'");
while($dat = mysqli_fetch_array($date)){
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PENGADUAN</title>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-10">
<div class="card">
<div class="col-md-8">
<h1 style="text-align: center;">PENGADUAN ONLINE </h1>
<h4 style="text-align: right;">Tanggal <?= $dat['updated_at'] ?></h4>
<br><br><br>
<h4 style="text-align: justify; text-indent: 2.8in;">NAMA       : <?= $dat['nama'] ?></h4>
<h4 style="text-align: justify; text-indent: 2.8in;">Nomor tlp  : <?= $dat['no_telp'] ?></h4>
<h4 style="text-align: justify; text-indent: 2.8in;">ALAMAT     : <?= $dat['alamat'] ?></h4>
<h4 style="text-align: justify; text-indent: 2.8in;">ISI PESAN  : <?= $dat['isi'] ?></h4>
</div>
</div>
</div>
</div></div>    
</body>
</html>
<?php } ?>