<?php
/**
 * Created by PhpStorm.
 * User: maxime
 * Date: 12/04/2016
 * Time: 11:43
 */
include_once('./includes/pdo.php');
/**
 * @param $pdo
 */
function insertUser(PDO $pdo)
{
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];
    $hash = hash('sha256', $username . ':' . $pass);
    $_SESSION["username"] = $username;
    $_SESSION["hash"] = $hash;
    $sql = "SELECT COUNT(*) FROM user WHERE username = :username ";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $result = $stmt->fetch();

    if ($result['COUNT(*)'] == 1) {
        echo "ce compte existe déjà";
    } else {
        $sql = "INSERT INTO `user` ( `username`, `hash`, `email` ) VALUE ( :username, :hash, :email );";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':hash', $hash);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
    }
}
/**
 * @param $pdo
 */
 function connectUser(PDO $pdo)
 {
 //Ouverture d'une session
     session_start();
     $username = $_POST['username'];
     $pass = $_POST['pass'];
     $hash = hash('sha256', $username . ':' . $pass);
     $_SESSION["username"] = $username;
     $_SESSION["hash"] = $hash;
     $sql = "SELECT COUNT(*) FROM user WHERE hash = :hash ";
     $stmt = $pdo->prepare($sql);
     $stmt->bindParam(':hash', $_SESSION["hash"]);
     $stmt->execute();
     $result = $stmt->fetch();
     $err = "erreur de pass/login";
     if ($result['COUNT(*)'] == 1) {
         header('Location: ./compte.php');
     } else {
         //si l'user n'existe pas, on vide session() & on la supprime pour eviter une connection non voulue
         session_unset();
         session_destroy();
         return $err;
     }
 }
/**
 * @param $pdo
 */
function getUserByUsername(PDO $pdo)
{
    $username = $_SESSION['username'];
    $sql = "SELECT * FROM user WHERE username = :username";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $output = $stmt->fetch();
    return $output;
}
/**
 * @param $pdo
 * @return mixed
 */
function selectBestScore(PDO $pdo)
{
    $sql = "SELECT score_best, username FROM user WHERE score_best =(SELECT MAX(score_best) FROM user)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $output = $stmt->fetch();
    return $output;
}
/**
 * @param $pdo
 * @return mixed
 */
function selectScore(PDO $pdo)
{
    $sql = "SELECT score_best, score_total, username FROM user ORDER BY score_best DESC";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $output = $stmt->fetchAll();
    return $output;
}

/**
 * @param $pdo
 * @return mixed
 */
function updateScore(PDO $pdo, $score)
{
    $username = $_SESSION['username'];
    $sql = "UPDATE user SET score_best= CASE
WHEN score_best < :score THEN :score ELSE score_best
WHERE username = :username;";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam('score', $score);
    $stmt->bindParam('username', $username);
    $stmt->execute();
}

// TODO: SQL requesr : SELECT username, name, description FROM acquire INNER JOIN user ON acquire.user_id = user.id INNER JOIN badge ON acquire.badge_id = badge.id
