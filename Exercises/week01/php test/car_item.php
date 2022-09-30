<li>
    <h2><?= $car['brand'] . ' ' . $car['type']; ?></h2>
    <p>Price from: <?= $car['price_from']; ?></p>
    <p>Fuel: <?= $car['fuel']; ?></p>
    <img src="cars/<?= $car['image']; ?>" alt="">
</li>