<script src="../html/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../html/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../html/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../html/dist/js/demo.js"></script>

<script>
  $(function () {
    $("#redes").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#redes_wrapper .col-md-6:eq(0)');
    $('#redes').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>