<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shopping Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset("app.css") }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet"></head>
  <body class="cart-background">
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
                            <a class="nav-link" href="shopping_cart.html">CART</a>
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
                        <a class="nav-link" href="shopping_cart.html">CART</a>
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

    <div class="container-fluid justify-content-center">
        <div class="row">
            <h2>SHOPPING CART</h2>
        </div>
    </div>
    <div class="shopping-cart">
        <div class="container">
            <div class="cart-items">
                <div class="container-fluid">
                    <div class="cart-item">
                        <div class="row d-flex ">
                            <div class="col-2 d-flex justify-content-center">
                                <div class="item-image">
                                    <img src="img/mem.jpg">
                                </div>
                            </div>
                            <div class="col-4 d-flex align-items-center">
                                <a href="products_template.html">Oshi no Ko MEMcho (Plain Clothes Ver.) Figure</a>
                            </div>
                            <div class="col-1 d-flex align-items-center">
                                <div class="row">
                                    <div class="row my-0"> Amount:</div>
                                    <div class="row my-0"><select name="amount-select" class="amount-select" autocomplete="off">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option selected>5</option>
                                    </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 d-flex align-items-center">
                                <div class="row">
                                    <div class="col-6 d-flex align-items-center">
                                        <div class="row">
                                            <div class="row my-0 px-0 mx-1"><b class="no-padding">Price:</b></div>
                                            <div class="row my-0 px-0 mx-1">26.99€</div>
                                        </div>

                                    </div>
                                    <div class="col-6 d-flex align-items-center">
                                        <div class="row">
                                            <div class="row my-0 px-0 mx-1"><b class="no-padding">Subtotal:</b></div>
                                            <div class="row my-0 px-0 mx-1">134.95€</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1 d-flex align-items-center">
                                <button class="remove">Remove</button>
                            </div>

                        </div>
                    </div>
                    <div class="cart-item">
                        <div class="row d-flex ">
                            <div class="col-2 d-flex justify-content-center">
                                <div class="item-image">
                                    <img src="img/rengoku.jpg">
                                </div>
                            </div>
                            <div class="col-4 d-flex align-items-center">
                                <div class="cart-item-title">
                                    <a href="products_template.html">Demon Slayer: Kimetsu no Yaiba B-Style Rengoku Kyojuro (Complete Edition) 1/4 Scale Figure</a>
                                </div>
                            </div>
                            <div class="col-1 d-flex align-items-center">
                                <div class="row">
                                    <div class="row my-0"> Amount:</div>
                                    <div class="row my-0"><select name="amount-select" class="amount-select" autocomplete="off">
                                        <option selected>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 d-flex align-items-center">
                                <div class="row">
                                    <div class="col-6 d-flex align-items-center">
                                        <div class="row">
                                            <div class="row my-0 px-0 mx-1"><b class="no-padding">Price:</b></div>
                                            <div class="row my-0 px-0 mx-1">3954.99€</div>
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex align-items-center">
                                        <div class="row">
                                            <div class="row my-0 px-0 mx-1"><b class="no-padding">Subtotal:</b></div>
                                            <div class="row my-0 px-0 mx-1">3954.99€</div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-1 d-flex align-items-center">
                                <button class="remove">Remove</button>
                            </div>

                        </div>
                    </div>
                    <div class="cart-item">
                        <div class="row d-flex">
                            <div class="col-2 d-flex justify-content-center">
                                <div class="item-image">
                                    <img src="img/jigokuraku2.jpg">
                                </div>
                            </div>
                            <div class="col-4 d-flex align-items-center">
                                <a href="products_template.html">Hell's Paradise: Jigokuraku, Vol. 2</a>
                            </div>
                            <div class="col-1 d-flex align-items-center">
                                <div class="row">
                                    <div class="row my-0"> Amount:</div>
                                    <div class="row my-0"><select name="amount-select" class="amount-select" autocomplete="off">
                                        <option>1</option>
                                        <option>2</option>
                                        <option selected>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 d-flex align-items-center">
                                <div class="row">
                                    <div class="col-6 d-flex align-items-center">
                                        <div class="row">
                                            <div class="row my-0 px-0 mx-1"><b class="no-padding">Price:</b></div>
                                            <div class="row my-0 px-0 mx-1">10.00€</div>
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex align-items-center">
                                        <div class="row">
                                            <div class="row my-0 px-0 mx-1"><b class="no-padding">Subtotal:</b></div>
                                            <div class="row my-0 px-0 mx-1">30.00€</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1 d-flex align-items-center">
                                <button class="remove">Remove</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row d-flex justify-content-center d-lg-block"><p class="total">Item total: 4119.94€</p></div>
            <div class="row d-flex justify-content-center d-lg-block"><button class="checkout">Checkout</button></div>
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
                        <li><a href="shopping_cart.html">Shopping Cart</a></li>
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
