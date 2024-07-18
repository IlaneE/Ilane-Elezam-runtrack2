<?php

$txt = '</br></br>' . 'Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.';
$tab = array('a', 'e', 'i', 'o', 'u', 'y');
$tot = 0;
foreach($tab as $voyelle){
 $tot += substr_count(strtolower($txt), $voyelle);
}
echo $txt;
echo "</br></br>";  
echo $tot.' voyelles';



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
<p class="lien">http://localhost/runtrack2/jour03/job03/test.php</p>
</body>
</html>