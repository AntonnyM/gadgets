<?php
session_start();
require_once('header.php');
require_once('navbar.php');
include('conn.php'); 
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $productID = $_GET['id'];

    // Query the database to retrieve product details
    $sql = "SELECT * FROM product WHERE productid = $productID";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $product = $result->fetch_assoc();
?>

<div style="padding: 35px;"></div>
<div class="container">
    <div class="row col-md-6">
        <img src="<?php echo empty($product['photo']) ? 'upload/noimage.jpg' : $product['photo']; ?>" alt="">
    </div>
    <div class="row col-md-6">
        <div class="container">
            <h1 style="padding: 10px;" class="mt-5"><?php echo $product['productname']; ?></h1>
            <div class="table-responsive">
                <table style="width: 50%;overflow-x: auto; " class="table table-striped table-condensed">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>details</th>
                        </tr>
                    </thead>
                    <tbody>                        
                        <tr>
                            <td>Description</td>
                            <td><?php echo $product['description']; ?></td>
                        </tr>
                        <tr>
                            <td>Color</td>
                            <td><?php echo $product['color']; ?></td>
                        </tr>
                        <tr>
                            <td>Weight</td>
                            <td><?php echo $product['weight']; ?> grams</td>
                        </tr>
                        <tr>
                            <td>SKU</td>
                            <td><?php echo $product['SKU']; ?></td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
            <form method="post" action="addToCart.php">
                <input type="hidden" name="productId" value="<?php echo $productID; ?>">
                <input type="hidden" name="productName" value="<?php echo $product['productname']; ?>">
                <input type="hidden" name="productPrice" value="<?php echo $product['price']; ?>">
                <!-- Add Bootstrap classes to style the button -->
                <button type="submit" name="addToCart" class="btn btn-success">Add to Cart</button>
            </form>
        </div>
    </div>
</div>

<?php
    } else {
        echo "Product not found.";
    }
} else {
    echo "Invalid product ID.";
}
?>
