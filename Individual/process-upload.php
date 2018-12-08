<?php
//perform database insert using form values
$link = $_POST['link'];
$category = $_POST['category'];




$dsn = "mysql:host=localhost;dbname=browne9_Individual;charset=utf8mb4";
$dbusername = "browne9_imm";
$dbpassword = "receWO5tmv&q";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("INSERT INTO `video` (`id`, `link`,`category`)
VALUES ('$id', '$link', '$category');");

$stmt->execute();

echo($link);
echo('completed');
// echo 'Here is some more debugging info:';
// print_r($_FILES);
?>
