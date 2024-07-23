<p class="rgb"><?php
echo "Liste d'ingrédients </br></br>";
$qi = ["160g", "2", "15cl", "1pc", "150g", "50g", "1 sachet"];

$f = $qi [0];
$o = $qi [1];
$l = $qi [2];
$s = $qi [3];
$sep = $qi [4];
$h = $qi [5];
$le = $qi [6];

$l = ["Farine " . $f . "</br>" , "oeuf " . $o . "</br>" , "lait " . $l . "</br>" , "sel " . $s . "</br>" , "sucre en poudre " . $sep . "</br>" , "huile " . $h . "</br>" , "levure " . $le . "</br>"];


for($i = 0; $i != 7; $i ++) {
    echo $l[$i];
}



?></p>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="exo.css">
</head>
<body>
<img id="bg" src="https://wallpapers.com/images/hd/gerard-depardieu-caricature-thumbs-up-60a9tk01jsbh6gy5.jpg">
</br></br></br>
<p class="lien">http://localhost/runtrack2/jour05/exo/exo2.php</p>
</body>
</html>