<?php
/**
 * Created by PhpStorm.
 * User: maxime
 * Date: 12/04/2016
 * Time: 11:43
 */
try{
    $pdo = new PDO ('mysql:host=127.0.0.1;dbname=SI3D;charset=UTF8','root','root');
    $pdo->exec('set names UTF8');
} catch (PDOException $e) {

    die ($e->getMessage());
}
