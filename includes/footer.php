<!-- /.content-wrapper -->
<footer class="main-footer">
  <strong>Copyright &copy; 2020 - <a href="https://www.instagram.com/i9soft/">i9 Soft</a>.</strong>
  Todos os direitos reservados.
  <div class="float-right d-none d-sm-inline-block">
    <!-- <b>Versão</b> 1.1 -->
  </div>
</footer>

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
<script type="text/javascript">

// Pega do botao e joga para campos no modal
$(document).ready(function(){
  $('#modal_vender').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget); // Botão que acionou o modal
    var id = button.data('id'); // Extrai informação dos atributos data-*
    var modal = $(this);

    modal.find('#id').val(id);
  });

});

// mascaras de telefone e moedas
$(document).ready(function(){
  $(".phone").mask("(00) 0 0000-0000");
  $('.money').mask('000.000.000.000.000,00', {reverse: true});
  $('.cpf').mask('000.000.000-00', {reverse: true});
});

// tradução dataTables
$(function () {
  $('#example2').DataTable({
    "language": {
      "sEmptyTable": "Nenhum registro encontrado",
      "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
      "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
      "sInfoFiltered": "(Filtrados de _MAX_ registros)",
      "sInfoPostFix": "",
      "sInfoThousands": ".",
      "sLengthMenu": "_MENU_ resultados por página",
      "sLoadingRecords": "Carregando...",
      "sProcessing": "Processando...",
      "sZeroRecords": "Nenhum registro encontrado",
      "sSearch": "Pesquisar",
      "oPaginate": {
        "sNext": "Próximo",
        "sPrevious": "Anterior",
        "sFirst": "Primeiro",
        "sLast": "Último"
      },
      "oAria": {
        "sSortAscending": ": Ordenar colunas de forma ascendente",
        "sSortDescending": ": Ordenar colunas de forma descendente"
      },
      "select": {
        "rows": {
          "_": "Selecionado %d linhas",
          "0": "Nenhuma linha selecionada",
          "1": "Selecionado 1 linha"
        }
      }
    },
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
