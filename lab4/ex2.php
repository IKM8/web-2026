<!DOCTYPE html>

<html>
    <head>
        <title> Задачи </title>
    </head>
    <body>
        <h1> Задача 2 </h1>
        <form method="GET" action="">
            <p> Введите одну цифру </p>
            <input type="number" name="digit" min="0" max="9">
            <input type="submit" value="Отправить">
        </form>
        <?php
        if (isset($_GET['digit'])) {
            $digit = $_GET['digit'];
            function digitIntoWord($d): string {
                $digitWord = match ($d) {
                    '0' => 'Ноль',
                    '1' => 'Один',
                    '2' => 'Два',
                    '3' => 'Три',
                    '4'=> 'Четыре',
                    '5' => 'Пять',
                    '6' => 'Шесть',
                    '7' => 'Семь',
                    '8' => 'Восемь',
                    '9' => 'Девять',
                    default => 'Неизвестная цифра'
                };
                return $digitWord;
            }
            echo digitIntoWord($digit);
        }
        ?>
    </body>
</html>
