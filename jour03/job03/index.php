<?php

$txt = 'Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.';
$tab = array('a', 'e', 'i', 'o', 'u', 'y');

$a = 0;
$b = strlen($txt);

while ($a != $b){
    if ($txt[$a] == $tab[0]  || $txt[$a] == $tab[1]  || $txt[$a] == $tab[2]  || $txt[$a] == $tab[3]  || 
    $txt[$a] == $tab[4]  || $txt[$a] == $tab[5]){
        echo $txt[$a];
        $a++;
    }
    else {
        $a++;
    }
}

include ('test.php');


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
<p class="lien">http://localhost/runtrack2/jour03/job03/index.php</p>
</body>
</html>