<article>
    <h2><?= $course["name"]; ?></h2>
    <!--    <p>--><? //= $course["description"]; ?><!--</p>-->
    <?php if ($course['image']): ?>
        <img src="cars/<?= $course['image']; ?>">
    <?php endif; ?>
</article>