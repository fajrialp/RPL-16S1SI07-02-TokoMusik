 <!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.1.5
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">
  <head>
    <base href="./../">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Free Bootstrap Admin Template</title>
    <!-- Icons-->
    <link href="<?php echo base_url('assets/web/back/vendors') ?>/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/web/back/vendors') ?>/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/web/back/vendors') ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/web/back/vendors') ?>/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="<?php echo base_url('assets/web/back/css') ?>/style.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/web/back/vendors') ?>/pace-progress/css/pace.min.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
  </head>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
<?php $this->load->view('admin/header') ?>
    <div class="app-body">
      <div>
       <?php $this->load->view('admin/sidebar') ?>
       </div>
       <div>

 <main class="main">
        <!-- Breadcrumb-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item">
            <a href="<?php echo site_url() ?>/welcome/indexadmin">Admin</a>
          </li>
          <li class="breadcrumb-item active">Dashboard</li>
          <!-- Breadcrumb Menu-->
          <li class="breadcrumb-menu d-md-down-none">
            <div class="btn-group" role="group" aria-label="Button group">
              <a class="btn" href="#">
                <i class="icon-speech"></i>
              </a>
              <a class="btn" href="./">
                <i class="icon-graph"></i>  Dashboard</a>
              <a class="btn" href="#">
                <i class="icon-settings"></i>  Settings</a>
            </div>
          </li>
        </ol>
        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-primary">
                 
                  <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
                    <canvas class="chart" id="card-chart1" height="70"></canvas>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-info">
                  
                  <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
                    <canvas class="chart" id="card-chart2" height="70"></canvas>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-warning">
                 
                  <div class="chart-wrapper mt-3" style="height:70px;">
                    <canvas class="chart" id="card-chart3" height="70"></canvas>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-danger">
                  
                  <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
                    <canvas class="chart" id="card-chart4" height="70"></canvas>
                  </div>
                </div>
              </div>
              <!-- /.col-->
            </div>
            <!-- /.row-->
            <div class="card">
              <div class="card-body">
                <div class="row">
                 
                  <!-- /.col-->
                 
                  <!-- /.col-->
                </div>
                <!-- /.row-->
         <form method="POST" action="<?php echo base_url("index.php/Dt_Master_Barang/do_update"); ?>">       
         <div class="card">
                  <div class="card-header">
                    <strong>Edit Data Barang</strong> </div>
                  <div class="card-body">
                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                      <div class="form-group row">
                        
                        <div class="col-md-9">
                          
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="email-input">Id produk</label>
                        <div class="col-md-9">
                          <input class="form-control" id="nama-input" type="text" name="id" placeholder="Masukan Nama id Produk" value="<?php echo $id; ?>" readonly/>
                         </div>
                         </div> 
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="">Nama Produk</label>
                        <div class="col-md-9">
                          <input class="form-control" id="nama-input" type="text" name="nama_produk" placeholder="Masukan Nama Produk" value="<?php echo $nama_produk; ?>">
                          
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="harga-input">Harga</label>
                        <div class="col-md-9">
                          <input class="form-control" id="" type="number" name="harga" placeholder="Harga" value="<?php echo $harga; ?>">
                          
                        </div>
                      </div>

                       <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="stok-input">Stok</label>
                        <div class="col-md-9">
                          <input class="form-control" id="" type="number" name="stok" placeholder="Stok" value="<?php echo $stok; ?>">
                          
                        </div>
                      </div>
                      
                     
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="select1">Merk</label>
                        <div class="col-md-9">
                          <select class="form-control" id="select1" name="nama_merek">
                            <?php foreach ($merk as $kuy =>$m) { ?>
                            <option  value="<?php echo $kuy ?>"><?php echo $m['nama_merek']; ?></option>
                          <?php } ?>
                          </select>
                        </div>
                      </div>

                       <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="select1">Kategori</label>
                        <div class="col-md-9">
                          <select class="form-control" id="select1" name="select2">
                          <?php foreach ($otong as $key => $k) { ?>
                            <option  value="<?php echo $key ?> "><?php echo $k['nama_kategori']; ?></option>
                          <?php } ?>
                          </select>
                        </div>
                      </div>

                    
                     
                   
                  <div class="card-footer">
                    <button class="btn btn-sm btn-primary" type="submit">
                      <i class="fa fa-dot-circle-o"></i> Submit</button>
                    <button class="btn btn-sm btn-danger" type="reset">
                      <i class="fa fa-ban"></i> Reset</button>
                  </div>
                </div>

    </form>
      </main>

      </div>
       <div>
       <?php $this->load->view('admin/aside') ?>
       </div>
       <div>
       <?php // $this->load->view('admin/footer') ?>
       </div>
    </div>

    <script src="vendors/jquery/js/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/web/back/vendors') ?>/popper.js/js/popper.min.js"></script>
    <script src="<?php echo base_url('assets/web/back/vendors') ?>/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('assets/web/back/vendors') ?>/pace-progress/js/pace.min.js"></script>
    <script src="<?php echo base_url('assets/web/back/vendors') ?>/perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
    <script src="<?php echo base_url('assets/web/back/vendors') ?>/@coreui/coreui/js/coreui.min.js"></script>

     <!-- CoreUI and necessary plugins-->
    <script src="<?php echo base_url('assets/web/back/vendors') ?>/jquery/js/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/web/back/vendors') ?>/popper.js/js/popper.min.js"></script>
    <script src="<?php echo base_url('assets/web/back/vendors') ?>/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('assets/web/back/vendors') ?>/pace-progress/js/pace.min.js"></script>
    <script src="<?php echo base_url('assets/web/back/vendors') ?>/perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
    <script src="<?php echo base_url('assets/web/back/vendors') ?>/@coreui/coreui/js/coreui.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="<?php echo base_url('assets/web/back/vendors') ?>/chart.js/js/Chart.min.js"></script>
    <script src="<?php echo base_url('assets/web/back/vendors') ?>/@coreui/coreui-plugin-chartjs-custom-tooltips/js/custom-tooltips.min.js"></script>
    <script src="<?php echo base_url('assets/web/back/js') ?>/main.js"></script>
  </body>
</html>