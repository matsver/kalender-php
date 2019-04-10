<?php 
    include 'connect.php';
    if ($_POST[selector] == "" || $_POST[start] == "" || $_POST[end] == "" || $_POST[uitleg] == "" || $_POST[speler] == "") {
        echo "Error writing to Database";
        header("location: planningen.php?error=empty");
        exit();
    }
    $id = $_POST["id"];
    $name = $_POST["selector"];
    $start = $_POST["start"];
    $end = $_POST["end"];
    $uitleg = $_POST["uitleg"];
    $speler = $_POST["speler"];
    $stmt = $pdo->prepare('UPDATE `planning` SET naam = :name, start_time = :start, end_time = :end, uitlegger = :uitleg, spelers = :speler WHERE id = :id);
    $stmt->execute(array('':name' => $name, ':start' => $start, ':end' => $end, ':uitleg' => $uitleg, ':speler' => $speler, ':id' => $id));
    foreach ($stmt as $row) {
        header("location: planningen.php");
        exit();
    }
$conn->close();
?>