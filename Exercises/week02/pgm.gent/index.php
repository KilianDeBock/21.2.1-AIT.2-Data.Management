<?php
include 'libs/db.php';

//var_dump($db);

$teacher = $_GET['teacher'] ?? '';

/* SQL Prepare */
$pdostmnt = $db->prepare('SELECT * FROM courses WHERE teacher_short = :teacher');
/* Execute */
$pdostmnt->execute([':teacher' => $teacher]);
/* Fetch */
$courses = $pdostmnt->fetchAll();

//var_dump($courses);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graduaat Programmeren</title>
</head>
<body>
<h1>Graduaat Programmeren</h1>
<section>
    <?php foreach ($courses as $course) include "view/course.php"; ?>
</section>
</body>
</html>