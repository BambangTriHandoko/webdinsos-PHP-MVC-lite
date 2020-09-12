<?php 
session_start();
if( isset($_SESSION["login"])){
    header("Location:/webdinsos/login/wrong");
    exit;
}
require 'app/core/function.php';
if( isset($_POST["login"]) ) {

	$email = $_POST["email"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");

	// cek email
	if( mysqli_num_rows($result) === 1 ) {

		// cek password
		$row = mysqli_fetch_assoc($result);
		if( password_verify($password, $row["password"]) ) {
            header("Location:/webdinsos/forms_admins");
            //set mulai sesion
            $_SESSION["login"] = true;

			exit;
		}
	}

	$error = true;

}

?>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>Login Admin</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?= BASEURL; ?>/lte/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= BASEURL; ?>/lte/assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= BASEURL; ?>/lte/assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?= BASEURL; ?>/lte/assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="<?= BASEURL; ?>/lte/assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="<?= BASEURL; ?>/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="icon" href="<?= BASEURL; ?>/LOGO.png" type="image/icon type">>
	<link rel="icon" type="image/png" sizes="96x96" href="<?= BASEURL; ?>/lte/assets/img/favicon.png">
</head>
<body>

        <main class="py-4">
<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="<?= BASEURL; ?>/LOGO.png" width="200" height="60" loading="lazy alt="></div>
								<p class="lead">Kota Tasikmalaya</p>
                                
							</div>
                            <form method="POST" action="">
                        			<div class="form-group row">
                                <label for="signin-email" class="control-label sr-only"></label>
                                 
    <input id="email" type="email" class="form-control" name="email" value="" placeholder="Email" required autocomplete="email" autofocus>
</div>			
								<div class="form-group">
                  <label for="password" class="control-label sr-only"></label>    
                   
                  
                                    <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    </div>      
                                <button type="submit" name="login" class="btn btn-primary">
                                   <h4>login</h4>
                                </button>
							</form>
						</div>
					</div>
                    
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h3 class="heading">LOGIN UNTUK MENGAKSES HALAMAN ADMIN</h3>
							<p>by The Develovers</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
    </main>
    </div>
</body>
</html>
