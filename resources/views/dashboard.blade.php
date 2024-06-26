<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
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

    <div class="container-fluid justify-content-center">
        <div class="row">
            <h2>DASHBOARD</h2>
        </div>
    </div>
    <div class="dashboard">
        <div class="dashboard-wrapper">
            <div class="container-fluid bg-dark my-5">
                <div class="row">
                    <div class="dashboard-add">
                        <form action="" method="POST" id="dashboard-add">
                            <div class="row">
                                <div class="col-3">
                                    <div class="row mb-3">
                                        <label for="dashboard-add-category" class="form-label">Category</label>
                                        <select name="category-select" class="category-select" id="dashboard-add-category" autocomplete="off">
                                            <option>Manga</option>
                                            <option>Figures</option>
                                            <option>Box Set</option>
                                            <option>Scale 1/8</option>
                                            <option>Scale 1/7</option>
                                        </select>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="dashboard-add-title" class="form-label">Product Title</label>
                                        <input type="text" class="form-control" id="dashboard-add-title" placeholder="-">
                                    </div>

                                    <div class="row mb-3">
                                        <label for="dashboard-add-author" class="form-label">Author (optional)</label>
                                        <input type="text" class="form-control" id="dashboard-add-auhtor" placeholder="-">
                                    </div>

                                    <div class="row mb-3">
                                        <label for="dashboard-add-description" class="form-label">Description</label>
                                        <textarea class="form-control" id="dashboard-add-description" form="dashboard-add" rows="5"></textarea>
                                    </div>

                                </div>
                                <div class="col-2">
                                    <div class="row mb-3">
                                        <label for="dashboard-add-series" class="form-label">Anime/Manga series</label>
                                        <select name="category-select" class="category-select" id="dashboard-add-series" autocomplete="off">
                                            <option>The Quintessential Quintuplets</option>
                                            <option>Hell's Paradise</option>
                                            <option>Nisekoi</option>
                                            <option>Oshi no ko</option>
                                            <option>Attack on Titan</option>
                                        </select>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="dashboard-add-pages" class="form-label">Pages (optional)</label>
                                        <input type="text" class="form-control" id="dashboard-add-pages" placeholder="-">

                                    </div>

                                    <div class="row mb-3">
                                        <label for="dashboard-add-publisher" class="form-label">Publisher</label>
                                        <input type="text" class="form-control" id="dashboard-add-publisher" placeholder="-">

                                    </div>

                                    <div class="row mb-3">
                                        <label for="dashboard-add-dimensions" class="form-label">Dimensions</label>
                                        <input type="text" class="form-control" id="dashboard-add-dimensions" placeholder="-">

                                    </div>

                                </div>
                                <div class="col-3">
                                    <div class="row mb-3">
                                        <label for="dashboard-add-main-picture" class="form-label">Main image</label>
                                        <input type="file" class="form-control" id="dashboard-add-main-picture">

                                    </div>

                                    <div class="row mb-3">
                                        <label for="dashboard-add-side-image-1" class="form-label">Side image 1</label>
                                        <input type="file" class="form-control" id="dashboard-add-side-image-1">

                                    </div>

                                    <div class="row mb-3">
                                        <label for="dashboard-add-side-image-2" class="form-label">Side image 2</label>
                                        <input type="file" class="form-control" id="dashboard-add-side-image-2">

                                    </div>

                                </div>

                                <div class="col-3">
                                    <div class="row mb-3">
                                        <button type="submit" formmethod="post" class="dashboard-button">ADD PRODUCT</button>

                                    </div>

                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

            <div class="container-fluid bg-dark my-5">
                <div class="row">
                    <div class="dashboard-edit">
                        <form action="" method="POST" id="dashboard-edit">
                            <div class="row">
                                <div class="col-3">
                                    <div class="row mb-3">
                                        <form action="" method="GET" id="dashboard-edit-search">
                                            <label for="dashboard-edit-product-id" class="form-label">Product-ID</label>
                                            <div class="col-7">
                                                <input type="text" class="form-control" id="dasboard-edit-product-id" placeholder="-">
                                            </div>
                                            <div class="col-3">
                                                <button type="submit" form="dashboard-edit-search" formmethod="get" class="dashboard-search"></button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="dashboard-edit-category" class="form-label">Category</label>
                                        <select name="category-select" class="category-select" id="dashboard-edit-category" autocomplete="off">
                                            <option>Manga</option>
                                            <option>Figures</option>
                                            <option>Box Set</option>
                                            <option>Scale 1/8</option>
                                            <option>Scale 1/7</option>
                                        </select>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="dashboard-edit-title" class="form-label">Product Title</label>
                                        <input type="text" class="form-control" id="dashboard-edit-title" placeholder="-">
                                    </div>

                                    <div class="row mb-3">
                                        <label for="dashboard-edit-author" class="form-label">Author (optional)</label>
                                        <input type="text" class="form-control" id="dashboard-edit-auhtor" placeholder="-">
                                    </div>

                                    <div class="row mb-3">
                                        <label for="dashboard-edit-description" class="form-label">Description</label>
                                        <textarea class="form-control" id="dashboard-edit-description" form="dashboard-edit" rows="5"></textarea>
                                    </div>

                                </div>
                                <div class="col-2">
                                    <div class="row mb-3">
                                        <label for="dashboard-edit-series" class="form-label">Anime/Manga series</label>
                                        <select name="category-select" class="category-select" id="dashboard-edit-series" autocomplete="off">
                                            <option>The Quintessential Quintuplets</option>
                                            <option>Hell's Paradise</option>
                                            <option>Nisekoi</option>
                                            <option>Oshi no ko</option>
                                            <option>Attack on Titan</option>
                                        </select>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="dashboard-edit-pages" class="form-label">Pages (optional)</label>
                                        <input type="text" class="form-control" id="dashboard-edit-pages" placeholder="-">

                                    </div>

                                    <div class="row mb-3">
                                        <label for="dashboard-edit-publisher" class="form-label">Publisher</label>
                                        <input type="text" class="form-control" id="dashboard-edit-publisher" placeholder="-">

                                    </div>

                                    <div class="row mb-3">
                                        <label for="dashboard-edit-dimensions" class="form-label">Dimensions</label>
                                        <input type="text" class="form-control" id="dashboard-edit-dimensions" placeholder="-">

                                    </div>

                                </div>
                                <div class="col-3">
                                    <div class="row mb-3">
                                        <label for="dashboard-edit-main-picture" class="form-label">Main image</label>
                                        <input type="file" class="form-control" id="dashboard-edit-main-picture">

                                    </div>

                                    <div class="row mb-3">
                                        <label for="dashboard-edit-side-image-1" class="form-label">Side image 1</label>
                                        <input type="file" class="form-control" id="dashboard-edit-side-image-1">

                                    </div>

                                    <div class="row mb-3">
                                        <label for="dashboard-edit-side-image-2" class="form-label">Side image 2</label>
                                        <input type="file" class="form-control" id="dashboard-edit-side-image-2">

                                    </div>

                                </div>

                                <div class="col-3">
                                    <div class="row mb-">
                                        <button type="submit" form="dashboard-edit" formmethod="post" class="dashboard-button">UPDATE</button>
                                        <button type="submit" form="dashboard-edit" formmethod="post" class="dashboard-button">REMOVE PRODUCT</button>
                                    </div>

                                </div>
                            </div>

                        </form>


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
