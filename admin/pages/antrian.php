

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card" style="border: 8px solid #f9d018;">
                            
                            <div class="card-body testtt" align="center">
                                <b>Pendaftaran Antrian</b>
                            </div>
                        </div>
                    </div>
                    <?php if($_SESSION['role'] == 'customer') {?>
                        <div class="col-md-12">
                            <div class="card" style="border: 8px solid #f9d018;">
                                <div class="card-header" >
                                    <strong class="card-title"><center>JADWAL YANG TERSEDIA</center></strong>
                                    <span ><center>
                                        <?php  
                                            if(date('m') =='01'){$bulan = 'Januari';};
                                            if(date('m') =='02'){$bulan = 'Februari';};
                                            if(date('m') =='03'){$bulan = 'Maret';};
                                            if(date('m') =='04'){$bulan = 'April';};
                                            if(date('m') =='05'){$bulan = 'Mei';};
                                            if(date('m') =='06'){$bulan = 'Juni';};
                                            if(date('m') =='07'){$bulan = 'Juli';};
                                            if(date('m') =='08'){$bulan = 'Agustus';};
                                            if(date('m') =='09'){$bulan = 'September';};
                                            if(date('m') =='10'){$bulan = 'Oktober';};
                                            if(date('m') =='11'){$bulan = 'November';};
                                            if(date('m') =='12'){$bulan = 'Desember';};
                                            echo date('d').' '.$bulan.' '.date('Y');
                                        ?></center>
                                    </span><br>
                                </div>
                                <div class="card-body" align="center">
                                    <table class="table table-striped table-bordered" id="tablejadwal">
                                        <!-- <thead> -->
                                            
                                        <!-- </thead> -->
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card" style="border: 8px solid #f9d018;">
                                <div class="card-header" >
                                    <strong class="card-title"><center>BOOKING ANTRIAN</center></strong>
                                </div>
                                <div class="card-body">
                                    <?php
                                        date_default_timezone_set('Asia/Jakarta');
                                        $tgl_pendaftaran = date("Y-m-d");
                                        $queryy = mysql_query("SELECT no_antrian FROM pendaftaran WHERE tgl_pendaftaran = '$tgl_pendaftaran'");
                                        $htg = mysql_num_rows($queryy);

                                        $next = $htg + 1;

                                        $no_antrian = $tgl_pendaftaran . '/' . $next;

                                        $hitung = mysql_query("SELECT max(id_customer) as id_terakhir from customer");
                                        $cari = mysql_fetch_array($hitung);
                                        $id_lanjut = $cari['id_terakhir'] + 1;

                                        ?>
                                    <form action="index.php?c=controller&p=proses_pendaftaran" method="post" enctype="multipart/form-data" class="form-horizontal">
                                        <input type="hidden" class="form-control" id="nama" name="id_customer" value="<?=$id_lanjut;?>">
                                        
                                        <!-- <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama</label></div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="nama" name="nama" class="form-control" required="">
                                            </div>
                                        </div> -->

                                        <!-- <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">No Handphone</label></div>
                                            <div class="col-12 col-md-9">
                                                <input type="tel" min=0  onkeypress="return window.isNumberKey(event)" id="email" name="no_hp" class="form-control" required="">
                                            </div>
                                        </div> -->

                                        <!-- <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Alamat</label></div>
                                            <div class="col-12 col-md-9">
                                                <textarea type="text" id="alamat" name="alamat" rows="6" class="form-control" required=""></textarea>
                                            </div>
                                        </div> -->

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">No Plat</label></div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="email" name="nomor_plat" class="form-control" required="">
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jenis Kendaraan</label></div>
                                            <div class="col-12 col-md-9">
                                                <?php
                
                                                    $result2 = mysql_query("select * from type_mobil");
                                                    echo '<select name="type_mobil" class="form-control-rounded form-control" required="">';
                                                    echo '<option value="">Pilih Tipe Mobil</option>';
                                                    while ($row2 = mysql_fetch_array($result2)) {
                                                        echo '<option value="' . $row2['type_mobil'] . '">' . $row2['type_mobil'] . '</option>';
                                                    }
                                                    echo '</select>';


                                                ?>
                                            </div>
                                        </div>
                                        
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">No Antrian</label></div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" class="form-control-rounded form-control" value="<?php echo $next; ?>" required="" readonly name="next">
                                                <input type="hidden" name="no_antrian" class="form-control" value="<?php echo $no_antrian; ?>" required="" readonly>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jenis Cucian</label></div>
                                            <div class="col-12 col-md-9">
                                                <?php
                                                    $result = mysql_query("SELECT * FROM jenis_cucian");
                                                    $jsArray = "var prdName = new Array();\n";
                                                    echo '<select class="form-control" name="id_jenis_cucian" onchange="document.getElementById(\'txt2\').value = prdName[this.value]">';
                                                    echo '<option value="">Pilih Jenis Cucian</option>';
                                                    while ($row = mysql_fetch_array($result)) {
                                                        echo '<option value="' . $row['id_jenis_cucian'] . '">' . $row['jenis_cucian'] . '</option>';
                                                        $jsArray .= "prdName['" . $row['id_jenis_cucian'] . "'] = '" . addslashes($row['biaya']) . "';\n";
                                                    }
                                                    echo '</select>';

                                                    ?>
                                            </div>
                                        </div>
                                        
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Pendaftaran</label></div>
                                            <div class="col-12 col-md-9">
                                                <input type="date" class="form-control" id="email" name="tgl_pendaftaran" value="<?=$tgl_pendaftaran;?>" readonly>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jam Pencucian</label></div>
                                            <div class="col-12 col-md-9">
                                                <select name="jam_pendaftaran" id="jamselect" class="form-control-rounded form-control" required = "" >
                                                    <!-- <option value="">Pilih Jam Cuci</option> -->
                                                </select>
                                                <script>
                                                    cekjam();
                                                    function cekjam(){
                                                         $('#jamselect').empty();
                                                        $('#jamselect').append("<option value=''>Pilih Jam Cuci</option>");
                                                        <?php
                                                            $where = '';
                                                            if ($_SESSION['role'] == 'customer') {
                                                                $where = 'and b.jml <= 3';
                                                            }
                                                            $result2 = mysql_query("
                                                                            select 
                                                                                TIME_FORMAT(jam,'%H:%i') as jam 
                                                                            from
                                                                                jam_operasional a
                                                                                left join (select jam_pendaftaran,COUNT(*) jml from pendaftaran where tgl_pendaftaran = CURRENT_DATE AND status != 'Batal' GROUP BY jam_pendaftaran) b ON b.jam_pendaftaran = a.jam $where
                                                                            
                                                                        ");
                                                            while ($row2 = mysql_fetch_array($result2)) {
                                                                ?>
                                                                    $('#jamselect').append("<option value='<?=$row2['jam']?>'><?=$row2['jam']?></option>");
                                                                <?php
                                                            }
                                                        ?>
                                                    }
                                                    setInterval(() => {
                                                       cekjam();
                                                    }, 100000);
                                                </script>
                                            </div>
                                        </div>

                                        <input type="hidden" name="total_biaya" id="txt2" class="form-control" readonly="" onkeyup="sum();" />
                                        <script type="text/javascript">
                                        <?php echo $jsArray; ?>
                                        </script>

                                        <b style="color:red;">Estimasi Pencucian 45-60 Menit</b><br><br>

                                        <button type="submit" class="btn btn-success" style="width:100%;">Simpan</button>
                                    </form>


                                </div>
                            </div>
                        </div>

                        
                        <?php 
                                    $iduser = $_SESSION['id_user'];
                                    
                                    $query = "SELECT * FROM pendaftaran JOIN customer using(id_customer) WHERE tgl_pendaftaran = current_date and status not in( 'Batal') and id_user = $iduser ";
                                    $querygb= "ORDER BY id_pendaftaran desc";
                                    $queryy = mysql_query($query.$querygb);
                                    $hasil  = mysql_fetch_array($queryy);
                                    $daftar = "x.png";
                                    $cuci   = "x.png";
                                    $selesai= "x.png";
                                    // print_r($_POST);die;    
                                    
                        
                        if($hasil){         
                        ?>
                        <div class="col-md-6">
                            <div class="card" style="border: 8px solid #f9d018;">
                                <div class="card-header" >
                                    <strong class="card-title"><center>PROGRES PENCUCIAN</center></strong>
                                </div>
                                <div class="card-body" align="center">
                                    <form action="index.php?p=antrian" method="post" enctype="multipart/form-data" class="form-horizontal">

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Plat Nomor</label></div>
                                            <div class="col-12 col-md-6">
                                                <input type="text" class="form-control-rounded form-control"  name="nomor_plat">
                                            </div>
                                            <div class="col-12 col-md-3">                                        
                                                <button type="submit" class="btn btn-success" style="width:100%;">Cari</button>
                                            </div>
                                        </div>
                                    </form>
                                    <hr><br>
                                <table class="table">
                                    <thead style="text-align: center;">
                                        
                                            <?php

                                                $where = "";
                                                if(isset($_POST['nomor_plat'])){
                                                    $plat = str_replace(' ','',$_POST['nomor_plat']) ; ;
                                                    $where = $query." AND REPLACE(lower(nomor_plat),' ','') = lower('$plat') ".$querygb;
                                                    $queryy = mysql_query($where);
                                                    $hasil  = mysql_fetch_array($queryy);
                                                }
                                                if($hasil){
                                                    echo '<strong class="card-title"><center>PLAT '.$hasil['nomor_plat'].' NO ANTRIAN '.$hasil['no_antrian'].'</center></strong>';
                                                    $batal = 'Selesai';
                                                    if($hasil['status'] == 'Pendaftaran'){
                                                        $daftar = 'daftar.png';
                                                    }elseif($hasil['status'] == 'Dalam Pengerjaan'){
                                                        $daftar = 'daftar.png';
                                                        $cuci = 'pencucian.png';
                                                    }elseif($hasil['status'] == 'Batal'){
                                                        $daftar = "daftar.png";
                                                        $cuci = 'pencucian.png';
                                                        $batal= 'Batal';
                                                    
                                                    }elseif($hasil['status'] == 'Selesai' || $hasil['status'] == 'Lunas'){
                                                        $daftar = "daftar.png";
                                                        $cuci = 'pencucian.png';
                                                        $selesai = 'finish.png';
                                                        $batal = 'Selesai';
                                                    }
                                                      
                                                    echo '<tr>
                                                            <b>
                                                            <th>
                                                                <img style="max-width:30%;" src="images/'.$daftar.'"><br>
                                                            </th>
                                                            <th style="width:10%;">
                                                                <div class="row" style="margin-bottom:0%;">

                                                                    <img style="max-width:15%;margin-left:10%;" src="images/arrow.png"><br>
                                                                    <img style="max-width:15%;" src="images/arrow.png"><br>
                                                                    <img style="max-width:15%;" src="images/arrow.png"><br>
                                                                </div>
                                                            </th>
                                                            <th>
                                                                <img style="max-width:30%;" src="images/'.$cuci.'"><br>
                                                            </th>
                                                            <th style="width:10%;">
                                                                <div class="row" style="margin-bottom:0%;">

                                                                    <img style="max-width:15%;margin-left:10%;" src="images/arrow.png"><br>
                                                                    <img style="max-width:15%;" src="images/arrow.png"><br>
                                                                    <img style="max-width:15%;" src="images/arrow.png"><br>
                                                                </div>
                                                            </th>
                                                            <th>
                                                                <img style="max-width:30%;" src="images/'.$selesai.'"><br>
                                                            </th>
                                                            </b>
                                                        </tr>
                                                        <tr>
                                                            <th>Dalam Antrian</th>
                                                            <th></th>
                                                            <th>Pencucian</th>
                                                            <th></th>
                                                            <th>'.$batal.'</th>
                                                        </tr>
                                                    ';
                                                }else{
                                                    echo '<strong class="card-title"><center>PLAT '.$_POST['nomor_plat'].' TIDAK DITEMUKAN</center></strong>';

                                                }

                                            ?> 
                                    </thead>
                                </table>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12" style="display:none">
                        <div class="card" style="border: 8px solid #f9d018;">
                            <div class="card-header">
                                <strong class="card-title">Data Antrian Hari Ini</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <?php
                                    include ("../config/koneksi.php");
                                    $iduser = $_SESSION['id_user'];
                                    $sqll = "
                                        select cu.nomor_plat,cu.type_mobil,pe.no_antrian,jc.jenis_cucian,pe.jam_pendaftaran from 
                                            pendaftaran pe
                                            left join jenis_cucian jc on jc.id_jenis_cucian = pe.id_jenis_cucian  
                                            left join customer cu on cu.id_customer = pe.id_customer
                                        where cu.id_user = $iduser and pe.tgl_pendaftaran = current_date
                                        order by pe.id_pendaftaran asc 
                                    ";
                                    $resultt = mysql_query($sqll);
                                        if(mysql_num_rows($resultt) > 0){
                                    ?>                                            
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>No. Plat</th>
                                            <th>Type Mobil</th>
                                            <th>No Antrian</th>
                                            <th>Jenis Cucian</th>
                                            <th>Jam Pencucian</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $nomor=1;
                                        while($data = mysql_fetch_array($resultt)){
                                        ?>                                          
                                        <tr>
                                            <td><?= $nomor++;?></td>
                                            <td><?= $data['nomor_plat'];?></td>
                                            <td><?= $data['type_mobil'];?></td>
                                            <td><?= $data['no_antrian'];?></td>
                                            <td><?= $data['jenis_cucian'];?></td>
                                            <td><?= $data['jam_pendaftaran'];?></td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                    <?php
                                    }else{
                                        echo 'Data not found!';
                                        echo mysql_error();
                                    }
                                    ?>            
                            </div>
                        </div>
                    </div>
                        
                    <?php }
                    }else{?>
                        
                        <div class="col-md-6">
                            <div class="card" style="border: 8px solid #f9d018;">
                                <div class="card-header" >
                                    <strong class="card-title"><center>BOOKING ANTRIAN</center></strong>
                                </div>
                                <div class="card-body">
                                    <?php
                                        date_default_timezone_set('Asia/Jakarta');
                                        $tgl_pendaftaran = date("Y-m-d");
                                        $queryy = mysql_query("SELECT no_antrian FROM pendaftaran WHERE tgl_pendaftaran = '$tgl_pendaftaran'");
                                        $htg = mysql_num_rows($queryy);

                                        $next = $htg + 1;

                                        $no_antrian = $tgl_pendaftaran . '/' . $next;

                                        $hitung = mysql_query("SELECT max(id_customer) as id_terakhir from customer");
                                        $cari = mysql_fetch_array($hitung);
                                        $id_lanjut = $cari['id_terakhir'] + 1;

                                        ?>
                                    <form action="index.php?c=controller&p=proses_pendaftaran" method="post" enctype="multipart/form-data" class="form-horizontal">
                                        <input type="hidden" class="form-control" id="nama" name="id_customer" value="<?=$id_lanjut;?>">
                                        
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">User Pelanggan</label></div>
                                            <div class="col-12 col-md-9">
                                                <?php
                
                                                    $result2 = mysql_query("select * from user where role = 'customer'");
                                                    echo '<select name="id_user" class="form-control-rounded form-control" required="">';
                                                    echo '<option value="">Pilih User Pelangan</option>';
                                                    echo '<option value="t">Tidak Ada User</option>';
                                                    while ($row2 = mysql_fetch_array($result2)) {
                                                        echo '<option value="' . $row2['id_user'] . '">' . $row2['username'] . '</option>';
                                                    }
                                                    echo '</select>';


                                                ?>
                                            </div>
                                        </div>

                                        <!-- <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama</label></div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="nama" name="nama" class="form-control" required="">
                                            </div>
                                        </div> -->

                                        <!-- <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">No Handphone</label></div>
                                            <div class="col-12 col-md-9">
                                                <input type="tel" min=0  onkeypress="return window.isNumberKey(event)" id="email" name="no_hp" class="form-control" required="">
                                            </div>
                                        </div> -->

                                        <!-- <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Alamat</label></div>
                                            <div class="col-12 col-md-9">
                                                <textarea type="text" id="alamat" name="alamat" rows="6" class="form-control" required=""></textarea>
                                            </div>
                                        </div> -->
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Merek Mobil</label></div>
                                            <div class="col-12 col-md-9">
                                                <?php
                
                                                    $result2 = mysql_query("select * from type_mobil");
                                                    echo '<select name="type_mobil" class="form-control-rounded form-control" required="">';
                                                    echo '<option value="">Pilih Tipe Mobil</option>';
                                                    while ($row2 = mysql_fetch_array($result2)) {
                                                        echo '<option value="' . $row2['type_mobil'] . '">' . $row2['type_mobil'] . '</option>';
                                                    }
                                                    echo '</select>';


                                                ?>
                                            </div>
                                        </div>
                                        
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">No Antrian</label></div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" class="form-control-rounded form-control" value="<?php echo $next; ?>" required="" readonly name="next">
                                                <input type="hidden" name="no_antrian" class="form-control" value="<?php echo $no_antrian; ?>" required="" readonly>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">No Plat</label></div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="email" name="nomor_plat" class="form-control" required="">
                                            </div>
                                        </div>
                                        
                                        <!-- <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">No Antrian</label></div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" class="form-control-rounded form-control" value="<?php echo $next; ?>" required="" readonly name="next">
                                                <input type="hidden" name="no_antrian" class="form-control" value="<?php echo $no_antrian; ?>" required="" readonly>
                                            </div>
                                        </div> -->

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jenis Cucian</label></div>
                                            <div class="col-12 col-md-9">
                                                <?php
                                                    $result = mysql_query("SELECT * FROM jenis_cucian");
                                                    $jsArray = "var prdName = new Array();\n";
                                                    echo '<select class="form-control" name="id_jenis_cucian" onchange="document.getElementById(\'txt2\').value = prdName[this.value]">';
                                                    echo '<option value="">Pilih Jenis Cucian</option>';
                                                    while ($row = mysql_fetch_array($result)) {
                                                        echo '<option value="' . $row['id_jenis_cucian'] . '">' . $row['jenis_cucian'] . '</option>';
                                                        $jsArray .= "prdName['" . $row['id_jenis_cucian'] . "'] = '" . addslashes($row['biaya']) . "';\n";
                                                    }
                                                    echo '</select>';

                                                    ?>
                                            </div>
                                        </div>
                                        
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Pendaftaran</label></div>
                                            <div class="col-12 col-md-9">
                                                <input type="date" class="form-control" id="email" name="tgl_pendaftaran" value="<?=$tgl_pendaftaran;?>" readonly>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jam Pencucian</label></div>
                                            <div class="col-12 col-md-9">
                                                <select name="jam_pendaftaran" id="jamselect" class="form-control-rounded form-control" required = "" >
                                                    <!-- <option value="">Pilih Jam Cuci</option> -->
                                                </select>
                                                <script>
                                                    cekjam();
                                                    function cekjam(){
                                                         $('#jamselect').empty();
                                                        $('#jamselect').append("<option value=''>Pilih Jam Cuci</option>");
                                                        <?php
                                                            $where = '';
                                                            if ($_SESSION['role'] == 'customer') {
                                                                $where = 'and b.jml <= 3';
                                                            }
                                                            $result2 = mysql_query("
                                                                            select 
                                                                                TIME_FORMAT(jam,'%H:%i') as jam 
                                                                            from
                                                                                jam_operasional a
                                                                                left join (select jam_pendaftaran,COUNT(*) jml from pendaftaran where tgl_pendaftaran = CURRENT_DATE AND status != 'Batal' GROUP BY jam_pendaftaran) b ON b.jam_pendaftaran = a.jam $where
                                                                            
                                                                        ");
                                                            while ($row2 = mysql_fetch_array($result2)) {
                                                                ?>
                                                                    $('#jamselect').append("<option value='<?=$row2['jam']?>'><?=$row2['jam']?></option>");
                                                                <?php
                                                            }
                                                        ?>
                                                    }
                                                    setInterval(() => {
                                                       cekjam();
                                                    }, 100000);
                                                </script>
                                            </div>
                                        </div>

                                        <input type="hidden" name="total_biaya" id="txt2" class="form-control" readonly="" onkeyup="sum();" />
                                        <script type="text/javascript">
                                        <?php echo $jsArray; ?>
                                        </script>

                                        <b style="color:red;">Estimasi Pencucian 45-60 Menit</b><br><br>

                                        <button type="submit" class="btn btn-success" style="width:100%;">Simpan</button>
                                    </form>


                                </div>
                            </div>
                        </div>
                    <?php }?>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

        <script>
			
            
            setInterval(() => {
                cekjadwal()
            }, 10000);
            cekjadwal();
            function cekjadwal(){
                
                $("#tablejadwal").empty();
                var th = "";
                <?php
                                                        
                    date_default_timezone_set('Asia/Jakarta');
                    $result2 = mysql_query("
                                    select 
                                        TIME_FORMAT(jam,'%H:%i') as jam 
                                    from
                                        jam_operasional a
                                        left join (select jam_pendaftaran,COUNT(*) jml from pendaftaran where tgl_pendaftaran = CURRENT_DATE AND status != 'Batal' GROUP BY jam_pendaftaran) b ON b.jam_pendaftaran = a.jam and b.jml <= 3
                                    where 
                                        jam >= now()"
                                );
                    if(mysql_num_rows($result2) >= 1){
                        while ($row2 = mysql_fetch_array($result2)) {

                            ?>
                                th += '<th style="background:#f9d018;font-weight:bold;text-align:center;border:3px solid #fff;"><?=$row2['jam']?></th>'
                            <?php
                        }

                    }else{
                        
                        ?>
                            th += '<th style="background:#f9d018;font-weight:bold;text-align:center;">Jadwal tidak tersedia</th>' 
                        <?php
                    }

                ?>
            $("#tablejadwal").append(
                `<tr style="background:#f9d018;font-weight:bold;text-align:center;" id="available">
                    `+th+`
                </tr>`
            );
            }    
            function isNumberKey(evt)
            {
                var charCode = (evt.which) ? evt.which : evt.keyCode;
                if (charCode != 46 && charCode > 31
                    && (charCode < 48 || charCode > 57))
                    return false;
                // checkphone($(evt.target).attr("id"));
                return true;
            }
        </script>