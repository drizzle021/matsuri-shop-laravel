<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset("app.css") }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="../../public/script.js"></script>

<header>
    <nav class="navbar navbar-expand-md navbar-white bg-white">
        <div class="container">
            <a class="navbar-brand d-none d-lg-block" href="index.html">
                <img src="img/logoAsset 1@4x.png" alt="Logo">
            </a>

            <a class="navbar-brand d-block d-lg-none" href="#">
                <img class="small-logo" src="img/logoAssetSmall 1@4x.png" alt="Logo">
            </a>


            <ul class="navbar-nav d-none d-lg-block">
                <li class="nav-item">
                    <a class="nav-link" href="product_list.blade.php">PRODUCTS</a>
                </li>
            </ul>

            <div class="flex-grow-1"></div>

            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto d-lg-none">
                    <li class="nav-item">
                        <a class="nav-link" href="product_list.blade.php">PRODUCTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shopping_cart.blade.php">CART</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="account.html">ACCOUNT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CONTACT</a>
                    </li>
                </ul>
            </div>


            <ul class="navbar-nav d-none d-lg-block">
                <li class="nav-item">
                    <a class="nav-link" href="shopping_cart.blade.php">CART</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="account.html">ACCOUNT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CONTACT</a>
                </li>
            </ul>
        </div>
    </nav>

</header>


<div class="payment-background">
    <div class="payment">
        <div class="container-fluid bg-dark checkout-box">
            <div class="row no-margin">
                <form action="" method="POST">
                    <div class="row no-margin">
                        <div class="col-md-6 no-margin no-padding">
                            <div class="row mb-3 no-margin">
                                <h3 class="checkout-heading no-padding"><b>Contact</b></h3>
                                <label for="email" class="form-label">Email Address</label>
                                <input type="text" class="form-control" id="email" placeholder="mail@example.com" required minlength="10">
                            </div>

                            <div class="row no-margin form-group">
                                <h3 class="checkout-heading no-padding"><b>Shipping address</b></h3>
                                <select name="country" class="category-select" autocomplete="off">
                                    <option selected value="slovakia">Slovakia</option>
                                    <option value="hungary">Hungary</option>
                                    <option value="austria">Austria</option>
                                    <option value="germany">Germany</option>
                                </select>
                                <div class="row no-padding no-margin">
                                    <div class="col-md-5 no-padding">
                                        <input type="text" class="form-control" placeholder="First name">
                                    </div>
                                    <div class="col-md-5 no-padding">
                                        <input type="text" class="form-control" placeholder="Last name">
                                    </div>

                                    <div class="row no-padding no-margin">
                                        <input type="text" class="form-control" placeholder="Address">
                                    </div>

                                    <div class="row no-padding no-margin">
                                        <div class="col-md-5 no-padding">
                                            <input type="text" class="form-control" placeholder="Postal code">
                                        </div>
                                        <div class="col-md-5 no-padding">
                                            <input type="text" class="form-control" placeholder="City">
                                        </div>
                                    </div>

                                    <div class="row no-padding no-margin">
                                        <input type="text" class="form-control" placeholder="Phone">

                                    </div>
                                </div>
                            </div>
                            <div class="row no-margin">
                                <h3 class="checkout-heading no-padding"><b>Shipping method</b></h3>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="shipping_method" id="packeta" value="packeta">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Packeta
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="shipping_method" id="dhl" value="dhl">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        DHL
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="shipping_method" id="alzabox" value="alzabox">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        AlzaBox
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 no-padding no-margin">
                            <h3 class="checkout-heading no-padding"><b>Payment</b></h3>
                            <div class="row">
                                <div class="form-check">
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="radio" name="payment" id="debit_card" value="debit_card">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Debit Card
                                            </label>
                                        </div>

                                        <div class="col">
                                            <div class="row">
                                                <div class="align-items-center col-3 mr-2 px-0">
                                                    <div class="payment-img">
                                                        <img class="visa_img" src="img/visa2.png">
                                                    </div>
                                                </div>

                                                <div class="align-items-center col-3 px-2 mx-2">
                                                    <div class="payment-img">
                                                        <img class="master_card_img" src="img/master_card.png">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-check">
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="radio" name="payment" id="paypal" value="paypal">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                PayPal
                                            </label>
                                        </div>

                                        <div class="col">
                                            <div class="row">
                                                <div class="align-items-center col-3 px-0">
                                                    <div class="payment-img">
                                                        <img class="pay-pal-img" src="img/paypall.png">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                </div>


                            </div>

                            <div class="row">
                                <div class="form-check">
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="radio" name="payment" id="tatrapay" value="tatrapay">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                TatraPay
                                            </label>
                                        </div>

                                        <div class="col">
                                            <div class="row">
                                                <div class="align-items-center col-3 px-0">
                                                    <div class="payment-img">
                                                        <img class="tatra-pay-img" src="img/tatra_banka.jpg">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="form-check">
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="radio" name="payment" id="bank_transfer" value="bank_transfer">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Bank transfer
                                            </label>
                                        </div>

                                    </div>

                                </div>
                            </div>


                            <div class="row">
                                <div class="form-check matsuri-points-check mt-5">
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" name="points" id="matsuri_points" value="matsuri_points">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Use Matsuri points (1234)
                                            </label>
                                        </div>

                                    </div>

                                </div>
                            </div>


                            <div class="row mb-5">
                                <div class="row d-flex justify-content-center">
                                    <button type="submit" class="pay-now-button btn-primary btn-block"><a href="index.html">Pay now</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-2">
                    <ul>
                        <li>ACCOUNT</li>
                        <li><a href="login.blade.php">Login</a></li>
                        <li><a href="register.blade.php">Register</a></li>
                        <li><a href="shopping_cart.blade.php">Shopping Cart</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-2">
                    <ul>
                        <li>Products</li>
                        <li><a href="product_list.blade.php">Best-Sellers</a></li>
                        <li><a href="product_list.blade.php">Manga</a></li>
                        <li><a href="product_list.blade.php">Figures</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-2">
                    <ul>
                        <li>HELP</li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">About Us</a></li>
                    </ul>
                </div>
                <div class="col-1 offset-3 d-md-block d-none">
                    <img src="img/logoAssetSmall 1@4x.png">
                </div>
            </div>
        </div>

    </footer>


</body>
</html>
