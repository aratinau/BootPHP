<?php
if (isset($_POST["tags"]) && $_POST["tags"] !== '') {
    $tags = explode(',', $_POST["tags"]);
    echo "<ul>";
    foreach ($tags as $tag) {
        if ($tag == "lait") {
            echo "<li style='color: red;'>";
        } else {
            echo "<li>";
        }
        echo $tag;
        echo "</li>";
    }
    echo "</ul>";
}
else
{
?>
    <form action="<?php echo $current_path_name; ?>" method="post">
        Séparez les tags par des virgules
        <input type="text" name="tags" />
        <input type="submit" />
    </form>
<?php
}
?>
