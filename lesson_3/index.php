<?php
    $tittle = "Lesson tree";
    require "blocks/header.php";
?>
<div class="container">
    <h2> Числа от 0 до 100, нацело делящиеся на 3 </h2>
    <?php
    $i = 0;
    while ($i < 100) {
        if ($i % 3 == 0) {
            echo "$i ";
        }
        $i++;
    }
    ?>
</div>
<div class="container">
    <h2> Отсортированный массив из n случайных чисел </h2>
    <?php
    function rand_array($n){
        $arr = array_fill(0, $n, 1);
        for ($i = 0; $i < $n; $i++) {
            $arr[$i] = rand(-10, 10);
        }
        sort($arr);
        return $arr;
    }
    $n = rand(2, 20);
    echo var_dump(rand_array($n));
    ?>
</div>

<div class="container">
    <h2> Массив регионов </h2>
    <?php
    $regions = ["Московская область" => ["Клин", "Реутов"], "Ярославская область" => ["Ярославль", "Рыбинск"]];
    echo var_dump($regions);
    ?>
</div>

<?php
    require "blocks/footer.php";
?>
