<?php

$conn = mysqli_connect("localhost", "zhh", "asdffdsa", "wad_shop");

if (!$conn) {
    die(mysqli_connect_errno($conn));
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL & PHP Shop</title>
</head>

<body>

    <h3>Create Product</h3>

    <form action="./save.php" method="post">
        <input type="text" name="name" required>
        <input type="text" name="price" required>
        <input type="number" name="stock" required>
        <button>Add</button>
    </form>

    <br>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Created at</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // sql statement

            $sql = "SELECT * FROM products";

            $query = mysqli_query($conn, $sql);

            // run query
            while ($row = mysqli_fetch_assoc($query)) :
            ?>
                <tr>
                    <td><?= $row["id"] ?></td>
                    <td><?= $row["name"] ?></td>
                    <td><?= $row["price"] ?></td>
                    <td><?= $row["stock"] ?></td>
                    <td><?= $row["created_at"] ?></td>
                    <td>
                        <a href="./edit.php?row_id=<?= $row["id"] ?>">Edit</a> |
                        <a onclick="return confirm('Are you sure to delete?')" href="./delete.php?row_id=<?= $row["id"] ?>">Delete</a>
                    </td>
                </tr>
            <?php endwhile ?>
        </tbody>
    </table>

</body>

</html>