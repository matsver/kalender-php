<?php 
    include 'connect.php';
    $sql = "DELETE FROM planning WHERE id = '".$_GET['id']."'";
    if ($conn->query($sql) === TRUE) {
        header("location: planningen.php");
        exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>