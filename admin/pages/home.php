

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