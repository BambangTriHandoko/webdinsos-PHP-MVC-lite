<?php require 'app/core/function.php';
$id = $data['artikel_id'];
$date = mysqli_query($conn,"select * from artikel  where artikel_id='$id'");
while($dat = mysqli_fetch_array($date)){
     ?>

<div class="row">
   <div class="col-md-12">
   <div class="box">
   <div class="box-body">
   <form method="POST" action="<?=BASEURLS;?>/forms_admins/ubah/<?= $dat['artikel_id']?>" enctype="multipart/form-data" >
                        

                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">judul</label>
                    <input type="name" name="judul" value="<?= $dat['judul']?>" class="form-control" placeholder="Judul">
                  </div>
                  <div class="form-group">
                    <label >Kategori</label>
                    <select name='kategori'>
                    <option value="2">DINSOS</option>
                    <option value="3">REHSOS</option>
                    <option value="4">PKH</option>
                    <option value="5">PEMBERSOS</option>
                    <option value="7">-</option>
                  
		</select></div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">ISI</label>
                    <textarea class="form-control summernote" name="isi" value="<?= $dat['isi']?>" id="" cols="30" rows="10"></textarea>
                    </div>
                    
                  <div class="form-group">
                   <li>
				<label for="gambar">Gambar </label>
				<input type="file" value="<?= $dat['gambar']?>"name="gambar" id="gambar">
			</li>   </div>
                    </div>
                  </div>
                 </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
                </div>
              </form></div>
   </div></div></div>
<?php }?>