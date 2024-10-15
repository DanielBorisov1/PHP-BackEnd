<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap-CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />



    <!--fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--CSS-->
    <link rel="stylesheet" href="styling.css">
    <link rel="stylesheet" href="./HTML Themplate/sass/stylethemplate.css">
    <link rel="stylesheet" href="./HTML Themplate/sass/include/top-sale.css">

    <?php
    //require MySql conn
    require('functions.php');
    ?>

    <title>Mobile Shopee
    </title>
</head>

<body>



    <!--Start #header-->
    <header id="header">
        <div class="container">


            <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
                <a href="#" class="px-3 border-right border-end text-dark text-decoration-none">Login</a>
                <div class="font-rale font-size-14">

                    <a href="#" class="px-3 border-right  text-dark text-decoration-none">Whislist</a>
                </div>
            </div>
        </div>

        <!--Primary navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
            <div class="container">
                <a class="navbar-brand" href="index.php">Mobile Shopee</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav m-auto font-rubik">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">On sale</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Products <i class="fas fa-chevron-down"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Coming Soon</a>
                        </li>
                    </ul>

                    <form action="#" class="font-size-14 font-rale">
                        <a href="./cart.php" class="py-2 rounded-pill color-primary-bg">
                            <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                            <span class="font-size-14 px-3 py-2 rounded-pill bg-light text-dark "><?php echo count($product->getData('cart')); ?></span> <!--Number of rows in a cart-->
                        </a>
                    </form>
                </div>
            </div>
        </nav>
    </header><!--!start #header-->

    <!--Start #main-site-->
    <main id="main-site">