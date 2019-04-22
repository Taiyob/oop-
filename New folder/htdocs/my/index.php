<?php

include_once "./includes/header.php";
if (isset($_GET['home'])) {
    include_once './home/' . $_GET['home'] . '.php';
} else {
    include_once './home/content.php';
}

include_once "./includes/footer.php";




?>