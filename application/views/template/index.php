<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link href="<?php echo base_url();?>asset/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>asset/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">-->
     <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset/plugins/datatables/dataTables.bootstrap.css">
    <!-- Ionicons -->
    <link href="<?php echo base_url();?>asset/css2/ionicons.min.css" rel="stylesheet">
    <!-- Theme style -->
    <link href="<?php echo base_url();?>asset/dist/css/AdminLTE.min.css" rel="stylesheet">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?php echo base_url();?>asset/dist/css/skins/_all-skins.min.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url();?>asset/plugins/iCheck/flat/blue.css" rel="stylesheet">
    <!-- Morris chart -->
    <link href="<?php echo base_url();?>asset/plugins/morris/morris.css" rel="stylesheet">
    <!-- jvectormap -->
    <link href="<?php echo base_url();?>asset/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Date Picker -->
    <link href="<?php echo base_url();?>asset/plugins/datepicker/datepicker3.css" rel="stylesheet">
    <!-- Daterange picker -->
    <link href="<?php echo base_url();?>asset/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="<?php echo base_url();?>asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
    <?php echo $header;?>
    <?php echo $sidebar;?>
        <div id="page-wrapper">
            <?php echo $content;?>
            <!-- /.row -->
        </div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url();?>asset/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo base_url();?>asset/plugins/jQueryUI/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url();?>asset/bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="<?php echo base_url();?>asset/js2/raphael-min.js"></script>
    <script src="<?php echo base_url();?>asset/plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url();?>asset/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="<?php echo base_url();?>asset/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php echo base_url();?>asset/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
     <!-- DataTables -->
    <script src="<?php echo base_url();?>asset/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>asset/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url();?>asset/plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="<?php echo base_url();?>asset/js2/moment.min.js"></script>
    <script src="<?php echo base_url();?>asset/plugins/daterangepicker/daterangepicker.jS"></script>
    <!-- datepicker -->
    <script src="<?php echo base_url();?>asset/plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?php echo base_url();?>asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="<?php echo base_url();?>asset/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url();?>asset/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url();?>asset/dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url();?>asset/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url();?>asset/dist/js/demo.js"></script>
    <footer class="main-footer">
<div class="pull-right hidden-xs">
    <b>Version</b> 2.3.0
</div>
<strong>Copyright &copy; 2016 <a href="http://bootsrtap.com">bootsrtap</a>.</strong> All rights reserved.
</footer>
  </body>
</html>
