<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <title>Game Planner</title>
</head>

<body>
    <?php
include 'connect.php';
$sql = "SELECT * FROM `games`";
$result = $conn->query($sql);
?>
    <?php include 'nav.php';?>
    <div class="container my-12 mx-auto px-4 md:px-12">
        <div class="flex flex-wrap -mx-1 lg:-mx-4">
<?php 
if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $name= $row["name"];
        $image = $row["image"];
        $min = $row["min_players"];
        $max = $row["max_players"];
        $desc = $row["description"];
        $tijd = $row["play_minutes"];
        include 'card.php';
    }
} else {
    echo "0 results";
}
?>
        </div>
    </div>
    </div>
</body>

</html>