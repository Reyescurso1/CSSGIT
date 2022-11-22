<?php
$servidor="localhost";
$usuario= "root";
$clave="";
$basedatos="curso2";
?>


<html>
    <body>
      

    <?php 
     $Numero=$_GET["Numero"];
     $Concepto=$_GET["Concepto"];
     $Importe=$_GET["Importe"];

    ?>

     <p>Numero:<?=$Numero?></p>
     <p>Concepto:<?=$Concepto?></p>
     <p>Importe:<?=$Importe?></p>
    <?php
    //$sql=insert into facturas values (1,'ordenador',200);"
    $sql="insert into facturas (numero,concepto,importe) values (".$_GET["Numero"].
    ",'".$_GET["Concepto"]."',".$_GET["Importe"].");";
    echo $sql;
?>
<?php
$conn= new mysqli($servidor,
$usuario,
$clave,$basedatos);
if(mysqli_query($conn,($sql))) {
    echo "insertado";
} else {
    echo "ha dado error".mysqli_error($conn);

}
   mysqli_close ($conn)
?>




</body>
</html>