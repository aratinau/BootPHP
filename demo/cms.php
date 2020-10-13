<?php
if (isset($_POST["path_name"]) && isset($_POST["content"]) && !empty($_POST["path_name"]) && !empty($_POST["path_name"])) {
    $path = DEMO_PATH . DIRECTORY_SEPARATOR . $_POST["path_name"] . '.php';
    $handle = fopen($path, 'w');
    fwrite($handle, $_POST["content"]);
    fclose($handle);
    header('Location: '.$current_path_name);
}

foreach ($content_clean as $file_name)
{
    echo '<a href="'.$current_path_name.'&edit='.$file_name.'">'.$file_name.'</a>';
    echo '<br />';
}

$content_file = '';
$file_name = '';
if (isset($_GET["edit"]))
{
    $path_file = DEMO_PATH . DIRECTORY_SEPARATOR . $_GET["edit"];
    $handle = fopen($path_file, 'r');
    $content_file = fread($handle, filesize($path_file));
    $content_file = htmlentities($content_file);
    $file_name = removeExtension($_GET["edit"]);
}
?>
<form action="<?php echo $current_path_name; ?>" method="post">
    Nom fichier <input type="text" name="path_name" value="<?php echo $file_name; ?>" /> .php
    <textarea name="content" style="width: 100%" rows="30"><?php echo $content_file; ?></textarea>
    <input type="submit" />
</form>
