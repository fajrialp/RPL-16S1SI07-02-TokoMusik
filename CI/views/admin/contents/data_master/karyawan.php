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
                <div class="centent" >
                 
              
                    <i class="fa fa-align-justify"></i> Data karyawan</div>
                  <div class="card-body">
                    <table class="table table-responsive-sm table-bordered">
                      <thead>
                        <tr>
                          <th><center>id_karyawan</center></th>
                          <th><center>nama_karyawan</center></th>
                          <th><center>username</center></th>
                          <th><center>Email</center></th>
                          <th><center>password</center></th>
                          
                          <th><center>action</center></th>
                        </tr>
                      </thead>
                       
                      <tbody>
                   
                      <?php foreach($id as $d){ ?>
                        <tr>
                         
                          <td><center><?php echo "KR" .$d['id']; ?></center></td>
                          <td><center><?php echo $d['nama_karyawan']; ?></center></td>
                          <td><center><?php echo $d['username']; ?></center></td>
                          <td ><center><?php echo $d['email']; ?></center></td>
                          <td><center><?php echo $d['password']; ?></center></td>
                          

                          <!--
                          <td>Staff</td>
                          <td>asd</td>
                          <td>asd</td>
                          <td>asd</td>
                          <td>
                          --> <td>
                          <a class="badge badge-success" href="<?php echo base_url()."index.php/DataMaster/EditData/". $d['id']; ?>">edit</a>

                             <a  class="badge badge-danger" href="<?php echo base_url()."index.php/DataMaster/do_delete/". $d['id']; ?>"><center>delete</center></a>
                             </td>
                          </td>
                        </tr>
                      </tbody>
                    
                      <?php  } ?>
                    </table>

                    <form class="form-signin" action="<?php echo site_url('DataMaster/TambahKaryawan') ?>"  method="post">
                      <button class="btn btn-primary px-4" type="submit"><center>Tambah</center></button>
                  
                    </form>
                    <br>
                    
                  </div>
                </div>
              </div>
                </div>
              </div>
              
            </div>
            <!-- /.card-->
            
            <!-- /.row-->
            
            <!-- /.row-->
          </div>
        </div>
      </main>

      </div>
       <div>
       <?php $this->load->view('admin/aside') ?>
       </div>
       <div>
       <?php $this->load->view('admin/footer') ?>
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