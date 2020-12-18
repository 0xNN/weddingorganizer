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
        background-color: #060736;
        border-style: double;
        }

        .title {
        color: black;
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
		background-color: white;
		}

		/* Caption text */
		.text {
		color: #ffffff;
		font-size: 15px;
		padding: 8px 12px;
		position: absolute;
		bottom: 50px;
		width: 100%;
		text-align: left;
		}

		/* Number text (1/3 etc) */
		.numbertext {
		color: #ffffff;
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
		background-color: red;
		border-radius: 50%;
		display: inline-block;
		transition: background-color 0.6s ease;
		}

		.active {
		background-color: #ffffff;
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

		.container {
		background-color: #94ebff;

		}
		 body {
		 	background-color: #white;
		 }

		 /*body {background:#f9f9f9 url(<?php echo base_url() . "assets/images/oke10.jpg"; ?>);background-size:cover;min-height:100vh;}
        .box {background:rgba(255,255,255,0.5);padding:20px;box-shadow: 1px 1px 7px 0px #555;border-radius:2px;}
        .heading-title {margin-bottom:20px;}
        .tagline {color:#fed136;font-size:20px;font-family:"Kaushan Script";}*/
</style>
	<div class="row">
                <div class="col-md-6 col-sm-12">
				    <div class="card">
				        <div class="mySlides fade">
							<div class="numbertext">1 / 4</div>
							<img src="<?php echo base_url(); ?>assets/images/fb21.jpg" style="width:70%">
							<div class="text">DEKORASI PELAMINAN</div>
						</div>
						<div class="mySlides fade">
							<div class="numbertext">2 / 4</div>
							<img src="<?php echo base_url(); ?>assets/images/fb22.jpg" style="width:70%">
							<div class="text">DEKORASI PELAMINAN</div>
						</div>
							<div class="mySlides fade">
							<div class="numbertext">3 / 4</div>
							<img src="<?php echo base_url(); ?>assets/images/fb7.jpg" style="width:70%">
							<div class="text">KURSI TAMU</div>
						</div>
						<div class="mySlides fade">
							<div class="numbertext">4 / 4</div>
							<img src="<?php echo base_url(); ?>assets/images/fb6.jpg" style="width:70%">
							<div class="text">KOTAK AMPLOP</div>
						</div>	
						<br>
						<div style="text-align:center">
							<span class="dot"></span>
							<span class="dot"></span>
							<span class="dot"></span>
							<span class="dot"></span>
						</div>
						<br>
						<button class="btn btn-default btn-block btn-sm"><a href="<?= base_url() . '#dekorasi'; ?>" class="btn btn-lg"><b style="color: black">Galerry</b></a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="card">
                    <p align="center" style="color:white"><b>Paket C = Rp. 6.000.000.- </p></b>
                    <ol align="left" style="color:white">
                    	<li>Dekorasi Pelaminan</li>
                    	<li>Kotak Amplop</li>
                    	<li>Kursi Tamu</li>
                    </ol>
                    <button class="btn btn-default btn-block btn-sm"><a href="<?= base_url() . '#daftar'; ?>" class="btn btn-lg"><b style="color: black">Pesan</a></b>
                    </div>
                </div>
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

