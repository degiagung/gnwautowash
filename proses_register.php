<?php
error_reporting(0);
session_start();
require_once("config/koneksi.php");

$nama=$_POST['nama'];
$handphone=$_POST['handphone'];
$email=$_POST['email'];
$password= md5($_POST['password']);
$cpassword=md5($_POST['cpassword']);
date_default_timezone_set('Asia/Jakarta');

if($nama == '' || $handphone == '' || $email == '' || $password == ''){
		?>
	<script language="JavaScript">
	alert('Mohon Pastikan Data Sudah Terisi');
	document.location='../register.php'</script>
	<?php
}

$cek = mysql_query("SELECT count(id_user) as jumlah_daftar FROM user WHERE hp = '$handphone' OR upper(username) = upper('$email')");
$htg = mysql_fetch_array($cek);
$jumlahnya = $htg['jumlah_daftar'];
if($jumlahnya!=0){
	?>
	<script language="JavaScript">
	alert('Maaf, Akun sudah terdaftar');
	document.location='../register.php'</script>
	<?php 
}
else{
	
	if($password != $cpassword){
		?>
		<script language="JavaScript">
		alert('Maaf, Password dan Confirm Password Tidak Sama');
		document.location='../register.php'
		</script>	
		<?php 
	}else{
		$queryy = "insert into user(username, nama, hp, status, role, password) values('$email','$nama', '$handphone', 1, 'customer', '$password')" ;
		$hasil  = mysql_query($queryy);
		//see the result
		$cekuser = mysql_query("SELECT * FROM user WHERE upper(username) = upper('$email') and password='$password'");
		$jumlah = mysql_num_rows($cekuser);
		$hasil = mysql_fetch_array($cekuser); 
		if ($hasil) {
			$_SESSION['id_user'] = $hasil['id_user'];
			$_SESSION['username'] = $hasil['username'];
			$_SESSION['nama'] = $hasil['nama'];
			$_SESSION['alamat'] = $hasil['alamat'];
			$_SESSION['hp'] = $hasil['hp'];
			$_SESSION['role'] = $hasil['role'];
		?>
		<script language="JavaScript">
		alert('Registrasi Akun Anda Berhasil Dilakukan');
		document.location='admin/index.php?p=home'</script>
		<?php
		}else{
		?>
		<script language="JavaScript">
		alert('Registrasi Gagal Dilakukan');
		document.location='../register.php'</script>
		<?php 
		}
	}

}
?>