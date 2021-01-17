<?php
session_start();
if (mb_strlen($_POST["name"])) {
    $_SESSION["name"] = $_POST["name"];
}
array_push($_SESSION["links"], $_SERVER['PHP_SELF'])
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="page3.php">
        <label for="surname">Surname:</label>
        <input type="text" name="surname">
        <input type="submit" name="next" value="Next ->">
    </form>
</body>

</html>