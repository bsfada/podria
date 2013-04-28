<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Podria Ser Tuyo</title>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="js/greyScale.js"></script>
<script type="text/javascript" src="js/functions.js"></script>

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css' />
<link href="css/style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
$(document).ready(function() {
	if(isSafari() || isIE10()) {  $('.greyScale img.main_img').hide(); } // fade in the grayscaled images to avoid visual jump
});

$(window).load(function () { // user window.load to ensure images have been loaded
	make_gray()
});
</script>
	
</head>
<body>
<?php $page="index"; include('header.php') ?>

<div class="content_wrapper">
	<div class="image">
		<span class="descarecado">&nbsp;</span>
		<img class="main" src="img/img1.jpg" alt=""/>
		<div class="text">
			<div class="top"><span><strong>28</strong> DÍAS</span><a href="#" class="green">CONCURSAR</a></div>
			<div class="bottom"><strong>PILSEN:</strong>REGALAMOS 50 CASILLEROS DE PILSEN BAJO CERO. CONCURSA Y LLEVATE UNO.</div>
		</div>
	</div>
	<div class="image">
		<img class="main" src="img/img2.jpg" alt="" />
		<div class="text">
			<div class="top"><span><strong>16</strong> DÍAS</span><a href="#" class="green">CONCURSAR</a></div>
			<div class="bottom"><strong>MUNDOMAC:</strong>REGALAMOS CAMBIO DE BATERÍA GRATIS PARA 10 IPODS TOUCH.</div>
		</div>
	</div>
	<div class="image">
		<img class="main" src="img/img3.jpg" alt="" />
		<div class="text">
			<div class="top"><span><strong>10</strong> DÍAS</span><a href="#" class="orange icon"><span>&nbsp;</span>PARTICIPANDO</a></div>
			<div class="bottom"><strong>HOTEL FASANO:</strong>REGALAMOS ESTADÍA DE 5 NOCHES EN EL HOTEL LAS PIEDRAS.</div>
		</div>
	</div>
	
	<div class="image greyScale">
		<img class="main" src="img/img3.jpg" alt="" />
		<div class="text">
			<div class="top"><span><span>&nbsp;</span>&nbsp;</span><a href="#" class="red">TERMINADO</a></div>
			<div class="bottom"><strong>HOTEL FASANO:</strong>REGALAMOS ESTADÍA DE 5 NOCHES EN EL HOTEL LAS PIEDRAS.</div>
		</div>
	</div>
</div>	

<?php include('footer.php') ?>

</body>
</html>