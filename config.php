<?php
session_start();

if (!isset($_SESSION['lang']))
        $_SESSION['lang'] = "FR";
else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
    if ($_GET['lang'] == "FR")
        $_SESSION['lang'] = "FR";
    else if($_GET['lang'] == "EN")
        $_SESSION['lang'] = "EN";  

}

// echo "chooose language: " .$_SESSION['lang'] ;
require_once "langues/" .$_SESSION['lang'] .".php";



  






?>