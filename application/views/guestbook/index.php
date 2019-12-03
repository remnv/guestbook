<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $judul;?>
        <small></small>
      </h1>
    </section>

  <div class="box-body">
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
    <form method="post" class="form-horizontal" action="<?php echo base_url('guestbook/insert');?>">
  
    <div class="form-group">
      <label style="text-align:left;" for="Nama" class="col-lg-2 control-label">Name</label>
      <div class="col-lg-10">
        <input name="nama" class="form-control" id="NamaPO" placeholder="example : Riziq Pandu" type="text" required>
      </div>
    </div>

    <div class="form-group">
      <label style="text-align:left;" for="Competition" class="col-lg-2 control-label">Competition</label>
      <div class="col-lg-10">
        <select name="id_lomba" class="form-control select-tags" id="Competition" style="width:100%;">
          <option value="">Which competition you are in ?</option>
            <?php foreach ($llomba as $llo) { ?>
          <option value="<?php echo $llo->id_lomba;?>"><?php echo $llo->nama_lomba;?></option>
            <?php } ?>
        </select>
      </div>
    </div> 

    <div class="form-group">
      <label style="text-align:left;" for="School" class="col-lg-2 control-label">School</label>
      <div class="col-lg-10">
        <select name="id_sekolah" class="form-control select-tags" id="School" style="width:100%;" required>
          <option value="">Where is your school ?</option>
            <?php foreach ($lsekolah as $lse) { ?>
          <option value="<?php echo $lse->id_sekolah;?>"><?php echo $lse->nama_sekolah;?></option>
            <?php } ?>
        </select>
      </div>
    </div> 

    <div class="form-group">
      <label style="text-align:left;" for="Team" class="col-lg-2 control-label">Team</label>
      <div class="col-lg-10">
        <select name="id_team" class="form-control select-tags" id="Team" style="width:100%;">
          <option value="">Which team are you ?</option>
            <?php foreach ($lteam as $lte) { ?>
          <option value="<?php echo $lte->id_team;?>"><?php echo $lte->nama_team;?></option>
            <?php } ?>
        </select>
      </div>
    </div> 

    <div class="form-group">
      <label style="text-align:left;" for="Tipe" class="col-lg-2 control-label">Type</label>
      <div class="col-lg-10">
        <select name="id_tipe" class="form-control select-tags" id="Tipe" style="width:100%;" required>
          <option value="">Who are you ?</option>
            <?php foreach ($ltipe as $lti) { ?>
          <option value="<?php echo $lti->id_tipe;?>"><?php echo $lti->nama_tipe;?></option>
            <?php } ?>
        </select>
      </div>
    </div> 
  
    <!-- Numbers Only -->
    <div class="form-group">
      <label style="text-align:left;" for="NoHP" class="col-lg-2 control-label">No. HP</label>
      <div class="col-lg-10">
        <input name="no_hp" class="form-control numbersonly" id="NoHP" placeholder="example : 088213598xxx" type="text">
      </div>
    </div>    

    <input type="hidden" name="button" value="save">

    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-danger">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>

    </form>

    </section>
    <!-- /.content -->
  </div>  
</div>  