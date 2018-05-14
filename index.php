<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exo PHP</title>
</head>
<body>

<?php

$nom="Owsinski";
$prenom="Théo";
$age="23 ans";
echo"$nom $prenom $age";

$km="<br>125";
echo"$km";

$string="Bonjour Théo";
$int=17;
$float=19.95;
$bool=true;
echo"<br>$string $int $float $bool";

$int=42;//si aucune valeur tout le PHP ne s'affiche pas
echo"<br>$int";

$nom="Owsinski";
echo"<br>Bonjour $nom, comment vas tu ?";

$nom="Owsinski";
$prenom="Théo";
$age=23;
echo"<br>Bonjour $nom $prenom, tu as $age ans.";

$premiere=3+4;
$deuxieme=5*20;
$troisieme=45/5;
echo"<br>$premiere $deuxieme $troisieme";
?>

</body>
</html>