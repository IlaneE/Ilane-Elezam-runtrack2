


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formule</title>
</head>
<body>
<h1 class="titre"><strong> Calculatrice </strong></h1>



<div class="calc">

<form method="POST" action="#" >
<input type="text" name="n1">
<input type="text" name="n2">
<select name="op" >                       
        <option value="Masse">+</option>
        <option value="">-</option>
        <option value="*">*</option>
         <option value="/">/</option>
        </select> 
<input type="submit" name="b1" value="Calculer">
</br></br></br>
<?php 
$n1=$_POST['n1'] ?? 0;
	$op=$_POST['op'] ?? "+";
	$n2=$_POST['n2'] ?? 0;
		if (isset($op)){
    echo("Resultat du calcul ".$n1.$op.$n2." : ");
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
</body>
</html>

</br></br></br>
http://localhost/runtrack2/jour03/exo/exo1.php