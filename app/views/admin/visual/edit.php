<?php require 'app/core/function.php';
$id = $data['id'];
$date = mysqli_query($conn,"select * from visual where id='$id'");
while($dat = mysqli_fetch_array($date)){
     ?>

<div class="row">
   <div class="col-md-12">
   <div class="box">
   <div class="box-body">
   <form method="POST" action="<?=BASEURLS;?>/forms_admins/ubahvis/<?=$dat['id']?>" enctype="multipart/form-data" >
                        
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kecamatan</label>
                    <input type="text" value="<?=$dat['kecamatan']?>" name="kecamatan" class="form-control" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">PMKS</label>
                    <input type="text" name="PMKS" value="<?=$dat['PMKS']?>"class="form-control" placeholder="">
                  </div>
                        
                        
 
                  <div class="form-group">
                    <label for="exampleInputEmail1">PSKS</label>
                    <input type="text" name="PSKS"value="<?=$dat['PSKS']?>" class="form-control" placeholder="">
                  </div>
                        
                        
                    
                <div class="card-footer">
                  <button type="submit" name="submit"  class="btn btn-primary">Submit</button>
                </div>
                <br><br><br><br><br>
              </form></div>
   </div></div></div>
 <?php }  ?>