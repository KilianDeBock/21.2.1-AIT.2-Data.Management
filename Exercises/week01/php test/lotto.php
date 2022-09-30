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

<h1>Lottery</h1>

<?php
$lottoNrs = [];

while (count($lottoNrs) < 6) {
    $nr = rand(1, 49);
    if (!in_array($nr, $lottoNrs)) {
        $lottoNrs[] = $nr;
    }
}
?>

<h2>Lottery winning numbers</h2>
<p><?= join(', ', $lottoNrs); ?></p>


</body>
</html>