<?php 
require "../config/koneksi.php"; 
  
if ($_POST['tgl_awal_tutup'] && $_POST['tgl_akhir_tutup']) {
    if($_POST['tgl_awal_tutup'] != '' && $_POST['tgl_akhir_tutup'] != ''){
        $awal   = $_POST['tgl_awal_tutup'] ;
        $akhir  = $_POST['tgl_akhir_tutup'] ;
        $sql    = "INSERT INTO status_operasional (status,start,end) VALUES ('tutup','$awal','$akhir')";
        $hasil=mysql_query($sql);

        if($hasil){
            ?>
                <script language="JavaScript">
                alert('Data Berhasil Ditambahkan');
                document.location='index.php?p=home'</script>
            <?php
        }else{
          ?>
                <script language="JavaScript">
                alert('Data Gagal Ditambahkan');
                document.location='index.php?p=home'</script>
            <?php
        }
    }
}else{
  ?>
      <script language="JavaScript">
      alert('Tanggal tidak boleh kosong');
      document.location='index.php?p=home'</script>
  <?php
}
?>