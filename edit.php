<?php
include "db_conn.php";
$id = $_GET["id"];


if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $description = $_POST['description'];
    $Price = $_POST['price'];
    $Quantity = $_POST['quantity'];

    $sql = "UPDATE `products` SET `name`='$name',`description`='$description',`price`='$Price',`quantity`='$Quantity' WHERE ID=$id";

    $result = mysqli_query($conn, $sql);

    if($result) {
        header("Location: index.php?msg=Data Update succesfully");
    }
    else {  
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
<?php
    $sql = "SELECT * FROM `products` WHERE ID = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

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