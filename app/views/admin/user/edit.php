<?php
$id = $data['id'];
require 'app/core/function.php';
$date = mysqli_query($conn,"select * from users where id='$id'");
	while($dat = mysqli_fetch_array($date)){
		?>
<div class="row">
   <div class="col-md-12">
   <div class="box">
   <div class="box-body">
   <form method="POST" action="<?=BASEURLS;?>/forms_admins/ubahuser/<?=$dat['id']?>" enctype="multipart/form-data" >
                        
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" value="<?=$dat['name']?>" name="name" class="form-control" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">EMAIL</label>
                    <input type="email" value="<?=$dat['email']?>" name="email" class="form-control" placeholder="">
                  </div>
                        
                        
 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" name="password" value="<?=$dat['password']?>" class="form-control" placeholder="">
                  </div>
                        
     
                  <div class="form-group">
                    <label for="exampleInputEmail1">remember token</label>
                    <input type="number" name="remember_token" value="<?=$dat['remember_token']?>"class="form-control" placeholder="">
                  </div>
                        
                    
                <div class="card-footer">
                  <button type="submit" name="submit"  class="btn btn-primary">Submit</button>
                </div>
                <br><br><br><br><br>
              </form></div>
   </div></div></div>
    <?php }
    ?>