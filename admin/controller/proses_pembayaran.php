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
$nomor_plat=$_POST['nomor_plat'];
$voucher=$_POST['voucher'];

	if($voucher == 'aktif'){
		$bayar = $total ;
		$kembali = 0 ;
	}
	

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
	mysql_query("UPDATE customer SET nomor_plat = '$nomor_plat' WHERE id_customer in( select id_customer from pendaftaran  where id_pendaftaran = '$id_pendaftaran')");
	
	if($voucher == 'aktif'){
		mysql_query("update user set voucher = null , tgl_voucher = null where id_user =".$id_user);
	}
	$cekvoucher = "SELECT a.*,b.tanggal FROM user a join transaksi b on a.id_user = b.id_user WHERE b.status = 'Lunas' AND a.id_user = $id_user";
	$hasilvoucher = mysql_query($cekvoucher);
	if($hasilvoucher->num_rows >= 11){
		
		$getup11 	  = $cekvoucher." AND b.tanggal >= COALESCE(a.tgl_voucher,0) limit 11" ;
		$getup11 	  = mysql_query($getup11);
		if($getup11->num_rows >= 11){
			$dataup11	  = mysql_fetch_array($getup11);
			$tanggal	  = $dataup11['tanggal'] ;
			mysql_query("UPDATE user SET voucher = 'aktif',tgl_voucher = '$tanggal' WHERE id_user = '$id_user'");
		}
	}elseif($hasilvoucher->num_rows == 10){
		mysql_query("UPDATE user SET voucher = 'aktif',tgl_voucher = now() WHERE id_user = '$id_user'");
	}

	
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