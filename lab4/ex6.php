<!DOCTYPE html>
<html>
    <head>
        <title> Задачи</title>
    </head>
    <body>
        <h1> Задача 6 </h1>
        <form method="GET" action="">
            <p>Введите выражение в обратной польской записи</p>
            <input type="text" name="expression">
            <input type="submit" value="Узнать значение выражения">
        </form>
        <?php
        if (isset($_GET["expression"])) {
            function isOperation($operation): bool {
                return (in_array($operation, ["+","-","*"]));
            }
            $raw_expression = $_GET["expression"];
            $array = explode(" ", $raw_expression);
            $stack = [];
            while (count($array) != 0)
                {
                    if (is_numeric($array[0])) {
                        array_push($stack, $array[0]);
                        array_shift($array);
                    }
                    if (isOperation($array[0])) {
                        $operation = array_shift($array);
                        $temp1 = array_pop($stack);
                        $temp2 = array_pop($stack);
                        $temp = match ($operation) {
                            "+" => $temp2 + $temp1,
                            "-" => $temp2 - $temp1,
                            "*" => $temp2 * $temp1
                        };
                        array_push($stack, $temp);
                    }
                }
            echo $stack[0];
        }
        ?>
    </body>
</html>