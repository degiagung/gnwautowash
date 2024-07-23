<?php 
require "../config/koneksi.php"; 
  
$id_user=$_SESSION['id_user'];
$judul=$_POST['judul'];
$promo=$_POST['promo'];
$start=$_POST['start'];
$end  =$_POST['end'];


if($start > $end){
 ?>
   <script language="JavaScript">
   alert('Tanggal Awal tidak boleh lebih dari Tanggal Akhir');
   document.location='index.php?p=tambah_promo'</script>
<?php }

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