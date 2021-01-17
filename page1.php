<?php
session_start();
$_SESSION["links"] = [];
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
    <form method="POST" action="page2.php">
        <label for="name">Name:</label>
        <input type="text" name="name">
        <input type="submit" name="next" value="Next ->">
    </form>
</body>


</html>