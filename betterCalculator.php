<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Better Calculator</title>
</head>

<body>

    <form action="betterCalculator.php" method="post">
        First Number: <br> <input type="number" step="0.001" name="num1"> <br>
        Operator: <br> <input type="text" name="operator"> <br>
        Second Number: <br> <input type="number" step="0.001" name="num2"> <br>
        <input type="submit">

        <?php
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];
        echo "<br><br>";

        if ($operator == "+") {
            echo $num1 + $num2;
        } elseif ($operator == "-") {
            echo $num1 - $num2;
        } elseif ($operator == "/") {
            echo $num1 / $num2;
        } elseif ($operator == "*") {
            echo $num1 * $num2;
        } else {
            echo "Invalid operator";
        }
        echo "<hr>";
        ?>
</body>

</html>