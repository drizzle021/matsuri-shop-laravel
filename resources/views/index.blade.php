<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
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
<script src="script.js"></script>
<header>
    <nav class="navbar navbar-expand-md navbar-white bg-white">
        <div class="container">
            <a class="navbar-brand d-none d-lg-block" href="index.html">
                <img src="img/logoAsset 1@4x.png" alt="Logo">
            </a>

            <a class="navbar-brand d-block d-lg-none" href="index.html">
                <img class="small-logo" src="img/logoAssetSmall 1@4x.png" alt="Logo">
            </a>


            <ul class="navbar-nav d-none d-lg-block">
                <li class="nav-item">
                    <a class="nav-link" href="/product_list/0">PRODUCTS</a>
                </li>
            </ul>

            <div class="flex-grow-1"></div>

            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto d-lg-none">
                    <li class="nav-item">
                        <a class="nav-link" href="/product_list/0">PRODUCTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/shopping_cart">CART</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/account">ACCOUNT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CONTACT</a>
                    </li>

                </ul>
            </div>


            <ul class="navbar-nav d-none d-lg-block">
                <li class="nav-item">
                    <a class="nav-link" href="/shopping_cart">CART</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/account">ACCOUNT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CONTACT</a>
                </li>

            </ul>
        </div>
    </nav>



</header>


<div class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="hero-text">
                    <h1 class="hero-heading"><span>MANGA, FIGURES, ANIME MERCH</span></h1>
                    <p class="hero-subheading">All in one place</p>
                </div>
            </div>

        </div>
        <div class="row">
            <a href="/register"><button type="button" class="register-button">REGISTER NOW</button></a>
        </div>
    </div>
</div>

<div class="home">
    <div class="container-fluid bg-dark px-0">
        <div class="container px-0">
            <div class="row">
                <div class="col px-0  d-flex justify-content-center">
                    <a href="/product_list">
                        <div class="category">
                            <div class="category-image">
                                <img src="img/on_sale_icon.png">
                            </div>
                            <div class="category-name">
                                ON-SALE ITEMS
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col px-0  d-flex justify-content-center">
                    <a href="/product_list">
                        <div class="category">
                            <div class="category-image">
                                <img src="img/figures_category.jpg">
                            </div>
                            <div class="category-name">
                                FIGURES FOR YOUR COLLECTION
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col px-0  d-flex justify-content-center">
                    <a href="/product_list">
                        <div class="category">
                            <div class="category-image">
                                <img src="img/manga_category.jpg">
                            </div>
                            <div class="category-name">
                                DISCOVER MANGA
                            </div>
                        </div>
                    </a>
                </div>
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
                    <li><a href="/login">Login</a></li>
                    <li><a href="/register">Register</a></li>
                    <li><a href="/shopping_cart">Shopping Cart</a></li>
                </ul>
            </div>
            <div class="col-12 col-md-2">
                <ul>
                    <li>Products</li>
                    <li><a href="/product_list">Best-Sellers</a></li>
                    <li><a href="/product_list">Manga</a></li>
                    <li><a href="/product_list">Figures</a></li>
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
