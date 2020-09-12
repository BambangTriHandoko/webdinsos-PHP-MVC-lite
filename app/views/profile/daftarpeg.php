<div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-10">
    
        <div class="container">
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
                            </tr>
                        </thead>
                        <tbody>
						<?php foreach($data['isi'] as $dt) : ?>
                            <tr>
                                <td><?= $dt['nip'];?></td>
                                <td><?= $dt['nama'];?></td>
                                <td><?= $dt['jabatan_struk'];?></td>
                                <td><?= $dt['jabatan_umum'];?></td>
                        
                                <td>
                                <img src="/webdinsos/public/pegawai/<?= $dt['image'];?>" style="width: 100px; height: 120px;" alt="">
                                </td>
                                  
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div></div>