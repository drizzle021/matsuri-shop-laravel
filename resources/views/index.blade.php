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
<script src="../js/script.js"></script>
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
            <a href="register.blade.php"><button type="button" class="register-button">REGISTER NOW</button></a>
        </div>
    </div>
</div>

<div class="home">
    <div class="container-fluid bg-dark">
        <div class="container">
            <div class="row">
                <div class="col">
                    <a href="product_list.blade.php">
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
                <div class="col">
                    <a href="product_list.blade.php">
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
                <div class="col">
                    <a href="product_list.blade.php">
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
    <div class="container">
        <div class="row">
            <p class="section-title">PICKED FOR YOU</p>
        </div>
        <div class="product-list-product-section">
            <div class="row">
                <div class="col">
                    <div class="product">
                        <div class="product-menu">
                            <p class="product-title">Hell's Paradise: Jigokuraku, Vol. 5</p>
                            <p class="product-author">YUJI KAKU</p>
                            <div class="wrapper">
                                <div class="product-desc">Even an invincible ninja may not be able to survive Hell's Paradise!
                                    Gabimaru is a ninja on death row with one chance to see his wife again—by finding the elixir of
                                    immortality on a supernatural island and delivering it to the shogun. Standing in his way are his
                                    fellow convicts and the fearsome beasts that roam the island, devouring or killing anyone they
                                    encounter.

                                    Gabimaru and his companions are confronted with the mysteries of tao, the supernatural phenomenon
                                    that turns the beings known as Lord Tensen into fearsome enemies. And when Gabimaru begins acting
                                    strangely, is there any hope for his companions, or will they face certain death at his hands?
                                </div>
                            </div>
                            <a href="product_detail.blade.php" class="detail">Detail</a>
                            <!-- <button class="to-cart">Add to cart</button> -->

                        </div>
                        <div class="product-image">
                            <img src="img/jigokuraku5.jpg">
                        </div>
                        <span class="overlay-cost">10.00€</span>
                        <span class="overlay-discount">-20%<br>8.00€</span>


                    </div>

                </div>
                <div class="col">
                    <div class="product">
                        <div class="product-menu">
                            <p class="product-title">The Quintessential Quintuplets 1</p>
                            <p class="product-author">NEGI HARUBA</p>
                            <div class="wrapper">
                                <div class="product-desc">
                                    A high school romantic comedy with five times the cute girls! A high school boy must work part-time
                                    to help five sisters study so they can graduate, but the only thing these quintuplets have in common
                                    is that they all hate studying!

                                    FIVE TIMES THE TROUBLE

                                    Five girls who want to do anything but study, and their tutor: A high school boy who's got book
                                    smarts and not much else. Futaro Uesugi took the tutoring gig because he was desperate for cash, but
                                    when his students--the five beautiful daughters of a wealthy businessman--find five times the
                                    excuses to slack off, what can he do?! At this rate, the sisters won't graduate, so if he wants to
                                    get paid, Futaro must think of a plan to suit each of them... Which feels hopeless when five out of
                                    five of them think he's a loser!
                                </div>
                            </div>
                            <a href="product_detail.blade.php" class="detail">Detail</a>
                            <!-- <button class="to-cart">Add to cart</button> -->

                        </div>
                        <div class="product-image">
                            <img src="img/quints.jpg">
                        </div>
                        <span class="overlay-cost">10.84€</span>

                    </div>
                </div>
                <div class="col">
                    <div class="product">
                        <div class="product-menu">
                            <p class="product-title">Demon Slayer: Kimetsu no Yaiba B-Style Rengoku Kyojuro (Complete Edition) 1/4 Scale Figure</p>
                            <p class="product-author"></p>
                            <div class="wrapper">
                                <div class="product-desc">
                                    "Set your heart ablaze and go beyond your limits! I am Kyojuro Rengoku, the Flame Hashira!!"

                                    From the anime series "Demon Slayer: Kimetsu no Yaiba" comes a 1/4 scale figure of Kyojuro Rengoku, the Flame Hashira! Kyojuro has been captured in figure form in the instant before he unleashes his "Flame Breathing Esoteric Art Ninth Form: Rengoku" attack.

                                    Kyojuro's wounds on his abdomen and face sustained while locked in a life or death struggle, his combat-worn haori coat and Demon Slayer Corps uniform have been faithfully preserved in figure form. Featuring a stunning amount of detail due to the impressive 1/4 scale size, this figure is a must-see for fans of the series!

                                    The Complete Edition also features an enormous flame effect part over 27.5 inches in height on a special base, making for an incredible recreation of a memorable scene.
                                </div>
                            </div>
                            <a href="product_detail.blade.php" class="detail">Detail</a>
                            <!-- <button class="to-cart">Add to cart</button> -->

                        </div>
                        <div class="product-image">
                            <img src="img/rengoku.jpg">
                        </div>
                        <span class="overlay-cost">26.99€</span>
                        <span class="overlay-discount">-10%<br>24,29€</span>



                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="product">
                        <div class="product-menu">
                            <p class="product-title">Hell's Paradise: Jigokuraku, Vol. 1</p>
                            <p class="product-author">YUJI KAKU</p>
                            <div class="wrapper">
                                <div class="product-desc">Even an invincible ninja may not be able to survive Hell's Paradise!
                                    Gabimaru is a ninja on death row with one chance to see his wife again—by finding the elixir of
                                    immortality on a supernatural island and delivering it to the shogun. Standing in his way are his
                                    fellow convicts and the fearsome beasts that roam the island, devouring or killing anyone they
                                    encounter.

                                    Gabimaru and his companions are confronted with the mysteries of tao, the supernatural phenomenon
                                    that turns the beings known as Lord Tensen into fearsome enemies. And when Gabimaru begins acting
                                    strangely, is there any hope for his companions, or will they face certain death at his hands?
                                </div>
                            </div>
                            <a href="product_detail.blade.php" class="detail">Detail</a>
                            <!-- <button class="to-cart">Add to cart</button> -->

                        </div>
                        <div class="product-image">
                            <img src="img/jigokuraku1.jpg">
                        </div>
                        <span class="overlay-cost">10.00€</span>


                    </div>

                </div>
                <div class="col">
                    <div class="product">
                        <div class="product-menu">
                            <p class="product-title">The Quintessential Quintuplets 1</p>
                            <p class="product-author">NEGI HARUBA</p>
                            <div class="wrapper">
                                <div class="product-desc">
                                    A high school romantic comedy with five times the cute girls! A high school boy must work part-time
                                    to help five sisters study so they can graduate, but the only thing these quintuplets have in common
                                    is that they all hate studying!

                                    FIVE TIMES THE TROUBLE

                                    Five girls who want to do anything but study, and their tutor: A high school boy who's got book
                                    smarts and not much else. Futaro Uesugi took the tutoring gig because he was desperate for cash, but
                                    when his students--the five beautiful daughters of a wealthy businessman--find five times the
                                    excuses to slack off, what can he do?! At this rate, the sisters won't graduate, so if he wants to
                                    get paid, Futaro must think of a plan to suit each of them... Which feels hopeless when five out of
                                    five of them think he's a loser!
                                </div>
                            </div>
                            <a href="product_detail.blade.php" class="detail">Detail</a>
                            <!-- <button class="to-cart">Add to cart</button> -->

                        </div>
                        <div class="product-image">
                            <img src="img/quints.jpg">
                        </div>
                        <span class="overlay-cost">10.84€</span>

                    </div>
                </div>
                <div class="col">
                    <div class="product">
                        <div class="product-menu">
                            <p class="product-title">Oshi no Ko MEMcho (Plain Clothes Ver.) Figure</p>
                            <p class="product-author"></p>
                            <div class="wrapper">
                                <div class="product-desc">
                                    Banpresto is proud to introduce a new figure from the smash hit anime series Oshi no Ko: the pop
                                    star MEMcho! Dressed in plain clothes, she's ready to start her day
                                </div>
                            </div>
                            <a href="product_detail.blade.php" class="detail">Detail</a>
                            <!-- <button class="to-cart">Add to cart</button> -->

                        </div>
                        <div class="product-image">
                            <img src="img/mem.jpg">
                        </div>
                        <span class="overlay-cost">26.99€</span>
                        <span class="overlay-discount">-10%<br>24,29€</span>



                    </div>

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
