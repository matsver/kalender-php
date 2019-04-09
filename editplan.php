<?php 
    include 'connect.php';
    if ($_POST[selector] == "" || $_POST[start] == "" || $_POST[end] == "" || $_POST[uitleg] == "") {
        echo "Error writing to Database";
        header("location: planningen.php?error=empty");
        exit();
    }
    $id = $_POST["id"];
    $name = $_POST["selector"];
    $start = $_POST["start"];
    $end = $_POST["end"];
    $uitleg = $_POST["uitleg"];
    $sql = "UPDATE `planning` SET naam = '$name', start_time = '$start', end_time = '$end', uitlegger = '$uitleg' WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        header("location: planningen.php");
        exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>