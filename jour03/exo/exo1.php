


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculette</title>
    <link rel="stylesheet" href="exo1.css">
</head>
<body class="Fond">

<img id="bg" src="https://odysem.com/wp-content/uploads/2020/12/calcul.gif" alt="" />

<div id="mid"><center>

<h1 class="titre"><strong> Calculatrice </strong></h1>

<form method="POST" action="#" >
<input type="text" name="n1">
<select name="op" >                       
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
         <option value="/">/</option>
        </select> 
<input type="text" name="n2">
<input type="submit" name="b1" value="Calculer">
</br></br></br>
<?php 
$n1=$_POST['n1'] ?? 0;
	$op=$_POST['op'] ?? "+";
	$n2=$_POST['n2'] ?? 0;
		if (isset($op)){
    echo("Resultat du calcul ".$n1.$op.$n2." : ");
    if ($n1+$n2 == 0 ){
        echo "La tête à TOT";
    }
    if ($op=="+") {
        echo $n1+$n2;
    } elseif ($op=="-") {
        echo $n1-$n2;
    } elseif ($op=="*") {
        echo $n1*$n2;
    } else {
        echo $n1/$n2;
    }
}

?>
</div>
</center>
<p class="lien">http://localhost/runtrack2/jour03/exo/exo1.php</p>
</body>
</html>

</br></br></br>
