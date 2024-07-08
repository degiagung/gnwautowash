

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card" style="border: 8px solid #f9d018;">
                            
                            <div class="card-body" align="center">
                                <b>Beranda</b>
                            </div>
                        </div>
                    </div>
                    <?php if($_SESSION['role'] == 'customer') {?>
                        <div class="col-md-12">
                            <div class="card" style="border: 8px solid #f9d018;">
                                <div class="card-header">
                                    <strong class="card-title"><center>SELAMAT DATANG</center></strong>
                                </div>
                                <div class="card-body" align="center">
                                    Selamat Datang <b><?= $_SESSION['nama'];?></b> Di GNW AUTO WASH
                                    <br>
                                    <?php

                                        date_default_timezone_set('Asia/Jakarta');
                                   
                                        // print_r($t);die;
                                        $tgl = date("Y-m-d");
                                        $queryy = mysql_query("select *,end + INTERVAL 1 DAY as buka from status_operasional where $tgl >= start AND $tgl <= end ;");
                                        $hasil  = mysql_fetch_array($query);
                                        if($hasil){
                                            echo '
                                            <b>Mohon Maaf Gnw Auto Wash Buka Kembali Pada Tanggal'.$hasil['buka'].'</b>
                                            ';
                                        }else{
                                            if(date('G') >= 8 && date('G') <= 20){
                                                echo '
                                                <b>Hari Ini Buka Ya ,Silahkan Untuk <a style="color:blue;" href="index.php?p=antrian"> <b><u>Daftar Antrian </b></u></a></b>
                                                ';
                                            }else{
                                                echo '
                                                <b>Mohon Maaf Jam Operasional Akan Buka Kembali Besok Pukul 08:00</b>
                                                ';
                                            }
                                        }
                                    ?>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="card" style="border: 8px solid #f9d018;">
                                <div class="card-header" style="background:#fff;border:none;">
                                    
                                    <h4><strong class="card-title">Informasi Promo</strong><a style="color:blue;font-size:13px;" href="index.php?p=antrian"> <b><u>Daftar Antrian </b></u></a></h4>
                                    <span style="font-size:13px">Spesial Bulan Juli - Agustus</span>


                                </div>
                                <div class="card-body">
                                    <strong style="font-size:13px;">
                                        <b>
                                            <ul style="padding-left: 16px;">
                                                <li>PROMO PENCUCIAN 10X GRATIS 1X</li>
                                                <li>GRATIS MINUMAN HALAL</li>
                                                <li>KUPON UNDIAN UMROH</li>
                                            </ul>
                                        </b>
                                    </strong>
                                </div>
                            </div>
                        </div>
                    <?php }else{?>
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