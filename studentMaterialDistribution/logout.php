<?php
session_start();
unset($_SESSION["x"]);
unset($_SESSION["x1"]);
if (isset($_COOKIE['id'])) {
    unset($_COOKIE['id']);
    setcookie('id', '', time() - 3600, '/'); // empty value and old timestamp
}
session_destroy();
header("Location:welcome.php");




?>