<?php
$name = isset($_SESSION['username']) ? $_SESSION['username'] : "";

// Get the number of items in the cart
$cartItemCount = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
?>

<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="dashboard.php"><b>Computer capital</b></a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav ml-auto"> <!-- Use ml-auto to push items to the right -->
                <!-- Cart Icon and Item Count -->
                <li class="mr-3"> <!-- Use mr-3 for right margin spacing -->
                    <a href="cart.php">
                        <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                        Cart <span class="badge"><?= $cartItemCount ?></span>
                    </a>
                </li>
                <li><a href="logout.php">Logout (<?=$name ?>)</a></li> 
            </ul>
        </div>
    </div>
</nav>
