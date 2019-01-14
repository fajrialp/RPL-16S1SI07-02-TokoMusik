
<!DOCTYPE html>



<html lang="en">
<?php $this->load->view('admin/head') ?>
  
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">

    <?php $this->load->view('admin/header') ?>
    
      <div>
       <?php $this->load->view('admin/sidebar') ?>
       </div>
       <div>
     
       
        <?php  $this->load->view($contents); ?>
        
       </div>
       <div>
       <?php $this->load->view('admin/aside') ?>
       </div>
      
       <?php $this->load->view('admin/footer') ?>
     
   
    
    

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
