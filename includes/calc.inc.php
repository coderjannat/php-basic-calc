<?php

declare(strict_types=1);
include 'class-autoload.inc.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <h1>Results :<?php
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
    </h1>
    <a href="../index.php"><button>Home</button></a>


</body>

</html>