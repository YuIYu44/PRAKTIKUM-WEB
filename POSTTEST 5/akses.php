<?php
require 'koneksi.php';
$hasil = mysqli_query($connect,"SELECT * FROM member_web");
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cool Coder - Ayo Wujudkan Mimpi Menjadi Seorang Machine Learning Developer</title>
	<link rel="stylesheet" href="home.css">
	<link rel="stylesheet" href="php-in.css">
	<style>
		#footer {
			position: relative; 
			bottom:0 ;
			width: 100%;
			padding: 1px 0;
			background-color: rebeccapurple;}
	</style>
	<script src="darkmode.js" defer></script>
</head>
<body >
	<marquee  behavior="alternate" style="font-style: oblique;font-size: 2vw; color: whitesmoke; background-color:mediumpurple;"> DISKON 50% AKHIR TAHUN UNTUK PAKET PREMIUM 6 BULAN. BERGABUNG SEGERA.</marquee>
	<img src="logo/cool coder.png" style="max-height: 14%; max-width: 14%;margin-bottom: -4%;margin-top: -2%;"/>
  	<button id="toggle" class="button" style="max-width:2vw;max-height: 5vh; border:none;background-color: transparent;margin-left:78vw ;"><img src="logo/lamp.png" style="max-width:5vw;max-height: 5vh;/">
    </button>
		<div class="nav">
			<div class="left-links">
				<div class="dropdown" style="display:inline-block;">
    				<button class="dropbtn" style="background-color:purple;color: black;">=</button>
    				<div class="dropdown-content" style="background-color:transparent;">
     					<a href="program.html">&nbsp Program &nbsp</a>
     		 			<a href="Jalur.html">&nbsp Jalur Belajar &nbsp</a>
      					<a href="Costumer Care.html">&nbsp Costumer Care &nbsp</a>
    				</div>
    			</div>
    		</div>
			<div class="right-links">
				<a class="links" href="index.html"style="font-size:1.4vw;">&nbsp Home &nbsp</a>
				<a class="links" href="aboutme.html"style="font-size:1.4vw;">&nbsp Tentang Saya &nbsp</a>
			</div>
		</div>
	<div class="content">
   		<h3 style="color: black; font-size: 4vw; margin-bottom: 1vw; color: purple;">Data Member</h3>
    	<a href="input.php" style="color: black; font-size: 2vw;color: mediumpurple;">Tambah Data</a><br>
    	<table border=1 >
    		<thead>
        	<tr style="background-color: lavender;">
        		<th style="min-width: 10vw;font-size: 2vw;">ID</th>
            	<th  style="min-width: 10vw;font-size: 2vw;">Username</th>
           		<th  style="min-width: 10vw;font-size: 2vw;">Bank</th>
            	<th style="min-width: 10vw;font-size: 2vw;">Paket</th>
            	<th style="min-width: 10vw;font-size: 2vw;">Email</th>
            	<th style="min-width: 10vw;font-size: 2vw;">Nomor HP</th>
            	<th  style="min-width: 10vw;font-size: 2vw;"colspan='2'>Action</th>
        	</tr>
        	<thead>
        	<?php 
            	while($record = mysqli_fetch_array($hasil)){
        	?>
        	<tr>
            	<td ><?=$record['id']?></td>
            	<td><?=$record['nama']?></td>
            	<td><?=$record['bank']?></td>
            	<td><?=$record['paket']?></td>
            	<td><?=$record['email']?></td>
            	<td><?=$record['no']?></td>
            	<td><a  style="color:blue;" href="edit.php?id=<?=$record['id']?> "> EDIT </a></td>
            	<td><a style="color:blue;" href="delete.php?id=<?=$record['id']?>">HAPUS</a></td>
        	</tr>
            	<?php }
            	?>
    	</table>
		<p>&nbsp</p>
	</div>
	<div class="footer">
  			<p><b>© Ayu Lestari</b></p>
  			<p ><a href="mailto:ayukdds@gmail.com" style="color: white;">yui@example.com</a></p>
	</div>
</body>
</html>