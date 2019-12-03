<!--BODY-->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $judul;?>
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-share"></i> <?php echo $menu;?></a></li>
        <li class="active"><?php echo $submenu;?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-xs-12">
          <!-- <div class="scrollable-table"> -->
          <!-- Biar responsive ketika di layar kecil -->
            <div class="box">
            <div class="box-header">
              <div class="col-lg-6"><h3 class="box-title"> Guestbook Report</h3></div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped">

              <thead>
                <tr>
                  <th><span>Date</span></th>
                  <th><span>Total Supporter</span></th>
                  <th><span>Total Player</span></th>
                  <th><span>Total Coach</span></th>
                  <th><span>Total</span></th>
                  <th><span>Action</span></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($data as $da) { ?>
                <tr>
                  <td><?php echo date('d M Y', strtotime($da->tanggal));?></td>
                  <td><?php echo $da->jml_supporter;?></td>
                  <td><?php echo $da->jml_player;?></td>
                  <td><?php echo $da->jml_coach;?></td>
                  <td><?php echo $da->jml_all;?></td>
                  <td><a data-toggle="modal" data-target="#export<?php echo $da->tanggal;?>" style="margin-bottom:2%" class="btn btn-xs btn-success">Report Excel</a></td>
                </tr>
                <?php 
                include ('confirmation.php');
                } ?>
              </tbody>
            </table>
          <!-- </div> -->
        </div>
      </div>
    </div>
  </div>
    </section>
    <!-- /.content -->
  </div>  
  <!--BODY-->

  <!-- php load bahan tambah-->

