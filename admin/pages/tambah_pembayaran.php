<?php
  include("../config/koneksi.php");  
  ?>
  <?php
$id_pendaftaran = $_GET['id_pendaftaran']; //get the no which will updated

$queryy = mysql_query("SELECT pendaftaran.*,customer.*,jenis_cucian.*,user.username as email,user.voucher FROM pendaftaran join customer using(id_customer) join jenis_cucian using (id_jenis_cucian) left join user using(id_user) WHERE id_pendaftaran = '$id_pendaftaran'"); //get the data that will be updated
$dt=mysql_fetch_array($queryy);

// print_r($dt);die;
$id_user   = $dt['id_user']; 
$pelanggan = $dt['nama']; 
$email     = $dt['email']; 
$voucher   = $dt['voucher']; 
?>

<div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Pembayaran</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Pembayaran</a></li>
                                    <li class="active"><a href="#">Data Pembayaran</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Pembayaran</strong>
                            </div>
                            <div class="card-body">
         
<form action="index.php?c=controller&p=proses_pembayaran" method="post" enctype="multipart/form-data" class="form-horizontal">
    <input type="hidden" id="text-input" name="id_pendaftaran" class="form-control" value="<?= $dt['id_pendaftaran'];?>">
    <input type="hidden" id="text-input" name="id_user" class="form-control" value="<?= $id_user;?>">
    <input type="hidden" id="text-input" name="status" class="form-control" value="Lunas">
    <input type="hidden" id="text-input" name="pelanggan" class="form-control" value="<?= $pelanggan;?>">
    <input type="hidden" id="text-input" name="email" class="form-control" value="<?= $email;?>">
    <input type="hidden" id="voucher" name="voucher" class="form-control" value="<?= $voucher;?>">

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">No. Antrian</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="no_antrian" placeholder="Text" class="form-control" value="<?= $dt['no_antrian'];?>" readonly>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Customer</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="nama" placeholder="Text" class="form-control" value="<?= $dt['nama'];?>" readonly>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">No. Plat</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="nomor_plat" placeholder="Text" class="form-control" value="<?= $dt['nomor_plat'];?>" >
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Type Mobil</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="type_mobil" placeholder="Text" class="form-control" value="<?= $dt['type_mobil'];?>" readonly>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jenis Cucian</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="type_mobil" placeholder="Text" class="form-control" value="<?= $dt['jenis_cucian'];?>" readonly>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">No. Nota</label></div>
                                        <div class="col-12 col-md-9">
                                            <?php

                                            $sql = mysql_query("SELECT no_nota FROM transaksi");
                                                echo '<input type="text" class="form-control" id="no_nota" value="';

                                            $no_nota = "C001";
                                            if(mysql_num_rows($sql) == 0){
                                                echo $no_nota;
                                            }

                                            $result = mysql_num_rows($sql);
                                            $counter = 0;
                                            while(list($no_nota) = mysql_fetch_array($sql)){
                                                if (++$counter == $result) {
                                                    $no_nota++;
                                                    echo $no_nota;
                                                }
                                            }
                                                echo '"name="no_nota" placeholder="No. Nota" readonly>';

                                        ?>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Tanggal Pembayaran</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="date" id="email-input" name="tanggal" value="<?= date("Y-m-d");?>" class="form-control" readonly>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Total Biaya</label></div>
                                        <?php
                                            $jenisc     = $dt['id_jenis_cucian'];
                                            $cekchild   = mysql_query("SELECT * FROM jenis_cucian where id_parent = $jenisc");
                                            // print_r($cekchild);die;
                                            if($cekchild->num_rows >= 1){

                                        ?>
                                        <div class="col-12 col-md-4">
                                            <?php
                                                    $result = $cekchild;
                                                    $jsArray = "var prdName = new Array();\n";
                                                    echo '<select class="form-control" onchange="harga(this)">';
                                                    echo '<option value="">Pilih</option>';
                                                    while ($row = mysql_fetch_array($result)) {
                                                        echo '<option value="' . $row['biaya'] . '">' . $row['jenis_cucian'] . '</option>';
                                                    }
                                                    echo '</select>';

                                                    ?>
                                        </div>
                                    <?php
                                        }else{
                                    ?>
                                    <script>
                                        setTimeout(() => {
                                            var txtSecondNumberValue = <?= $dt['biaya'] ?>; 
                                            if (!isNaN(txtSecondNumberValue)) {
                                                document.getElementById('txt2').value = keyuprp(txtSecondNumberValue.toString());
                                            }
                                        }, 1000);
                                    </script>
                                    <?php
                                        }
                                    ?>
                                        <div class="col-12 col-md-5">
                                            <input type="text" name="total" id="txt2" class="form-control" value="<?= $dt['total_biaya'];?>" readonly>
                                        </div>
                                    </div>

                                    <div id="voucheraktif" style="display:none">
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Uang Yang Dibayarkan</label></div>
                                            <div class="col-12 col-md-6">
                                                <input type="text" class="form-control" disabled value="LUNAS DENGAN VOUCHER" >
                                            </div>
                                            <div class="col-12 col-md-2">
                                                <a class="btn btn-danger" href="index.php?c=controller&p=reset_voucher&from=admin&id_user=<?= $id_user?>&id_pendaftaran=<?= $id_pendaftaran?>" onClick="return confirm('Apakah Anda Yakin Reset Voucher ?')">Reset Voucher</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="vouchergaaktif">
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Uang Yang Dibayarkan</label></div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="txt1"  onkeyup="sum();" name="bayar" class="form-control" required="">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kembalian</label></div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" name="kembali" class="form-control" required="" readonly="" id="txt3" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Penanggung Jawab Cuci</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" name="nama_pencuci" class="form-control" required="">
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Bukti</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="file" name="bukti" id="bukti" class=" form-control-label" required="">
                                        </div>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                </form>


                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

<script>
    $("#voucheraktif").hide();
    
    function harga(data){
        var txtSecondNumberValue = data.value; 
        if (!isNaN(txtSecondNumberValue)) {
            document.getElementById('txt2').value = keyuprp(txtSecondNumberValue.toString());
        }
    }
    function sum(data) {
        var txtFirstNumberValue  = document.getElementById('txt1').value;
        var txtSecondNumberValue = document.getElementById('txt2').value;
        var voucher              = document.getElementById('voucher').value;
        var result = parseInt(txtFirstNumberValue.replace(/[^,\d]/g, '')) - parseInt(txtSecondNumberValue.replace(/[^,\d]/g, ''));
        if (!isNaN(txtFirstNumberValue)) {
            convertrp('txt1');
        }
        
        if (!isNaN(result)) {
            document.getElementById('txt3').value = keyuprp(result.toString());
        }
        myvoucher($("#voucher").val(),$("#txt2").val());
        
    }
    
</script>