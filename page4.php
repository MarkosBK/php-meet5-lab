<?php
session_start();
if ($_POST["age"] > 0) {
    $_SESSION["age"] = $_POST["age"];
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
    <h2>
        Name:
        <?echo $_SESSION["name"]?>
    </h2>
    <h2>
        Surname:
        <?echo $_SESSION["surname"]?>
    </h2>
    <h2>
        Age:
        <?echo $_SESSION["age"]?>
    </h2>

    <?php
    for ($i = 0; $i < count($_SESSION["links"]); $i++) {
        echo "<h3>" . ($i + 1) . ".  " . $_SESSION["links"][$i] . "</h3>";
    }
    ?>
</body>

</html>