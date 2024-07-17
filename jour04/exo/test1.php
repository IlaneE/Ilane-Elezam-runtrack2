<?php

function degré ($nombre, $qtotal, $qalcool){
    $resultat = ($nombre / $qtotal) * $qalcool;
    return round ($resultat); 
}

$nombre = 33;
$qtotal = 750;
$qalcool = 100;
echo degré($nombre,$qtotal,$qalcool)." %";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</br></br></br>
<p class="lien">http://localhost/runtrack2/jour04/exo/test1.php</p>
</body>
</html>