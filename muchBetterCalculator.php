<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Much Better Calculator</title>
</head>

<body>
    <form action="muchBetterCalculator.php" method="post">
        First Number: <br> <input type="number" step="0.001" name="num1"> <br>
        Operator:
        <h3>
            +<input type="radio" name="operator" value="+"><br>
            - <input type="radio" name="operator" value="-"><br>
            x<input type="radio" name="operator" value="*"><br>
            / <input type="radio" name="operator" value="/"><br>
        </h3>
        Second Number: <br> <input type="number" step="0.001" name="num2"> <br>
        <input type="submit">

        <?php
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operator = $_POST["operator"];
        echo "<br><br>";

        switch ($operator) {
            case "+":
                echo $num1 + $num2;
                break;
            case "-":
                echo $num1 - $num2;
                break;
            case "*":
                echo $num1 * $num2;
                break;
            case "/":
                echo $num1 / $num2;
                break;
            default:
                echo "<h3>Choose an operator!</h3>";
        }

        ?>



</body>

</html>