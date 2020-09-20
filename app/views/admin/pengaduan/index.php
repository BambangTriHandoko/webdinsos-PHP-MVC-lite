
<div class="row">
    <div class="col-md-12">
    <div class="box">
    <div class="container mb-3 mt-3">
    <a href="<?=BASEURLS;?>/forms_admins/createvis" class="btn btn-warning">Tambah</a>
    <table class="table mydatatable" style="width: 100%;" id="mydatatable">
    <thead>
    <tr>
    <th></th>
    <th>nama</th>
    <th>Alamat</th>
    <th>Nomor HP</th>
    <th>ISI</th>
    <th>Tanggal</th>
    <th></th>
    <th></th>
    </tr>
    </thead>
    <tbody>
    <?php require 'app/core/function.php';
$data = mysqli_query($conn,"SELECT * FROM pengaduan");
 while( $dt= mysqli_fetch_array($data)){
     ?>

    <tr>
    <td><?=$dt['id']?></td>
    <td><?=$dt['nama']?></td>
    <td><?=$dt['alamat']?></td>
    <td><?=$dt['no_telp']?></td>
    <td><?=$dt['isi']?></td>
    <td><?=$dt['updated_at']?></td>
     <td>
<a href="<?=BASEURLS;?>/forms_admins/cetak/<?=$dt['id']?>" class="btn btn-flat btn-primary" style="margin-bottom: 3px;">cetak</a>
</td><td>
<a href="<?=BASEURLS;?>/forms_admins/deletepeng/<?=$dt['id']?>" class="btn btn-danger">Hapus</a></td></tr>
<?php
} ?> 
    </tbody>
    
    </tr></tfoot>
    </table>
    </div>

    </div>
    </div>
    </div>
    </div>
