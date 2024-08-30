<?php 
require "../config/koneksi.php"; 
  
$jenis_cucian=$_POST['jenis_cucian'];
$id_parent=$_POST['id_parent'];
$biaya=str_replace('.,','',$_POST['biaya']);

 $sql = "INSERT INTO jenis_cucian  
           ( 
         id_jenis_cucian, 
			  jenis_cucian,
			  biaya,
           id_parent
           ) 
 
           VALUES  
           (  
        NULL,
			  '$jenis_cucian', 
			  '$biaya',
           $id_parent
            )"; 

$hasil=mysql_query($sql);

//see the result
if ($hasil) {
?>
<script language="JavaScript">
alert('Data Pembayaran Berhasil Ditambahkan');
document.location='index.php?p=jenis_cucian'</script>
<?php
}else{
?>
<script language="JavaScript">
alert('Data Pembayaran Gagal Ditambahkan');
document.location='index.php?p=tambah_jenis_cucian'</script><?php }
?>