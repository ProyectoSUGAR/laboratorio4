<?php
require_once("VerificadorCI.php");

$ci7 = $_POST["ci7"];
$verificador = new VerificadorCI();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Resultado - Generador CI</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <?php
    if (strlen($ci7) == 7 && ctype_digit($ci7)) {
        $dv = $verificador->calcularDV($ci7);
        echo "<h3>El dígito verificador para $ci7 es: $dv</h3>";
        echo "<h3>La CI completa sería: $ci7$dv</h3>";
    } else {
        echo "<h3>Error: Debe ingresar exactamente 7 dígitos</h3>";
    }
    ?>
    <a href="index.html">Volver</a>
  </div>
</body>
</html>

