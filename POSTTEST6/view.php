<!-- bagian ini masihlah belum selesai sehingga akan dilakukan update fitur-fitur selanjutnya -->
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
<body>
	<marquee  behavior="alternate" style="font-style: oblique;font-size: 2vw; color: whitesmoke; background-color:mediumpurple;"> DISKON 50% AKHIR TAHUN UNTUK PAKET PREMIUM 6 BULAN. BERGABUNG SEGERA.</marquee>
	<img src="https://lh3.googleusercontent.com/d/1AdbvyM-LgWHqWYXFO0loCYMCeBIlmLVF" style="max-height: 14%; max-width: 14%;margin-bottom: -4%;margin-top: -2%;"/>
  	<button id="toggle" class="button" style="max-width:5vw;max-height: 5vh; border:none;background-color: transparent;margin-left: 80% ;"><img src="lamp.png" style="max-width:5vw;max-height: 5vh;/">
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
	<p>&nbsp</p>
        <main class="box">
        <h2 class="text" style="font-size: 2vw; color:black;">KAMI TELAH MENGIRIM INFORMASI PEMBAYARAN KE NOMOR ANDA 
        </h2>
        <h3 class="text" style="color:red;">MOHON SELESAIKAN PESANAN ANDA SEBELUM 24 JAM</h3>
        <div class="hasil">
            <div class="box2">
                <?php
                    if(isset($_POST['submit'])){
                    	$gambar=$_FILES['picture']
                        $nama= $_POST['nama'];
                        $bank= $_POST['bank'];
                        $paket= $_POST['paket'];
                        $email= $_POST['email'];
                        $no= $_POST['no'];
                    }
                    echo "<pre> Pesanan dari\n";
                    echo "<br> Username     : $nama";
                    echo "<br> Bank         : $bank";
                    echo "<br> Paket        : $paket";
                    echo "<br> Email        : $email";
                    echo "<br> Nomor Hp     : $no";
                ?>
            </div>
            <p style="font-size:1.7vw;margin-left: 5%;"> *bukti pembayaran akan otomatis dikirimkan melalui Email </p>
        </div>
    </main>
	<p>&nbsp</p>
	<div class="footer">
  		<p><b>© Ayu Lestari</b></p>
  		<p ><a href="mailto:ayukdds@gmail.com" style="color: white;">yui@example.com</a></p>
	</div>
</body>
</html>