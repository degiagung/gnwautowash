<?php 
require "../config/koneksi.php"; 
  
$id_promo=$_POST['id_promo'];
$judul=$_POST['judul'];
$promo=$_POST['promo'];
$start=$_POST['start'];
$end  =$_POST['end'];

$sql2 = "UPDATE promo SET judul = '$judul', promo = '$promo', start = '$start', end = '$end' WHERE id_promo = '$id_promo'";

$hasil2=mysql_query($sql2);

//see the result
if ($hasil2) {
?>
<script language="JavaScript">
alert('Data Berhasil Diubah');
document.location='index.php?p=promo'</script>
<?php
}else{
?>
<script language="JavaScript">
alert('Data Gagal Diubah');
document.location='index.php?p=edit_promo&id_promo=<?= $id_promo;?>'</script><?php }
?>