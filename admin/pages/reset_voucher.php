<?php

    require "../config/koneksi.php"; 
    $from = $_GET['from'];

    if($from == 'system'){
        mysql_query("update user set voucher = null , tgl_voucher = null where voucher = 'aktif' and (tgl_voucher is null OR tgl_voucher + INTERVAL 1 month <= now())");
    }else{
        $id_user = $_GET['id_user'];
        $id_pendaftaran = $_GET['id_pendaftaran'];
        mysql_query("update user set voucher = null , tgl_voucher = null where id_user =".$id_user);
        ?>
            <script>
                alert('Voucher berhasil dihapus');
                document.location='index.php?p=tambah_pembayaran&id_pendaftaran=<?= $id_pendaftaran;?>'
            </script>
        <?php
    }
?>