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
        <div class="panel-body">
          <!-- <div class="scrollable-table"> -->
          <!-- Biar responsive ketika di layar kecil -->
            <div class="box">
            <div class="box-header">
              <h3 class="box-title"> Guestbook Report</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <table class="table table-striped table-bordered" id="example2">
              <thead>
                <tr>
                  <th><span>Team</span></th>
                  <th><span>Competition</span></th>
                  <th><span>Total Player</span></th>
                  <th><span>Total Couch</span></th>
                  <th><span>Total Supporter</span></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($data as $da) { ?>
                <tr>
                  <td><?php echo $da->nama_team;?></td>
                  <td><?php echo $da->nama_lomba;?></td>
                  <td><?php echo $da->jml_player;?></td>
                  <td><?php echo $da->jml_coach;?></td>
                  <td><?php echo $da->jml_supporter;?></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>  
  <!--BODY-->

  <!-- php load bahan tambah-->
