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
    <link rel="stylesheet" href="./assets/css/contactus.css">

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


    <!--Contact us-->
    <section id="contactus" class="section-padding">
        <div class="container">
            <div class="row justify-content-center align-items-center text-center">
                <!--COl-4-->
                <div class="col-lg-4 "><!-- offset-lg-1 -отдалечава текста -->

                    <img src="./assets/imgs/picture2.webp" alt="">

                    <div class="col-auto py-4" id="home">
                        <div class="social-links1">
                            <div class="social-icons text-center">
                                <a href="https://www.facebook.com/folklorenfest"><i class="ri-facebook-fill"></i></a>
                                <a href="https://www.instagram.com/folklorenfest"><i class="ri-instagram-fill"></i></a>

                            </div>
                        </div>
                    </div>
                </div>


                <!--COl-8-->
                <div class="col-lg-8 py-4">

                    <form class="row mx-auto  ">

                        <div class="row justify-content-center align-items-center">
                            <div class="col-12 ">

                                <h6 class="greentext text-center">Изпрати съобщение</h6>
                                <h1 class="bigtext text-center">СВЪРЖИ СЕ С НАС</h1>
                                <p class="lighttext text-center">За допълнителна информация може да ни намерите в
                                    социалните мрежи
                                </p>


                            </div>
                        </div>


                        <!--Вашите имена-->
                        <div class="col-sm-6 ">
                            <label for="exampleFormcontrolInput" class="form-label"></label>
                            <input type="text" id="exampleFormcontrolInput" class="form-control"
                                placeholder=" Вашите имена">
                        </div>

                        <!--email-->
                        <div class="col-sm-6 ">
                            <label for="exampleFormcontrolInput" class="form-label"></label>
                            <input type="text" id="exampleFormcontrolInput" class="form-control"
                                placeholder="Email Адрес">
                        </div>

                        <!--Тел-->
                        <div class="col-sm-6">
                            <label for="exampleFormcontrolInput" class="form-label"></label>
                            <input type="text" id="exampleFormcontrolInput" class="form-control"
                                placeholder=" Телефонен номер">
                        </div>


                        <!--Тема-->
                        <div class="col-sm-6 ">
                            <label for="exampleFormcontrolInput" class="form-label"></label>
                            <input type="text" id="exampleFormcontrolInput" class="form-control" placeholder="Тема">
                        </div>



                        <!--massage-->
                        <div class="col-12">
                            <label for="message" class=" form-label"></label>
                            <textarea name="" id="" cols="30" rows="10" class="form-control"
                                placeholder="Напишете вашето съобщение тук"></textarea>
                        </div>


                        <!--Button-->
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-brand3 mt-2">Изпрати
                                съобщението</button>

                        </div>



                    </form>
                </div>


            </div>
        </div>
    </section>


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