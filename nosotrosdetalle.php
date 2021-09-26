<?php include 'conexion.php' ?>
<!DOCTYPE html>

<body>

  <?php
  $mialumnoId = $_GET['alumnoId'];
  $consultaAlumno = "SELECT * FROM alumnos WHERE id='$mialumnoId'";
  $result = mysqli_query($bd, $consultaAlumno);

  while ($muestraDatosAlumno = mysqli_fetch_array($result)) {

  ?>
    <div data-role="page" class="detalle">
      <div data-role="header">
      </div>
      <div data-role="content">
        <img src="<?php echo $muestraDatosAlumno['imagen']; ?>" class="imgCircular" width="100%">
        <h2><?php echo $muestraDatosAlumno['nombre'] . ' ' . $muestraDatosAlumno['apellidos']; ?></h2>
        <p class="justificado"><?php echo $muestraDatosAlumno['biografia']; ?>
        <p>


      </div>
      <a href="#nosotros" data-role="button" data-rel="back">Cerrar</a>
    </div>


  <?php } ?>

</body>

</html>