<?php 
require "../config/koneksi.php"; 
  
$a=$_POST['kode'];
$b=$_POST['jenis'];

 $sql = "INSERT INTO pencucian  
           ( 
            kode,jenis
           ) 
 
           VALUES  
           (   
			  '$a','$b'
            )"; 

$hasil=mysql_query($sql);

//see the result
if ($hasil) {
?>
<script language="JavaScript">
alert('Data User Berhasil Ditambahkan');
document.location='index.php?p=test'</script>
<?php
}else{
?>
<script language="JavaScript">
alert('Data User Gagal Ditambahkan');
document.location='index.php?p=test'</script><?php }
?>