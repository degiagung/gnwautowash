<?php 
error_reporting(0);
?>

<style>
    .dataTables_length{
        position: absolute;
        top: 20%;
    }
    
    .btn-group{
        position: absolute;
        top: 20%;
        left :17%;
    }
</style>
        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Laporan</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Laporan</a></li>
                                    <li class="active"><a href="#">Data Laporan</a></li>
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
                                <strong class="card-title">Data Laporan</strong>
                            </div>
                            <div class="card-body">
                                <form action="" method="POST">
                                    <div class="table-responsive">
                                        <table width="100%">
                                            <tr>
                                                <td>
                                                    <input type="date" name="tgl_awal" class="form-control" value="<?= date('Y-m-d')?>">
                                                    </td>
                                                <td>
                                                    <input type="date" name="tgl_akhir" class="form-control" value="<?= date('Y-m-d')?>">
                                                </td>

                                                <td width="15%">
                                                    <button type="submit" class="btn btn-warning" >Lihat Data</button>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </form>
                                <br>
                                <?php
                                
                                $tgl_awal = $_POST['tgl_awal'];
                                $tgl_akhir = $_POST['tgl_akhir'];
                                
                                if($tgl_awal == ''){
                                    $tgl_awal = date('Y-m-d');
                                }
                                if($tgl_akhir == ''){
                                    $tgl_akhir = date('Y-m-d');
                                }
                                $awal = date("d-m-Y", strtotime($tgl_awal));
                                $akhir = date("d-m-Y", strtotime($tgl_akhir));
                                ?>

                                <a target="blank"><button onClick="exportCSVExcel('laporan','laporan_<?= $awal;?>_<?= $akhir;?>')" type="submit" class="btn btn-success"><i class="fa fa-print"> &nbsp; Cetak Laporan</i></button></a>
                                <!-- <a href="pages/laporan_transaksi.php?tgl_awal=<?= $tgl_awal;?>&tgl_akhir=<?= $tgl_akhir;?>" target="blank"><button type="submit" class="btn btn-success"><i class="fa fa-print"> &nbsp; Cetak Laporan PDF</i></button></a> -->
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
                            <div class="card-body">

                                        <p align="center" id="judullaporan"><b>
                                            Laporan Pencucian <br>
                                            GNW AUTO WASH <br>
                                            Tanggal <?= $awal;?> Sampai <?= $akhir;?></b>
                                        </p><br>
                                    
                                <table id="laporan" class="table table-striped table-bordered">
                                    <?php
                                    include ("../config/koneksi.php");
                                    
                                    $sqll = "
                                    
                                        select 
                                            jenis_cucian,sum(total_biaya) total_biaya 
                                        from 
                                            transaksi 
                                            join pendaftaran using (id_pendaftaran) 
                                            join jenis_cucian using(id_jenis_cucian) 
                                            join customer 
                                        where 
                                            pendaftaran.id_customer=customer.id_customer 
                                            and tanggal between '$tgl_awal' and '$tgl_akhir'
                                        group by jenis_cucian ;

                                    ";
                                    // print_r($sqll);die;
                                    
                                    $resultt = mysql_query($sqll);
                                        if(mysql_num_rows($resultt) > 0){
?>                                            
                                    <thead>
                                        <tr style="display:none;">
                                            <th></th>
                                            <th>
                                                <p align="center"><b>
                                                Laporan Pencucian <br>
                                                GNW AUTO WASH <br>
                                                Tanggal <?= $awal;?> Sampai <?= $akhir;?></b>
                                            </p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>No.</th>
                                            <th>Jenis Cucian</th>
                                            <th>Total Biaya</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $nomor=1;
                                        $grandt= 0 ;
                                        while($data = mysql_fetch_array($resultt)){
                                            $grandt += $data['total_biaya'];
                                        ?>                                          
                                        <tr>
                                            <td><?= $nomor++;?></td>
                                            <td><?= $data['jenis_cucian'];?></td>
                                            <td><?= $data['total_biaya'];?></td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Grand Total</th>
                                            <th></th>
                                            <th><?= $grandt ?></th>
                                        </tr>
                                    </tfoot>
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

        <script>
            function exportCSVExcel(id,name) {
                table='#'+id ;
                $(table).table2excel({
                exclude: ".no-export",
                filename: name+".xls",
                fileext: ".xls",
                exclude_links: true,
                exclude_inputs: true

                });
                // var wb = XLSX.utils.table_to_book(document.getElementById(id));
                // XLSX.writeFile(wb, 'sample.xlsx');
                // return false;
            }
        </script>