<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
</head>
<body>
    <section>
        <h1>Add a New Product</h1>
        <form action="/save" method="post">
            <label for="ProductName">Product Name:</label>
            <input type="hidden" name="Id">
            <input type="text" id="ProductName" name="ProductName" placeholder="Product Name">
            <br>
            <label for="ProductDescription">Product Description:</label>
            <input type="text" id="ProductDescription" name="ProductDescription" placeholder="Product Description">
            <br>
            <label for="ProductCategory">Product Category:</label>
            <input type="text" id="ProductCategory" name="ProductCategory" placeholder="Product Category">
            <br>
            <label for="ProductQuantity">Product Quantity:</label>
            <input type="text" id="ProductQuantity" name="ProductQuantity" placeholder="Product Quantity">
            <br>
            <label for="ProductPrice">Product Price:</label>
            <input type="text" id="ProductPrice" name="ProductPrice" placeholder="Product Price">
            <br>
            <input type="submit" value="Save">
        </form>
    </section>

    <section>
        <h1>Product Listing</h1>
        <table border="3">
            <tr>
                <th>Product Name</th>
                <th>Product Description</th>
                <th>Product Category</th>
                <th>Product Quantity</th>  
                <th>Product Price</th>
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
    </section>
</body>
</html>
