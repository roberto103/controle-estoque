<!-- /.content-wrapper -->
<footer class="main-footer">
  <strong>Copyright &copy; 2020 - <a href="https://www.instagram.com/i9soft/">i9 Soft</a>.</strong>
  Todos os direitos reservados.
  <div class="float-right d-none d-sm-inline-block">
    <!-- <b>Versão</b> 1.1 -->
  </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- jQuery Mask -->
<script src="plugins/jquery-mask/jquery.mask.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<!-- <script src="plugins/chart.js/Chart.min.js"></script> -->
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.js"></script>
<!-- <script src="datatables-bs4/js/dataTables.bootstrap4.js"></script> -->
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<!-- page script -->
<script>

$(document).ready(function(){
  $(".phone").mask("(00) 0 0000-0000");
  $('.money').mask('000.000.000.000.000,00', {reverse: true});
});

$(function () {
  $('#example2').DataTable({
    "paging": false,
    "lengthChange": false,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": false,
  });
});
</script>

</body>
</html>
