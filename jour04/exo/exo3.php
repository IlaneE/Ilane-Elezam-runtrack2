<?php

$gat1=gat(2, 1);
$gat2=gat(3, 2);
$gat3=gat(5, 3);

function gat($part, $gat) {
    $coupe= ($part + $gat);
    return round($coupe);
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2partDIEU</title>
    <Link rel="stylesheet" href="exo1².css">
</head>
<body>
<img id="bg" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPJ_a858PSFTxU3ONGHYUN6XLs7y1joPSijYcX43rogGaly44-">
<font color="FFFFFF"><h1> Les gâteau de 2partDIEU</h1>
    <p>Je coupe  <?=$gat1 . "part" ?> de gâteau. </p></br></br>
    <p>Je coupe  <?=$gat2 . "part" ?> de gâteau. </p></br></br>
    <p>Je coupe  <?=$gat3 . "part" ?> de gâteau. </p></br></br>


</br></br></br>
<p class="lien">http://localhost/runtrack2/jour04/exo/exo3.php</p>
</body>
</html>