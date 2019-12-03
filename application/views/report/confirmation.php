<div id="export<?php echo $da->tanggal;?>" class="modal fade" role="dialog" tabindex="-1" style="z-index:10000">
<div class="modal-dialog" role="document">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Are you sure,</h4>
      </div>

      <form action="<?php echo base_url("report/cetak_report")?>" method="post">
      <div class="modal-body">
         <div class="row form-group">
            <div class="col-sm-9">
				<lable for="optionsRadios1">Do you want to export and delete this report ?</label>
				<div class="radio">
		          <label>
                <input type="hidden" name="tanggal" value="<?php echo $da->tanggal;?>">
		            <input type="radio" name="option" id="optionsRadios1" value="yes" checked="">
		            Yes, I want to export and delete this report
		          </label>
		        </div>
		        <div class="radio">
		          <label>
		            <input type="radio" name="option" id="optionsRadios2" value="no">
					No, I just want to export this report
		          </label>
		        </div>
            </div>
         </div>
      </div>

      <div class="modal-footer">
        <div class="row form-group">
          <!-- <label colspan="2"> -->
            <input style="margin-right:1%;" type="submit" name="button" class="btn btn-success" value="Export">
            <input type="hidden" name="tanggal" class="btn btn-success" value="<?php echo $da->tanggal;?>">
          <!-- </label> -->
        </div>
      </div>
      
     </form>
    </div>
  </div>
 </div>    