<?php 
require "../config/koneksi.php"; 
  
$id_jenis_cucian=$_POST['id_jenis_cucian'];
$jenis_cucian=$_POST['jenis_cucian'];
$biaya=$_POST['biaya'];

$sql2 = "UPDATE jenis_cucian SET jenis_cucian = '$jenis_cucian', biaya = '$biaya' WHERE id_jenis_cucian = '$id_jenis_cucian'";

$hasil2=mysql_query($sql2);

//see the result
if ($hasil2) {
?>
<script language="JavaScript">
alert('Data Berhasil Diubah');
document.location='index.php?p=jenis_cucian'</script>
<?php
}else{
?>
<script language="JavaScript">
alert('Data Gagal Diubah');
document.location='index.php?p=edit_jenis_cucian&id_jenis_cucian=<?= $id_jenis_cucian;?>'</script><?php }
?>