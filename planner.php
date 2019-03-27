<?php 

$sqlHost = 'localhost';
$sqlUser = 'root';
$sqlPass = 'mysql';

$conn = new mysqli($sqlHost, $sqlUser, $sqlPass, 'kalender');
if($conn->connect_errno)
{
    pritnf("Connect failed: %s\n", $conn->conncet_error);
    exit();
}
$sql = "INSERT INTO `planning` (naam, start_tijd, eind_tijd, uitlegger, spelers) VALUES ('$_POST[selector]', '$_POST[start]', '$_POST[end]', '$_POST[uitleg]', '$_POST[grid-person-1]')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>