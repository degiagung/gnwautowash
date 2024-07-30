<?php
include "../config/koneksi.php";
$id = $_GET['id'];
$hasil=mysql_query("delete from status_operasional where id= $id");

if ($hasil) {
?>
<script language="JavaScript">
alert('Data Berhasil Dihapus');
document.location='index.php?p=home'</script>
<?php
}else{
?>
<script language="JavaScript">
alert('Data Gagal Dihapus');
document.location='index.php?p=home'</script><?php }
?>