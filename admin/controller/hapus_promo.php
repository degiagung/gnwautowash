<?php
include "../config/koneksi.php";
$id_promo = $_GET['id_promo'];
$hasil=mysql_query("delete from promo where id_promo= $id_promo");

if ($hasil) {
?>
<script language="JavaScript">
alert('Data Berhasil Dihapus');
document.location='index.php?p=promo'</script>
<?php
}else{
?>
<script language="JavaScript">
alert('Data Gagal Dihapus');
document.location='index.php?p=promo'</script><?php }
?>