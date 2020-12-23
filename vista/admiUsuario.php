<html lang="en">

<head>
  <?php require_once "script.php";
  session_start();

  if (empty($_SESSION['active'])) {
    header('location: ../');
  }
  ?>
  <title>Menu del administrador</title>

</head>

<body background="imagenes/apush.jpg">

  <p></p>
  <div id="tablausuario">


  </div>

  <!-- Modal para agregar de usuario -->

  <div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Agrega nueva usuario</h4>
        </div>
        <div class="modal-body">

          <label>Usuario</label>
          <input type="text" name="" id="usuario" class="form-control input-sm">
          <label>Password</label>
          <input type="text" name="" id="password" class="form-control input-sm">
          <label>Nombre</label>
          <input type="text" name="" id="nombre" class="form-control input-sm">
          <label>Apellido Paterno</label>
          <input type="text" name="" id="apellidopaterno" class="form-control input-sm">
          <label>Apellido Materno</label>
          <input type="text" name="" id="apellidomaterno" class="form-control input-sm">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarUsuario">
            Agregar
          </button>

        </div>
      </div>
    </div>
  </div>

  <!-- Modal para edicion de Usuario -->

  <div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Actualizar Usuario</h4>
        </div>
        <div class="modal-body">
          <input type="text" hidden="" id="idusuariou" name="">

          <label>Nombre</label>
          <input type="text" name="" id="nombreu" class="form-control input-sm">

          <label>Apellido Paterno</label>
          <input type="text" name="" id="apellidopu" class="form-control input-sm">

          <label>Apellido Materno</label>
          <input type="text" name="" id="apellidomu" class="form-control input-sm">

          <label>Usuario</label>
          <input type="text" name="" id="usuariou" class="form-control input-sm">

          <label>Password</label>
          <input type="text" name="" id="passwordu" class="form-control input-sm">
          <label>Estado</label>
          <input type="text" name="" id="estadou" class="form-control input-sm">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" id="actualizaUsuario" data-dismiss="modal">Actualizar</button>

        </div>
      </div>
    </div>
  </div>
  <div>
    <a href="../principal/index.php">Regresar al menú principal</a> </div>
</body>

</html>
<script type="text/javascript">
  $(document).ready(function() {
    $('#tablausuario').load('tablausuario.php');
  });
</script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#guardarUsuario').click(function() {
      usuario = $('#usuario').val();
      password = $('#password').val();
      nombre = $('#nombre').val();
      apellidoparteno = $('#apellidopaterno').val();
      apellidomaterno = $('#apellidomaterno').val();
      agregarUsuario(usuario, password, nombre, apellidopaterno, apellidomaterno);
    });

    $('#actualizaUsuario').click(function() {
      id = $('#idusuariou').val();
      nombre = $('#nombreu').val();
      apepat = $('#apellidopu').val();
      apemat = $('#apellidomu').val();
      usuario = $('#usuariou').val();
      password = $('#passwordu').val();
      estado = $('#estadou').val();
      actualizarUsuario(id, nombre, apepat, apemat, usuario, password, estado);
    });

  });
</script>