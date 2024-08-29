<?php
include "db_conn.php";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    $sql = "INSERT INTO `products`(`ID`, `name`, `description`, `price`, `quantity`)
    VALUES (null, '$name', '$description', '$price', '$quantity')";

    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location: index.php?msg=New record created successfully");
    }
    else{
        echo "failed" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <div class="col">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="col">
    <label class="form-label">Description</label>
    <input type="text" class="form-control" name="description">
    </div>
    <div class="col">
    <label class="form-label">Price</label>
    <input type="text" class="form-control" name="price">
    </div>
    <div class="col">
    <label class="form-label">Quantity</label>
    <input type="text" class="form-control" name="quantity">
    </div>
    <div>
        <button type="submit" name="submit">Add</button>
        <a href="index.php">Cancel</a>
    </div>
    </form>
</body>
</html>