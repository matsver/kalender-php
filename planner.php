<?php 
    include 'connect.php';
    $sql = "INSERT INTO `planning` (naam, start_time, end_time, uitlegger) VALUES ('$_POST[selector]', '$_POST[start]', '$_POST[end]', '$_POST[uitleg]')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>