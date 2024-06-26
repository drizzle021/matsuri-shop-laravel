<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
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



<div class="register register-background">

    <div class="container create-account">
        <div class="row align-items-center d-flex justify-content-center">
            <h2 class="create-account-text">CREATE ACCOUNT</h2>
        </div>

        <div class="row align-items-center d-flex justify-content-center">
            <div class="col-md-5 form-container">
                <form action="{{ route('registerUser') }}" id="register_form" method="POST" accept-charset="UTF-8">
                    {{ csrf_field() }}

                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="text" name="email" class="form-control" id="email" placeholder="mail@example.com" required minlength="10">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="**********" required minlength="10">
                    </div>

                    <p class="have-account">Already have an account?</p>
                    <p class="login-switch"><a href="login.blade.php">Login</a></p>
                </form>
            </div>

            <div class="col-md-5 create-account-img offset-md-1 d-none d-md-block">
                <img src="img/profile_tanjiru.jpg" alt="account">
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <button type="submit" form="register_form" class="create-account-button btn-primary btn-block">CREATE ACCOUNT</button>
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
                    <li><a href="register.html">Register</a></li>
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
