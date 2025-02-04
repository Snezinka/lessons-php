<?php
    if (isset($_POST["login"]) && isset($_POST["password"])) {
        $login = $_POST["login"];
        $password = $_POST["password"];
        // Заглушка вместо подключения БД
        if ($login == "admin" && $password == "admin") {
            setcookie("login", $login, time() + (86400 * 30), "/");
            setcookie("password", $password, time() + (86400 * 30), "/");
            header("Location: page_a.php");
        }
    }
    $tittle = "Form Validation";
    require "blocks/header.php";
?>



<div class="container">
    <form id="form" action="" method="post">
        <h1>Вход</h1>
        <div class="input-control">
            <label for="text">Логин</label>
            <input id="text" name="login" type="text" placeholder="Введите логин">
            <div class="error"></div>
        </div>
        <div class="input-control">
            <label for="password">Пароль</label>
            <input id="password" name="password" type="password" placeholder="Введите пароль">
            <div class="error"></div>
        </div>
        <div class="check_box">
            <input type="checkbox" name="remember" value="1">
            <label for="checkbox">Запомнить меня</label>
            <div class="error"></div>
        </div>
        <button type="submit">Войти</button>
    </form>
</div>

<?php
    require "blocks/footer.php";
?>
