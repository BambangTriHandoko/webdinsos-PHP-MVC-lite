<div class="row">
   <div class="col-md-12">
   <div class="box">
   <div class="box-body">
   <form method="POST" action="<?=BASEURLS;?>/forms_admins/tambahpeg" enctype="multipart/form-data" >
                        
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">NIP</label>
                    <input type="text" name="nip" class="form-control" placeholder="">
                  </div>
                        
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="">
                  </div>
                        
 
                  <div class="form-group">
                    <label for="exampleInputEmail1">JABATAN STRUKTURAL</label>
                    <input type="text" name="jabatan_struk" class="form-control" placeholder="">
                  </div>
                        
     
                  <div class="form-group">
                    <label for="exampleInputEmail1">JABATAN UMUM</label>
                    <input type="text" name="jabatan_umum" class="form-control" placeholder="">
                  </div>
                        
                    
                  <div class="form-group">
                   <li>
				<label for="gambar">FOTO </label>
				<input type="file" name="image" id="gambar">
			</li>   </div>
                    </div>
                  </div>
                 </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
                </div>
                <br><br><br><br><br>
              </form></div>
   </div></div></div>
  