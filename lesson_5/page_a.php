<?php
    if (!isset ($_COOKIE["login"])) {
        header("Location: form_validation.php");
        die();
    }
    $tittle = "Page A";
    require "blocks/header.php";
?>

<div class="container">
    <h1>Это страница A</h1>
</div>

<div class="container">
    <form id="exit" action="logout.php">
        <button type="submit">Выйти</button>
    </form>
</div>
<header>
    <a class="link" href="page_a.php">Страница A</a> |
    <a class="link" href="page_b.php">Страница B</a>
</header>
<?php
require "blocks/footer.php";
?>

