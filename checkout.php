<?php
session_start();
require_once('header.php');
require_once('navbar2.php');
?>

<div class="container mt-5">
    <h2>Checkout</h2>
    <form action="process_payment.php" method="post">
        <!-- Billing Information -->
        <div class="card mb-3">
            <div class="card-header">Billing Information</div>
            <div class="card-body">
                <!-- Add your billing form fields here -->
                <!-- For simplicity, I'm including only a few fields -->
                <div class="form-group">
                    <label for="fullName">Full Name:</label>
                    <input type="text" class="form-control" id="fullName" name="fullName" required>
                </div>
                <div class="form-group">
                    <label for="cardNumber">Card Number:</label>
                    <input type="text" class="form-control" id="cardNumber" name="cardNumber" required>
                </div>
                <!-- Add more billing fields as needed -->
            </div>
        </div>

        <!-- Payment Options -->
        <div class="card mb-3">
            <div class="card-header">Payment Options</div>
            <div class="card-body">
                <!-- Visa -->
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="visa" name="paymentMethod" value="visa" required>
                    <label class="form-check-label" for="visa">Pay with Visa</label>
                </div>

                <!-- PayPal -->
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="paypal" name="paymentMethod" value="paypal" required>
                    <label class="form-check-label" for="paypal">Pay with PayPal</label>
                </div>

                <!-- Crypto -->
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="crypto" name="paymentMethod" value="crypto" required>
                    <label class="form-check-label" for="crypto">Pay with Crypto</label>
                </div>
            </div>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Proceed to Payment</button>
    </form>
</div>


