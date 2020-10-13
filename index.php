<?php
session_start();

const PASSWORD = "pass";

// TODO variable messages flash
if (isset($_POST["username"]) && isset($_POST["password"])) {
    if ($_POST["password"] === PASSWORD) {
        $_SESSION["user"]["username"] = $_POST["username"];
        header('Location: index.php');
    }
}
?>
<!doctype html>
<html lang="en" class="">
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	<meta name="generator" content="Jekyll v4.1.1">
	<title>BootPHP</title>
	<!-- CSS only -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<!-- JS, Popper.js, and jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	</head>
	<body class="">
    <?php require('navbar.php'); ?>
    <div class="container">
        <?php
            if (isset($_SESSION["messages"])) { ?>
                <div class="alert alert-<?php echo $_SESSION["messages"]["type"]; ?>" role="alert">
                <?php
                    echo $_SESSION["messages"]["content"];
                    unset($_SESSION["messages"]);
                ?>
                </div>
            <?php
            }
			if (!isset($_SESSION["user"])) {
				require('login.php'); 
			}
			else
            {
            ?>
                <h1>Hello <?php echo $_SESSION["user"]["username"]; ?></h1>
            <?php
            }
		?>
    </div>
	</body>
</html>

