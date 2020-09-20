<div class="container">
<div class="row">
<br>
   <div class="col-md-6">
   <div class="box">
   <div class="box-body">
   <form method="POST" action="<?=BASEURLS;?>/pengaduan/kirim" enctype="multipart/form-data" >
                        
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="" required>
                  </div>
                        
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nomor handpone</label>
                    <input type="text" name="no_telp" class="form-control" placeholder="" required>
                  </div>
                        
 
                    <label for="exampleInputEmail1">Alamat Lengkap</label>
                  <div class="form-group">
                    <textarea name="alamat" id="alamat" cols="30" rows="3" required></textarea>
                    </div>    
     
                    <label for="exampleInputEmail1">Pesan</label>
                  <div class="form-group">
                    <textarea name="isi" id="isi" cols="50" rows="6" required></textarea>
                  </div>
                        
                    
           </div>
                  </div>
                 </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" id="submit" class="btn btn-primary">Kirim</button>
                </div>
                <br><br><br><br><br>
              </form></div>
   </div></div></div>
  </div>