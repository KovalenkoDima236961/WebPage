<?php
//session_start();
//
//// Обробка мови
//if (isset($_GET['lang']) && in_array($_GET['lang'], ['en', 'sl'])) {
//    $_SESSION['lang'] = $_GET['lang'];
//}
//
//if (!isset($_SESSION['lang'])) {
//    $_SESSION['lang'] = 'en';
//}
//
//$lang = $_SESSION['lang'];
//
////// Обробка теми
////if (isset($_GET['theme']) && in_array($_GET['theme'], ['light', 'dark'])) {
////    $_SESSION['theme'] = $_GET['theme'];
////}
//
//if (!isset($_SESSION['theme'])) {
//    $_SESSION['theme'] = 'light';
//}
//
//$theme = $_SESSION['theme'];
//
//include "languages/$lang.php";
session_start();

// Обробка мови
if (isset($_GET['lang']) && in_array($_GET['lang'], ['en', 'sl'])) {
    $_SESSION['lang'] = $_GET['lang'];
}

if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'en';
}

$lang = $_SESSION['lang'];

// Обробка теми
if (!isset($_SESSION['theme'])) {
    $_SESSION['theme'] = 'light';
}

$theme = $_SESSION['theme'];

// Включити файл мови на основі вибраної мови
include "languages/$lang.php";
?>

