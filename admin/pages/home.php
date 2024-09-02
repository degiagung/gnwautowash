

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
                                        $queryy = mysql_query("select *,end + INTERVAL 1 DAY as buka from status_operasional where status = 'tutup' AND now() BETWEEN start and end+ INTERVAL 1 DAY ");
                                        $hasil  = mysql_fetch_array($queryy);
                                        
                                        if($hasil){
                                            echo '
                                            <br><b style="color:red">Mohon Maaf Gnw Auto Wash Buka Kembali Pada Tanggal '.$hasil['buka'].'</b>
                                            ';
                                        }else{
                                            if(date('G') >= 0 && date('Hi') <= 2000){  ;
                                                echo '
                                                <b style="color:green">Hari Ini Buka Ya ,Silahkan Untuk <a style="color:blue;" href="index.php?p=antrian"> <b><u>Daftar Antrian </b></u></a></b>
                                                ';
                                            }else{
                                                echo '
                                                <b style="color:red">Mohon Maaf Jam Operasional Akan Buka Kembali Besok Pukul 08:00</b>
                                                ';
                                            }
                                        }
                                    ?>
                                    
                                </div>
                            </div>
                        </div>
                        <?php
                            include ("../config/koneksi.php");
                            $sqll = "SELECT * FROM promo where (now() BETWEEN start and end + INTERVAL 1 DAY)";
                            $resultt = mysql_query($sqll);
                            while($data = mysql_fetch_array($resultt)){
                                echo '
                                    
                                    <div class="col-md-6">
                                        <div class="card" style="border: 8px solid #f9d018;">
                                            <div class="card-header" style="background:#fff;border:none;">
                                                
                                                <h4><strong class="card-title">'.$data['judul'].'</strong><a style="color:blue;font-size:13px;" href="index.php?p=antrian"> <b><u>Daftar Antrian </b></u></a></h4>
                                                <span style="font-size:13px">Mulai Tanggal '.$data['start'].' SD '.$data['end'].'</span>


                                            </div>
                                            <div class="card-body">
                                                <strong style="font-size:13px;">
                                                    <b>
                                                        <ul style="padding-left: 16px;">
                                                            <li>'.$data['promo'].'</li>
                                                        </ul>
                                                    </b>
                                                </strong>
                                            </div>
                                        </div>
                                    </div>
                                ';
                            }
                        ?>
                    <?php }else{?>
                        <div class="col-md-12">
                            <div class="card" style="border: 8px solid #f9d018;">
                                <div class="card-header">
                                    <strong class="card-title"><center>SELAMAT DATANG</center></strong>
                                </div>
                                <div class="card-body" align="center">
                                    <br><br>
                                    Selamat Datang <b><u><?= $_SESSION['nama'];?></u></b> Di Halaman Admin Panel GNW AUTO WASH
                                    <br>
                                    <br><br>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card" style="border: 8px solid #f9d018;">
                                <div class="card-header">
                                    <strong class="card-title"><center>JADWAL LIBUR</center></strong>
                                </div>
                                <div class="card-body" align="center">
                                   <form action="index.php?c=controller&p=setjadwal" method="post" enctype="multipart/form-data" class="form-horizontal">
                                        <div class="table-responsive">
                                            <table width="100%">
                                                <tr>
                                                    <td>
                                                        <label for="text-input" class=" form-control-label">Tgl Awal</label>
                                                        <input type="date" name="tgl_awal_tutup" class="form-control"min="<?= date('Y-m-d')?>">
                                                    </td>
                                                    <td>
                                                        <label for="text-input" class=" form-control-label">Tgl Akhir</label>
                                                        <input type="date" name="tgl_akhir_tutup" class="form-control"min="<?= date('Y-m-d')?>">
                                                    </td>

                                                    <td width="15%">
                                                        <br>
                                                        <button type="submit" class="btn btn-warning" >Set Jadwal</button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </form>

                                </div>
                                <div class="card-body" align="center">
                                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                        <?php
                                        include ("../config/koneksi.php");
                                        $sqll = "select * from status_operasional order by start desc";
                                        $resultt = mysql_query($sqll);
                                            if(mysql_num_rows($resultt) > 0){
                                                ?>                                            
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Tanggal Awal</th>
                                                        <th>Tanggal Akhir</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $nomor=1;
                                                    while($data = mysql_fetch_array($resultt)){
                                                    ?>                                          
                                                        <tr>
                                                            <td><?= $nomor++;?></td>
                                                            <td><?= $data['start'];?></td>
                                                            <td><?= $data['end'];?></td>
                                                            
                                                            <td align="center">
                                                                <a href="index.php?c=controller&p=hapus_tutup&id=<?php echo $data['id']; ?>" onClick="return confirm('Apakah Anda Yakin Hapus Data?')" class="btn btn-danger mb-3"> <i class="fa fa-fw fa-trash" style="color: white"></i> <font color="white">Hapus</font></a>
                                                            </td>
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