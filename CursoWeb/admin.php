 <?php 

   session_start();

    if(empty($_SESSION['Usuario'])){
    header('location:index.php');
    }else{
        if($_SESSION['Usuario'] == 'Recepcionista'){
            header('location:recepcionista.php');
        }
    }
	error_reporting(0);
	ini_set('display_errors', 0);
?> 
<!DOCTYPE html>
<html>
<head>
	<title>RECEPCIONISTA</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="login-form-v1/Login_v1/css/main.css"> 
	<link rel="stylesheet" type="text/css" href="login-form-v1/Login_v1/fonts/font-awesome-4.7.0/css/font-awesome.min.css"> 
	<link rel="stylesheet" type="text/css" href="login-form-v1/Login_v1/vendor/bootstrap/css/bootstrap.min.css"> 
	<script src="jquery.min.js"></script>  
	<style>
		body{
			background-image: url('./Imagenes/img13.jpg');
			background-repeat: no-repeat;
 			 background-attachment: fixed;
  			background-size: cover;
  			}
	</style>
</head>
<body>
	<header class="header1" >
		<div class="container logo-nav-container">
			 <li><a style="font-size: 20px" href="./index.php">HOME</a></li>
			<span class="menu-icon">Ver Menu</span>
			<nav class="navigation"> 
				
			</nav>
		</div>
	</header>

		<?php 
			
			require ('../php2021/tablaUsuario.php');
			require ('../php2021/editarUsuario.php');


		 ?>

		
			<footer class="footer">
		<div class="container">
			<p class="text-footer">Sitio diseñado por <a href="InfPersonal.php">@IvanGarcia.</a></p>
		</div>
	</footer>

	
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script src="Login_v1/login-form-v1/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!-- <script>
		jQuery('document').ready(function($){
			var menuBtn = $('.menu-icon'),
				menu = $('.navigation ul');

				menuBtn.click(function(){
					
					if( menu.hasClass('show')){
						menu.removeClass('show');

					} else {
						menu.addClass('show')
					}

					
				});
		});
	</script> -->


</body>
</html>