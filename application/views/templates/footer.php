</body>
<script type="text/javascript" src="./node_modules/jquery/dist/jquery.js"></script>
<script type="text/javascript" src="./node_modules/datatables/media/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="./node_modules/bootstrap/dist/js/bootstrap.js"></script>
<script type="text/javascript" src="./node_modules/bootstrap/dist/js/dataTables.bootstrap.min.js"></script>
<script>
  $(document).ready(function() {
    $("#keluar").click(function() {
      window.alert("Anda berhasil logout");
    });

    $('#example').DataTable({
      responsive: true
    });
  });
</script>

</html>