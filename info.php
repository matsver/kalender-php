<?php 
header("Content-Type: text/html; charset=ISO-8859-1");
    include 'connect.php';
    $id = $_GET["id"];
    $stmt = $pdo->prepare('SELECT * FROM games WHERE id = :id');
    $stmt->execute(array('id' => $id));
    foreach ($stmt as $row) {
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
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <title>Info | <?=$name?></title>
</head>

<body>
    <?php include 'nav.php'; ?>
    <div class="container mx-auto flex-wrap flex">
        <div class="w-full mt-10">
            <div class="text-center w-6/6 p-3 rounded overflow-hidden shadow-lg">
            <?php if (isset($_GET["spelers"])) {
                echo '<h1>Spelers</h1><div class="flex flex-wrap text-xl text-white bg-purple shadow-md -mx-px overflow-hidden sm:-mx-2 md:-mx-2 lg:-mx-1 xl:-mx-2">';
                $spelers = htmlspecialchars($_GET["spelers"], ENT_QUOTES, 'UTF-8');
                $spelersArray = explode(",", $spelers);
                foreach ($spelersArray as $speler ) {
                    echo '<div class="my-px px-px w-1/2 overflow-hidden sm:my-2 sm:px-2 md:my-2 md:px-2 md:w-full lg:my-1 lg:px-1 lg:w-1/2 xl:my-2 xl:px-2">'.$speler.'</div>';
                }
                echo '</div>';
            }?>
                <a href="<?=$url?>" class="no-underline text-black">
                    <img class="w-1/5" src="img/<?=$image?>" alt="<?=$name?>">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2"><?=$name?></div>
                        <div class="font-bold text-xl mb-2">Skills:
                            <?php $newstring = str_replace(";", " | ", $skill); echo $newstring; ?></div>
                </a>
                <p class="text-grey-darker text-base">
                    <?=$desc?>
                </p>
                <div class="mt-10">
                    <?=$iframe?>
                </div>
                <div class="px-6 py-4">
                    <span
                        class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-xl font-semibold text-grey-darker mr-2">Minimale
                        spelers: <?=$min?></span>
                    <span
                        class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-xl font-semibold text-grey-darker mr-2">Maximale
                        spelers: <?=$max?></span>
                    <span
                        class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-xl font-semibold text-grey-darker mr-2">Speeltijd:
                        <?=$tijd?> Minuten</span>
                    <span
                        class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-xl font-semibold text-grey-darker">Uitlegtijd:
                        <?=$explain?> Minuten</span>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>

</html>