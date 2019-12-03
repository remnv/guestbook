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
              <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addlomba" style="margin-bottom:2%"><span class="glyphicon glyphicon-plus"></span>Add</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <table class="table table-striped table-bordered example1" id="addrow1">
              <thead>
                <tr>
                  <th><span>No</span></th>
                  <th><span>Competition</span></th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $no = 0;
                foreach ($data as $da) { $no++ ?>
                <tr>
                  <td style="width:2%;"><?php echo $no;?></td>
                  <td><?php echo $da->nama_lomba;?></td>
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

<?php $this->load->view('data_master/lomba_add');?>
