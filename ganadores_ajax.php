<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Podria Ser Tuyo</title>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="js/greyScale.js"></script>
<script type="text/javascript" src="js/functions.js"></script>

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css' />
<link href="css/style.css" rel="stylesheet" type="text/css" />


	<script type="text/javascript" src="js/jquery-ias.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            jQuery.ias({
                container : '.content_wrapper',
                item: '.image',
                pagination: '#content .navigation',
                next: '.next-posts a',
                loader: '<img src="img/325.gif"/>',
                triggerPageThreshold: 2
            });
        });
    </script>

</head>
<body>
<?php $page="ganadores"; include('header.php') ?>

<div class="content_wrapper">
	<div class="image ">
		<img src="img/img1.jpg" alt=""/>
		<div class="text">
			<div class="top"><span><span>&nbsp;</span>&nbsp;</span><a href="#" class="red">1TERMINADO</a></div>
			<div class="bottom"><strong>PILSEN:</strong>REGALAMOS 50 CASILLEROS DE PILSEN BAJO CERO. CONCURSA Y LLEVATE UNO.</div>
		</div>
	</div>
	<div class="image ">
		<img src="img/img2.jpg" alt="" />
		<div class="text">
			<div class="top"><span><span>&nbsp;</span>&nbsp;</span><a href="#" class="red">2TERMINADO</a></div>
			<div class="bottom"><strong>MUNDOMAC:</strong>REGALAMOS CAMBIO DE BATERÍA GRATIS PARA 10 IPODS TOUCH.</div>
		</div>
	</div>
	<div class="image ">
		<img src="img/img3.jpg" alt="" />
		<div class="text">
			<div class="top"><span><span>&nbsp;</span>&nbsp;</span><a href="#" class="red">3TERMINADO</a></div>
			<div class="bottom"><strong>HOTEL FASANO:</strong>REGALAMOS ESTADÍA DE 5 NOCHES EN EL HOTEL LAS PIEDRAS.</div>
		</div>
	</div>
	
	<div class="image ">
		<img src="img/img3.jpg" alt="" />
		<div class="text">
			<div class="top"><span><span>&nbsp;</span>&nbsp;</span><a href="#" class="red">4TERMINADO</a></div>
			<div class="bottom"><strong>HOTEL FASANO:</strong>REGALAMOS ESTADÍA DE 5 NOCHES EN EL HOTEL LAS PIEDRAS.</div>
		</div>
	</div>
</div>	
<div class="navigation">
	<ul>
		<li class="prev-posts"><a href="ganadores.php">1</a></li>
		<li>2</li>
	</ul>
</div>


<?php include('footer.php') ?>

</body>
</html>