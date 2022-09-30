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

<h1><?php echo 'Hello World'; ?></h1>

<?php
// echo phpinfo();
$name = 'Kilian';
//echo "<h2>Hello $name</h2>";
//echo '<h2>Hello ' . $name . '</h2>';
?>

<!--<h2>Hello --><?php //echo $name; ?><!--</h2>-->
<h2>Hello <?= $name; ?></h2>

<?php
//$list = ['first', 'second', 'third'];
//print_r($list);
////echo $list;
//var_dump($list);
////print_r(true);
//var_dump(true);
//// exit;
//// die();
//
//foreach ($list as $item => $value) {
//    echo "<li>$value</li>";
////    var_dump($item);
//}
//
//for ($i = 0; $i < 10; $i++) {
//    echo "<li>$i</li>";
//}
//
//while ($i < 20) {
//    echo "<li>$i</li>";
//    $i++;
//}
?>

<?php
include 'data.php';
//var_dump($colors);

foreach ($colors as $color) {
    echo "<div style='background-color:$color'>$color</div>";
}
?>


</body>
</html>
