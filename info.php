<?php 
    include 'connect.php';
    $id = $_GET["id"];
    $sql = "SELECT * FROM `games` WHERE id = '$id'";
    $result = $conn->query($sql);
    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $id = $row["id"];
            $name= $row["name"];
            $image = $row["image"];
            $iframe = $row["youtube"];
            $min = $row["min_players"];
            $max = $row["max_players"];
            $desc = $row["description"];
            $tijd = $row["play_minutes"];
            $explain = $row["explain_minutes"];
            $skill = $row["skills"];
            $url = $row["url"];
        }
    } else {
        echo "Not found";
        header("location: index.php");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <title>Info | <?=$name?></title>
</head>
<body>
    <?php include 'nav.php' ?>
    <div class="container mx-auto flex-wrap flex">
        <div class="w-full mt-10">
            <div class="border-teal p-8 border-t-12 bg-white mb-6 rounded-lg shadow-lg">
                <div class="w-2/5 p-2">
                    <div class="text-grey-darker text-center bg-grey-light p-2">Minimale Spelers: <?=$min?></div>
                    <div class="text-grey-darker text-center bg-grey-light p-2">Maximale Spelers: <?=$max?></div>
                    <div class="text-grey-darker text-center bg-grey-light p-2">UitlegTijd Spelers: <?=$explain?>
                    </div>
                    <div class="text-grey-darker text-center bg-grey-light p-2">SpeelTijd Spelers: <?=$tijd?></div>
                </div>
                <div class="mb-8">
                    <a href="<?=$url?>" target="_blank">
                        <img src="img/<?=$image?>" alt="<?=$name?>" style="width: 300px;">
                    </a>
                </div>
                <div class="mb-4">
                    <a href="<?=$url?>" class="no-underline hover:underline">
                        <p class="font-bold text-grey-darker block mb-2 text-xl"><?=$name?> - <?=$skill?></p>
                    </a>
                    <?=$desc?>
                </div>
                <div class="flex items-center justify-between w-1/2">
                    <?=$iframe?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>