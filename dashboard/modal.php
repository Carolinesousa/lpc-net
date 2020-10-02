<!DOCTYPE html>
<html>
<head>
  <title></title>

  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <script>
function setaDadosModal(valor) {
    document.getElementById('campo').value = valor;
}
</script>
</head>
<body>
<a data-toggle="modal" data-target="#modal" class="btn btn-primary" onclick="setaDadosModal('carol')">
    <span class="btn-label"><i class="fa fa-check"></i></span>Abrir modal
</a>


<script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>
</html>
