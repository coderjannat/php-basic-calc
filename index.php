<?php

declare(strict_types=1);
include 'includes/class-autoload.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="" method="post">
        <h1>Basic Php Calculator</h1>
        <input type="number" name="num1" placeholder="First Number">
        <select name="oper">
            <option value="add">Addition</option>
            <option value="sub">Subtraction</option>
            <option value="div">Division</option>
            <option value="mul">Multiplication</option>
        </select>
        <input type="number" name="num2" placeholder="Second Number"> <br>
        <button type="submit" name="submit">Calculate</button>

        <?php
        $oper = $_POST["oper"];
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        $calc = new Calc($oper, (int)$num1, (int)$num2);

        try {
            echo $calc->calculator();
        } catch (TypeError $e) {
            echo "Error! :" . $e->getMessage();
        }
        ?>
    </form>
</body>

</html>