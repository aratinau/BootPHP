<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>Mini calculette</h1>

<form action="<?php echo $current_path_name; ?>" method="post">
    <input type="text" name="first-number" value="" />
    <select name="operation">
        <option value="addition">addition</option>
        <option value="soustraction">soustraction</option>
        <option value="multiplication">multiplication</option>
        <option value="division">divisiion</option>
    </select>
    <input type="text" name="second-number" value="" />
    <input type="submit" />
</form>

</body>
</html> 

