<div class="container">
		
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                <br>      
                <div class="col-md-8">
                <br>
                    <div class="section-title">
                            <h2>GALLERY</h2>
                        </div>
                    </div>
        <div class="row">
            <div class="col-md-12">
                
            </div>

            <!-- post -->
            <!-- /post -->

            <!-- post -->
            <!-- /post -->

            <!-- post -->
            <!-- /post -->
            <?php foreach($data['isi'] as $dt ) : ?>
                        <div class="col-md-3">
                <div class="post">
                <a class="post-img" href=""><img src="public/uploads/<?= $dt['gambar'];?>" style=" width:240px; height:180px;" alt=""></a>							<div class="post-body">
                        <div class="post-meta">
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <?php endforeach;?>
            <div class="clearfix visible-md visible-lg"></div>
            
            <!-- post -->
            
            <!-- /post -->

            <!-- post -->
            
            <!-- /post -->

            <!-- post -->
            
            <!-- /post -->
        </div>
        <!-- /row -->

                    <!-- /post -->

                    <!-- /post -->
                    
                <!-- /ad -->
                
                <!-- catagories -->
            <div class="col-md-4">
                <div class="aside-widget">
                    <div class="section-title">
                        <h2>Categories</h2>
                    </div>
                    <div class="category-widget">
                    					
							<ul>
									<li><a href="{{url('/berita/kategori/'.$k->id)}}" class="cat-1">{{$k->nama}}<span>{{$total}}</span></a></li>
									</ul>
	
</div>
                </div>
                </div>
                <!-- /catagories -->
                
                <!-- tags -->
                <!-- /tags -->
            </div>
        </div>
    </div>
    <!-- /container -->
</div>