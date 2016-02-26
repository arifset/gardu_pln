<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo base_url();?>asset/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Admin</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-eraser"></i>
                <span>Pengukuran</span>
                <span class="label label-primary pull-right">4</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Input Pengukuran</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Admin</span>
                <span class="label label-primary pull-right">4</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo site_url()?>/dashboard/add_gardu/"><i class="fa fa-circle-o"></i>Tambah Gardu</a></li>
                <li><a href="<?php echo site_url()?>/dashboard/gardu/"><i class="fa fa-circle-o"></i>Gardu</a></li>
                <li><a href="<?php echo site_url()?>/dashboard/oil_level/"><i class="fa fa-circle-o"></i>Oil Level list</a></li>
                <li><a href="<?php echo site_url()?>/dashboard/name_trafo_list/"><i class="fa fa-circle-o"></i>Name Trafo list</a></li>
                <li><a href="<?php echo site_url()?>/dashboard/tap_list/"><i class="fa fa-circle-o"></i>Tap list</a></li>
                <li><a href="<?php echo site_url()?>/dashboard/tipe_trafo_list/"><i class="fa fa-circle-o"></i>Tipe Trafo list</a></li>   
                <li>
                      <a href="#"><i class="fa fa-circle-o"></i>Note<i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a href="<?php echo site_url()?>/dashboard/note_gardu/"><i class="fa fa-circle-o"></i>Note Gardu</a></li>
                        <li><a href="<?php echo site_url()?>/dashboard/note_rak/"><i class="fa fa-circle-o"></i>Note Rak</a></li>
                        <li><a href="<?php echo site_url()?>/dashboard/note_trafo/"><i class="fa fa-circle-o"></i>Note Trafo</a></li>
                      </ul>
                    </li>
              </ul>
            </li>
            <li>
              <a href="pages/widgets.html">
                <i class="fa fa-th"></i> <span>Widgets</span> <small class="label pull-right bg-green">new</small>
              </a>
            </li>
            <li class="header">LABELS</li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>