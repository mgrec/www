<?php
require_once './includes/pdo.php';
require_once './includes/functions.php';
session_start();

if (isset($_POST['score'])) {
    updateScore($pdo, $_POST['score']);
}
