<p class="rgb"><?php
echo "Liste d'ingrédients du gâteau nature</br></br>";
$qi = ["160g", "2", "15cl", "1pc", "150g", "50g", "1 sachet"];

$f = $qi [0];
$o = $qi [1];
$la = $qi [2];
$s = $qi [3];
$sep = $qi [4];
$h = $qi [5];
$le = $qi [6];

$l = ["Farine &nbsp; &nbsp; " . $f . "</br>" , "Oeuf &nbsp; &nbsp; " . $o . "</br>" , "Lait &nbsp; &nbsp; " . $la . "</br>" , "Sel &nbsp; &nbsp; " . $s . "</br>" , "Sucre en poudre &nbsp; &nbsp; " . $sep . "</br>" , "Huile &nbsp; &nbsp; " . $h . "</br>" , "Levure &nbsp; &nbsp; " . $le . "</br>"];


for($i = 0; $i != 7; $i ++) {
    echo $l[$i];
}
echo "</br></br>Liste d'ingrédients d'un gâteau (dont j'ai zappé le nom) </br></br>";
$qi1 = ["60g", "4", "1 petit verre", "1pc", "200g", "120g"];

$f1 = $qi1 [0];
$o1 = $qi1 [1];
$r1 = $qi1 [2];
$s1 = $qi1 [3];
$sep1 = $qi1 [4];
$b1 = $qi1 [5];

$l1 = ["Farine &nbsp; &nbsp; " . $f1 . "</br>" , "Oeuf &nbsp; &nbsp; " . $o1 . "</br>" , "Rhum &nbsp; &nbsp; " . $r1 . "</br>" , "Sel &nbsp; &nbsp; " . $s1 . "</br>" , "Sucre en poudre &nbsp; &nbsp; " . $sep1 . "</br>" , "Beurre &nbsp; &nbsp; " . $b1 . "</br>"];


for($i1 = 0; $i1 != 6; $i1 ++) {
    echo $l1[$i1];
}
echo "</br></br>Liste d'ingrédients du gâteau de riz </br></br>";
$qi2 = ["150g", "3", "1L", "1pc", "150g", "1/2 citron", "1 gousse"];

$r2 = $qi2 [0];
$o2 = $qi2 [1];
$la2 = $qi2 [2];
$s2 = $qi2 [3];
$sep2 = $qi2 [4];
$c2 = $qi2 [5];
$v2 = $qi2 [6];

$l2 = ["Riz spécial dessert &nbsp; &nbsp; " . $r2 . "</br>" , "Oeuf &nbsp; &nbsp; " . $o2 . "</br>" , "Lait &nbsp; &nbsp; " . $la2 . "</br>" , "Sel &nbsp; &nbsp; " . $s2 . "</br>" , "Sucre en poudre &nbsp; &nbsp; " . $sep2 . "</br>" , "Jus de citron &nbsp; &nbsp; " . $c2 . "</br>" , "Vanille &nbsp; &nbsp; " . $v2 . "</br>"];


for($i2 = 0; $i2 != 7; $i2 ++) {
    echo $l2[$i2];
}





?></p>
<!DOCTYPE html>
<html id="bg" lang="en">
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