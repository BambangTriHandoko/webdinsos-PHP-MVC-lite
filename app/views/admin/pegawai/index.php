<div class="container">
<a href="<?=BASEURLS;?>/forms_admins/createpeg" class="btn btn-flat btn-primary" style="margin-bottom: 12px;">TAMBAH</a>
            <div class="card mt-5">
                <div class="card-header text-center">
                   <h3><b> Daftar Pegawai </b></h3> 
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover table-striped mytable">
                        <thead>
                            <tr>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>Jabatan Struktural</th>
                                <th>Jabatan Umum</th>
                                <th>Foto</th>
                                <th> </th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php require 'app/core/function.php';
$data = mysqli_query($conn,"SELECT * FROM pegawai");
 while( $dt= mysqli_fetch_array($data)){
     ?>
                            <tr>
                                <td><?= $dt['nip'];?></td>
                                <td><?= $dt['nama'];?></td>
                                <td><?= $dt['jabatan_struk'];?></td>
                                <td><?= $dt['jabatan_umum'];?></td>
       
                                <td>
                                <img src="/webdinsos/public/pegawai/<?= $dt['image'];?>" style="width: 100px; height: 120px;" alt="">
                                </td>
                                <td><a href="<?=BASEURLS;?>/forms_admins/editpeg/<?= $dt['id'];?>" class="btn btn-warning">Edit</a>
                                    <a href="<?=BASEURLS;?>/forms_admins/deletepeg/<?= $dt['id'];?>" class="btn btn-danger">Hapus</a></td>  
                            </tr>
 <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
      