<?php
// toujours initialiser session en haut du fichier
// session_start();

function total($values)
{
    $resultat = 0;
    foreach ($values as $value)
    {
        $resultat += $value;
        //$resultat = $resultat + $value;
    }

    return $resultat;
}

$resultat = '';
$value_list = isset($_SESSION["list"]) ? implode(",", $_SESSION["list"]) : '' ;
if (isset($_POST["list"])) {
    $value_list = $_POST["list"];
    $list_int = explode(",", $_POST["list"]);
    $_SESSION["list"] = $list_int;
    $operation = $_POST["operation"];
    if ($operation === "find-max") {
        $resultat = max($_SESSION["list"]);
    }
    elseif($operation === "find-min") {
        $resultat = min($_SESSION["list"]);
    }
    elseif($operation === "total") {
        $resultat = total($_SESSION["list"]);
    }

    if (isset($_POST["insert"]) && $_POST["insert"] == 'on') {
        $_SESSION["list"][] = $resultat;
        header('Location: ' . $current_path_name);
    }
}

if (isset($_GET["operation"])) {
    $operation = $_GET["operation"];

    if ($operation === "delete-first") {
        array_shift($_SESSION["list"]);
    }
    if ($operation === "delete-last") {
        array_pop($_SESSION["list"]);
    }
    if ($operation === "insert-random") {
        $_SESSION["list"][] = random_int(0, 500);
    }
    header('Location: ' . $current_path_name);
}

?>
<h1>Array Experiment</h1>
<h2>Int</h2>

<a href="<?php echo $current_path_name; ?>&operation=delete-first">delete first</a>
<a href="<?php echo $current_path_name; ?>&?operation=delete-last">delete last</a>
<a href="<?php echo $current_path_name; ?>&?operation=insert-random">insert random</a>
<br />
<?php
if (isset($_SESSION["list"])) {
    foreach ($_SESSION["list"] as $value) {
        echo $value;
        echo "<br />";
    }
}

if (!empty($resultat)) {
    echo "le resultat est <span style='color: red'>". $resultat . "</span>";
}
?>
    <form action="<?php $current_path_name; ?>" method="post">
    Inserer une liste d'entier
    <input type="text" name="list" value="<?php echo $value_list; ?>" />
    <select name="operation">
        <option value="find-max">find max</option>
        <option value="find-min">find min</option>
        <option value="total">total</option>
    </select>
    Inserer le resultat dans l'array
    <input type="checkbox" name="insert" />
    <input type="submit" />
</form>
