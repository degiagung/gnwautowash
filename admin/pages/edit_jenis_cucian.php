<?php
  include("../config/koneksi.php");  
  ?>
  <?php
$id_jenis_cucian = $_GET['id_jenis_cucian']; //get the no which will updated

$queryy = mysql_query("SELECT * FROM jenis_cucian WHERE id_jenis_cucian = '$id_jenis_cucian'"); //get the data that will be updated
$dt=mysql_fetch_array($queryy);

?>
<div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Jenis Cucian</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Jenis Cucian</a></li>
                                    <li class="active"><a href="#">Edit Data Jenis Cucian</a></li>
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
                                <strong class="card-title">Edit Data Jenis Cucian</strong>
                            </div>
                            <div class="card-body">
         
<form action="index.php?c=controller&p=proses_edit_jenis_cucian" method="post" enctype="multipart/form-data" class="form-horizontal">
     <input type="hidden" id="text-input" name="id_jenis_cucian" value="<?=$dt['id_jenis_cucian'];?>" class="form-control" required="">

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jenis Cucian</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="jenis_cucian" class="form-control" value="<?=$dt['jenis_cucian'];?>" required="">
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Biaya</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="biaya" name="biaya" class="form-control" value="<?=$dt['biaya'];?>" required="">
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Parent Jenis</label></div>
                                        <div class="col-12 col-md-9">
                                            <?php
                                                $result = mysql_query("SELECT * FROM jenis_cucian WHERE id_parent is null");
                                                $jsArray = "var prdName = new Array();\n";
                                                echo '<select class="form-control id_parent" name="id_parent" onchange="document.getElementById(\'txt2\').value = prdName[this.value]">';
                                                echo '<option value="null"></option>';
                                                while ($row = mysql_fetch_array($result)) {
                                                    echo '<option value="' . $row['id_jenis_cucian'] . '">' . $row['jenis_cucian'] . '</option>';
                                                    $jsArray .= "prdName['" . $row['id_jenis_cucian'] . "'] = '" . addslashes($row['biaya']) . "';\n";
                                                }
                                                echo '</select>';

                                                ?>
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
            $(".id_parent").val(<?= $dt['id_parent'] ?>).change();
            function sum() {
                var txtFirstNumberValue  = document.getElementById('biaya').value;
                if (!isNaN(txtFirstNumberValue)) {
                    convertrp('biaya');
                }
                
            }
        </script>