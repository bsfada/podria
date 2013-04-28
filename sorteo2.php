<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Podria Ser Tuyo</title>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="js/functions.js"></script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css' />
<link href="css/style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="js/jquery.countdown.js"></script>
<script type="text/javascript" src="js/jquery.countdown-es.js"></script>


<script type="text/javascript" src="js/jcarousel/jquery.jcarousel.min.js"></script>
<link rel="stylesheet" type="text/css" href="js/jcarousel/skin.css" />

<script type="text/javascript">
<!--
$(function () {
	var austDay = new Date();

	// add a day
	austDay.setDate(austDay.getDate() + 1);
	
	var austDay = new Date(2013, 3, <?=date("d")?>, 23);
	//austDay = new Date(2013, 4, 21);
	$('#defaultCountdown').countdown({until: austDay, format: 'HMS' , full_timeSeparator: '<span class="sepCountdown">:<\/span>'});
	
	
	 jQuery('#mycarousel').jcarousel({
    	wrap: 'circular',
		auto:3
    });
});
//-->
</script>
</head>
<body>


<?php $page="soroteo2"; include('header.php') ?>

<div class="content_wrapper">
	<div class="gray_box_wrapper">
		<div class="sorteo_left">
			<img src="img/sorteo_banner.jpg" alt="" />
			<form id="contact_form" action="" method="post" onkeypress="return submitEnter(event, this)">
			<div class="sorteo_dialog">
				<div class="email">
					<input class="input" type="text" name="email" id="email" onblur="if(this.value=='') this.value = 'Tu E-Mail';" onfocus="if(this.value=='Tu E-Mail') this.value = '';" value="Tu E-Mail"/>
					<a href="javascript:$('#contact_form').submit()" class="green">CONCURSAR</a>
				</div>
				<div class="row"><input type="checkbox" id="accept" /><label for="accept" class="input">Acepto Términos y Condiciones</label></div>
				<div class="row"><input type="checkbox" id="subscribe" /><label for="subscribe" class="input">Suscribirme al Anunciante (<strong>+1</strong> entrada)</label></div>
			</div>
			</form>
		</div>
		<div class="sorteo_right gray_box">
			<div class="blue_box">
				REGALAMOS 50 CASILLEROS DE
				<strong>PILSEN BAJO CERO.</strong>
				CONCURSÁ Y LLEVATE UNO.
			</div>
			<div class="blue_box cowntdown">
				<div class="title">QUEDAN</div><div id="defaultCountdown"></div>
			</div>
			
			<div class="row row_b">
				<span class="share_icon">&nbsp;</span>¡Visitá la pagina del anunciante!
			</div>
			<div class="row row_b">
				<span class="share_icon">&nbsp;</span>Un (1) casillero de cerveza Pilsen Bajo Cero
			</div>
			<div class="row row_b">
				<span class="share_icon">&nbsp;</span>Hasta cincuenta (50) ganadores
			</div>
			<div class="row row_b">
				<span class="share_icon">&nbsp;</span>La cerveza tiene espuma
			</div>
			<div class="row row_b">
				<span class="share_icon">&nbsp;</span>Está fría, bajo cero
			</div>
			<div class="row row_b">
				<span class="share_icon">&nbsp;</span>La cerveza tiene espuma
			</div>
			<div class="row row_b">
				<span class="share_icon">&nbsp;</span>La cerveza tiene espuma
			</div>
			
			<div class="row">
				<strong>¡TUS AMIGOS YA ESTAN PARTICIPANDO!</strong>
			</div>
			
			<div class="row amigo">
				
				<ul id="mycarousel" class="jcarousel-skin-tango">
					<li><img src="img/amigo.jpg" alt="" /></li>
					<li><img src="img/amigo.jpg" alt="" /></li>
					<li><img src="img/amigo.jpg" alt="" /></li>
					<li><img src="img/amigo.jpg" alt="" /></li>
					<li><img src="img/amigo.jpg" alt="" /></li>
					<li><img src="img/amigo.jpg" alt="" /></li>
					<li><img src="img/amigo.jpg" alt="" /></li>
				</ul>
			</div>

		</div>
		
	</div>
</div>	

<?php include('footer.php') ?>

</body>
</html>