<?php
session_start();

// Function to remove an item from the cart
function removeFromCart($productId) {
    if (isset($_SESSION['cart'][$productId])) {
        unset($_SESSION['cart'][$productId]);
    }
}

if (isset($_POST['removeFromCart'])) {
    $productId = $_POST['productId'];

    // Call the removeFromCart function
    removeFromCart($productId);

    // Optionally, redirect the user back to the cart or another page
    header('Location: cart.php');
    exit;
}
?>
