<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles/style.css">
  <title>Game Planner</title>
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
$sql = "SELECT name, image FROM `games`";
$result = $conn->query($sql);
?>
  <nav class="flex items-center justify-between flex-wrap bg-purple-dark p-6">
    <div class="flex items-center flex-no-shrink text-white mr-6">
      <span class="font-semibold text-xl tracking-tight">Kalender</span>
    </div>
    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto text-sm lg:flex-grow">
      <div class="text-sm lg:flex-grow">
      </div>
      <div>
        <a href="#"
          class="no-underline inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-purple-dark hover:bg-white mt-4 lg:mt-0 uppercase">Add</a>
      </div>
    </div>
  </nav>
  <div class="container my-12 mx-auto px-4 md:px-12">
    <div class="flex flex-wrap -mx-1 lg:-mx-4">
    <?php 
    
    if($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        $name= $row["name"];
        $image = $row["image"];
        include 'components/card.php';
    }
}
else
{
    echo "0 results";
}

    ?>
    </div>
  </div>
  </div>
</body>

</html>