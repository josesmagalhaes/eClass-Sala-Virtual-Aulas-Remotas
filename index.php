<!DOCTYPE html>
<html>
<head>
	<title>eClass | Sala Virtual</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="icon" href="upload/logoEscola.png" type="image/x-icon" />
        <link rel="shortcut icon" href="upload/logoEscola.png" type="image/x-icon" />    
<style>
	#login_form{
		width:350px;
		height:350px;
		position:relative;
		top:50px;
		margin: auto;
		padding: auto;
	}
</style>
</head>
<body>
<div class="container">
	<div id="login_form" class="well">
        <div align="center"><img src="upload/logo4.png" width="130px" alt="Norway"></div>
		<h4><center><span class="glyphicon glyphicon-lock"></span> Por favor, faça login</center></h4>
		<hr>
		<form method="POST" action="login.php">
		Useuário: <input type="text" name="username" class="form-control" required>
		<div style="height: 10px;"></div>		
		Senha: <input type="password" name="password" class="form-control" required> 
		<div style="height: 10px;"></div>
		<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-log-in"></span> Entrar</button>
        <br>Não possui conta? <a href="signup.php"> Criar conta</a>
		</form>
		<div style="height: 15px;"></div>
		<div style="color: red; font-size: 15px;">
			<center>
			<?php
				session_start();
				if(isset($_SESSION['msg'])){
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
				}
			?>
			</center>
		</div>
	</div>
</div>
</body>
</html>