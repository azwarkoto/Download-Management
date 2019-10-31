<!-- footer content -->

        <footer>
          <div class="pull-right ">
             &copy; <a href="https://lanaysp.com">Lanaysp.com</a> <?= date('Y'); ?>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= base_url(); ?>asset/js/jquery.min.js" ></script>
    <script src="<?= base_url(); ?>asset/js/popper.min.js" ></script>
    <script src="<?= base_url(); ?>asset/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>asset/js/sweetalert2.all.min.js"></script>
    <script src="<?= base_url(); ?>asset/js/myscript.js"></script>

    <!-- jQuery -->
    <script src="<?= base_url('asset'); ?>/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url('asset'); ?>/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?= base_url('asset'); ?>/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?= base_url('asset'); ?>/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?= base_url('asset'); ?>/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?= base_url('asset'); ?>/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?= base_url('asset'); ?>/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?= base_url('asset'); ?>/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?= base_url('asset'); ?>/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?= base_url('asset'); ?>/vendors/Flot/jquery.flot.js"></script>
    <script src="<?= base_url('asset'); ?>/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?= base_url('asset'); ?>/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?= base_url('asset'); ?>/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?= base_url('asset'); ?>/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?= base_url('asset'); ?>/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?= base_url('asset'); ?>/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?= base_url('asset'); ?>/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?= base_url('asset'); ?>/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?= base_url('asset'); ?>/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?= base_url('asset'); ?>/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?= base_url('asset'); ?>/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?= base_url('asset'); ?>/vendors/moment/min/moment.min.js"></script>
    <script src="<?= base_url('asset'); ?>/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- PNotify -->
    <script src="<?= base_url('asset'); ?>/vendors/pnotify/dist/pnotify.js"></script>
    <script src="<?= base_url('asset'); ?>/vendors/pnotify/dist/pnotify.buttons.js"></script>
    <script src="<?= base_url('asset'); ?>/vendors/pnotify/dist/pnotify.nonblock.js"></script>
     <!-- Switchery -->
    <script src="<?= base_url('asset'); ?>/vendors/switchery/dist/switchery.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?= base_url('asset'); ?>/build/js/custom.min.js"></script>
    <!-- Datatables -->
    <script src="<?= base_url('asset'); ?>/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('asset'); ?>/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?= base_url('asset'); ?>/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url('asset'); ?>/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?= base_url('asset'); ?>/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?= base_url('asset'); ?>/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url('asset'); ?>/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url('asset'); ?>/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?= base_url('asset'); ?>/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?= base_url('asset'); ?>/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url('asset'); ?>/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?= base_url('asset'); ?>/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="<?= base_url('asset'); ?>/vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?= base_url('asset'); ?>/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?= base_url('asset'); ?>/vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Parsley -->
    <script src="<?= base_url('asset'); ?>/vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- sweet alert  -->



    <script>

    // pagination
    $(function(){
      $('#download').DataTable()
      $('#datatable').DataTable()
      $('#submenu').DataTable()
      $('#role').DataTable()
      $('#datauser1').DataTable()
      $('#datauser2').DataTable()
      $('#').DataTable({
        'paging'      : true,
        'lengthChange': true,
        'searching'   : true,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false,
      });
    });
    </script>


	<script>

		$('.form-check-input').on('click', function() {

			const menuId = $(this).data('menu');
			const roleId = $(this).data('role');

			$.ajax({

				url : "<?= base_url('admin/changeaccess'); ?>",
				type : 'post',
				data : {
					menuId : menuId,
					roleId : roleId
				},
				success : function () {
					document.location.href = "<?= base_url('admin/roleaccess/'); ?>"+ roleId
			}

			});

		});

	</script>
  </body>
</html>
