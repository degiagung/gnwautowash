<?php
    require "../../config/koneksi.php"; 
    include "../model/user.php"; 
    $class = $_POST['class'];
    
    $class();
    function tracking(){
        $plat   = str_replace(' ','',$_POST['plat']) ;
        $query  = "SELECT * FROM pendaftaran WHERE tgl_pendaftaran = current_date and id_customer in (select id_customer from customer where REPLACE(lower(nomor_plat),' ','') = lower('$plat')) ORDER BY id_pendaftaran desc";
        $query  = mysql_query($query);
        $hasil  = mysql_fetch_array($query);

        echo json_encode($hasil);
    }    
    function cekharga(){
        $id     = $_POST['id'] ;
        $query  = "SELECT * FROM jenis_cucian WHERE id_jenis_cucian = $id";
        $query  = mysql_query($query);
        $hasil  = mysql_fetch_array($query);

        print_r($hasil);die;
        echo json_encode($hasil);
    }    

?>