<?php
    $tittle = "Lesson two";
    require "blocks/header.php";
?>

<div class="container">
    <h2> Числа Фибоначчи </h2>
    <?php
        echo "15 число Фибоначчи  = ". number_Fibonacci(15). "<br>";
        function number_Fibonacci($number){
            if ($number <= 1) {
                return $number;
            }

            return number_Fibonacci($number - 1) + number_Fibonacci($number - 2);
        }
        ?>
</div>

<div class="container">
    <h2> Доход по вкладу </h2>
    <?php
    echo "При сумме 1 000 000, периоде в 12 месяцев и ставке 17,5 доход составит " . calculation_deposit(1000000, 12, 17.5). "<br>";
    function calculation_deposit($deposit_amount, $period, $annual_percentage)
    {
        return $deposit_amount * ($period / 12) * ($annual_percentage / 100) ;
    }
    ?>
</div>

<div class="container">
    <h2> Даты </h2>
    <?php
    echo "4.3 = " . show_date(4, 3). "<br>";
    function show_date($day, $month)
    {
        $months = [1 => "января", "февраля", "марта", "апреля", "мая", "июня", "июля", "августа", "сентября", "октября", "ноября", "декабря"];
        return "$day " . $months["$month"];
    }
    ?>
</div>

<?php
    require "blocks/footer.php";
?>
