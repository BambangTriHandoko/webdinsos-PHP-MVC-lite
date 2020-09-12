<?php
require 'app/core/function.php';
$kat = mysqli_query($conn,"SELECT * FROM kategori ");
?><div class="section">
			<!-- container -->
			<div class="container">
                <!-- row -->
                <br>
				<div class="row">
                    <!-- Post content -->
                    <br>
					<div class="col-md-8">
						<div class="section-row sticky-container">
							<div class="main-post">
                               <h2><?= $data['judul'];?></h2>
								<h5>dipublikasi pada tanggal <?= date('d M Y',strtotime( $data['created_at']));?></h5>
                                <img src="<?= BASEURL; ?>/uploads/<?= $data['gambar'];?>" style="width: 660px; height: 360px;" alt="">
                                
                                <?= $data['isi'];?>
                              </div>
						</div>

						<!-- ad -->
						<div class="section-row text-center">
							<a href="#" style="display: inline-block;margin: auto;">
								<img class="img-responsive" src="./img/ad-2.jpg" alt="" style="display: none !important;">
							</a>
						</div>
						<!-- ad -->
						
						<!-- author -->
						<!-- /author -->

						<!-- comments -->
                        
                        <!-- comment -->
						
						<!-- /reply -->
					</div>
					<!-- /Post content -->

					<!-- aside -->
					
						<!-- /ad -->

						<!-- post widget -->
						<!-- /post widget -->

						<!-- post widget -->
						<!-- /post widget -->
						
						<!-- catagories -->
						<div class="col-md-4">
					<div class="post post-widget">
								<a class="post-img" href="#"><img src="<?= BASEURL; ?>/img/iklan.png" style="width: 300px; height: 300px;"alt=""></a>
							</div>
						<!-- catagories -->
							<!-- catagories -->
							<div class="aside-widget">

<h2>Categories</h2>
<div class="card">
<div class="category-widget">
<?php foreach($kat as $k):?>
<div class="post-meta"><a class="post-category cat-2" href="<?=BASEURLS;?>/home/kategori/<?= $k['nama'];?>"> <?= $k['nama'];?></a></div>
<?php endforeach;?>
</div>
</div>
</div>
</div>
					</div><!-- /catagories -->
						
						<!-- tags -->
						<!-- /tags -->
						
						<!-- archive -->
						<!-- /archive -->
					</div>
					<!-- /aside -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
