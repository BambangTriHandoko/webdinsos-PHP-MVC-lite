<div class="row">
<div class="col-md-12">
<div class="box">
<div class="box-body">
<a href="<?=BASEURLS;?>/forms_admins/createberita" class="btn btn-flat btn-primary" style="margin-bottom: 12px;">TAMBAH</a>
<div class="container mb-3 mt-3">
<table class="table mydatatable" style="width: 100%;" id="mydatatable">
<thead>
<tr>
<th>#</th>
<th>judul</th>
<th>kategori</th>
<th>penulis</th>
<th>dibuat pada</th>
<th>gambar</th>
<th>edit</th>
<th></th>
<th> delete</th>
</tr>
</thead>
<tbody>

<?php

require 'app/core/function.php';
$data = mysqli_query($conn,"SELECT * FROM artikel");
 while( $dt= mysqli_fetch_array($data)){
?>
<tr>
<td><?= $dt['artikel_id'] ?></td>
<td><?= $dt['judul'];?></td>
<td><?= $dt['kategori'];?></td>
<td><?= $dt['updated_at'];?></td>
<td><?= $dt['created_at'];?></td>
<td><img src="<?= BASEURL;?>/uploads/<?= $dt['gambar'];?>" alt="" style=" width:200px; height:120px;"></td>
<td><p>
<a href="<?=BASEURLS;?>/forms_admins/editberita/<?= $dt["artikel_id"];?>" class="btn btn-flat btn-secondary" style="margin-bottom: 12px;">EDIT</a>
<td></td></td>
<td><p>
<a href="<?=BASEURLS;?>/forms_admins/delete/<?= $dt["artikel_id"];?>" class="btn btn-flat btn-danger" style="margin-bottom: 12px;">Hapus</a>
<td></td></td>
</tr>
 <?php }?>
</tbody>
</table>
</div>

</div>
</div>
</div>
</div>
