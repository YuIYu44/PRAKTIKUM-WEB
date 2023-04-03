<?php
    require 'koneksi.php';
    date_default_timezone_set("Asia/Singapore");
    if(isset($_GET['id'])){
        $id = $_GET['id'];}
    $hasil = mysqli_query($connect, "SELECT * FROM member_web WHERE id='$id'");
    $baris = mysqli_fetch_array($hasil);
     if(isset($_POST["editan"])){
        unlink("pelanggan/{$baris['picture']}");
        $gambar = $_FILES['picture']['name'];
        $waktu= date("Y-m-d H:i:s");
        $nama = $_POST['nama'];
        $bank = $_POST['bank'];
        $paket = $_POST['paket'];
        $email = $_POST['email'];
        $no = $_POST['no'];
        $x = explode('.',$gambar);
        $ekstensi = strtolower(end($x));
        $gambar_baru = "$nama.$ekstensi";
        $tmp = $_FILES['picture']['tmp_name'];
        if(move_uploaded_file($tmp, "pelanggan/".$gambar_baru)){
            $hasil = mysqli_query($connect, 
            "UPDATE member_web SET picture='$gambar_baru' ,nama = '$nama', bank = '$bank', paket = '$paket', email = '$email', no = '$no',waktu='$waktu' WHERE id='$id'");
            if($hasil){
                echo "
                    <script>
                        alert('Data Berhasil di Update');
                        document.location.href = 'akses.php';
                    </script>
                    ";
             }else {
                echo "
                <script>
                    alert('Data Gagal Di Update');
                </script>
            ";
        }
    }}
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
    <p>&nbsp</p>
    <main id="dark">
    <h2 class="text" align="center">EDIT</h2>
    <div class="inputan">
            <form action="" method = "post" enctype = "multipart/form-data">
                <label for="">Gambar Profil</label><br>
                <input type="file" name="picture" id="picture" required value=<?=$baris['picture']?> ><br><br>
                <label for="Username"> Username </label>
                    <input required placeholder="Username" id="nama" name="nama" type="text" value=<?=$baris['nama']?> />
                <br>
        
                <label for="BANK"> BANK </label>
                <select name="bank" id="bank" required value=<?=$baris['bank']?>>
                    <option value="BRI" <?=$baris['bank']=="BRI"?"selected":''?>>BRI</option>
                    <option value="BTN"<?=$baris['bank']=="BTN"?"selected":''?>>BTN</option>
                    <option value="MANDIRI"<?=$baris['bank']=="MANDIRI"?"selected":''?>>MANDIRI</option>
                    <option value="BNI"<?=$baris['bank']=="BNI"?"selected":''?>>BNI</option>
                </select>
                <br>
                <label for="PAKET"> PAKET </label>
                <select name="paket" id="paket" required>
                    <option value="3 BULAN" <?=$baris['paket']=="3 BULAN"?"selected":''?>>PREMIUM 3 BULAN</option>
                    <option value="6 BULAN" <?=$baris['paket']=="6 BULAN"?"selected":''?>>PREMIUM 6 BULAN</option>
                </select>
                <br>
                <label for="email"> Email </label>
                 <input required placeholder="Email" id="email" name="email"  type="email" value=<?=$baris['email']?>>
                <br>
                <label for="nomor"> Nomor Telepon </label>
                <input required placeholder="08XXXXXXXXX" id="no" name="no" type="text"
                  value=<?=$baris['no']?>>
                <input type="submit" name="editan" value="EDIT"/>
            </form>
    </div>
 </main>
    <p>&nbsp</p>
    </div>
    <div class="footer">
        <p><b>© Ayu Lestari</b></p>
        <p ><a href="mailto:ayukdds@gmail.com" style="color: white;">yui@example.com</a></p>
    </div>
</body>
</html>