<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>SPK-PM BKD</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="<?php echo base_url(); ?>assets/AdminLTE/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="<?php echo base_url(); ?>assets/AdminLTE/bootstrap/font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="<?php echo base_url(); ?>assets/AdminLTE/bootstrap/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <!-- DATA TABLES -->
    <link href="<?php echo base_url(); ?>assets/AdminLTE/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo base_url(); ?>assets/AdminLTE/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?php echo base_url(); ?>assets/AdminLTE/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="<?php echo base_url(); ?>assets/AdminLTE/plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="<?php echo base_url(); ?>assets/AdminLTE/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="<?php echo base_url(); ?>assets/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="<?php echo base_url(); ?>assets/AdminLTE/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="<?php echo base_url(); ?>assets/AdminLTE/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="<?php echo base_url(); ?>assets/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
        

  <body class="skin-blue sidebar-mini" onload="load_data_temp()">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>SPK-PM BKD</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><h4><i>Sistem Pendukung Keputusan Profile Matching</i></h4></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
            
              
             
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" >
                 <i class="fa fa-user"></i>
                <span class="hidden-xs"><?php echo $this->session->userdata('username'); ?> || <?php echo $this->session->userdata('level'); ?></span>
                </a></li>
                <li class="dropdown user user-menu">
                

              <?php echo anchor('auth/logout',' Log Out',array('class' =>"glyphicon glyphicon-off"));?>
              
                <span class="hidden-xs"></span>
                </a></li>

                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                   
                    <p>
                     Nama User : <?php echo $this->session->userdata('nama_user'); ?> <br>
                     Username  : <?php echo $this->session->userdata('username'); ?><br>
                     Level     : <?php echo $this->session->userdata('level'); ?>  

                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    
                    <div class="pull-right">
                        <?php echo anchor('auth/logout','Sign out',array('class'=>"btn btn-default btn-flat"))?>
                      
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            
            
          </div>
          <!-- search form -->
          
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
             <?php if($this->session->userdata('level') == "mutasi"):?>
            <li>
              <a href="dashboard">
                <i class="fa fa-dashboard"></i> <span>Home</span> 
              </a>
               <?php endif ?>
             
            </li>
             <?php if($this->session->userdata('level') == "mutasi"):?>
            <li class="treeview">
                <?php echo anchor('user',' <i class="fa fa-user"></i>
                <span>Master User</span>') ?>
            </li>
            <?php endif ?>
            <?php if($this->session->userdata('level') == "mutasi"):?>    
                 <li class="treeview">
                     <?php echo anchor('tingkat_jabatan','<i class="fa fa-suitcase"></i>
                <span>Master Tingkat Jabatan</span>') ?>
                 </li>
                  <?php endif ?>
                  <?php if($this->session->userdata('level') == "mutasi"):?>
                  <li class="treeview">
                   <?php echo anchor('unitkerja',' <i class="fa fa fa-building"></i>
                  <span>Master Unit Kerja</span>') ?>
            </li>
                   <?php endif ?>
                   <?php if($this->session->userdata('level') == "mutasi"):?>
               <li class="treeview">
                   <?php echo anchor('jabatan','<i class="fa fa fa-suitcase"></i>
                <span>Master Jabatan</span>') ?>
               </li>
                <?php endif ?>
                <?php if($this->session->userdata('level') == "mutasi"):?>
                  <li class="treeview">
                    <?php echo anchor('pegawai',' <i class="fa fa-user"></i>
                    <span>Master Pegawai</span>') ?>
                  </li>
                <?php endif ?>
                <?php if($this->session->userdata('level') == "mutasi"):?>
               <li class="treeview">
                   <?php echo anchor('jabatan_kosong','<i class="fa fa fa-suitcase"></i>
                <span>Master Jabatan Kosong</span>') ?>
               </li>
                <?php endif ?>
                
                <?php if($this->session->userdata('level') == "penilai"):?>
               <li class="treeview">
                   <?php echo anchor('profil_jabatan','<i class="fa fa fa-suitcase"></i>
                <span>Profile Jabatan</span>') ?>
               </li>
                <?php endif ?>
                
                
              <?php if($this->session->userdata('level') == "penilai"):?>
            <li class="treeview">
                   <?php echo anchor('hasil_seleksi_syarat',' <i class="fa fa-building"></i>
                <span>Hasil Seleksi Calon Kandidat</span>') ?>
            </li>
             <?php endif ?>

             <?php if($this->session->userdata('level') == "penilai" || $this->session->userdata('level') == "kaban" ):?>
            <li class="treeview">
                   <?php echo anchor('hasil_seleksi_syarat/laporan',' <i class="fa fa-building"></i>
                <span>Laporan</span>') ?>
            </li>
             <?php endif ?>
             


             




          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Badan Kepegawaian - Pengembangan Sumber Daya Manusia
          </h1>
            
          <ol class="breadcrumb">
              <b>Kabupaten Bangka Selatan</b>
            
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
         
         <?php   echo $contents; ?>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Information System</b> Sriwijaya University
        </div>
        <strong>Copyright &copy; 2017 Hartati.</strong> All rights reserved.
      </footer>
      
      <!-- Control Sidebar -->      
      <aside class="control-sidebar control-sidebar-dark">                
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane" id="control-sidebar-home-tab">
            
                   

          </div><!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">            
            
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class='control-sidebar-bg'></div>
    </div><!-- ./wrapper -->

    
        <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url(); ?>assets/AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.2 -->
    <script src="<?php echo base_url(); ?>assets/AdminLTE/bootstrap/js/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo base_url(); ?>assets/AdminLTE/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="<?php echo base_url(); ?>assets/AdminLTE/plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/AdminLTE/plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
        
      });
    </script>

     <script type="text/javascript" src="<?php echo base_url('assets/jquery.printPage.js')?>"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".btnPrint").printPage();
        })
    </script>

    <script type="text/javascript">
                   
                    
                    $(function(){
                        $("#tanggal1").datepicker({
                            format:'yyyy-mm-dd'
                        });
                        
                        $("#tanggal2").datepicker({
                            format:'yyyy-mm-dd'
                        });
                        
                        $("#tanggal").datepicker({
                            format:'yyyy-mm-dd'
                        });
                    })
            </script>



            
    <!-- Morris.js charts -->
    <script src="<?php echo base_url(); ?>assets/AdminLTE/plugins/raphael-min.js"></script>
    <script src="<?php echo base_url(); ?>assets/AdminLTE/plugins/morris/morris.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url(); ?>assets/AdminLTE/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="<?php echo base_url(); ?>assets/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url(); ?>assets/AdminLTE/plugins/knob/jquery.knob.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="<?php echo base_url(); ?>assets/AdminLTE/bootstrap/js/moment.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/AdminLTE/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="<?php echo base_url(); ?>assets/AdminLTE/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?php echo base_url(); ?>assets/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="<?php echo base_url(); ?>assets/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?php echo base_url(); ?>assets/AdminLTE/plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->

   <script src="<?php echo base_url(); ?>assets/AdminLTE/dist/js/app.min.js" type="text/javascript"></script>    
    
   
    
   
    
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url(); ?>assets/AdminLTE/dist/js/demo.js" type="text/javascript"></script>
    
     
     
    
    
  </body>
</html>