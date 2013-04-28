<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Podria Ser Tuyo</title>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="js/functions.js"></script>

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css' />
<link href="css/style.css" rel="stylesheet" type="text/css" />

</head>
<body class="popup">
	<div class="login">
		<h2>LOGIN</h2>
		<div class="form">
			<form id="login_form" action="" onkeypress="return submitEnter(event, this)">
				<label for="username" class="input">Usuario</label>
				<label for="password" class="input">Contraseña</label>
				<input class="input" type="text" name="username" id="username"/>
				<input class="input" type="password" name="password" id="password"/>
					
				<a href="javascript:$('#login_form').submit()" class="green_button">LOGIN<span>&nbsp;</span></a>
			</form>
		</div>
	</div>
	<div class="register">
		<h2><span class="arrow">&nbsp;</span>CREAR CUENTA</h2>
		<div class="form">
			<form action="" onkeypress="return submitEnter(event, this)">
				<label for="username2" class="input">Usuario</label>
				<input class="input" type="text" name="username" id="username2"/>
				
				<label for="password2" class="input">Contraseña</label>
				<input class="input" type="password" name="password" id="password2"/>
					
				<label for="email" class="input">E-mail</label>
				<input class="input" type="text" name="email" id="email"/>
				<div class="row">
					<a href="#" class="orange_button">CLEAR<span>&nbsp;</span></a>
				</div>
			</form>
		</div>
		<img src="img/login.jpg" alt="" />
	</div>
</body>
</html>