<?php
    setcookie("login", "", -1, "/");
    setcookie("password", "", -1, "/");
    header("location: index.php");
    die();