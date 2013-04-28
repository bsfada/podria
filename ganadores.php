<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Podria Ser Tuyo</title>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.browser.min.js"></script>-->
<script type="text/javascript" src="js/greyScale.js"></script>
<script type="text/javascript" src="js/functions.js"></script>

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css' />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<?php
$total_pages = 4;
$pag = isset($_GET['pag']) ? $_GET['pag'] : 1;
?>

	<script type="text/javascript" src="js/jquery-ias.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
			if(isSafari() || isIE10()) {  $('.greyScale img.main_img').hide(); } // fade in the grayscaled images to avoid visual jump
			
			infinite_scrool_start(<?=$total_pages?>)
			thumbs_start();
			prepare_thumbs();	
        });
		
		$(window).load(function () { // user window.load to ensure images have been loaded
			make_gray()
		});
	</script>

</head>
<body>
<?php 

$page="ganadores"; 
include('header.php'); 

?>
<div id="content">
	<div class="content_wrapper">
		<div class="image greyScale">
			<img class="main_img" src="img/img1.jpg" alt=""/>
			<div class="text">
				<div class="top"><span><span>&nbsp;</span>&nbsp;</span><a href="#" class="red"><?=$pag?>TERMINADO</a></div>
				<div class="bottom"><strong>PILSEN:</strong>REGALAMOS 50 CASILLEROS DE PILSEN BAJO CERO. CONCURSA Y LLEVATE UNO.</div>
			</div>
			<div class="thumbs">
				<div class="thumb_wrapper">
					<div class="thumb">
						<img src="img/thumb1.jpg" alt="">
						<div class="info">
							<div class="info_text">
								<strong>ROBERTO GARCÍA</strong><br />
								PAYSANDÚ
							</div>
						</div>
					</div>
				</div>
				<div class="thumb_wrapper">
					<div class="thumb">
						<img src="img/thumb2.jpg" alt="">
						<div class="info">
							<div class="info_text">
								<strong>ROBERTO GARCÍA</strong><br />
								PAYSANDÚ
							</div>
						</div>
					</div>
				</div>
				<div class="thumb_wrapper">
					<div class="thumb">
						<img src="img/thumb3.jpg" alt="">
						<div class="info">
							<div class="info_text">
								<strong>ROBERTO GARCÍA</strong><br />
								PAYSANDÚ
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="image ">
			<img class="main_img" src="img/img2.jpg" alt="" />
			<div class="text">
				<div class="top"><span><span>&nbsp;</span>&nbsp;</span><a href="#" class="red">TERMINADO</a></div>
				<div class="bottom"><strong>MUNDOMAC:</strong>REGALAMOS CAMBIO DE BATERÍA GRATIS PARA 10 IPODS TOUCH.</div>
			</div>
		</div>
		<div class="image ">
			<img class="main_img" src="img/img3.jpg" alt="" />
			<div class="text">
				<div class="top"><span><span>&nbsp;</span>&nbsp;</span><a href="#" class="red">TERMINADO</a></div>
				<div class="bottom"><strong>HOTEL FASANO:</strong>REGALAMOS ESTADÍA DE 5 NOCHES EN EL HOTEL LAS PIEDRAS.</div>
			</div>
		</div>
		<div class="image ">
			<img class="main_img" src="img/img3.jpg" alt="" />
			<div class="text">
				<div class="top"><span><span>&nbsp;</span>&nbsp;</span><a href="#" class="red">TERMINADO</a></div>
				<div class="bottom"><strong>HOTEL FASANO:</strong>REGALAMOS ESTADÍA DE 5 NOCHES EN EL HOTEL LAS PIEDRAS.</div>
			</div>
		</div>
	</div>	
	<div class="navigation">
		<ul>
			<?php if($total_pages > $pag) { ?>
			<li class="next-posts"><a href="ganadores.php?pag=<?=$pag+1?>"><?=$pag+1?></a></li>
			<?php } ?>
		</ul>
	</div>
</div>

<?php include('footer.php') ?>

</body>
</html>