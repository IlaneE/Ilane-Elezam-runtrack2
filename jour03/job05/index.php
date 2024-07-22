<?php

$txt = "On n’est pas le meilleur quand on le croit mais quand on le sait";
$tab = array('a', 'e', 'i', 'o', 'u', 'y');
$tab1 = array('b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z' );
$tot = 0;
$tot1 = 0;
foreach($tab as $voyelle){
 $tot += substr_count(strtolower($txt), $voyelle);
}
foreach($tab1 as $consonnes){
 $tot1 += substr_count(strtolower($txt), $consonnes);
}

echo $txt;
echo "</br></br>";  
echo $tot.' voyelles';
echo "</br></br>";  
echo $tot1.' consonnes';



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
<p class="lien">http://localhost/runtrack2/jour03/job05/index.php</p>
</body>
</html>