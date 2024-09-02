<?php 
require "../config/koneksi.php"; 
  
$type_mobil=$_POST['type_mobil'];
$id_parent=$_POST['id_parent'];

 $sql = "INSERT INTO type_mobil  
           ( 
        id_type_mobil, 
			  type_mobil,
           id_parent
           ) 
 
           VALUES  
           (  
        NULL,
			  '$type_mobil',
           $id_parent
            )"; 

$hasil=mysql_query($sql);

//see the result
if ($hasil) {
?>
<script language="JavaScript">
alert('Data Berhasil Ditambahkan');
document.location='index.php?p=merek_mobil'</script>
<?php
}else{
?>
<script language="JavaScript">
alert('Data Gagal Ditambahkan');
document.location='index.php?p=tambah_merek_mobil'</script><?php }
?>