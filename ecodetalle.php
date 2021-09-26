<?php include 'conexion.php' ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">

<body>

  <?php
  $miecoId = $_GET['ecoId'];
  $consultaEcosistema = "SELECT * FROM ecosistema WHERE id='$miecoId'";
  $result = mysqli_query($bd, $consultaEcosistema);

  while ($muestraDatosEcositema = mysqli_fetch_array($result)) {

  ?>
    <div data-role="page">
      <div data-role="header">
        <h1 class="titUpper"><?php echo $muestraDatosEcositema['nombre']; ?></h1>
      </div>
      <div data-role="content">
        <img src="<?php echo $muestraDatosEcositema['imagen']; ?>" width="100%">
        <h2 class="titUpper">Descripcion</h2>
        <p class="justificado"><?php echo $muestraDatosEcositema['descripcion']; ?>
        <p>
          <hr>

        <h2 class="titUpper">Clima</h2>
        <p class="justificado"><?php echo $muestraDatosEcositema['clima']; ?>
        <p>
          <hr>

        <h2 class="titUpper">Flora</h2>
        <p class="justificado"><?php echo $muestraDatosEcositema['flora']; ?>
        <p>
          <hr>

        <h2 class="titUpper">Fauna</h2>
        <p class="justificado"><?php echo $muestraDatosEcositema['fauna']; ?>
        <p>
          <hr>

        <h2 class="titUpper">Distribucion geografica</h2>
        <php class="justificado"><?php echo $muestraDatosEcositema['distribucion']; ?><p>

      </div>
      <a href="#ecosistemas" data-role="button" data-rel="back">Cerrar</a>
    </div>

  <?php } ?>

</body>

</html>