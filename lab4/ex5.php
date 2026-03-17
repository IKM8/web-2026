<!DOCTYPE html>
<html>
    <head>
        <title> Задачи </title>
    </head>

    <body>
        <form method="GET" action = "">
            <p>Введите число</p>
            <input type="number" name="digit">
            <input type="submit" value="Узнать факториал числа">
        </form>

        <?php
        if (isset($_GET["digit"])) {
            $digit = (int) $_GET["digit"];
            function Factorial($digit) {
                if ($digit == 1) {
                    return 1;
                }
                if ($digit == 0) {
                    return 0;
                }
                return $digit * Factorial($digit-1);
            }
            echo Factorial($digit);
        }

        ?>
    </body>
</html>