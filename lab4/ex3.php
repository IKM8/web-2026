<!DOCTYPE html>
<html>
    <head>
        <title> Задача 3 </title>
    </head>

    <body>
        <h1> Задача 3 </h1>
        <form method="GET" action="">
            <p> Введите дату в формате ДД.ММ.ГГГГ или ДД.ММ</p>
            <input type="text", name="date">
            <input type="submit" value="Узнать знак зодиака">
        </form>

        <?php
        if(isset($_GET['date'])) {
            $date = $_GET['date'];
            $parts = explode('.', $date);
            $day = (int)$parts[0];
            $month = (int)$parts[1];
            if (($day >= 21 && $month == 3) || ($day <= 20 && $month == 4)) {
                echo 'Овен';
            }
            if (($day >= 21 && $month == 4) || ($day <= 20 && $month == 5)) {
                echo 'Телец';
            }
            if (($day >= 21 && $month == 5) || ($day <= 21 && $month == 6)) {
                echo 'Близнецы';
            }
            if (($day >= 22 && $month == 6) || ($day <= 22 && $month == 7)) {
                echo 'Рак';
            }
            if (($day >= 23 && $month == 7) || ($day <= 23 && $month == 8)) {
                echo 'Лев';
            }
            if (($day >= 24 && $month == 8) || ($day <= 23 && $month == 9)) {
                echo 'Дева';
            }
            if (($day >= 24 && $month == 9) || ($day <= 23 && $month == 10)) {
                echo 'Весы';
            }
            if (($day >= 24 && $month == 10) || ($day <= 22 && $month == 11)) {
                echo 'Скорпион';
            }
            if (($day >= 23 && $month == 11) || ($day <= 21 && $month == 12)) {
                echo 'Стрелец';
            }
            if (($day >= 22 && $month == 12) || ($day <= 20 && $month == 1)) {
                echo 'Козерог';
            }
            if (($day >= 21 && $month == 1) || ($day <= 20 && $month == 2)) {
                echo 'Водолей';
            }
            if (($day >= 21 && $month == 2) || ($day <= 20 && $month == 3)) {
                echo 'Рыбы';
            }
            

        }

        ?>
    </body>

</html>