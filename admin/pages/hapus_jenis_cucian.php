<?php
include "../config/koneksi.php";
$id_jenis_cucian = $_GET['id_jenis_cucian'];
$hasil=mysql_query("delete from jenis_cucian where id_jenis_cucian='$id_jenis_cucian'");

if ($hasil) {
?>
<script language="JavaScript">
alert('Data Berhasil Dihapus');
document.location='index.php?p=jenis_cucian'</script>
<?php
}else{
?>
<script language="JavaScript">
alert('Data Gagal Dihapus');
document.location='index.php?p=jenis_cucian'</script><?php }
?>