<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Product Detail</h1>
    <form method="post" enctype="multipart/form-data">
        product id: <input type="text" name="product_id" ><br><br>
        product name: <input type="text" name="product_name" ><br><br>
        product price: <input type="text" name="product_price"><br><br>
        product QM: <input type="text" name="product_QM"><br><br>
        Product type: <input type="text" name="product_type"><br><br>
        product image: <input type="file" name="image"><br><br>
        <input type="submit" value="Submit">
    </form>
    
</body>
</html>

<?php
        include 'db.php';

        if(isset($_POST['submit'])) {
            $product_id = $_POST['product_id'];
            $product_name = $_POST['product_name'];
            $product_price = $_POST['product_price'];
            $product_QM = $_POST['product_QM'];
            $product_type = $_POST['product_type'];
            $image_name = $_FILES['image']['name'];

            $sql = "INSERT INTO products (product_id, product_name, product_price, product_QM, product_type, product_image) VALUES ('$product_id', '$product_name', '$product_price', '$product_QM', '$product_type', '$image_name')";
            if(mysqli_query($conn, $sql)) {
                echo "Product added successfully!";
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        }