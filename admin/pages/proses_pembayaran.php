<?php 
require "../config/koneksi.php"; 
  
$id_pendaftaran=$_POST['id_pendaftaran'];
$id_user=$_POST['id_user'];
$status=$_POST['status'];
$no_nota=$_POST['no_nota'];
$tanggal=$_POST['tanggal'];
$total=$_POST['total'];
$bayar=$_POST['bayar'];
$kembali=$_POST['kembali'];
$nama_pencuci=$_POST['nama_pencuci'];
if($kembali < 0) {
	?>
	<script language="JavaScript">
	alert('Jumlah pembayaran kurang dari total biaya ');
	document.location='index.php?p=tambah_pembayaran&id_pendaftaran=<?= $id_pendaftaran;?>'</script>
<?php }

// print_r($_FILES);die;
$target_dir = "../bukti/";
$target_file = $target_dir . basename($no_nota.'_'.$_FILES["bukti"]["name"]);
$uploadOk = 0;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
$check = getimagesize($_FILES["bukti"]["tmp_name"]);
if(!$check) {
	?>
	<script language="JavaScript">
	alert('File Bukti Belum diupload ');
	document.location='index.php?p=tambah_pembayaran&id_pendaftaran=<?= $id_pendaftaran;?>'</script>
<?php }

if ($_FILES["bukti"]["size"] > 1000000) {
  ?>
	<script language="JavaScript">
	alert('Bukti pembayaran tidak boleh lebih dari 10 MB');
	document.location='index.php?p=tambah_pembayaran&id_pendaftaran=<?= $id_pendaftaran;?>'</script>
<?php
}

// Allow certain file formats
if($imageFileType != "jpeg" && $imageFileType != "jpg") {
  ?>
	<script language="JavaScript">
	alert('Bukti pembayaran hanya jpg & jpeg');
	document.location='index.php?p=tambah_pembayaran&id_pendaftaran=<?= $id_pendaftaran;?>'</script>
<?php
}

if (move_uploaded_file($_FILES["bukti"]["tmp_name"], $target_file)) {
	$uploadOk = 1 ;
} else {
	?>
	<script language="JavaScript">
	alert('Upload Bukti gagal silahkan dicoba kembali');
	document.location='index.php?p=tambah_pembayaran&id_pendaftaran=<?= $id_pendaftaran;?>'</script>
<?php
}


 $sql = "INSERT INTO transaksi  
           ( 
        id_transaksi, 
			  id_pendaftaran,
			  no_nota,
			  tanggal,
			  bayar,
			  kembali,
			  total,
			  status,
			  id_user,
			  nama_pencuci,
			  bukti
           ) 
 
           VALUES  
           (  
        NULL,
			  '$id_pendaftaran', 
			  '$no_nota', 
			  '$tanggal',
			  '$bayar',
			  '$kembali',  
			  '$total',
			  '$status',
			  '$id_user',
			  '$nama_pencuci',
			  '$target_file' 
            )"; 

$hasil=mysql_query($sql);

$sql2 = "UPDATE pendaftaran SET status = 'Lunas' WHERE id_pendaftaran = '$id_pendaftaran'";

$hasil2=mysql_query($sql2);

//see the result
if ($hasil2) {
	
	include("sendmail.php");
?>
<script language="JavaScript">
alert('Data Pembayaran Berhasil Ditambahkan');
document.location='index.php?p=pendaftaran'</script>
<?php
}else{
?>
<script language="JavaScript">
alert('Data Pembayaran Gagal Ditambahkan');
document.location='index.php?p=tambah_pembayaran&id_pendaftaran=<?= $id_pendaftaran;?>'</script><?php }
?>