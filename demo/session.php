<?php
// toujours initialiser session en haut du fichier
session_start();

function isIndiceInArray($indice) {
    return !array_key_exists($indice, $_SESSION["produit"]);
}

// verification de l'indice du tableau
if (isset($_GET["edit"])) {
    if (isIndiceInArray($_GET["edit"]))
    {
        $_SESSION["message"]["error"] = "indice edit n'existe pas";
        header('Location: session.php');
        exit;
    }
}
if (isset($_GET["delete"])) {
    if (isIndiceInArray($_GET["delete"]))
    {
        $_SESSION["message"]["error"] = "indice delete n'existe pas";
        header('Location: session.php');
        exit;
    }
}

// delete
if (isset($_GET["delete"])) {
    $indice = $_GET["delete"];
    unset($_SESSION["produit"][$indice]);
}

// edit
$valeur = '';
if (isset($_GET["edit"])) {
    $indice = $_GET["edit"];
    $valeur = $_SESSION["produit"][$indice];
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>Array</h1>

<?php


if (isset($_POST["produit"]) && $_POST["produit"] !== '') {
    if (!isset($_SESSION["produit"])) {
        // on crée la variable la premiere fois
        $_SESSION["produit"][] = $_POST["produit"];
    } else {
        // on edit
        if (isset($_POST["edit"])) {
            $indice = $_POST["edit"];
            $_SESSION["produit"][$indice] = $_POST["produit"];
        }
        else
        {
            // on ajoute
            $_SESSION["produit"][] = $_POST["produit"];
        }
    }
}
?>

<?php
echo "<ul>";
foreach ($_SESSION["produit"] as $key => $produit)
{
    echo "<li>";
    echo $key . ' ' .$produit;
    echo ' - ';
    echo "<a href='session.php?delete=" . $key . "'>delete</a>";
    echo ' - ';
    echo "<a href='session.php?edit=" . $key . "'>edit</a>";
    echo "</li>";
}
echo "</ul>";
?>

<?php
if (isset($_SESSION["message"]["error"])) {
    // variable flash
    echo "<div><p style='color:red'>".$_SESSION["message"]["error"]."</p></div>";
    unset($_SESSION["message"]["error"]);
}
?>

<form action="session.php" method="post">
    Inserer un produit
    <input type="text" name="produit" value="<?php echo $valeur; ?>" />
    <?php if (isset($_GET["edit"])) { ?>
        <input type="hidden" name="edit" value="<?php echo $_GET['edit']; ?>" />
    <?php } ?>
    <input type="submit" />
</form>

</body>
</html> 

