<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
  <title>Planningen</title>
</head>
<body>
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
$sql = "SELECT * FROM `planning`";
$result = $conn->query($sql);
?>
  <?php include 'nav.php';?>
  <div class="container my-12 mx-auto px-4 md:px-12">
    <div class="flex flex-wrap -mx-1 lg:-mx-4">
    <?php 
    
    if($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        $id = $row["id"];
        $name= $row["naam"];
        $image = $row["start_time"];
        $min = $row["end_time"];
        $max = $row["uitlegger"];
        $desc = $row["description"];
        $tijd = $row["play_minutes"];
        include 'plancomponent.php';
    }
}
else
{
    echo "0 results";
}

    ?>
</body>
</html>