<?php
session_start();

// Function to add an item to the cart
function addToCart($productId, $productName, $productPrice, $quantity = 1) {
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    // If the item is already in the cart, update the quantity
    if (isset($_SESSION['cart'][$productId])) {
        $_SESSION['cart'][$productId]['quantity'] += $quantity;
    } else {
        // If the item is not in the cart, add it
        $_SESSION['cart'][$productId] = array(
            'name' => $productName,
            'price' => $productPrice,
            'quantity' => $quantity
        );
    }
}

if (isset($_POST['addToCart'])) {
    $productId = $_POST['productId'];
    $productName = $_POST['productName'];
    $productPrice = $_POST['productPrice'];

    // Call the addToCart function
    addToCart($productId, $productName, $productPrice);

    // Optionally, redirect the user to the cart or another page
    header('Location: cart.php'); // Change 'cart.php' to the actual cart page
    exit;
}
?>
