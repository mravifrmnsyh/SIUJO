</div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
</div>
</div>
                        <!-- /.col-lg-4 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="<?= base_url() ?>template/back-end/js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?= base_url() ?>template/back-end/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?= base_url() ?>template/back-end/js/metisMenu.min.js"></script>

        <!-- Morris Charts JavaScript -->
        <script src="<?= base_url() ?>template/back-end/js/raphael.min.js"></script>
        <script src="<?= base_url() ?>template/back-end/js/morris.min.js"></script>
        <script src="<?= base_url() ?>template/back-end/js/morris-data.js"></script>

        <!-- DataTables JavaScript -->
        <script src="<?= base_url() ?>template/back-end/js/dataTables/jquery.dataTables.min.js"></script>
        <script src="<?= base_url() ?>template/back-end/js/dataTables/dataTables.bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?= base_url() ?>template/back-end/js/startmin.js"></script>
        <script src="<?= base_url() ?>datepicker/js/bootstrap-transition.js"></script>
        <script src="<?= base_url() ?>datepicker/js/bootstrap-datepicker.js"></script>

        <script>
		$(function(){
		    $("#tanggal").datepicker({
			format:'yyyy-mm-dd'
		    });
                });
	    </script>

        <!-- Page-Level Demo Scripts - Tables - Use for references -->
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>

        <script>
            function hanyaAngka(evt) {
                var charCode = (evt.which) ? evt.which : event.keyCode
                if (charCode > 31 && (charCode < 48 || charCode > 57))
                    
                    return false;
                return true;
            }
        </script>

        <script>
            initSample();
        </script>

    </body>
</html>
