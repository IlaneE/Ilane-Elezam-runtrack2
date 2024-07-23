
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form>
            Le nombre d’argument GET envoyé est : <input type="text" name="num"/>
            <input type="submit"/>
        </form>
        <?php

$arg = $_GET ['num'];

$v = "Vrai";
$f = "Faux";

if ($arg == 56){
    echo $v;
}
if ($arg != 56){
    echo $f;
}


?>
</br></br></br>
<p>http://localhost/runtrack2/jour04/job01/index.php?num=56</p>
</body>
</html>