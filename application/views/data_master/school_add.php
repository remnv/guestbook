<!-- Modal -->
<div id="addschool" class="modal fade" role="dialog" tabindex="-1" style="z-index:10000;">
  <div class="modal-dialog" role="document">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">School Name's</h4>
      </div>

      <form action="<?php echo base_url('data_master/school_add')?>" method="post">
      <div class="modal-body">
         <div class="row form-group">
            <div class="col-sm-9">
              <a href="#" class="btn btn-primary btn-xs list-inline addrow" style="margin-bottom:1%; margin-left:1%; float:left;"><i>Add</i></a>
              <table class="table table-striped table-bordered" id="addrow">
              <thead>
                <tr>
                  <th><span>No</span></th>
                  <th><span>School</span></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td><input type="text" name="nama_sekolah[]" placeholder="example : SMK N 26"></td>
                </tr>
              </tbody>
            </table>
            </div>
         </div>
      </div>

      <div class="modal-footer">
        <div class="row form-group">
          <!-- <label colspan="2"> -->
            <input type="submit" name="button" class="btn btn-success" value="Save">
            <button style="margin-right:1%" type="reset" class="btn btn-default">Reset</button>
          <!-- </label> -->
        </div>
      </div>
      
     </form>
    </div>
  </div>
 </div>    