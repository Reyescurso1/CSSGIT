<?php
$servidor="localhost";
$usuario= "root";
$clave="";
$basedatos="curso2";


    $sql="delete from Facturas where numero=".$_GET["numero"];
  
$conn= mysqli_connect($servidor,$usuario,$clave,$basedatos);
if(mysqli_query($conn,($sql))) {
    
    header ('location:TablaFactura.php');
} else {
    echo "ha dado error".mysqli_error($conn);

}
   mysqli_close ($conn)
?>
