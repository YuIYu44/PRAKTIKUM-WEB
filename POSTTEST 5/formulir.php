<?php
require 'koneksi.php';
if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $bank = $_POST['bank'];
        $paket = $_POST['paket'];
        $email = $_POST['email'];
        $no = $_POST['no'];
        $result = mysqli_query($connect, 
        "INSERT INTO  member_web(nama, bank,paket,email,no) 
        VALUES ('$nama','$bank','$paket','$email','$no')");
        if($result){
            echo "
                <script>
                    alert('Data Berhasil Dikirim');
                </script>
            ";
        }else {
            echo "
                <script>
                    alert('Data Gagal Dikirim');
                </script>
            ";
        }
    }
if(isset($_POST['admin'])){
    header("Location:akses.php");
}
?>
<!DOCTYPE html>
<main id="dark">
	<h2 class="text" align="center">DAFTAR</h2>
	<div class="inputan">
            <form action="" method="POST" >
                <label for="Username"> Username </label>
                    <input required placeholder="Username" id="nama" name="nama" type="text" autocomplete='nama'
                    />
                <br>
        
                <label for="BANK"> BANK </label>
                <select name="bank" id="bank" required >
                    <option value="BRI">BRI</option>
                    <option value="BTN">BTN</option>
                    <option value="MANDIRI">MANDIRI</option>
                    <option value="BNI">BNI</option>
                </select>
                <br>
                <label for="PAKET"> PAKET </label>
                <select name="paket" id="paket" required >
                    <option value="3 BULAN">PREMIUM 3 BULAN</option>
                    <option value="6 BULAN">PREMIUM 6 BULAN</option>
                </select>
                <br>
                <label for="email"> Email </label>
               	 <input required placeholder="Email" id="email" name="email"  type="email" autocomplete='email'/>
                <br>
                <label for="nomor"> Nomor Telepon </label>
               	 <input required placeholder="08XXXXXXXXX" id="no" name="no" type="text"
               	  autocomplete='no' />
                <input type="submit" id="submit" name="submit" value="DAFTAR"/>
            </form>
            <form action="" method="POST" >
                <input type="submit" id="admin" name="admin" value="ADMIN"/>
            </form>
 	</div>
 </main>