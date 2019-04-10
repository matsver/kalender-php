<?php

include 'connect.php';
$name = $_GET["name"];
$spelers = $_GET["spelers"];

echo urldecode($name);

$stmt = $pdo->prepare('SELECT * FROM games WHERE name = :name');
$stmt->execute(array('name' => $name));
foreach ($stmt as $row) {
    $id= $row["id"];
    header("location: info.php?id=".$id."&spelers=".$spelers);
}
?>