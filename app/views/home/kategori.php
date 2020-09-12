<?php
require 'app/core/function.php';
$id = $data['nama'];
$dat = mysqli_query($conn,"SELECT * FROM artikel WHERE kategori LIKE '%$id%' ");
$kat = mysqli_query($conn,"SELECT * FROM kategori ");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<style>
            header{
                background-color: #F8F8FF;
            }
            main{background-image: url("<?= BASEURL;?>/img/bg.gif ");
  background-repeat: no-repeat;
    background-size: cover;

              }
            footer{
                background-color: #FAEBD7;
            }
        </style>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Dinas Sosial Kota Tasikmalaya</title>
		<link rel="icon" href="https://data.tasikmalayakota.go.id/wp-content/uploads/2018/05/Logo_Kota_Tasikmalaya.png" type="image/icon type">

		<!-- Google font -->
		<link href="<?= BASEURL;?>/webmag/https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet"> 

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="<?= BASEURL;?>/webmag/css/bootstrap.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="<?= BASEURL;?>/webmag/css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="<?= BASEURL;?>/webmag/css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>

		<!-- Header -->
			<!-- Nav -->
			<header>
			<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#top-menu" aria-expanded="true">
					<span class="sr-only">Menu</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="<?=BASEURLS;?>/home" class="logo"><img src="<?= BASEURL;?>/LOGO.png" alt="" ></a>		
				</div>

			<div class="navbar-collapse collapse in" id="top-menu" aria-expanded="true" style="">
				<ul class="nav navbar-nav" id="menu-utama">

				
					<div class="navbar-form navbar-right">
					<form action="" role="search" method="post" accept-charset="utf-8">                                                                                 
					<input type="hidden" name="bb580c19bd647b265232ce1a9de71edd" value="e87db609b0c6699706443ad84a805e38">
		<ul class="nav-menu nav navbar-nav">
							<li><a href="<?=BASEURLS;?>/home">Home</a></li>
							<li><a href="<?=BASEURLS;?>/profile">Profile</a></li>
							<li class="cat-1"><a href="<?=BASEURLS;?>/layanan">Layanan</a></li>
							<li class="cat-2"><a href="<?=BASEURLS;?>/galery">Galery</a></li>
							<li class="cat-3"><a href="http://pkh.dinsos.tasikmalayakota.go.id">Mitra</a></li>
							<li class="cat-4"><a href="<?=BASEURLS;?>/visualisasi">Visualisasi</a></li>
						</ul>
						<form action="<?=BASEURLS;?>" method="post">
						<div class="input-group">
						<br>
						<input type="text"  style=" width:150px;" placeholder="cari" name="cari" autocomplete="off">
						<button class="btn btn-second" name="submit" type="submit" >Cari</button>
						</div>
						</div>
						</form>
		</form>				</div>
							</div>
		</div>
	</nav>

				<!-- /Main Nav -->

				<!-- Aside Nav -->
					<!-- /nav -->

					<!-- widget posts -->
					
				
			
			<!-- /Nav -->
		</header>
		<!-- /Header -->

		<!-- section -->

		<!-- /section -->
		<!-- section -->
		<div class="section">
			</div>
		<main>
<div class="section">

<div class="container">
<div class="row">	
					<!-- post -->

					<div class="col-md-12">
						<div class="post post-thumb">
						<a class="post-img" href=""><img src="<?= BASEURL;?>/img/logo.png" style="width: 320px; height: 300px;"  alt=""><img src="<?= BASEURL;?>/img/br.jpg" style="width: 820px; height: 300px;"  alt=""></a>
							<div class="post-body">								
								<h1 style="text-align: left; text-indent: 3.4in; color: white;">SELAMAT DATANG DI PORTAL DINAS SOSIAL </h1>
								<h1 style="text-align: left; text-indent: 5.2in; color: white;"> KOTA TASIKMALAYA</h1>
							</div>
						</div>
					</div> 
					
					<!-- /post -->
					<!-- /post -->
				</div>
<h1>Berita Harian</h1>
<div class="row">
	<div class="col-md-9">


	<?php	
		
	 foreach($dat as $dt ) : ?>
                    <div class="col-md-4">
						<div class="post">
                        <a class="post-img" href="<?=BASEURLS;?>/home/berita/<?=$dt["artikel_id"];?>"><img src="<?= BASEURL;?>/uploads/<?= $dt['gambar'];?>" style="width: 260px; height: 200px;" alt="">
						<h5 class="post-title"><?= substr($dt['judul'],0,65);?>...<a href="<?=BASEURLS;?>/home/berita/<?= $dt["artikel_id"];?>"></a></h5></a>	
												<div class="post-body">
								<div class="post-meta">
                                <a class="post-category cat-2" href=""><?=$dt['kategori']?></a>
								<span class="post-date">tanggal <?= date('d M Y',strtotime( $dt['created_at']));?></span>
								</div>
								
							</div>
						</div>
                    </div>
	<?php endforeach; ?>
					</div>
	
					<div class="col-md-3">
					<div class="post post-widget">
								<a class="post-img" href="#"><img src="<?= BASEURL;?>/img/iklan.png" style="width: 300px; height: 300px;"alt=""></a>
							</div>
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
</div>
</div>
</main>
		<!-- Footer -->
		<footer id="footer">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					
					<div class="col-md-3">
						<div class="col-lg-4 col-md-4 col-sm-4">
				<div id="custom_html-3" class="widget_text widget widget_custom_html"><span><h5>HUBUNGI KAMI</h5></span><div class="textwidget custom-html-widget"><center>
	<table id="tabel-kontak">
		<tbody><tr>
			<td><span class="fa fa-map-marker" style="font-size:1.2em">:</span></td>
			<td><a href="https://goo.gl/maps/1vzohfFLxDwi6Any6" ><h4>Jl. Ir H Djuanda Komplek Perkantoran<h4></a></td>
		</tr>
		<tr>
			<td><span class="fa fa-phone" style="font-size:1.2em">:</span></td>
			<td><a href="tel:02657523848">(0265) 7523848</a></td>
		</tr>
		<tr>
			<td><span class="fas fa-envelope" style="font-size:1.2em">:</span></td>
			<td><a href="mailto:dinasosialkotatasik@gmail.com">dinsos.kotatasik@gmail.com</a></td>
		</tr>
		<tr>
			<td><span class="fa fa-instagram" style="font-size:1.2em">:</span></td>
			<td><a href="http://instagram.com/dinsostasikmalayakota" target="_blank" rel="noopener noreferrer">@dinsostasikmalayakota</a></td>
		</tr>
		<tr>
			<td><span class="fa fa-globe" style="font-size:1.2em">:</span></td>
			<td><a href="http://tasikmalayakota.go.id" target="_blank" rel="noopener noreferrer">Website Resmi Kota Tasikmalaya</a></td>
		</tr>
	</tbody></table>
</div>			</div>
							</div>
					</div>

					<div class="col-md-3">
					<div class="col-lg-4 col-md-3 col-sm-4">
				<div id="custom_html-4" class="widget_text widget widget_custom_html"><h4 class="widget-title h6"><span><h4>LOKASI</h4></span></h4><div class="textwidget custom-html-widget"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d989.3537044252372!2d108.20217792917812!3d-7.307207099670387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f50cff99d8e43%3A0x36ee9ad28e7814e!2sDinas+Sosial+Tasikmalaya!5e0!3m2!1sen!2sid!4v1564370132216!5m2!1sen!2sid" width="450" height="250" frameborder="0" style="border:0" allowfullscreen=""></iframe><br><br><br>
</div></div>			</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</footer>

		<!-- jQuery Plugins -->
		<script src="<?= BASEURL;?>/webmag/js/jquery.min.js"></script>
		<script src="<?= BASEURL;?>/webmag/js/bootstrap.min.js"></script>
		<script src="<?= BASEURL;?>/webmag/js/main.js"></script>

	</body>
</html>
