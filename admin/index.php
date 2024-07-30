<?php
// error_reporting(0);
include "../config/cek.php";
date_default_timezone_set('Asia/Jakarta');
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GNW AUTO WASH</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png"> -->


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="shortcut icon" type="image/x-icon" href="../images/gnw/gnwlogo.jpg">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
    <script
    src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script
    src="https://cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>

    <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <?php if($_SESSION['role'] != 'customer'){?>
                <ul class="nav navbar-nav">
                    <li>
                        <a style="color:#fff" href="./"><i style="color:#f9d018 !important;" class="menu-icon fa fa-home"></i>Beranda </a>
                    </li>
                    <li>
                        <a style="color:#fff" href="index.php?p=pendaftaran"> <i style="color:#f9d018 !important;" class="menu-icon ti-clipboard"></i>Pendaftaran </a>
                    </li>
                    <li>
                        <a style="color:#fff" href="index.php?p=transaksi"> <i style="color:#f9d018 !important;" class="menu-icon ti-receipt"></i>Riwayat Pencucian </a>
                    </li>
                    <li>
                        <a style="color:#fff" href="index.php?p=customer"> <i style="color:#f9d018 !important;" class="menu-icon ti-id-badge"></i>Data Pelanggan </a>
                    </li>
                    <li>
                        <a style="color:#fff" href="index.php?p=laporan"> <i style="color:#f9d018 !important;" class="menu-icon ti-printer"></i>Laporan </a>
                    </li>
                    <!-- <li>
                        <a style="color:#fff" href="index.php?p=laporantransaksi"> <i style="color:#f9d018 !important;" class="menu-icon ti-printer"></i>Laporan </a>
                    </li> --><link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">

                    <li style="color:#fff" class="menu-title">Extra</li><!-- /.menu-title -->
                    <li>
                        <a style="color:#fff" href="index.php?p=user"> <i style="color:#f9d018 !important;" class="menu-icon ti-user"></i>User </a>
                    </li>

                    <li>
                        <a style="color:#fff" href="index.php?p=type_mobil"> <i style="color:#f9d018 !important;" class="menu-icon ti-list"></i>Jenis Kendaraan </a>
                    </li>

                    <li>
                        <a style="color:#fff" href="index.php?p=jenis_cucian"> <i style="color:#f9d018 !important;" class="menu-icon ti-list"></i>Jenis Cucian </a>
                    </li>

                    <li>
                        <a style="color:#fff" href="index.php?p=saran"> <i style="color:#f9d018 !important;" class="menu-icon ti-list"></i>Kritik dan Saran </a>
                    </li>

                    <li>
                        <a style="color:#fff" href="index.php?p=promo"> <i style="color:#f9d018 !important;" class="menu-icon ti-list"></i>Promo </a>
                    </li>

                </ul>
                <?php }else{ ?>
                    <ul class="nav navbar-nav">
                    <li>
                        <a style="color:#fff" href="./"><i style="color:#f9d018 !important;" class="menu-icon fa fa-home"></i>Beranda </a>
                    </li>
                    <li>
                        <a style="color:#fff" href="index.php?p=transaksi"> <i style="color:#f9d018 !important;" class="menu-icon ti-receipt"></i>Riwayat Pencucian </a>
                    </li>
                    <li>
                        <a style="color:#fff" href="index.php?p=antrian"> <i style="color:#f9d018 !important;" class="menu-icon ti-receipt"></i>Pendaftaran </a>
                    </li>

                </ul>
                <?php }?>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="../images/gnw/gnwlogo.jpg" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars" style="color:#f9d018;"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">


                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-users" style="color:#f9d018;"></i>
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="../config/logout.php"><i class="fa fa-power-off"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- /header -->
        <!-- Header-->








        <!--
      ========================================================
                                  CONTENT
      ========================================================
      -->

<?php
    $pages_dir = 'pages';
    if (!empty($_GET['p'])) {
        
        if (!empty($_GET['c'])) {
            $pages_dir = 'controller';
        }

            $pages = scandir($pages_dir, 0);
            unset($pages[0], $pages[1]);
        
            $p = $_GET['p'];
            if (in_array($p . '.php', $pages)) {
                
                if($p == 'antrian'){
                    $queryy = mysql_query("select *,end + INTERVAL 1 DAY as buka from status_operasional where status = 'tutup' AND now() BETWEEN start and end+ INTERVAL 1 DAY ");
                    $hasil  = mysql_fetch_array($queryy);
                    if(isset($hasil)){
                    ?>
                        <script>
                            swal("Oops!","Saat ini Masih Tutup", "warning");
                            window.onclick = function() {
                                document.location='index.php?p=home';
                            }
                        </script> 
                    <?php
                        return false ;   
                    }
                }
                include $pages_dir . '/' . $p . '.php';
            } else {
                ?>
                <script language="JavaScript">
                document.location='index.php?p=error-404'
                </script>
                <?php
            }

    } else {
        include $pages_dir . '/home.php';
    }
?>



      <!--
      ========================================================
                                  FOOTER
      ========================================================
      -->






        <div class="clearfix"></div>

        <!-- <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &#169; <script type='text/javascript'>var creditsyear = new Date();document.write(creditsyear.getFullYear());</script> <a expr:href='data:blog.homepageUrl'><data:blog.title/></a>. All rights reserved.
                    </div>
                </div>
            </div>
        </footer> -->

    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/init/datatables-init.js"></script>
    <script src="assets/js/global.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/linways/table-to-excel@v1.0.4/dist/tableToExcel.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>
    <script src="//unpkg.com/xlsx/dist/xlsx.full.min.js" type="text/javascript"></script>
    <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
          $('#bootstrap-data-table').DataTable();
      } );
  </script>


</body>
</html>
