<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body bgcolor="#4169E1">
<?php
  $suma = 0;
  foreach ($_REQUEST as $clave => $valor) {
    echo "Valor: " . $valor;
    echo "<br>";
    $suma = $suma + $valor;
  }
  echo"La suma es: " . $suma;
  ?>
</body>
</html>