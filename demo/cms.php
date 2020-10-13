<?php
if (isset($_POST["path_name"]) && isset($_POST["content"]) && !empty($_POST["path_name"]) && !empty($_POST["path_name"])) {
    $path = DEMO_PATH . DIRECTORY_SEPARATOR . $_POST["path_name"] . '.php';
    $handle = fopen($path, 'w');
    fwrite($handle, $_POST["content"]);
    fclose($handle);
    header('Location: '.$current_path_name);
}
?>
<form action="<?php echo $current_path_name; ?>" method="post">
    Nom fichier <input type="text" name="path_name" /> .php
    <textarea name="content" style="width: 100%" rows="30"></textarea>
    <input type="submit" />
</form>
