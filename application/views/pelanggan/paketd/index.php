  <head>
  	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
  </head>
   <style>
        .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 500px;
        margin: auto;
        text-align: center;
        }

        .title {
        color: grey;
        font-size: 18px;
        }

		* {box-sizing: border-box;}
		body {font-family: Verdana, sans-serif;}
		.mySlides {display: none;}
		img {vertical-align: middle;}

		/* Slideshow container */
		.slideshow-container {
		max-width: 1000px;
		position: relative;
		margin: auto;
		}

		/* Caption text */
		.text {
		color: #f2f2f2;
		font-size: 15px;
		padding: 8px 12px;
		position: absolute;
		bottom: 8px;
		width: 100%;
		text-align: center;
		}

		/* Number text (1/3 etc) */
		.numbertext {
		color: #f2f2f2;
		font-size: 12px;
		padding: 8px 12px;
		position: absolute;
		top: 0;
		}

		/* The dots/bullets/indicators */
		.dot {
		height: 15px;
		width: 15px;
		margin: 0 2px;
		background-color: #bbb;
		border-radius: 50%;
		display: inline-block;
		transition: background-color 0.6s ease;
		}

		.active {
		background-color: #717171;
		}

		/* Fading animation */
		.fade {
		-webkit-animation-name: fade;
		-webkit-animation-duration: 1.5s;
		animation-name: fade;
		animation-duration: 1.5s;
		}

		@-webkit-keyframes fade {
		from {opacity: .4}
		to {opacity: 1}
		}

		@keyframes fade {
		from {opacity: .4}
		to {opacity: 1}
		}

		/* On smaller screens, decrease text size */
		@media only screen and (max-width: 300px) {
		.text {font-size: 11px}
		}

		 /*body {background:#f9f9f9 url(<?php echo base_url() . "assets/images/oke10.jpg"; ?>);background-size:cover;min-height:100vh;}
        .box {background:rgba(255,255,255,0.5);padding:20px;box-shadow: 1px 1px 7px 0px #555;border-radius:2px;}
        .heading-title {margin-bottom:20px;}
        .tagline {color:#fed136;font-size:20px;font-family:"Kaushan Script";}*/
</style>
           
	<div class="slideshow-container" align="center">
		<div class="mySlides fade">
			<div class="numbertext">1 / 5</div>
			<img src="<?php echo base_url(); ?>assets/images/fb24.jpg" style="width:70%">
			<div class="text">DEKORASI PELAMINAN MINIMALIS</div>
		</div>
		<div class="mySlides fade">
			<div class="numbertext">2 / 5</div>
			<img src="<?php echo base_url(); ?>assets/images/fb25.jpg" style="width:70%">
			<div class="text">DEKORASI PELAMINAN MINIMALIS</div>
		</div>
		<div class="mySlides fade">
			<div class="numbertext">3 / 5</div>
			<img src="<?php echo base_url(); ?>assets/images/fb26.jpg" style="width:70%">
			<div class="text">DEKORASI PELAMINAN MINIMALIS</div>
		</div>
		<div class="mySlides fade">
			<div class="numbertext">4 / 5</div>
			<img src="<?php echo base_url(); ?>assets/images/fb27.jpg" style="width:70%">
			<div class="text">TATA RIAS</div>
		</div>
		<div class="mySlides fade">
			<div class="numbertext">5 / 5</div>
			<img src="<?php echo base_url(); ?>assets/images/fb28.jpg" style="width:70%">
			<div class="text">TATA RIAS</div>
		</div>	

	</div>
<br>

		<div style="text-align:center">
			<span class="dot"></span>
			<span class="dot"></span>
			<span class="dot"></span>
			<span class="dot"></span>
			<span class="dot"></span>
		</div>

	<div class="col-lg-12 text-center">
		<a href="<?= base_url() . 'home'; ?>" class="btn btn-danger btn-lg"><b>BACK</b></a>
		<a href="<?= base_url() . '#daftar'; ?>" class="btn btn-success btn-lg"><b>PESAN</b></a>
	</div>
<p align="center"><b>Paket D = Rp. 4.000.000.- </p></b>

		<div class="col-md-6 col-sm-12">
			<li>Dekorasi Pelaminan Minimalis</li>
		</div>
		<div class="col-md-6 col-sm-12">
			    <li>Tata Rias</li>
		</div>
		<script>
var slideIndex = 0;
showSlides();

function showSlides() {
var i;
var slides = document.getElementsByClassName("mySlides");
var dots = document.getElementsByClassName("dot");
for (i = 0; i < slides.length; i++) {
slides[i].style.display = "none";
}
slideIndex++;
if (slideIndex > slides.length) {slideIndex = 1}
for (i = 0; i < dots.length; i++) {
dots[i].className = dots[i].className.replace(" active", "");
}
slides[slideIndex-1].style.display = "block";
dots[slideIndex-1].className += " active";
setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

