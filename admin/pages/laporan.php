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
                                    <li class="active"><a href="#">Laporan</a></li>
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
                                <strong class="card-title">Laporan</strong>
                            </div>
                            <div class="card-body">
                                <form action="" method="POST">
                                    <div class="table-responsive">
                                        <table width="100%">
                                            <tr>
                                                <td>
                                                    <label for="text-input" class=" form-control-label">Tgl Awal</label>
                                                    <input type="date" name="tgl_awal" class="form-control" value="<?= date('Y-m-d')?>">
                                                </td>
                                                <td>
                                                    <label for="text-input" class=" form-control-label">Tgl Akhir</label>
                                                    <input type="date" name="tgl_akhir" class="form-control" value="<?= date('Y-m-d')?>">
                                                </td>

                                                <td>
                                                    <label for="text-input" class=" form-control-label">Jenis Cucian</label>
                                                    <?php
                                                    $result = mysql_query("SELECT * FROM jenis_cucian");
                                                    $jsArray = "var prdName = new Array();\n";
                                                    echo '<select class="form-control" name="id_jenis_cucian" onchange="document.getElementById(\'txt2\').value = prdName[this.value]">';
                                                    echo '<option value="all">All</option>';
                                                    while ($row = mysql_fetch_array($result)) {
                                                        echo '<option value="' . $row['jenis_cucian'] . '">' . $row['jenis_cucian'] . '</option>';
                                                        $jsArray .= "prdName['" . $row['jenis_cucian'] . "'] = '" . addslashes($row['biaya']) . "';\n";
                                                    }
                                                    echo '</select>';

                                                    ?>
                                                </td>
                                                <td>
                                                    <label for="text-input" class=" form-control-label">Status Voucher</label>
                                                    <select class="form-control" name="status_voucher">
                                                        <option value="all">All</option>
                                                        <option value="voucher">Voucher</option>
                                                        <option value="tanpavoucher">Tanpa Voucher</option>
                                                    </select>
                                                </td>

                                                <td width="15%">
                                                    <br>
                                                    <button type="submit" class="btn btn-warning">Lihat Data</button>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </form>
                                <br>
                                <?php
                                
                                $tgl_awal = $_POST['tgl_awal'];
                                $tgl_akhir = $_POST['tgl_akhir'];
                                $jenis_cuci = $_POST['id_jenis_cucian'];
                                $status_voucher = $_POST['status_voucher'];
                                $jenis = ' ';
                                if($jenis_cuci != 'all'){
                                    $jenis      = " and jenis_cucian = '$jenis_cuci' ";
                                    $juduljenis = $jenis_cuci ;
                                }else{
                                    $juduljenis = " Semua Jenis" ;
                                }
                                
                                if($status_voucher == 'all'){
                                    $judulvoucher      = '' ;
                                    $wherevoucher      = '' ;
                                }else{
                                    if($status_voucher == 'voucher'){
                                        $wherevoucher      = " and voucher = 'aktif' ";
                                    }else{
                                        $wherevoucher      = "  ";
                                    }
                                    $judulvoucher      = $status_voucher  ;
                                }


                                if($tgl_awal == ''){
                                    $tgl_awal = date('Y-m-d');
                                }
                                if($tgl_akhir == ''){
                                    $tgl_akhir = date('Y-m-d');
                                }

                                $awal = date("d-m-Y", strtotime($tgl_awal));
                                $akhir = date("d-m-Y", strtotime($tgl_akhir));
                                ?>

                                <a target="blank"><button onClick="exportCSVExcel('laporan','laporan_<?= $juduljenis ?>_<?= $awal;?>_<?= $akhir;?>')" type="submit" class="btn btn-success"><i class="fa fa-print"> &nbsp; Cetak Laporan</i></button></a>
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

                                    
                                        <p align="center"><b>
                                            Laporan Pencucian <br>
                                             <?= $juduljenis ?><br>
                                             <?= $judulvoucher ?><br>
                                            GNW AUTO WASH <br>
                                            Tanggal <?= $awal;?> Sampai <?= $akhir;?><br><br>
                                        </p><br>
                                    
                                <table id="laporan" class="table table-striped table-bordered">
                                    <?php
                                    include ("../config/koneksi.php");
                                    
                                    $sqll = "select * from transaksi join pendaftaran using (id_pendaftaran) join jenis_cucian using(id_jenis_cucian) join customer where pendaftaran.id_customer=customer.id_customer and tanggal between '$tgl_awal' and '$tgl_akhir' $jenis $wherevoucher order by id_transaksi desc";
                                    // print_r($sql);die;
                                    $resultt = mysql_query($sqll);
                                        if(mysql_num_rows($resultt) > 0){
?>                                            
                                    <thead>
                                        <tr style="display:none;">
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th>
                                                <p align="center"><b>
                                                Laporan Pencucian <br>
                                                <?= $juduljenis ?><br>
                                                GNW AUTO WASH <br>
                                                Tanggal <?= $awal;?> Sampai <?= $akhir;?><br><br>

                                                Download By <?= $_SESSION['nama'].' '.date('Y-m-d H:i:s') ?> 

                                                </b>
                                            </p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>No.</th>
                                            <th>No. Antrian</th>
                                            <th>Jam Daftar</th>
                                            <th>Nama</th>
                                            <th>No. Plat</th>
                                            <th>Jenis Cucian</th>
                                            <th>Total Biaya</th>
                                            <!-- <th width="30%">Status</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $nomor=1;
                                        $gtotal=0;
                                        while($data = mysql_fetch_array($resultt)){
                                            $gtotal += $data['total'];
                                        ?>                                          
                                        <tr>
                                            <td><?= $nomor++;?></td>
                                            <td><?= $data['no_antrian'];?></td>
                                            <td><?= $data['jam_pendaftaran'];?></td>
                                            <td><?= $data['nama'];?></td>
                                            <td><?= $data['nomor_plat'];?></td>
                                            <td><?= $data['jenis_cucian'];?></td>
                                            <td><?= $data['total'];?></td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                    <tfoot>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th>Total</th>
                                        <th><?=$gtotal?></th>
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