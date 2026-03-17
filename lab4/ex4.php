<!DOCTYPE html>
<html>
    <head>
        <title> Задача 4</title>
    </head>
    <body>
        <h1> Задача 4 </h1>
        <form method="GET" action = "">
            <p>Введите билеты</p>
            <input type="number" name="number1" min="100000" max="999999">
            <input type="number" name="number2" min="100000" max="999999">
            <input type="submit" value="Вывести все cчастливые билеты в диапазоне">
        </form>

        <?php
        if ((isset($_GET['number1'])) && (isset($_GET['number2']))) {
            
            $firstTicket = $_GET['number1'];
            $secondTicket = $_GET['number2'];

            function numberIsLucky($firstHalf, $secondHalf): bool {
                $sum1 = 0;
                $sum2 = 0;
                for ($i = 0; $i < 3; $i++) {
                    $sum1 += (int)$firstHalf[$i];
                }
                for ($i = 0; $i < 3; $i++) {
                    $sum2 += (int)$secondHalf[$i];
                }
                if ($sum1 === $sum2) {
                    return True;
                }
                else {
                    return False;
                }
                
            }
            for ($i = (int) $firstTicket; $i < (int) $secondTicket; $i++) {
                $firstHalfOfTicket = substr($i, 0, 3);
                $secondHalfOfTicket = substr($i, 3, 3);
                if (numberIsLucky($firstHalfOfTicket, $secondHalfOfTicket)) {
                    echo $i . "<br>";
                }
            }
        }
        ?>
    </body>
</html>