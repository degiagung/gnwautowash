

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

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
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr style="background:#f9d018;font-weight:bold;text-align:center;" id="available">
                                                
                                                        <?php
                                                        
                                                            date_default_timezone_set('Asia/Jakarta');
                                                            $result2 = mysql_query("
                                                                            select 
                                                                                TIME_FORMAT(jam,'%H:%i') as jam 
                                                                            from
                                                                                jam_operasional a
                                                                                left join (select jam_pendaftaran,COUNT(*) jml from pendaftaran where tgl_pendaftaran = CURRENT_DATE AND status != 'Batal' GROUP BY jam_pendaftaran) b ON b.jam_pendaftaran = a.jam and b.jml <= 1
                                                                            where 
                                                                                jam >= now()"
                                                                        );
                                                            if(mysql_fetch_array($result2)){
                                                                while ($row2 = mysql_fetch_array($result2)) {

                                                                    echo '<th style="background:#f9d018;font-weight:bold;text-align:center;border:3px solid #fff;">'.$row2['jam'].'</th>';
                                                                }

                                                            }else{
                                                                    echo '<th style="background:#f9d018;font-weight:bold;text-align:center;">Jadwal tidak tersedia</th>';
                                                            }

                                                        ?>
                                                        
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card" style="border: 8px solid #f9d018;">
                                <div class="card-header" >
                                    <strong class="card-title"><center>PROGRES PENCUCIAN</center></strong>
                                    <?php 
                                                $iduser = $_SESSION['id_user'];
                                                $queryy = mysql_query("SELECT * FROM pendaftaran WHERE tgl_pendaftaran = current_date and status not in( 'Batal') and id_customer in (select id_customer from customer where id_user = $iduser) ORDER BY id_pendaftaran desc");
                                                $hasil  = mysql_fetch_array($queryy);
                                                $daftar = "x.png";
                                                $cuci   = "x.png";
                                                $selesai= "x.png";
                                                // print_r($iduser);die;
                                                if($hasil){
                                    ?>
                                    <strong class="card-title"><center>NO ANTRIAN <?php echo $hasil['no_antrian']; ?></center></strong>
                                </div>
                                <div class="card-body" align="center">
                                <table>
                                    <thead style="text-align: center;">
                                        <tr>

                                            <b>
                                            <?php
                                                
                                                    if($hasil['status'] == 'Pendaftaran'){
                                                        $daftar = "daftar.png";
                                                    }if($hasil['status'] == 'Dalam Pengerjaan'){
                                                        $daftar = "daftar.png";
                                                        $cuci = 'pencucian.png';
                                                    }elseif($hasil['status'] == 'Lunas'){
                                                        $daftar = "daftar.png";
                                                        $cuci = 'pencucian.png';
                                                        $selesai = 'finish.png';
                                                    }
                                                }
                                                
                                                echo '
                                                
                                                    <th>
                                                        <img style="max-width:30%;" src="images/'.$daftar.'"><br>
                                                        DALAM ANTRIAN
                                                    </th>
                                                    <th style="width:10%;">
                                                        <div class="row">

                                                            <img style="max-width:15%;margin-left:30px;" src="images/arrow.png"><br>
                                                            <img style="max-width:15%;" src="images/arrow.png"><br>
                                                            <img style="max-width:15%;" src="images/arrow.png"><br>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <img style="max-width:30%;" src="images/'.$cuci.'"><br>
                                                        PENCUCIAN
                                                    </th>
                                                    <th style="width:10%;">
                                                        <div class="row">

                                                            <img style="max-width:15%;margin-left:30px;" src="images/arrow.png"><br>
                                                            <img style="max-width:15%;" src="images/arrow.png"><br>
                                                            <img style="max-width:15%;" src="images/arrow.png"><br>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <img style="max-width:30%;" src="images/'.$selesai.'"><br>
                                                        SELESAI
                                                    </th>

                                                ';

                                            ?> </b>
                                        </tr>
                                    </thead>
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
                                    <form action="index.php?p=proses_pendaftaran" method="post" enctype="multipart/form-data" class="form-horizontal">
                                        <input type="hidden" class="form-control" id="nama" name="id_customer" value="<?=$id_lanjut;?>">
                                        
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama</label></div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="nama" name="nama" class="form-control" required="">
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">No Handphone</label></div>
                                            <div class="col-12 col-md-9">
                                                <input type="tel" min=0  onkeypress="return window.isNumberKey(event)" id="email" name="no_hp" class="form-control" required="">
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Alamat</label></div>
                                            <div class="col-12 col-md-9">
                                                <textarea type="text" id="alamat" name="alamat" rows="6" class="form-control" required=""></textarea>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">No Plat</label></div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="email" name="nomor_plat" class="form-control" required="">
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Type Mobil</label></div>
                                            <div class="col-12 col-md-9">
                                                <?php
                
                                                    $result2 = mysql_query("select * from type_mobil");
                                                    echo '<select name="type_mobil" class="form-control-rounded form-control" required="">';
                                                    echo '<option value="">Pilih Type Mobil</option>';
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
                                                <?php
                                                    $where = '';
                                                    if ($_SESSION['role'] == 'customer') {
                                                        $where = 'and b.jml <= 2';
                                                    }
                                                    $result2 = mysql_query("
                                                                    select 
                                                                        TIME_FORMAT(jam,'%H:%i') as jam 
                                                                    from
                                                                        jam_operasional a
                                                                        left join (select jam_pendaftaran,COUNT(*) jml from pendaftaran where tgl_pendaftaran = CURRENT_DATE AND status != 'Batal' GROUP BY jam_pendaftaran) b ON b.jam_pendaftaran = a.jam $where
                                                                    where 
                                                                        jam >= now()
                                                                ");
                                                    echo '<select name="jam_pendaftaran" class="form-control-rounded form-control" required = "" >';
                                                    echo '<option value="">Pilih Jam Cuci</option>';
                                                    while ($row2 = mysql_fetch_array($result2)) {
                                                        echo '<option value="' . $row2['jam'] . '">' . $row2['jam'] . '</option>';
                                                    }
                                                    echo '</select>';
                                                ?>
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
                        
                        <div class="col-md-6">
                            <div class="card" style="border: 8px solid #f9d018;">
                                <div class="card-header">
                                    <strong class="card-title"><center>PROMO PENCUCIAN</center></strong>
                                </div>
                                <div class="card-body" align="center">
                                    <br><br><br><br><br><b>
                                    <?php 
                                        $iduser = $_SESSION['id_user'];
                                        $queryy = "SELECT count(*) jml FROM transaksi WHERE status = 'Lunas' AND id_user = $iduser";
                                        $queryy = mysql_query($queryy);
                                        $hasil = mysql_fetch_array($queryy);
                                        $jml = $hasil['jml'] ;
                                        if($hasil['jml'] >= 11){
                                            $jml = 1 ;
                                        }

                                        if($hasil['jml'] == 10){
                                            echo strtoupper($_SESSION['nama'].' SELAMAT ANDA MENDAPATKAN PROMO GRATIS 1X CUCI');
                                        }elseif($hasil['jml'] >= 1){
                                            $jml = 10 - $jml ;
                                            echo strtoupper($_SESSION['nama'].' '.$jml.'X PENCUCIAN LAGI UNTUK MENDAPATKAN 1X CUCI GRATIS');
                                        }else{
                                            echo "SEGERA CUCI MOBIL ANDA UNTUK MENDAPATKAN PROMO CUCI 10X GRATIS 1X PENCUCIAN";
                                        }

                                    ?> </b>
                                    <br>
                                    <br><br><br><br>
                                </div>
                            </div>
                        </div>
                    <?php }else{?>
                        <div class="col-md-12">
                            <div class="card" style="border: 8px solid #f9d018;">
                                
                                <div class="card-body" align="center">
                                    <b>Beranda</b>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card" style="border: 8px solid #f9d018;">
                                <div class="card-header">
                                    <strong class="card-title"><center>SELAMAT DATANG</center></strong>
                                </div>
                                <div class="card-body" align="center">
                                    <br><br><br><br><br>
                                    Selamat Datang <b><u><?= $_SESSION['nama'];?></u></b> Di Halaman Admin Panel GNW AUTO WASH
                                    <br>
                                    <br><br><br><br>
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
                                    <form action="index.php?p=proses_pendaftaran" method="post" enctype="multipart/form-data" class="form-horizontal">
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

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama</label></div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="nama" name="nama" class="form-control" required="">
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">No Handphone</label></div>
                                            <div class="col-12 col-md-9">
                                                <input type="tel" min=0  onkeypress="return window.isNumberKey(event)" id="email" name="no_hp" class="form-control" required="">
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Alamat</label></div>
                                            <div class="col-12 col-md-9">
                                                <textarea type="text" id="alamat" name="alamat" rows="6" class="form-control" required=""></textarea>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">No Plat</label></div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="email" name="nomor_plat" class="form-control" required="">
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Type Mobil</label></div>
                                            <div class="col-12 col-md-9">
                                                <?php
                
                                                    $result2 = mysql_query("select * from type_mobil");
                                                    echo '<select name="type_mobil" class="form-control-rounded form-control" required="">';
                                                    echo '<option value="">Pilih Type Mobil</option>';
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
                                                <?php
                                                    $where = '';
                                                    if ($_SESSION['role'] == 'customer') {
                                                        $where = 'and b.jml <= 2';
                                                    }
                                                    $result2 = mysql_query("
                                                                    select 
                                                                        TIME_FORMAT(jam,'%H:%i') as jam 
                                                                    from
                                                                        jam_operasional a
                                                                        left join (select jam_pendaftaran,COUNT(*) jml from pendaftaran where tgl_pendaftaran = CURRENT_DATE AND status != 'Batal' GROUP BY jam_pendaftaran) b ON b.jam_pendaftaran = a.jam $where
                                                                    where 
                                                                        jam >= now()
                                                                ");
                                                    echo '<select name="jam_pendaftaran" class="form-control-rounded form-control" required = "" >';
                                                    echo '<option value="">Pilih Jam Cuci</option>';
                                                    while ($row2 = mysql_fetch_array($result2)) {
                                                        echo '<option value="' . $row2['jam'] . '">' . $row2['jam'] . '</option>';
                                                    }
                                                    echo '</select>';
                                                ?>
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
			let counter = 0 ;
			setInterval(() => {
				jml = counter++ 
				if(jml == 300){
					counter = 0 ;
					document.location='index.php?p=home';
				}
			}, 1000);

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