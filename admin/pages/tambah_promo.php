<div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Promo</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Promo</a></li>
                                    <li class="active"><a href="#">Tambah Data Promo</a></li>
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
                                <strong class="card-title">Tambah Data Promo</strong>
                            </div>
                            <div class="card-body">
         
<form action="index.php?c=controller&p=proses_tambah_promo" method="post" enctype="multipart/form-data" class="form-horizontal">

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Judul</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="judul" class="form-control" required="">
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Promo</label></div>
                                        <div class="col-12 col-md-9">
                                            <textarea id="text-input" name="promo" class="form-control" required=""></textarea>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Mulai</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="date" id="text-input" name="start" class="form-control" required="" min="<?= date('Y-m-d') ?>">
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tangal Akhir</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="date" id="text-input" name="end" class="form-control" required="" min="<?= date('Y-m-d') ?>">
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