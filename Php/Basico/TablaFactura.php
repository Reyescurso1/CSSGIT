<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "curso2";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "select * from Facturas";
$resultado = $conn->query($sql);
?>

<html>
<body>
<table>
<?php while($fila = $resultado->fetch_assoc()){?>

    <tr>
      <td><?=$fila["numero"]?></td>
      <td><?=$fila["concepto"]?></td>
      <td><?=$fila["importe"]?></td>
      <td><a href="Borrar.php?numero=<?=$fila["numero"]?>">Borrar</a>
</tr>
<?php } ?>
</table> 
<a href="FormularioFactura.html">nuevo</a>
</body>
</html>
<?php $conn->close();?>