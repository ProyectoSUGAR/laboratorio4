<?php
require_once("VerificadorCI.php");

$ci = $_POST["ci"];
$verificador = new VerificadorCI();
$resultado = $verificador->comprobar($ci);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Resultado - Comprobador CI</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <?php if ($resultado): ?>
      <h3>La CI <?= htmlspecialchars($ci) ?> es VÁLIDA</h3>
    <?php else: ?>
      <h3>La CI <?= htmlspecialchars($ci) ?> es INVÁLIDA</h3>
    <?php endif; ?>
    <a href="index.html">Volver</a>
  </div>
</body>
</html>
