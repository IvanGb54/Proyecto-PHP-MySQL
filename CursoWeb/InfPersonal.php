<!DOCTYPE html>
<html>
<head>
	<title>DISTRIBUCIONES GARCIA</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="login-form-v1/Login_v1/css/main.css"> 
	<link rel="stylesheet" type="text/css" href="login-form-v1/Login_v1/fonts/font-awesome-4.7.0/css/font-awesome.min.css"> 
	<link rel="stylesheet" type="text/css" href="login-form-v1/Login_v1/vendor/bootstrap/css/bootstrap.min.css">   
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
			 
				<i class="fa fa-truck fa-3x "></i>
			</a>
			<span class="menu-icon">Ver Menu</span>
			<nav class="navigation"> 
				<ul>
					<li> <input class="form-control"  type="text" placeholder="Buscar Pedido"></li>
					
					<li> <?php 

						session_start(); 
	
						if(empty($_SESSION['Usuario'])){
		
						echo('<a id="a-login" href="login-form-v1\Login_v1/login.html">LOGIN</a>');
		
						}else{		
			
            				echo ("<p style = 'color:white';>");
            				echo ($_SESSION['Usuario']);
            				echo ('</p>');
            				echo ('<a id="close" href="./Login/logout.php">Cerrar session</a>');
            
							}	 
							?> </li>
						<li><a href="./index.php">HOME</a></li>
					
				</ul>
			</nav>
		</div>
	</header>

	<main class="main">
		<div class="container">
			
			<h1>IVAN GARCIA</h1>
			<div class="row" style="margin-top: 20px; margin-bottom: 60px">
				<div class="col"><img class="centrar" style="width: 600px" src="Imagenes/imgmia.jpg"></div>
			<div class="col">
			<p class="info" style="display: inline; font-size: 30px">Esta es la página que pude diseñar desde 0 como proyecto del curso. Espero que sea de agrado y cumpla con las expectativas tanto de la profesora como del curso. Muchas gracias.</p>
			</div>
			</div>
		</div>
	</main>

	<footer class="footer">
		<div class="container">
			<p class="text-footer">Sitio diseñado por @IvanGarcia.</p>
		</div>
	</footer>

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script>
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
	</script>
</body>
</html>