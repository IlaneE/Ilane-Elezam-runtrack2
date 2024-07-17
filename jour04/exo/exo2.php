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
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <Link rel="stylesheet" href="exo1².css">
</head>
<body>
    <img id="bg" src="https://images.genius.com/1e5840878880f47aac2d4e3d6e522b18.1000x431x1.jpg">
    <font color="FFFFFF"><h1> Les Binouzes de Sylvie</h1>
    <p>Dans la binouze n°1 de Sylvie il y'a 33cl pour <?=$binouze1 . "%" ?> d'alcool </p></br></br>
    <p>Dans la binouze n°2 de Sylvie il y'a 50cl pour <?=$binouze2 . "%" ?> d'alcool </p></br></br>
    <p>Dans la binouze n°3 de Sylvie il y'a 75cl pour <?=$binouze3 . "%" ?> d'alcool </p></br></br>
    </font>
</br></br></br>
    <p class="lien">http://localhost/runtrack2/jour04/exo/exo2.php</p>
</body>
</html>