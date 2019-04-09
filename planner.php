<?php 
    include 'connect.php';
    if ($_POST[selector] == "" || $_POST[start] == "" || $_POST[end] == "" || $_POST[uitleg] == "") {
        echo "Error writing to Database";
        header("location: planningen.php?error=empty");
        exit();
    }
    $sql = "INSERT INTO `planning` (naam, start_time, end_time, uitlegger) VALUES ('$_POST[selector]', '$_POST[start]', '$_POST[end]', '$_POST[uitleg]')";
    if ($conn->query($sql) === TRUE) {
        header("location: planningen.php");
        exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>