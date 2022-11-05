<?php
session_start();
if (!isset($_SESSION['login'])){
		echo"<script>alert('LOG IN TERLEBIH DAHULU')
		document.location.href='../crud/login.php';</script>";}
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0,height=device-height">
	<title>Cool Coder - Ayo Wujudkan Mimpi Menjadi Seorang Machine Learning Developer</title>
	<link rel="stylesheet" href="../css/home.css">
	<link rel="stylesheet" href="../css/php-in.css">
	<script src="../js/darkmode.js" defer></script>
	<style>
		#footer {
			position: relative; 
			bottom:0 ;
			width: 100%;
			padding: 1px 0;
			background-color: rebeccapurple;}
	</style>
</head>
<body>
	<marquee  behavior="alternate" style="font-style: oblique;font-size: 2vw; color: whitesmoke; background-color:mediumpurple;"> DISKON 50% AKHIR TAHUN UNTUK PAKET PREMIUM 6 BULAN. BERGABUNG SEGERA.</marquee>
	<img src="../logo/cool coder.png" style="max-height: 14%; max-width: 14%;margin-bottom: -4%;margin-top: -2%;"/>
	<a href="input.php" align="right" style="max-width:20vw;max-height: 20vh;margin-top: 2%;border: none;margin-left: 58vw;background-color: transparent;">
        <img src="../logo/LOGO.png" style="max-width:20vw;max-height: 20vh;/">
  	</button></a>
  	<button id="toggle" class="button" style="max-width:2vw;max-height: 5vh; border:none;background-color: transparent;"><img src="../logo/lamp.png" style="max-width:5vw;max-height: 5vh;/">
    </button>
	<div class="nav">
		<div class="left-links">
			<div class="dropdown" style="display:inline-block;">
    			<button class="dropbtn" style="background-color:purple;color: black;">=</button>
    			<div class="dropdown-content" style="background-color:transparent;">
     				<a href="../program.html">&nbsp Program &nbsp</a>
     		 		<a href="../Jalur.html">&nbsp Jalur Belajar &nbsp</a>
      				<a href="../Costumer Care.html">&nbsp Costumer Care &nbsp</a>
    			</div>
    		</div>
    	</div>
		<div class="right-links">
			<a class="links" href="../index.html"style="font-size:1.4vw;">&nbsp Home &nbsp</a>
			<a class="links" href="../aboutme.html"style="font-size:1.4vw;">&nbsp Tentang Saya &nbsp</a>
			<a class="links" href="../logout.php"style="font-size:1.4vw;">&nbsp Logout &nbsp</a>
		</div>
	</div>
	<p>&nbsp</p>
		</div>
	</div>
	<p>&nbsp</p>
	<div class="footer">
  		<p><b>© Ayu Lestari</b></p>
  		<p ><a href="mailto:ayukdds@gmail.com" style="color: white;">yui@example.com</a></p>
	</div> 
</body> 
</html>