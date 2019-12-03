<!--BODY-->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>
Dashboard
<small></small>
</h1>
<ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
  <li class="active">Dashboard</li>
</ol>
</section>
<!-- Main content -->
    <section class="content">
<!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="box-header">
          <h3 class="box-title"></h3>
        </div>
        <div class="box-body chart-responsive">
          <div id="response"></div>
          <div class="chart" id="chart" style="height: 300px;"></div>
        </div>
      </div>
    </section>
    <section class="content">
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
                            <th><span>School</span></th>
                            <th><span>Competition</span></th>
                            <th><span>Team</span></th>
                            <th><span>Name</span></th>
                            <th><span>Type</span></th>
                            <th><span>No. HP</span></th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($data as $da) { ?>
                          <tr>
                            <td><?php echo $da->nama_sekolah;?></td>
                            <td><?php echo $da->nama_sekolah;?></td>
                            <td><?php echo $da->nama_sekolah;?></td>
                            <td><?php echo $da->nama_sekolah;?></td>
                            <td><?php echo $da->nama_sekolah;?></td>
                            <td><?php echo $da->nama_sekolah;?></td>
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
