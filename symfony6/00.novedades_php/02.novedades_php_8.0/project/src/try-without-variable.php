<!DOCTYPE html>
<html>

<body>

  <?php
  include 'intro.php'; ?>
  <h2>8. Try sin variable</h2>
  <p>Otra mejora que trae <strong>PHP 8</strong> es la posibilidad de especificar bloques <code>try</code> / <code>catch</code> sin que el catch tenga que declarar la variable que recoge la excepción, ya que a veces no se emplea para nada, añadiendo ruido visual al código o incluso siendo señalado como warning por el editor:</p>

  <pre>
  try {
    // an exception is thrown
    throw new Exception();
  } catch (Exception) {
    // do something but not with my exception
    var_dump('error');
  }
  </pre>
  <?php
  try {
    // an exception is thrown
    throw new Exception();
  } catch (Exception) {
    // do something but not with my exception
    var_dump('error');
  }
  ?>
</body>

</html>