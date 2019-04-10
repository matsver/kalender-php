<?php 
    include 'connect.php';
    $id = $_GET["id"];
    $stmt = $pdo->prepare('DELETE FROM planning WHERE id = :id');
    $stmt->execute(array('id' => $id));
    header("location: planningen.php");
    exit();
$conn->close();
?>