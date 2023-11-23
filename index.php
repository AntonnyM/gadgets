<?php
session_start();

include('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #5a7ae2b9;
            color: #fff;
        }

        .welcome-section {
            padding: 100px 0;
            text-align: center;
            margin-top:-360px;
        }

        .btn-primary {
            background-color: #4CAF50;
            border: none;
        }

        .featured-products {
            margin-top: 150px;
            padding: 50px 0;
        }

        .service-section {
            background-color: #333;
            padding: 50px 0;
        }

        .service-box {
            text-align: center;
            margin-bottom: 30px;
        }

        .service-icon {
            font-size: 40px;
            margin-bottom: 10px;
        }

        .testimonial-section {
            padding: 50px 0;
            background-color: #222;
        }

        .testimonial-box {
            text-align: center;
            margin-bottom: 30px;
        }

        .contact-section {
            padding: 50px 0;
        }

        .contact-form {
            max-width: 400px;
            margin: 0 auto;
        }
    </style>
    </head>
    <body>
    <nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Computer Capital</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="/">Home <span class="sr-only">(current)</span></a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="#contact">Contact</a></li>
                <!-- Add more navigation links as needed -->
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


<img src="img/comp.jpg" width="100%" style="margin-top:-20px;" height="60%" alt="IMG">
    <div class="welcome-section">
        <div class="container">
            
            <h1>Welcome to Computer Capital</h1>
            <p>Your One-Stop Shop for Quality Computers</p>
            <a href="login.php" class="btn btn-primary btn-lg">Sign In</a>
        </div>
    </div>

    <div class="container featured-products">
        <h2 class="text-center">Featured Products</h2>
        <p class="text-center">Explore our top picks for you</p>

        <!-- Add your featured products here -->

        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <a href="login.php">
                           <img src="img/PSP Headphone.jpg" width="86%" height="60%" alt="earphone"> 
                        </a>
                        <!-- Featured Product Image -->
                    </div>
                    <div class="panel-footer text-center">
                        <h4 style="color:black;">PSP Headphone</h4>
                        <p style="color:black;">KES 674.00</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                    <a href="login.php">
                        <img src="img/psp-earphone-2000-series.jpg" alt="earphone">
                    </a>
                        <!-- Featured Product Image -->
                    </div>
                    <div class="panel-footer text-center">
                        <h4 style="color:black;">psp-earphone-2000-series</h4>
                        <p style="color:black;">KES 567.00</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                    <a href="login.php">
                        <img src="img/PSP 1000 USB.png" width="96%"  alt="earphone">
                    </a>
                        <!-- Featured Product Image -->
                    </div>
                    <div class="panel-footer text-center">
                        <h4 style="color:black;">PSP 1000 USB</h4>
                        <p style="color:black;">KES 189.00</p>
                    </div>
                </div>
            </div>
            <!-- Repeat for more products -->
        </div>
    </div>

    <div class="container service-section">
        <h2 class="text-center">Our Services</h2>
        <p class="text-center">Why choose Computer Capital?</p>

        <div class="row">
            <div class="col-md-4">
                <div class="service-box">
                    <div class="service-icon">&#x1F4BB;</div>
                    <h4>Fast Delivery</h4>
                    <p>Get your products quickly and efficiently.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-box">
                    <div class="service-icon">&#x1F4B0;</div>
                    <h4>Quality Products</h4>
                    <p>Discover top-notch computers and accessories.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-box">
                    <div class="service-icon">&#x1F4E6;</div>
                    <h4>Secure Transactions</h4>
                    <p>Shop with confidence using our secure payment system.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container testimonial-section">
        <h2 class="text-center">What Our Customers Say</h2>

        <div class="row">
            <div class="col-md-4">
                <div class="testimonial-box">
                    <p>"Great selection and fast delivery! I'm a satisfied customer."</p>
                    <p>- John Doe</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial-box">
                    <p>"The quality of their products is exceptional. Highly recommended!"</p>
                    <p>- Jane Smith</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial-box">
                    <p>"Computer Capital is my go-to place for all things tech. Love it!"</p>
                    <p>- Robert Johnson</p>
                </div>
            </div>
        </div>
    </div>

    <div id="contact" class="container contact-section">
        <h2 class="text-center">Contact Us</h2>

        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form class="contact-form">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Send Message</button>
                </form>
            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>
</body>
</html>
