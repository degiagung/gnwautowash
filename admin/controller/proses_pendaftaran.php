<?php 
	require "../config/koneksi.php"; 
	include "model/customer.php"; 

	// print_r($_POST);die;
	$next=$_POST['next'];
	$id_customer=$_POST['id_customer']; 
	// $no_hp=$_POST['no_hp'];
	// $alamat= $_POST['alamat'];
	$nomor_plat=$_POST['nomor_plat'];
	$type_mobil=$_POST['type_mobil'];
	$no_antrian=$_POST['no_antrian'];
	$id_jenis_cucian=$_POST['id_jenis_cucian'];
	$nomor_plat=$_POST['nomor_plat'];
	// $total_biaya=$_POST['total_biaya'];
	$total_biaya=0;
	$tgl_pendaftaran=$_POST['tgl_pendaftaran'];
	$createdby = $_SESSION['id_user'] ;
	if ($_SESSION['role'] == 'customer') {
		$iduser = $_SESSION['id_user'];
		$nama = $_SESSION['nama'];
		$queryy = "insert into $tbl(id_customer, nama, nomor_plat, type_mobil, id_user) values('$id_customer','$nama', '$nomor_plat', '$type_mobil',$iduser)" ;

	}else{
		$iduser = $_POST['id_user'];
		$nama   = mysql_fetch_array(mysql_query("select nama from user where id_user  = $iduser"));
		$nama   = $nama['nama'] ;
		if ($iduser == 't') { 
			$nama= 'Pendaftaran Offline '-$nomor_plat;
			$iduser = '99999999999';
			$queryy = "insert into $tbl(id_customer, nama, nomor_plat, type_mobil) values('$id_customer','$nama', '$nomor_plat', '$type_mobil')" ;

		}
	}
	date_default_timezone_set('Asia/Jakarta');
	// $jam_pendaftaran=date("H:i:s");
	$jam_pendaftaran=$_POST['jam_pendaftaran'];

	$query="SELECT count(id_pendaftaran) as jumlah_daftar FROM pendaftaran WHERE tgl_pendaftaran = current_date and status not in('Batal','Lunas') ";
	$cek = mysql_query($query." and jam_pendaftaran = '$jam_pendaftaran' HAVING COUNT(id_pendaftaran) >= 4");
	$cek2= mysql_query($query." and id_customer in (select id_customer from $tbl where id_user = $iduser)");
	$htg = mysql_fetch_array($cek);
	$htg2= mysql_fetch_array($cek2);
	$jumlahnya = 0 ;
	if($htg && $_SESSION['role'] == 'customer'){
		$jumlahnya = $htg['jumlah_daftar'];
	}
	$jumlahnya2 = 5 ;
	if($htg2){
		$jumlahnya2 = $htg2['jumlah_daftar'] ;
	}
	if($jumlahnya2 >= 4 && $_SESSION['role'] == 'customer')
	{
		?>
		<script language="JavaScript">
			alert('Maaf, Anda sudah Melakukan Antrian');
			document.location='index.php?p=antrian'</script>
<?php 	
	}
if($jumlahnya!=0){
?>
<script language="JavaScript">
alert('Maaf, Jam Yang Anda Inginkan Sudah Dibooking, Silahkan Pilih Jam Yang Lainnya');
document.location='index.php?p=antrian'</script>
<?php 
}
else{

if($next>'16'){
	?>
<script language="JavaScript">
alert('Maaf, Antrian Hari Ini Sudah Penuh, Silahkan Daftar Kembali Di Hari Berikutnya');
document.location='index.php?p=antrian'</script>	

<?php 
} elseif ($next<='30') {

$queryy = "insert into $tbl(id_customer, nama, nomor_plat, type_mobil, id_user) values('$id_customer','$nama', '$nomor_plat', '$type_mobil','$iduser')" ;
$hasill = mysql_query($queryy);

$query = "insert into pendaftaran(id_pendaftaran, no_antrian, id_customer, tgl_pendaftaran, jam_pendaftaran, total_biaya, status, id_jenis_cucian,created_by) values(NULL,'$no_antrian', '$id_customer', '$tgl_pendaftaran', '$jam_pendaftaran', '$total_biaya', 'Pendaftaran', $id_jenis_cucian,$createdby)" ;
$hasil = mysql_query($query);
}
//see the result
if ($hasil) {
?>
<script language="JavaScript">
alert('Pendaftaran Anda Berhasil Dilakukan, Silahkan Datang Ke Cucian Kami Maksimal 15 Menit Dari Jam Booking');
document.location='index.php?p=antrian'</script>
<?php
}else{
?>
<script language="JavaScript">
alert('Pendaftaran Gagal Dilakukan');
document.location='index.php?p=antrian'</script>
<?php 
}
}
?>