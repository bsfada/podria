<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Podria Ser Tuyo</title>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<script type="text/javascript" src="js/functions.js"></script>

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css' />


<link rel="stylesheet" type="text/css" href="js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.css" />
<script type="text/javascript" src="js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.pack.js"></script>

<link href="css/style.css" rel="stylesheet" type="text/css" />

</head>
<body>
<?php $page="terminos"; include('header.php') ?>

<div class="contact content_wrapper">
	<div class="gray_box_wrapper">
	<div class="gray_box">
		<h1>CONTACTO</h1>
		<div class="text">
			<div class="form">
				<form id="contact_form" action="" method="post" onkeypress="return submitEnter(event, this)">
					<label for="username" class="input">Nombre</label>
					<input class="input" type="text" name="username" id="username"/>
					
					<label for="email" class="input">E-mail</label>
					<input class="input" type="text" name="email" id="email"/>
					
					<label for="asunto" class="input">Asunto</label>
					<input class="input" type="text" name="asunto" id="asunto"/>
					
					<label for="mensanje" class="input">Mensanje</label>
					<textarea rows="2" cols="30" name="mensanje"></textarea>
					
					<div class="row">
						<a href="javascript:$('#contact_form').submit()" class="green_button">ENVIAR</a>
					</div>
				</form>
			</div>
			<div class="contact_logo">
				<div class="text">Tel: <strong>+598</strong> 2927 25 12</div>
			</div>
		</div>
	</div>
	</div>
</div>	

<?php include('footer.php') ?>

</body>
</html>