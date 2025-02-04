<?php
    if (isset ($_COOKIE["login"]) && isset($_COOKIE["password"])) {
        // Заглушка вместо подключения БД
        if ($_COOKIE["login"] && $_COOKIE["password"] == "admin")
        {
            $last_page = $_COOKIE["last_page"];
            header("Location: $last_page");
        }
        die();
    }
    else {
        header("Location: form_validation.php");
        die();
    }
    $tittle = "index";
    require "blocks/header.php";
?>
<?php
require "blocks/footer.php";
?>

