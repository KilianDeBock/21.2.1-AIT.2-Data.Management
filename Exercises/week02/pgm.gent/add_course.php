<?php
include 'libs/db.php';

$new_course = $_POST['course'] ?? null;
$new_teacher = $_POST['teacher'] ?? null;

var_dump($new_course);
var_dump($new_teacher);

if ($new_course && $new_teacher) {
    $pdostmnt = $db->prepare('INSERT INTO courses (name, teacher_short) VALUES (:name, :teacher_short)');
    $pdostmnt->execute([':name' => $new_course, ':teacher_short' => $new_teacher]);
    $added_course = $db->lastInsertId();
}

//var_dump($courses);
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

<?php if ($added_course): ?>
    <h2>Added new course</h2>
    <?php var_dump($added_course); ?>
<?php endif; ?>

<form method="post">
    <label>
        Course
        <input type="text" name="course">

    </label>

    <label>
        Teacher
        <input type="text" name="teacher">
    </label>

    <button type="submit">Add</button>
</form>

</body>
</html>
