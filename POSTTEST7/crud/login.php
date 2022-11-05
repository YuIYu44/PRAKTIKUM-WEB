<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/home.css">
	<link rel="stylesheet" href="../css/php-in.css">
	<title>Login</title>
</head>
<body>
	<marquee  behavior="alternate" style="font-style: oblique;font-size: 2vw; color: whitesmoke; background-color:mediumpurple;"> DISKON 50% AKHIR TAHUN UNTUK PAKET PREMIUM 6 BULAN. BERGABUNG SEGERA.</marquee>
	<img src="../logo/cool coder.png" style="max-height: 14%; max-width: 14%;margin-bottom: -4%;margin-top: -2%;"/>
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
			</div>
		</div>
	<div class="inputan">
	<div class="boxes">
	<h2 class="text" align="center">Login Akun</h2>
	<form action="" method="post">
		<label for="" >Username</label><br>
		<input type="text" name ="user" required><br><br>
		<label for="">Email</label><br>
		<input type="email" name ="emails" required><br><br>
		<input type="submit" name ="login" value="SUBMIT">
		 <input type="submit" id="admin" name="admin" value="ADMIN"/>
       </form>
      </div>
   </div>
</body>
</html>
<?php
	require 'koneksi.php';
	if(isset($_POST['login'])){
		$user=$_POST['user'];
		$email=$_POST['emails'];
		$query=mysqli_query($connect,"SELECT * FROM member_web WHERE nama='$user'");
		if(mysqli_num_rows($query)== 1){
			$row=mysqli_fetch_assoc($query);
			$username=$row['nama'];
			if($email==$row['email']){
			session_start();
			$_SESSION['login'] = true;
			echo "<script> alert('Selamat Datang $username')
			;document.location.href ='../interface/user.php';</script>";}
		}else{
			echo "<script> alert('Username atau Password salah')</script>";
		}
	}
	else if(isset($_POST['admin'])){
		$user=$_POST['user'];
		$email=$_POST['emails'];
		if($user=="admin" And $email=="123@123"){
			session_start();
			$_SESSION['admin'] = true;
    		header("Location:../interface/akses.php");}
    	else{
			echo "<script> alert('Username atau Password salah')</script>";
		}

}

?>