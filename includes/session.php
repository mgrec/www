<?php
/**
 * Created by PhpStorm.
 * User: maxime
 * Date: 27/01/2016
 * Time: 16:35
 */
//Vérification si user est connecté, sninon redirection sur la page de connection à l'administration
session_start();
if(!isset($_SESSION['username'] )) {
    session_unset();
    session_destroy();
    header('Location: ./connection.php');
}else{
    
}