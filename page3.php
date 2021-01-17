<?php
session_start();
if (mb_strlen($_POST["surname"])) {
    $_SESSION["surname"] = $_POST["surname"];
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
    <form method="POST" action="page4.php">
        <label for="age">Age:</label>
        <input type="number" name="age">
        <input type="submit" name="next" value="Next ->">
    </form>
</body>

</html>