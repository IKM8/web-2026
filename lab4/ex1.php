<!DOCTYPE html>
<html>
    <head>
        <title> Задачи </title>
    </head>


    <body>
        <h1> Задача 1 </h1>
        <form method="GET" action="">
            <p>Введите год</p>
            <input type="number" name="year">
            <input type="submit" value="Проверить, високосный ли год">
        </form>
        <?php
        if (isset($_GET['year'])) {
            $year = $_GET['year'];

            if ((($year % 4 == 0) && ($year % 100 != 0)) || ($year % 400 == 0)) {
                echo 'YES';
            }
            else {
                echo 'NO';
            }
        }
        ?>
    </body>
</html>