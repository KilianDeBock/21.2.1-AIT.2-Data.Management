<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>
    <?php
    include "FestivalNameGen/data.php";

    do {
        $randomName = $prefix[array_rand($prefix)] . $suffix[array_rand($suffix)];
    } while (in_array($randomName, $unavailable));
    echo $randomName;
    ?>
</h1>

<h2>Last 10 Items:</h2>
<?php
$lastItems = $_SESSION["randomName"] ?? [];
//$lastItems = ["Heye"];
$items = join("<br>", $lastItems);
echo $items;

$newItemInOldItems = array_merge($lastItems, [$randomName]);
$newItems = array_slice($newItemInOldItems, -10, 10, true);;
$_SESSION["randomName"] = $newItems;
?>

</body>
</html>