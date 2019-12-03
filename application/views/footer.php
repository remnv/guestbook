<!-- FOOTER -->
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
    </div>
    <strong>Supported by 2016 NOMMOR and Created by rTo</strong>. All rights
    reserved.
  </footer>
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url();?>berkas/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url();?>berkas/bootstrap/js/bootstrap.min.js"></script>

<!-- select2 -->
<script src="<?php echo base_url();?>berkas/plugins/select2/select2.min.js"></script>
<script src="<?php echo base_url();?>berkas/dist/js/app.min.js"></script>

<!-- Pace -->
<script src="<?php echo base_url();?>berkas/plugins/pace/pace.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="<?php echo base_url();?>berkas/plugins/fastclick/fastclick.js"></script>
<script src="<?php echo base_url();?>berkas/plugins/slimScroll/jquery.slimscroll.min.js"></script>

<script src="<?php echo base_url();?>berkas/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>berkas/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- Page script -->

<script>
paceOptions = {
  // Configuration goes here. Example:
  elements: false,
  restartOnPushState: false,
  restartOnRequestAfter: false
}
  $(function () {
    $(".select-tags").select2();

  $(function () {
    $(".example1").DataTable();
    $("#example2").DataTable();
    $("#example4").DataTable();
    $('#example3').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
    var BASE_URL = '<?php echo base_url();?>';
    $('#example5').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": BASE_URL+"dashboard/search"
    });

    });
    $('.numbersonly').keyup(function () { 
       this.value = this.value.replace(/[^0-9\+]/g,'');
    });    

  });
            $(document).on("click", ".addrow", function(e){
                e.preventDefault();
               addRow('addrow');
            });

            function addRow(tableID) {

                var table = document.getElementById(tableID);

                var rowCount = table.rows.length;
                var row = table.insertRow(rowCount);

                var colCount = table.rows[0].cells.length;

                for(var i=0; i<colCount; i++) {

                    var newcell = row.insertCell(i);

                    newcell.innerHTML = table.rows[1].cells[i].innerHTML;

                    row.cells[0].innerHTML = rowCount;

                    var tipe = newcell.childNodes[0].type;
                    switch(tipe) {
                        case "label":
                                newcell.childNodes[0].value = "";
                                break;
                        case "text":
                                newcell.childNodes[0].value = "";
                                break;
                        case "select-one":
                                newcell.childNodes[0].selectedIndex = 0;
                                break;
                    }
                }


            }
       

</script>

<!-- DataTables -->
<script>
</script>
</body>
</html>
<!--/FOOTER-->
