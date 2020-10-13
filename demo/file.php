<?php

const FILE_NAME = "file.txt";

// $_POST["line"] !== '' equivaut à empty()
if (isset($_POST["line"]) && !empty($_POST["line"])) {
    $new_line = $_POST["line"] . PHP_EOL;
    file_put_contents(FILE_NAME, $new_line, FILE_APPEND | LOCK_EX);
}

// on recupere le contenu du fichier
$content_file = file(FILE_NAME);

// delete
if (isset($_GET["delete"])) {
    $indice = $_GET["delete"];
    $line = $content_file[$indice];
    $new_file = str_replace($line, '', $content_file);

    file_put_contents(FILE_NAME, $new_file);
    header('Location: file.php');
}

// edit
if (isset($_POST["edit"])) {
    $indice = $_POST["edit"];
    $line = $content_file[$indice];
    $edit_file = str_replace($line, '', $content_file);
    $edit_file = str_replace($line, $_POST["line"], $edit_file);

    file_put_contents(FILE_NAME, $edit_file);
    header('Location: file.php');

}

?>
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>File</h1>

<?php
foreach ($content_file as $key => $line) {
    // nl2br converti "\n" en <br />
    echo $line;
    echo '<a href="file.php?delete='.$key.'">delete</a>';
    echo ' ';
    echo '<a href="file.php?edit='.$key.'">edit</a>';
    echo "<br />";
}

$value_line = '';
if (isset($_GET["edit"])) {
    $value_line = $content_file[$_GET["edit"]];
}
?>
<form action="file.php" method="post">
    Inserer une ligne
    <input type="text" name="line" value="<?php echo $value_line; ?>" />
    <?php
    if (isset($_GET["edit"])) { ?>
        <input type="hidden" name="edit" value="<?php echo $_GET['edit']; ?>" />
    <?php
    }
    ?>
    <input type="submit" />
</form>

</body>
</html> 

