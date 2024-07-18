<?php 

function pony ($prenom, $poid, $taille, $ailes, $herbi, $robe) {
    $texte = "Bonjour je vous présente mon poney " . $prenom . ", son poid est de " . $poid . " et ça taille est de " . $taille . ", ses ailes sont " . $ailes . ", il est " . $herbi . " et sa robe est " . $robe;  

    return $texte;
}

$tableau = array(1000, 1, 2, 3);
$table = count($tableau);


$poney1 = pony ("Ponytaxe", "328kg", "1M06", "des flame de couleur rouge", "omnivore", "rougeâtre");
echo $poney1;

echo "</br></br>";

echo pony ("Macarena", "367kg", "1M29", "des notes de musique multicolore", "herbivore", "multicolore");
echo "</br></br>";
echo pony ("Macaroni", "404kg", "1M48", "des pâtes", "omnivore", "jaune");


?>