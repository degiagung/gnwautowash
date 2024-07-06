<?php 
	require "../config/koneksi.php"; 

	$next=$_POST['next'];
	$id_customer=$_POST['id_customer'];  
	$nama=$_POST['nama'];
	$no_hp=$_POST['no_hp'];
	$alamat= $_POST['alamat'];
	$nomor_plat=$_POST['nomor_plat'];
	$type_mobil=$_POST['type_mobil'];
	$no_antrian=$_POST['no_antrian'];
	$id_jenis_cucian=$_POST['id_jenis_cucian'];
	$nomor_plat=$_POST['nomor_plat'];
	$total_biaya=$_POST['total_biaya'];
	$tgl_pendaftaran=$_POST['tgl_pendaftaran'];

	if ($_SESSION['role'] == 'customer') {
		$iduser = $_SESSION['id_user'];
	}else{
		$iduser = $_POST['id_user'];
		if ($iduser == 't') {
			$iduser = '';
		}
	}
	date_default_timezone_set('Asia/Jakarta');
	// $jam_pendaftaran=date("H:i:s");
	$jam_pendaftaran=$_POST['jam_pendaftaran'];

	$query="SELECT count(id_pendaftaran) as jumlah_daftar FROM pendaftaran WHERE jam_pendaftaran = '$jam_pendaftaran' and tgl_pendaftaran = current_date and status not in('Batal','Lunas') ";
	$cek = mysql_query($query." HAVING COUNT(id_pendaftaran) >= 2");
	$cek2= mysql_query($query." and id_customer in (select id_customer from customer where id_user = $iduser)");
	$htg = mysql_fetch_array($cek);
	$htg2= mysql_fetch_array($cek2);
	$jumlahnya = $htg['jumlah_daftar'];
	if($htg2['jumlah_daftar'] >= 1 && $_SESSION['role'] == 'customer')
	{
?>
		<script language="JavaScript">
		alert('Maaf, Anda sudah Melakukan Antrian');
		document.location='index.php?p=home'</script>
<?php 	
	}
if($jumlahnya!=0){
?>
<script language="JavaScript">
alert('Maaf, Jam Yang Anda Inginkan Sudah Dibooking, Silahkan Pilih Jam Yang Lainnya');
document.location='index.php?p=home'</script>
<?php 
}
else{

if($next>'16'){
	?>
<script language="JavaScript">
alert('Maaf, Antrian Hari Ini Sudah Penuh, Silahkan Daftar Kembali Di Hari Berikutnya');
document.location='index.php?p=home'</script>	

<?php 
} elseif ($next<='30') {

$queryy = "insert into customer(id_customer, nama, no_hp, alamat, nomor_plat, type_mobil, id_user) values('$id_customer','$nama', '$no_hp', '$alamat', '$nomor_plat', '$type_mobil','$iduser')" ;
$hasill = mysql_query($queryy);

$query = "insert into pendaftaran(id_pendaftaran, no_antrian, id_customer, id_jenis_cucian, tgl_pendaftaran, jam_pendaftaran, total_biaya, status) values(NULL,'$no_antrian', '$id_customer', '$id_jenis_cucian', '$tgl_pendaftaran', '$jam_pendaftaran', '$total_biaya', 'Pendaftaran')" ;
$hasil = mysql_query($query);
}
//see the result
if ($hasil) {
?>
<script language="JavaScript">
alert('Pendaftaran Anda Berhasil Dilakukan, Silahkan Datang Ke Cucian Kami Maksimal 10 Menit Dari Jam Booking');
document.location='index.php?p=home'</script>
<?php
}else{
?>
<script language="JavaScript">
alert('Pendaftaran Gagal Dilakukan');
document.location='index.php?p=home'</script>
<?php 
}
}
?>