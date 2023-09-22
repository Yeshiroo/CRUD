<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
</head>
<body>
    <form action="/save" method="post">
        <label>ProductName</label>
        <input type="hidden" name="Id" value="<?= $pro['Id'] ?>">
        <input type="text" name="ProductName" placeholder="ProductName" value="<?= $pro['ProductName'] ?>">
        <br>
        <label>ProductDescription</label>
        <input type="text" name="ProductDescription" placeholder="ProductDescription" value="<?= $pro['ProductDescription'] ?>">
        <br>
        <label>ProductCategory</label>
        <input type="text" name="ProductCategory" placeholder="ProductCategory" value="<?= $pro['ProductCategory'] ?>">
        <br>
        <label>ProductQuantity</label>  
        <input type="text" name="ProductQuantity" placeholder="ProductQuantity" value="<?= $pro['ProductQuantity'] ?>">
        <br>
        <label>ProductPrice</label>
        <input type="text" name="ProductPrice" placeholder="ProductPrice" value="<?= $pro['ProductPrice'] ?>">
        <br>
        <input type="submit" value="save">
    </form>

    <h1>Product Listing</h1>
    <table border="3">
        <tr>
            <th>ProductName</th>
            <th>ProductDescription</th>
            <th>ProductCategory</th>
            <th>ProductQuantity</th>  
            <th>ProductPrice</th>
            <th>Action</th>
        </tr>
        <?php foreach ($product as $pr): ?>
            <tr>
                <td><?= $pr['ProductName']?></td>
                <td><?= $pr['ProductDescription']?></td>
                <td><?= $pr['ProductCategory']?></td>
                <td><?= $pr['ProductQuantity']?></td>
                <td><?= $pr['ProductPrice']?></td>
                <td><a href="/delete/<?= $pr['Id'] ?>">Delete</a> || <a href="/edit/<?= $pr['Id'] ?>">Edit</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h1>Unordered List of Product</h1>
    <ul>
        <?php foreach ($product as $pr): ?>
            <li><?= $pr['ProductName'] ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
