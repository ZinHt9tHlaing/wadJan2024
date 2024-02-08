<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>My Page</h1>

    <?php

    $products = [
        [
            "id" => 1,
            "name" => "apple",
            "price" => 300
        ],
        [
            "id" => 2,
            "name" => "orange",
            "price" => 100
        ],
        [
            "id" => 3,
            "name" => "mango",
            "price" => 400
        ],
        [
            "id" => 4,
            "name" => "lemon",
            "price" => 50
        ]
    ];

    ?>

    <!-- <pre>
        <?php // print_r($products) ?>
    </pre> -->

    <?php foreach ($products as $product) : ?>
        <div>
            <h2>
            <?= $product["name"]?>
            </h2>
            <p>
                <?= $product["price"] ?>
            </p>
            <hr>
        </div>
    <?php endforeach; ?>



</body>

</html>