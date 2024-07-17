<?php

function degré ($nombre, $total, $pourcent){
    $resultat = ($nombre / $total) * $pourcent;
    return round ($resultat); 
}

$nombre = 65;
$total = 384;
$pourcent = 100;
echo degré($nombre,$total,$pourcent)." %";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>