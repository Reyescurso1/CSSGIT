<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> 
<body>
    <?php 
    if (!empty ( $_GET["Informatico"]) and
    $_GET ["Informatico"]=="on") { ?>
    Soy Informatico?
   <?php } else { ?>
    No lo soy
   <?php } ?>

</body>

    

</html>
