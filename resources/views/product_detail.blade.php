<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Detail</title>
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


    <div class="product-detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 order-xl-1 order-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 d-xl-block d-none">
                                <div class="preview-side-bar">
                                    <div class="small-product-preview">
                                        <img class="active" src="img/jigokuraku5.jpg" onclick="changePreviewImage(this)">
                                    </div>
                                    <div class="small-product-preview">
                                        <img src="img/jigokuraku5_preview1.jpg" onclick="changePreviewImage(this)">
                                    </div>
                                    <div class="small-product-preview">
                                        <img src="img/jigokuraku5_preview2.jpg" onclick="changePreviewImage(this)">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 d-lg-block d-flex">
                                <div class="large-product-preview">
                                    <img src="img/jigokuraku5.jpg" id="largeProductIMG">
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex d-xl-none mt-3">
                            <div class="col-2">
                                <div class="small-product-preview-hor">
                                    <img class="active" src="img/jigokuraku5.jpg" onclick="changePreviewImageHorizontal(this)">
                                </div>
                            </div>
                            <div class="col-2 ml-2">
                                <div class="small-product-preview-hor">
                                    <img src="img/jigokuraku5_preview1.jpg" onclick="changePreviewImageHorizontal(this)">
                                </div>
                            </div>
                            <div class="col-2 ml-2">
                                <div class="small-product-preview-hor">
                                    <img src="img/jigokuraku5_preview2.jpg" onclick="changePreviewImageHorizontal(this)">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 offset-lg-1 order-lg-2 order-1">
                    <div class="container my-lg-5">
                        <div class="row">
                            <div class="product-title">Hell's Paradise: Jigokuraku, Vol.5</div>
                            <div class="product-author">YUJI KAKU</div>
                        </div>
                    </div>
                    <div class="container d-lg-block d-none">
                        <div class="row mb-5">
                            <div class="col-5">
                                <div class="row">
                                    <div class="row d-flex justify-content-center">
                                        <div class="product-price">10.00€</div>
                                    </div>
                                    <div class="row d-flex justify-content-center">
                                        <div class="product-status">-IN STOCK-</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-5">
                                <span class="product-discount">-20%<br>8.00%</span>
                            </div>
                        </div>
                        <div class="row my-0 d-flex align-items-center">
                            <div class="col-3">
                                <select name="amount-select" class="amount-select" autocomplete="off">
                                    <option>0</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="col-7">
                                <button class="product-add">Add to cart</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="container d-lg-none d-block mt-5">
            <div class="row mb-5 d-flex justify-content-center">
                <div class="col-5">
                    <div class="row">
                        <div class="row d-flex justify-content-center">
                            <div class="product-price">10.00€</div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="product-status">-IN STOCK-</div>
                        </div>
                    </div>
                </div>
                <div class="col-5 d-flex justify-content-center">
                    <span class="product-discount">-20%<br>8.00%</span>
                </div>
            </div>
            <div class="row my-0 d-flex align-items-center justify-content-center">
                <div class="col-3">
                    <select name="amount-select" class="amount-select" autocomplete="off">
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="col-7 d-flex justify-content-center">
                    <button class="product-add">Add to cart</button>
                </div>
            </div>
        </div>

        <div class="container bg-white">
            <div class="row">
                <div class="product-desc">
                    Even an invincible ninja may not be able to survive Hell's Paradise!
                    Gabimaru is a ninja on death row with one chance to see his wife again—by finding the elixir of
                    immortality on a supernatural island and delivering it to the shogun. Standing in his way are his
                    fellow convicts and the fearsome beasts that roam the island, devouring or killing anyone they encounter.

                    Gabimaru and his companions are confronted with the mysteries of tao, the supernatural phenomenon
                    that turns the beings known as Lord Tensen into fearsome enemies. And when Gabimaru begins acting
                    strangely, is there any hope for his companions, or will they face certain death at his hands?
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-10 d-flex justify-content-center d-lg-block">
                    <div class="product-parameters">
                        <ul>
                            <li>Title: Hell's Paradise: Jigokuraku, Vol. 5</li>
                            <li>Pages: 216</li>
                            <li>Publisher: Viz Media</li>
                            <li>Dimensions: 146 × 209 × 21 mm</li>
                        </ul>
                    </div>
                </div>
                <div class="col-6 offset-1 d-sm-none d-md-block" style="display:none">
                    <div class="image">
                        <img src="img/Asset 1@4x.png">
                    </div>
                </div>
            </div>
        </div>



        <div class="container-fluid bg-dark">
            <div class="container product-recommendation">ň
                <div>
                    <h2>More like this</h2>
                    <hr>
                </div>
                <div class="row">
                    <div class="col">
                            <a href="product_detail.html">
                                <div class="product">
                                    <div class="product-image">
                                        <img src="img/jigokuraku2.jpg">
                                    </div>
                                </div>
                            </a>
                    </div>
                    <div class="col">
                        <a href="product_detail.html">
                            <div class="product">
                                <div class="product-image">
                                    <img src="img/jigokuraku1.jpg">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="product_detail.html">
                            <div class="product">
                                <div class="product-image">
                                    <img src="img/jigokuraku6.jpg">
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
