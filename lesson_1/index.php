<?php
    $tittle = "Lesson one";
    require "blocks/header.php";
    $val_int = 11;
    $val_double = 2.2;
    $val_bool = true;
    $val_string = "string";
    define("val_const", "3.14");

    $quatrains = ["«Славная осень! Здоровый, ядреный",
                "Воздух усталые силы бодрит;", "Лед неокрепший на речке студеной",
                "Словно как тающий сахар лежит.»",
                "Н. А. Некрасов"];
    $quatrain_1 = "«Славная осень! Здоровый, ядреный <br>
                Воздух усталые силы бодрит; <br>
                Лед неокрепший на речке студеной <br>
                Словно как тающий сахар лежит.» <br>
                ";
    $quatrain_2 = "Н. А. Некрасов";
    $x = 10;
    $hello = "20 приветов";
    $a = [true, true, false, false];
    $b = [true, false, true, false];
    $bool_array = Array(false => 'false', true => 'true');
?>

<div class="container">
    <h1> Базовый блок </h1>
    <p> 1)  <br>  <?php
        echo 'val_int = ' . $val_int . "<br>";
        echo 'val_double = ' . $val_double. "<br>";
        echo 'val_string = ' . $val_string. "<br>";
        echo 'val_bool = ' . $val_bool. "<br>";
        echo 'val_const = ' . val_const. "<br>";
        ?>
    </p>
    <p> 2)  <br>  <?php
        echo '"val_int" = ' . "$val_int" . "<br>";
        echo '"val_double" = ' . "$val_double". "<br>";
        echo '"val_string" = ' . "$val_string". "<br>";
        echo '"val_bool" = ' . "$val_bool". "<br>";
        echo '"val_const" = ' . "val_const". "<br>";
        ?>
    </p>
    <p> 3)  <br>  <?php
        echo "'val_int' = " . '$val_int' . "<br>";
        echo "'val_double' = " . '$val_double'. "<br>";
        echo "'val_string' = " . '$val_string'. "<br>";
        echo "'val_bool' = " . '$val_bool'. "<br>";
        echo "'val_const' =  ". 'val_const'. "<br>";
        ?>
    </p>
    <p> 4)  <br>  <?php
        foreach ($quatrains as $quatrain) {

            if ($quatrain !== "Н. А. Некрасов")
            {
                echo $quatrain . "<br>";
            }
            else {
                echo "<u>$quatrain</u>"  . "<br>";
            }
        }
        ?>
    </p>
    <p> 5)  <br>  <?php
        echo $quatrain_1 . "<u>$quatrain_2</u>" . "<br>";
        ?>
    </p>
</div>

<div class="container">
    <h1> Продвинутый блок </h1>
    <p> 6)  <br>  <?php
        echo "10 + 20 приветов: " . $x . $hello . "<br>";
        echo "Объяснение: PHP — язык со слабой типизацией, и когда видит несоответствие типов, он сам пытается преобразовать информацию."
        ?>
    </p>
    <p> 7)  <br>  <?php
        for ($i = 0; $i < 4; $i++){
            echo "a = ". $bool_array[$a[$i]] . "; b = ". $bool_array[$b[$i]]. "; xor = " . ($bool_array[$a[$i] xor $b[$i]]) . "<br>";
        }?>
    </p>
    <p>Объяснение: Оператор XOR возвращает значение true, если одно из операндов (левое или правое) оценивается как true.
        Если оба операнда (левое и правое) являются либо true, либо false, результат оператора XOR будет false. Следовательно
        $a xor $a для любых значений $a будет возвращать false.
    </p>
    <p> 8)  <br>  <?php
        $x = 10;
        $y = 15;
        echo "before: x = $x; " . "y = $y " . "<br>";
        [$x, $y] = [$y, $x];
        echo "after: x = $x; " . "y = $y " . "<br>";
        ?>
    </p>
</div>

<?php
    require "blocks/footer.php";
?>
