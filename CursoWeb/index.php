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
		<div class="container logo-nav-container" >
			 <?php 

						session_start();
						
						if(empty($_SESSION['Usuario'])){
		
						echo('<a href="index.php" class="truck">');
						echo ('<i class="fa fa-truck fa-3x "></i>');
						echo ('</a>');
		
						}else if ($_SESSION['Usuario']){		
			
            				echo ('<a  href="recepcionista.php" class="truck"');
            				echo ('<i style= "float: left" class="fa fa-truck fa-3x "></i>');
            				echo ('</a>');
            				
            				}	 
							?> 
			 <a href="recepcionista.php" class="truck">
				<i class="fa fa-truck fa-3x "></i>
			</a>
			<span class="menu-icon">Ver Menu</span>
			<nav class="navigation"> 
				<ul>
					<li> <form style="margin-bottom: 15px;" method="POST" action="./BuscarPedido.php">
							<input name="btn-Buscar" class="form-control"  type="text" placeholder="Buscar Pedido">
							</form></li>
					
					<li> <?php 

						 
	
						if(empty($_SESSION['Usuario'])){
		
						echo('<a id="a-login" href="login-form-v1\Login_v1/login.html">LOGIN</a>');
		
						}else{		
			
            				echo ("<p style = 'color:white';>");
            				echo ($_SESSION['Usuario']);
            				echo ('</p>');
            				echo ('<a id="close" href="./Login/logout.php">Cerrar session</a>');
            
							}	 
							?> </li>
							
					
				</ul>
			</nav>
		</div>
	</header>

	<main class="main">
		<div class="container">
			
			<h1>DISTRIBUCIONES GARCIA</h1>
			<div class="row" style="margin-top: 20px; margin-bottom: 60px">
				<div class="col"><img class="centrar" src="Imagenes/img5.jpg"></div>
			<div class="col">
			<p class="info" style="display: inline; font-size: 30px">Somos una empresa de transporte reconocida y respetada en toda la región. Llevamos lo que necesites de punto A a punto B. Nos preocupamos de la misma manera que tú te preocupas por el contenido que deseas enviar y aseguramos la llegada en las condiciones que un cliente de esta empresa se merece.</p>
			</div>
			</div>
		</div>
	</main>

	<footer class="footer">
		<div class="container">
			<p class="text-footer">Sitio diseñado por <a href="InfPersonal.php">@IvanGarcia.</a></p>
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