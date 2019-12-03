 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>berkas/dist/img/litos.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Litosphere 2k16</p>
          <!-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">Guestbook</li>
        <li>
          <a href="<?php echo base_url('guestbook');?>">
            <i class="ion ion-ios-book"></i> <span>Guestbook</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
      </ul>

      <ul class="sidebar-menu">
        <li class="header">Main Menu</li>
        <!-- <li>
          <a href="<?php echo base_url('dashboard');?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li> -->
        
        <li>
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Masters</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('data_master/team');?>"><i class="fa fa-circle-o"></i> Teams</a></li>
            <li><a href="<?php echo base_url('data_master/school');?>"><i class="fa fa-circle-o"></i> Schools</a></li>
            <li><a href="<?php echo base_url('data_master/competition');?>"><i class="fa fa-circle-o"></i> Competitions</a></li>
          </ul>
        </li>
      </ul>


      <ul class="sidebar-menu">
        <li class="header">Report</li>
        <li>
          <a href="#">
            <i class="fa fa-share"></i>
            <span>Report</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('report/guest');?>"><i class="fa fa-circle-o"></i> Guest</a></li>
            <li><a href="<?php echo base_url('report/report');?>"><i class="fa fa-circle-o"></i> Report</a></li>
          </ul>
        </li>
      </ul>
      
    </section>
    <!-- /.sidebar -->
  </aside>