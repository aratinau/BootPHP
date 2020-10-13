<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>Array</h1>

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
    <form action="array.php" method="post">
        Séparez les tags par des virgules
        <input type="text" name="tags" />
        <input type="submit" />
    </form>
<?php
}
?>

</body>
</html> 

