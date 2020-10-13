<?php
// creation d'une fonction
function convert($value) {
    return htmlspecialchars($value);
}
?>
<h1>Formulaire</h1>

<?php
// method peut egalement etre GET
?>

<?php
if (isset($_POST["prenom"]) && $_POST["prenom"] !== '') {
    $prenom = convert($_POST["prenom"]);
    echo "Bonjour " . $prenom;
}
else
{
?>
    <form action="<?php echo $current_path_name; ?>" method="post">
        Entrez votre prénom
        <input type="text" name="prenom" />
        <input type="submit" />
    </form>
<?php
}
?>
