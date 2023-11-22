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
            <a class="navbar-brand" href="index.php"><b>ElectroBidhaa</b></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <!-- Cart Icon and Item Count -->
                <li>
                    <a href="cart.php">
                        <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                        Cart <span class="badge"><?= $cartItemCount ?></span>
                    </a>
                </li>
                <li><a href="logout.php">Logout (<?=$name ?>)</a></li> 
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
