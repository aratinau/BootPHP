<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>Hello</h1>

<?php
// ici on peut commenter

/*
ici commentaire
sur plusieurs
lignes
 */

// afficher et déclarer une variable
$variable = "valeur";

echo $variable;
echo " ";
echo "bonjour";

echo '<br />';

// données numériques
$entier = 123;
$virgule = 123.4;

echo $entier . " " . $virgule;

echo '<br />';

// boolean
$boolean_true = true;
$boolean_false = false;

// retour a la ligne
echo "haut";
echo "\n";
echo "bas";

echo '<br />';

// operateurs mathématique
/*
 * addition +
 * soustraction -
 * multiplication *
 * division /
 * modulo %
 */

// les tableaux

$tableaux = ["toto", "tata", "titi", 123, 123.4, true];
echo $tableaux[0];

// ajouter un element au tableau
$tableaux[] = "last";

echo '<br />';
print_r($tableaux);
echo '<br />';

// les tableaux associatif
$tableaux_assoc = ["cle" => "valeur de cle", "b" => "valeur_b", "c" => "valeur_c"];
echo $tableaux_assoc["cle"];

echo "<br />";
print_r($tableaux);

// les tableaux en deux dimensions
$users = array();
$user1 = ["nom" => "dupont", "prenom" => "jerome"];
$user2 = ["nom" => "dubois", "prenom" => "julie"];
$users = [$user1, $user2];

echo "<br />";
print_r($users);

echo "<br />";
// les conditions
$state = "true";
if ($state === true)
{
    echo "oui state est strictement a true";
}
elseif ($state == "true")
{
    echo "state est a true";
}
else
{
    echo "state n'est pas a true";
}

/*
comparaison de la valeur et du type
=== -> strictement equivalent
!== -> strictement different

comparaison uniquement de la valeur
== -> equivalent
!= -> different
 */

echo "<br />";

$state = 22;
switch ($state)
{
    case 0:
        echo "state vaut 0";
    break;
    case 1:
        echo "state vaut 1";
    break;
    case 2:
        echo "state vaut 2";
    break;
    default;
        echo "state est different";
    break;
}

echo "<br />";

// operateurs logiques
/*
&&      AND      -> ET
||      OR       -> OU
*/
$state1 = true;
$state2 = false;
// exemple avec ET
if ($state1 === true && $state2 === false) {
    echo "state 1 correspond a true ET state 2 correspond a false";
}

echo "<br />";

$state3 = true;
$state4 = false;
// exemple avec OU
if ($state3 === true || $state4 === true) {
    echo "state 3 OU state 4 sont a true";
}

echo "<br />";

// les boucles
$i = 0;
while ($i < 10) {
    echo $i;
    echo ' - ';
    $i++;
}

echo "<br />";

for ($j = 0; $j < 10; $j++)
{
    echo $j . ' - ';
}

echo "<br />";

// variable GET
$users[] = $_GET;

foreach ($users as $user)
{
    foreach ($user as $key => $value)
    {
        echo "la cle vaut : <strong>" . $key . "</strong>";
        echo " ";
        echo "la valeur vaut : " . $value;
        echo "<br />";
    }
}

?>

</body>
</html> 

