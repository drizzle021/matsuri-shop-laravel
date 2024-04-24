<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product list</title>
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
                    <a class="nav-link" href="product_list.html">PRODUCTS</a>
                </li>
            </ul>

            <div class="flex-grow-1"></div>

            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto d-lg-none">
                    <li class="nav-item">
                        <a class="nav-link" href="product_list.html">PRODUCTS</a>
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
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.html">DASHBOARD</a>
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
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.html">DASHBOARD</a>
                </li>
            </ul>
        </div>
    </nav>



</header>

<!-- Add Product Modal -->
<div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="addProductModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addProductModalLabel">Add Product</h5>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="add-product-category" class="form-label">Category:</label>
                        <select name="category-select" class="category-select" id="add-product-category" autocomplete="off">
                            <option>Manga</option>
                            <option>Figures</option>
                            <option>Box Set</option>
                            <option>Scale 1/8</option>
                            <option>Scale 1/7</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="add-product-series" class="form-label">Anime/Manga series:</label>
                        <select name="series-select" class="category-select" id="add-product-series" autocomplete="off">
                            <option>The Quintessential Quintuplets</option>
                            <option>Hell's Paradise</option>
                            <option>Nisekoi</option>
                            <option>Oshi no ko</option>
                            <option>Attack on Titan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="add-product-product-title" class="form-label">Product Title:</label>
                        <input type="text" class="form-control" id="add-product-product-title">
                    </div>
                    <div class="form-group">
                        <label for="add-product-author" class="form-label">Author (optional):</label>
                        <input type="text" class="form-control" id="add-product-author">
                    </div>
                    <div class="form-group">
                        <label for="add-product-pages" class="form-label">Pages (optional):</label>
                        <input type="number" class="form-control" id="add-product-pages" min="0" value="0">
                    </div>
                    <div class="form-group">
                        <label for="add-product-publisher" class="form-label">Publisher:</label>
                        <input type="text" class="form-control" id="add-product-publisher">
                    </div>
                    <div class="form-group">
                        <label for="add-product-dimensions" class="form-label">Dimensions:</label>
                        <input type="text" class="form-control" id="add-product-dimensions">
                    </div>
                    <div class="form-group">
                        <label for="add-product-price" class="form-label">Price:</label>
                        <input type="number" class="form-control" id="add-product-price" min="1" max="5000" step="0.01" value="20" >
                    </div>
                    <div class="form-group">
                        <label for="add-product-discount" class="form-label">Discount:</label>
                        <input type="number" class="form-control" id="add-product-discount" min="0" max="1" step="0.01" value="0">
                    </div>
                    <div class="form-group">
                        <label for="add-product-description" class="form-label">Description:</label>
                        <textarea class="form-control" id="add-product-description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="add-product-main-picture" class="form-label">Main image:</label>
                        <input type="file" class="form-control" id="add-product-main-picture">
                    </div>
                    <div class="form-group">
                        <label for="add-product-side-picture1" class="form-label">Side image 1:</label>
                        <input type="file" class="form-control" id="add-product-side-picture1">
                    </div>
                    <div class="form-group">
                        <label for="add-product-side-picture2" class="form-label">Side image 2:</label>
                        <input type="file" class="form-control" id="add-product-side-picture2">
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Add</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>


<!-- Edit Product Modal -->
<div class="modal fade" id="editProductModal" tabindex="-1" role="dialog" aria-labelledby="editProductModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProductModalLabel">Edit Product</h5>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="edit-product-category" class="form-label">Category:</label>
                        <select name="category-select" class="category-select" id="edit-product-category" autocomplete="off">
                            <option>Manga</option>
                            <option>Figures</option>
                            <option>Box Set</option>
                            <option>Scale 1/8</option>
                            <option>Scale 1/7</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="edit-product-series" class="form-label">Anime/Manga series:</label>
                        <select name="series-select" class="category-select" id="edit-product-series" autocomplete="off">
                            <option>The Quintessential Quintuplets</option>
                            <option>Hell's Paradise</option>
                            <option>Nisekoi</option>
                            <option>Oshi no ko</option>
                            <option>Attack on Titan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="edit-product-product-title" class="form-label">Product Title:</label>
                        <input type="text" class="form-control" id="edit-product-product-title">
                    </div>
                    <div class="form-group">
                        <label for="edit-product-author" class="form-label">Author (optional):</label>
                        <input type="text" class="form-control" id="edit-product-author">
                    </div>
                    <div class="form-group">
                        <label for="edit-product-pages" class="form-label">Pages (optional):</label>
                        <input type="number" class="form-control" id="edit-product-pages" min="0" value="0">
                    </div>
                    <div class="form-group">
                        <label for="edit-product-publisher" class="form-label">Publisher:</label>
                        <input type="text" class="form-control" id="edit-product-publisher">
                    </div>
                    <div class="form-group">
                        <label for="edit-product-dimensions" class="form-label">Dimensions:</label>
                        <input type="text" class="form-control" id="edit-product-dimensions">
                    </div>
                    <div class="form-group">
                        <label for="edit-product-price" class="form-label">Price:</label>
                        <input type="number" class="form-control" id="edit-product-price" min="1" max="5000" step="0.01" value="20" >
                    </div>
                    <div class="form-group">
                        <label for="edit-product-discount" class="form-label">Discount:</label>
                        <input type="number" class="form-control" id="edit-product-discount" min="0" max="1" step="0.01" value="0">
                    </div>
                    <div class="form-group">
                        <label for="edit-product-description" class="form-label">Description:</label>
                        <textarea class="form-control" id="edit-product-description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="edit-product-main-picture" class="form-label">Main image:</label>
                        <input type="file" class="form-control" id="edit-product-main-picture">
                    </div>
                    <div class="form-group">
                        <label for="edit-product-side-picture1" class="form-label">Side image 1:</label>
                        <input type="file" class="form-control" id="edit-product-side-picture1">
                    </div>
                    <div class="form-group">
                        <label for="edit-product-side-picture2" class="form-label">Side image 2:</label>
                        <input type="file" class="form-control" id="edit-product-side-picture2">
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Update</button>
                <button type="button" class="btn btn-primary">Delete</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>


<div class="product-list-background">
    <div class="product-list">
        <div class="container">
            <div class="col-10 col-md-10 col-lg-3">
                <div class="row my-2">
                    <div class="d-flex justify-content-center col px-0 px-md-3 px-lg-4">
                        <button class="add-product-button" type="button" data-toggle="modal" data-target="#addProductModal">ADD PRODUCT</button>
                    </div>
                </div>
            </div>

        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="d-flex col-10 col-md-10 col-lg-3 justify-content-center px-0 px-md-3 px-lg-4 mx-lg-1">
                    <div class="container-fluid bg-dark product-list-filter-section p-4">
                        <form method="GET" id="filter">
                            <div class="row pb-5 mb-4">
                                <label class="form-label" for="filter-range-price-min">Search: </label>
                                <div class="col-10 mx-0 px-2">
                                    <input class="form-control" type="text" name="search">
                                </div>
                                <div class="col-1 mx-0 px-0">
                                    <button class="product-list-search" form="product-list-search"></button>
                                </div>

                            </div>

                            <div class="row pb-3 justify-content-center">
                                <button class="product-list-filter-button">FILTER</button>
                            </div>
                            <div class="row justify-content-center pb-3">
                                <label class="form-label" for="filter-range-price-min">Price from (€):</label>
                                <input type="range" id="filter-range-price-min" name="filter-range-price-min" value="0" min="0" max="300">
                                <input type="number" id="filter-min-text" value="0" min="0" max="300" step="5" class="form-control" onchange="changeSliderValue(this.value, 'filter-range-price-min')">
                            </div>
                            <div class="row justify-content-center pb-5">
                                <label class="form-label" for="filter-range-price-max">Price to (€):</label>
                                <input type="range" id="filter-range-price-max" name="filter-range-price-max" value="300" min="0" max="300">
                                <input type="number" id="filter-max-text" value="300" min="0" max="300"  step="5" class="form-control" onchange="changeSliderValue(this.value, 'filter-range-price-max')">
                            </div>
                            <div class="row justify-content-center pb-4">
                                <label for="product-list-order-by" class="form-label">Order By</label>
                                <select name="product-list-order-by" class="category-select" id="product-list-order-by" autocomplete="off">
                                    <option value="az_asc">A-Z: Ascending</option>
                                    <option value="az_desc">A-Z: Descending</option>
                                    <option value="pri_hi_lo">Price: High - Low</option>
                                    <option value="pri_lo_hi">Price: Low - High</option>
                                    <option value="disc_lo_hi">Discount: Low - High</option>
                                </select>
                            </div>
                            <div class="row pb-4">
                                <div class="col">
                                    <button class="navbar-toggler py-4" type="button" data-toggle="collapse" data-target="#category" onclick="switchCollapseElement('category-collapse')">
                                        CATEGORY
                                    </button>
                                </div>

                                <div class="col collapse-element py-3" id="category-collapse">+</div>

                                <div class="collapse navbar-collapse" id="category">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item">
                                            <input type="checkbox" value="manga" name="category">
                                            <label>Manga</label>
                                        </li>
                                        <li class="nav-item">
                                            <input type="checkbox" value="figures" name="category">
                                            <label>Figures</label>

                                        </li>
                                        <li class="nav-item">
                                            <input type="checkbox" value="box-set" name="category">
                                            <label>Box set</label>
                                        </li>
                                        <li class="nav-item">
                                            <input type="checkbox" value="scale1_7" name="category">
                                            <label>Scale 1/7</label>
                                        </li>
                                        <li class="nav-item">
                                            <input type="checkbox" value="scale1_8" name="category">
                                            <label>Scale 1/8</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row pb-4">
                                <div class="col">
                                    <button class="navbar-toggler py-4" type="button" data-toggle="collapse" data-target="#series" onclick="switchCollapseElement('series-collapse')">
                                        SERIES
                                    </button>
                                </div>
                                <div class="col collapse-element py-3" id="series-collapse">+</div>


                                <div class="collapse navbar-collapse " id="series">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item">
                                            <input type="checkbox" name="series" value="quint">
                                            <label>The Quintessential Quintuplets</label>
                                        </li>
                                        <li class="nav-item">
                                            <input type="checkbox" name="series" value="hell">
                                            <label>Hell's Paradise</label>
                                        </li>
                                        <li class="nav-item">
                                            <input type="checkbox" name="series" value="nisekoi">
                                            <label>Nisekoi</label>
                                        </li>
                                        <li class="nav-item">
                                            <input type="checkbox" name="series" value="oshi">
                                            <label>Oshi no ko</label>

                                        </li>
                                        <li class="nav-item">
                                            <input type="checkbox" name="series" value="aot">
                                            <label>Attack on Titan</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-md-8 justify-content-center px-0">
                    <div class="container justify-content-center px-0">
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
                                            <div class="row">
                                                <div class="col-5">
                                                    <a href="product_detail.html" class="detail">Detail</a>
                                                </div>
                                                <div class="col-5">
                                                    <button class="edit-product-button" type="button" data-toggle="modal" data-target="#editProductModal">Edit</button>
                                                </div>

                                            </div>

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
                                            <a href="product_detail.html" class="detail">Detail</a>
                                            <!-- <button class="to-cart">Add to cart</button> -->

                                        </div>
                                        <div class="product-image">
                                            <img src="img/quints.jpg">
                                        </div>
                                        <span class="overlay-cost">10.84€</span>

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
                                            <a href="product_detail.html" class="detail">Detail</a>
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
                                            <p class="product-title">Oshi no Ko MEMcho (Plain Clothes Ver.) Figure</p>
                                            <p class="product-author"></p>
                                            <div class="wrapper">
                                                <div class="product-desc">
                                                    Banpresto is proud to introduce a new figure from the smash hit anime series Oshi no Ko: the pop
                                                    star MEMcho! Dressed in plain clothes, she's ready to start her day
                                                </div>
                                            </div>
                                            <a href="product_detail.html" class="detail">Detail</a>
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
                                            <a href="product_detail.html" class="detail">Detail</a>
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
                                            <p class="product-title">Oshi no Ko MEMcho (Plain Clothes Ver.) Figure</p>
                                            <p class="product-author"></p>
                                            <div class="wrapper">
                                                <div class="product-desc">
                                                    Banpresto is proud to introduce a new figure from the smash hit anime series Oshi no Ko: the pop
                                                    star MEMcho! Dressed in plain clothes, she's ready to start her day
                                                </div>
                                            </div>
                                            <a href="product_detail.html" class="detail">Detail</a>
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
                                            <a href="product_detail.html" class="detail">Detail</a>
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
                                            <p class="product-title">Oshi no Ko MEMcho (Plain Clothes Ver.) Figure</p>
                                            <p class="product-author"></p>
                                            <div class="wrapper">
                                                <div class="product-desc">
                                                    Banpresto is proud to introduce a new figure from the smash hit anime series Oshi no Ko: the pop
                                                    star MEMcho! Dressed in plain clothes, she's ready to start her day
                                                </div>
                                            </div>
                                            <a href="product_detail.html" class="detail">Detail</a>
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
                                            <a href="product_detail.html" class="detail">Detail</a>
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
                                            <p class="product-title">Oshi no Ko MEMcho (Plain Clothes Ver.) Figure</p>
                                            <p class="product-author"></p>
                                            <div class="wrapper">
                                                <div class="product-desc">
                                                    Banpresto is proud to introduce a new figure from the smash hit anime series Oshi no Ko: the pop
                                                    star MEMcho! Dressed in plain clothes, she's ready to start her day
                                                </div>
                                            </div>
                                            <a href="product_detail.html" class="detail">Detail</a>
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
            </div>
        </div>
    </div>
</div>

<!--https://getbootstrap.com/docs/5.0/components/pagination/-->
<div class="container">
    <div class="row d-flex justify-content-center">
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item mx-4">...</li>
            <li class="page-item"><a class="page-link" href="#">8</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </div>
</div>



<footer>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-2">
                <ul>
                    <li>ACCOUNT</li>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="register.html">Register</a></li>
                    <li><a href="shopping_cart.html">Shopping Cart</a></li>
                </ul>
            </div>
            <div class="col-12 col-md-2">
                <ul>
                    <li>Products</li>
                    <li><a href="product_list.html">Best-Sellers</a></li>
                    <li><a href="product_list.html">Manga</a></li>
                    <li><a href="product_list.html">Figures</a></li>
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


<script src="script.js"></script>
</body>
</html>
