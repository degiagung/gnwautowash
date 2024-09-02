<div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Merek Mobil</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Merek Mobil</a></li>
                                    <li class="active"><a href="#">Tambah Data Merek Mobil</a></li>
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
                                <strong class="card-title">Tambah Data Merek Mobil</strong>
                            </div>
                            <div class="card-body">
         
<form action="index.php?c=controller&p=proses_tambah_merek_mobil" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Type Mobil</label></div>
                                        <div class="col-12 col-md-9">
                                            <?php
                                                $result = mysql_query("SELECT * FROM type_mobil WHERE id_parent is null");
                                                $jsArray = "var prdName = new Array();\n";
                                                echo '<select class="form-control" name="id_parent" >';
                                                echo '<option value="null"></option>';
                                                while ($row = mysql_fetch_array($result)) {
                                                    echo '<option value="' . $row['id_type_mobil'] . '">' . $row['type_mobil'] . '</option>';
                                                }
                                                echo '</select>';

                                                ?>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Merek Mobil</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="type_mobil" class="form-control" required="">
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