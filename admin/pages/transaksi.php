<div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Transaksi</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Transaksi</a></li>
                                    <li class="active"><a href="#">Data Transaksi</a></li>
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

                    <?php if ($_SESSION['role'] == 'customer') {?>
                        <div class="col-md-12">
                            <div class="card" style="border: 8px solid #f9d018;">
                                <div class="card-header">
                                    <strong class="card-title"><center>INFORMASI</center></strong>
                                </div>
                                <div class="card-body" align="center">
                                    <br><br><b>
                                    <?php 
                                        $id_user = $_SESSION['id_user'];
                                        $cekvoucher = "SELECT a.*,b.tanggal FROM user a join transaksi b on a.id_user = b.id_user WHERE b.status = 'Lunas' AND a.id_user = $id_user";
                                        $hasilvoucher = mysql_query($cekvoucher);
                                        if ($hasilvoucher->num_rows >= 1) {
                                            $data = mysql_fetch_array($hasilvoucher);
                                            if($data['voucher'] == 'aktif'){
                                                echo strtoupper($_SESSION['nama'].' SELAMAT ANDA MENDAPATKAN PROMO GRATIS 1X CUCI');
                                            }else{

                                                if($hasilvoucher->num_rows <= 9){
                                                    $jml = 10-$hasilvoucher->num_rows ;
                                                    echo strtoupper($_SESSION['nama'].' '.$jml.'X PENCUCIAN LAGI UNTUK MENDAPATKAN 1X CUCI GRATIS');
                                                }else{

                                                    $getup11 	  = $cekvoucher." AND b.tanggal >= COALESCE(a.tgl_voucher,0) limit 12" ;
                                                    $getup11 	  = mysql_query($getup11);
                                                    $jml          = $getup11->num_rows - 3;
                                                    if ( $getup11->num_rows == 10) {
                                                        echo "SEGERA CUCI MOBIL ANDA UNTUK MENDAPATKAN PROMO CUCI 10X GRATIS 1X PENCUCIAN";
                                                    }else{
                                                        echo strtoupper($_SESSION['nama'].' '.$jml.'X PENCUCIAN LAGI UNTUK MENDAPATKAN 1X CUCI GRATIS');
                                                    }
                                                }
                                            }
                                        }else{
                                            echo "SEGERA CUCI MOBIL ANDA UNTUK MENDAPATKAN PROMO CUCI 10X GRATIS 1X PENCUCIAN";
                                        }

                                        
                                    ?> </b>
                                    <br>
                                    <br><br>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Transaksi</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <?php
                                    include ("../config/koneksi.php");
                                    $where = "";
                                    if($_SESSION['role'] == 'customer'){
                                        $id_user = $_SESSION['id_user'] ;
                                        $where = " and customer.id_user in (select id_user from user where id_user = $id_user) ";
                                    }
                                    $sqll = "select * from transaksi join pendaftaran using (id_pendaftaran) join customer where pendaftaran.id_customer = customer.id_customer $where order by id_transaksi desc";
                                    //   print_r($sqll);die;
                                    $resultt = mysql_query($sqll);
                                        if(mysql_num_rows($resultt) > 0){
                                    ?>                                            
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>No. Antrian</th>
                                            <!-- <th>No. Nota</th> -->
                                            <th>Nama</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                            <th>Penanggung Jawab Cuci</th>
                                            <th>Bukti</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php
  $nomor=1;
  while($data = mysql_fetch_array($resultt)){
?>                                          
                                        <tr>
                                            <td><?= $nomor++;?></td>
                                            <td><?= $data['no_antrian'];?></td>
                                            <!-- <td><?= $data['no_nota'];?></td> -->
                                            <td><?= $data['nama'];?></td>
                                            <td><?= $data['total'];?></td>
                                            <td><?= $data['status'];?></td>
                                            <td><?= $data['nama_pencuci'];?></td>
                                            <td style="width:15%;text-align:center;"><a href="<?=  $data['bukti'];?>" target="blank"><img src="<?= $data['bukti'];?>" style="max-width:15%;" class="img-fluid" alt=""></a></td>
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


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->