<?php
include 'data.php';

//var_dump($_GET);

$search = trim($_GET['car'] ?? '');
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

<h1>Carshop</h1>

<form method="get">
    <input type="search" name="car" value=<?= $search ?>>
    <button type="submit">Search</button>
</form>

<ul>
    <?php foreach ($cars as $car) {
        if (strpos(strtolower($car['brand']), strtolower($search)) || $search === '') {
            include './car_item.php';
        }
    } ?>
</ul>

</body>
</html>