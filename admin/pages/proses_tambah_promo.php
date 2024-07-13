<?php 
require "../config/koneksi.php"; 
  
$judul=$_POST['judul'];
$promo=$_POST['promo'];
$start=$_POST['start'];
$end  =$_POST['end'];

 $sql = "INSERT INTO promo  
           (  
			   judul,
			   promo,
            start,
            end
           ) 
 
           VALUES  
           (  
			   '$judul', 
            '$promo', 
            '$start', 
            '$end'
            )"; 

$hasil=mysql_query($sql);

//see the result
if ($hasil) {
?>
<script language="JavaScript">
alert('Data Promo Berhasil Ditambahkan');
document.location='index.php?p=promo'</script>
<?php
}else{
?>
<script language="JavaScript">
alert('Data Promo Gagal Ditambahkan');
document.location='index.php?p=tambah_promo'</script><?php }
?>