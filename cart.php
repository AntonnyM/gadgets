<?php
session_start();
require_once('header.php');
require_once('navbar.php');
?>

<div style="padding: 35px;"></div>
<div class="container">
    <h1 class="mt-5">Shopping Cart</h1>

    <?php
    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
        ?>
        <div class="table-responsive">
            <table class="table table-striped table-condensed">
                <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($_SESSION['cart'] as $productId => $item) {
                    $total = $item['price'] * $item['quantity'];
                    ?>
                    <tr>
                        <td><?php echo $item['name']; ?></td>
                        <td><?php echo $item['price']; ?></td>
                        <td><?php echo $item['quantity']; ?></td>
                        <td><?php echo $total; ?></td>
                        <td>
                            <form method="post" action="removeFromCart.php">
                                <input type="hidden" name="productId" value="<?php echo $productId; ?>">
                                <button type="submit" name="removeFromCart">Remove</button>
                            </form>
                        </td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>

        <!-- Add a link to the checkout page -->
        <a href="checkout.php" class="btn btn-primary">Proceed to Checkout</a>

        <?php
    } else {
        echo "<p>Your cart is empty.</p>";
    }
    ?>
</div>


