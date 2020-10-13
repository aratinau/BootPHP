<?php
// toujours initialiser session en haut du fichier
session_start();

$resultat = isset($_POST["chaine"]) ? $_POST["chaine"] : '';
if (isset($_POST["chaine"]) && isset($_POST["lettre"])) {
    $lettre = $_POST["lettre"];
    $chaine = $_POST["chaine"];
    if (isset($_POST["supprimer-espace"]) && $_POST["supprimer-espace"] == 'on') {
        $resultat = trim($chaine);
        $chaine = $resultat;
    }
    if (isset($_POST["str-replace"]) && $_POST["str-replace"] == 'on') {
        $remplacer = '';
        if (!empty($_POST["remplacer"])) 
        {
            $remplacer = $_POST["remplacer"];
        }
        $resultat = str_replace($lettre, $remplacer, $chaine);
    }
    if (isset($_POST["premiere-majuscule"]) && $_POST["premiere-majuscule"] == 'on') {
        $resultat = ucfirst($chaine);
        $chaine = $resultat;
    }
    if (isset($_POST["tout-majuscule"]) && $_POST["tout-majuscule"] == 'on') {
        $resultat = strtoupper($chaine);
        $chaine = $resultat;
    }
    if (isset($_POST["inverser-la-chaine"]) && $_POST["inverser-la-chaine"] == 'on') {
        $resultat = strrev($chaine);
        $chaine = $resultat;
    }
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<meta charset="UTF-8">
</head>
<body>

<h1>Array Experiment</h1>
<h2>String</h2>
<?php
if (!empty($resultat)) {
    echo "le resultat est : <span style='color:red'>".$resultat."</span>";
    echo "<br />";
    echo "nombre de caractère : " . strlen($resultat);
    echo "<br />";
    echo "nombre de mots : " . str_word_count($resultat);
}

$value_chaine = isset($_POST["chaine"]) ? $_POST["chaine"] : '';
$value_lettre = isset($_POST["lettre"]) ? $_POST["lettre"] : '';
$value_remplacer = isset($_POST["remplacer"]) ? $_POST["remplacer"] : '';
?>
<form action="string_experiment.php" method="post">
    Inserer une chaine de caractère
    <input type="text" name="chaine" value="<?php echo $value_chaine; ?>" />
    <br />
    appliquer str-replace
    <input type="checkbox" name="str-replace" />
    lettre à supprimer
    <input type="text" name="lettre" value="<?php echo $value_lettre; ?>" />
    remplacer par
    <input type="text" name="remplacer" value="<?php echo $value_remplacer; ?>" />
    <br />
    appliquer trim
    <input type="checkbox" name="supprimer-espace" />
    <br />
    appliquer ucfirst
    <input type="checkbox" name="premiere-majuscule" />
    <br />
    appliquer uppercase
    <input type="checkbox" name="tout-majuscule" />
    <br />
    appliquer reverse
    <input type="checkbox" name="inverser-la-chaine" />
    <br />
    <input type="submit" />
</form>

</body>
</html> 

