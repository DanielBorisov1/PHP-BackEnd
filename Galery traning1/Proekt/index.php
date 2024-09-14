<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>


    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />


    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />


    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/boxicons.min.css">
    <link rel="stylesheet" href="./assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="./assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">





</head>

<body>


    <!-- =======  NAVBAR =======  -->
    <nav class="navbar navbar-expand-lg bg-white shadow sticky-top py-3">
        <div class="container">
            <a class="navbar-brand" href="#">Фестивал на занаятите </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto ">

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Начало</a>

                    </li>



                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="galery.html">Галерия</a>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="program.html">Програма </a>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="contactus.html">Контакти </a>

                    </li>


                </ul>



            </div>
        </div>
    </nav>

    <!-- =======  HERO-SLIDER ======= -->
    <div id="heroSlider" class="carousel slide bg-cover" data-bs-ride="carousel">
        <div class="carousel-inner">


            <div class="carousel-item bg-cover  vh-100 active slide-1 ">
                <div class="container h-100 d-flex align-items-center justify-content-center ">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 pb-5 ">
                            <h6 class="text-dark"> Добре дошли</h6>
                            <h1 class="display-1 text-dark fw-bold">Фестивал на занаятите</h1>
                            <a href="#about" class="btn btn-brand">Разгледай</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item vh-100 bg-cover text-center  slide-2">
                <div class="container h-100 d-flex align-items-center justify-content-center ">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 pb-5">
                            <h6 class="text-white"> Добре дошли</h6>
                            <h1 class="display-1 text-white fw-bold">Фестивал на занаятите</h1>
                            <a href="#" class="btn btn-brand">Разгледай</a>
                        </div>
                    </div>
                </div>
            </div>



        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroSlider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroSlider" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- =======  ABOUT ======= -->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold"> За Фестивала</h1>
                        <div class="line"></div>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between  align-items-center"> <!--Раздаличава ги малко-->
                <div class="col-lg-6">
                    <img src="./assets/imgs/chovek1.webp" alt="">
                </div>
                <div class="col-lg-5">
                    <h1>Добре дошли!
                    </h1>
                    <div class="divider my-4"></div> <!--orange line--><!--my-margin-top&bottom-->
                    <p>Традиционните български занаяти векове наред са се предавали от баща на син, от майстор на калфа.
                        А невероятните творения, излезли от ръцете им, не спират да ни вдъхновяват, удивляват и до днес.
                        За съжаление, малцина са тези, които искат да продължат занаята на предците си.</p>
                    <p>Децата ти все по-трудно биха видели какво са правили техните баби и дядовци, все по-трудно ще
                        изоставят телефона, таблета, компютъра, за да направят нещо истински във времена на крайно
                        динамична консумация.Ние целим цели да пресъздаде магията, която е излизала от сърцето на нашите
                        предци и да я предадем на подрастващото поколение!</p>
                    <a href="galery.html" class="btn btn-brand">Разгледай</a>


                </div>
            </div>

    </section>

    <!-- ======= Reklami =======-->
    <section id="Reklami" class="">
        <div class="container">
            <div class="row   justify-content-between align-items-center  p-0 m-0">


                <div class="col-lg-2 col-sm-2  razmer">
                    <img src="/assets/imgs/pomorie.webp" alt="">
                </div>



                <div class="col-lg-2 col-sm-2 grab razmer">
                    <img src="/assets/imgs/pomorie2.webp" alt="">
                </div>


            </div>
        </div>
    </section>


    <!-- =======  Pictures ======= -->
    <div id="projects" class="bg-light "> <!--service-->
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold"> Галерия</h1>
                        <div class="line"></div>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>



        <div id="project-slider" class="owl-carousel owl-theme">
            <div class="project">
                <img src="./assets/imgs/chovek3.webp" alt="">
                <div class="overlay"></div>
                <div class="content">

                </div>
            </div>

            <div class="project">
                <img src="./assets/imgs/chovek2.webp" alt="">
                <div class="overlay"></div>
                <div class="content">

                </div>
            </div>


            <div class="project">
                <img src="./assets/imgs/chovek4.webp" alt="">
                <div class="overlay"></div>
                <div class="content">

                </div>
            </div>

            <div class="project">
                <img src="./assets/imgs/chovek5.webp" alt="">
                <div class="overlay"></div>
                <div class="content">

                </div>
            </div>

            <div class="project">
                <img src="./assets/imgs/chovek6.webp" alt="">
                <div class="overlay"></div>
                <div class="content">

                </div>
            </div>


            <div class="project">
                <img src="./assets/imgs/chovek7.webp" alt="">
                <div class="overlay"></div>
                <div class="content">

                </div>
            </div>

        </div>
    </div>

    <!-- =======  FOOTER ======= -->
    <footer class="bg-dark">
        <div class="footer-top">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-3 col-sm-6">
                        <a href="#"> <img src="./assets/imgs/picture1.webp" alt=""></a>
                        <div class="line"></div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, eius!</p>

                    </div>


                    <div class="col-lg-3 col-sm-6">
                        <h5 class="text-white mb-0">Контакти</h5>
                        <div class="line"></div>
                        <ul>

                            <li><span class="ri-map-pin-2-fill me-2 contacts"></span>Свищов</li>
                            <li><span class="ri-phone-fill me-2 contacts"></span>087 *** ****</li>
                            <li><span class="ri-mail-line me-2 contacts"></span>Свищов@abv.bg</li>

                            <div class="social-icons">
                                <a href="https://www.facebook.com/folklorenfest"><i class="ri-facebook-fill"></i></a>
                                <a href="https://www.instagram.com/folklorenfest"><i class="ri-instagram-fill"></i></a>

                            </div>
                        </ul>
                    </div>


                    <div class="col-lg-3 col-sm-6">
                        <h5 class="text-white mb-0">Галерия</h5>
                        <div class="line"></div>

                        <ul class="instafeed instagram-gallery" data-lightgallery="group">
                            <li><a class="instagram-item" data-lightgallery="item" href="#"><img
                                        src="/assets/imgs/chovek1.webp" alt="" width="72" height="72"></a>
                            </li>
                            <li><a class="instagram-item" data-lightgallery="item" href="#"><img
                                        src="/assets/imgs/chovek2.webp" alt="" width="72" height="72"></a>
                            </li>
                            <li><a class="instagram-item" data-lightgallery="item" href="#"><img
                                        src="/assets/imgs/chovek3.webp" alt="" width="72" height="72"></a>
                            </li>
                            <li><a class="instagram-item" data-lightgallery="item" href="#"><img
                                        src="/assets/imgs/chovek4.webp" alt="" width="72" height="72"></a>
                            </li>
                            <li><a class="instagram-item" data-lightgallery="item" href="#"><img
                                        src="/assets/imgs/chovek5.webp" alt="" width="72" height="72"></a>
                            </li>
                            <li><a class="instagram-item" data-lightgallery="item" href="#"><img
                                        src="/assets/imgs/chovek6.webp" alt="" width="72" height="72"></a>
                            </li>

                        </ul>

                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <h5 class="text-white mb-0">Абонирай се!</h5>
                        <div class="line"></div>
                        <p>
                            Бъдете в крак с нашите винаги предстоящи новини и актуализации. Въведете своя имейл и се
                            абонирайте за нашия бюлетин.
                        </p>
                        <input type="email" id="exampleFormcontrolInput" class="form-control"
                            placeholder="Email адрес...">
                        <a href="#" class="btn btn-brand mt-2">Абонирай се</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-auto">
                        <p class="mb-0">© 2024 egasifesta.bg. Всички права запазени.</p>
                    </div>
                    <div class="col-auto">
                        <p class="mb-0"><a href="">Дигитална агенция </a>BorisovStudios</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>










    <script src="./assets/js/jqeuery.min.js"></script>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/app.js"></script>

</body>

</html>