<?php
$dbn ='mysql:dbname=dog_table;charset=utf8;port=3306;host=localhost';
$user = 'root';
$pwd = '';

// DB接続
try {
    $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
    echo json_encode(["db error" => "{$e->getMessage()}"]);
    exit();
}

$var = $_GET['dog.html'];
$todo = $_POST['dog_table'];
$id = 1;

?>