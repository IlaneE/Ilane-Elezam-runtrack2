<?php
$binouze1=binouze(33,750);
$binouze2=binouze(50,750);
$binouze3=binouze(75,750);

function binouze($alc, $bin) {
    $taux= ($alc / $bin)*100;
    return round($taux);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <li>Dans la binouze n°1 de Sylvie il y'a 33cl pour <?=$binouze1 . "%" ?> d'alcool </li>
    <li>Dans la binouze n°2 de Sylvie il y'a 50cl pour <?=$binouze2 . "%" ?> d'alcool </li>
    <li>Dans la binouze n°3 de Sylvie il y'a 75cl pour <?=$binouze3 . "%" ?> d'alcool </li>
</br></br></br>
<p class="lien">http://localhost/runtrack2/jour04/exo/test2.php</p>
</body>
</html>