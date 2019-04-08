<?php 
    include 'connect.php';
    $sql = "SELECT *, (SELECT image FROM `games` where name=planning.naam) as image FROM `planning`";
    $result = $conn->query($sql);
?>

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
    include 'nav.php';
?>
  <div class="container my-12 mx-auto px-4 md:px-12">
    <div class="flex flex-wrap -mx-1 lg:-mx-4">
<?php 
if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            $id = $row["id"];
            $naam = $row["naam"];
            $image = $row["image"];
            $start = $row["start_time"];
            $end = $row["end_time"];
            $uitlegger = $row["uitlegger"];
            include 'plancomponent.php';
        }
    } else {
        echo "0 results";
    }
?>
</body>
</html>