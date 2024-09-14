<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>


    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />


    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />


    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/boxicons.min.css">
    <link rel="stylesheet" href="./assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="./assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./assets/css/contactus.css">
    <link rel="stylesheet" href="./assets/css/galery.css">

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

    <!-- Gallery Section -->


    <h1 class="text-center mb-0 pt-3">Bootstrap 5 Lightbox Gallery</h1>
    <p class="text-center mb-4">Click an image to reveal the lightbox</p>

    <section class="photo-gallery ">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 gallery-grid">
                <div class="col">
                    <a class="gallery-item" href="https://picsum.photos/id/251/1200/800.webp">
                        <img src="https://picsum.photos/id/251/480/320.webp" class="img-fluid" alt="Lorem ipsum dolor sit amet">
                    </a>
                </div>
                <div class="col">
                    <a class="gallery-item" href="https://picsum.photos/id/678/1200/800.webp">
                        <img src="https://picsum.photos/id/678/480/320.webp" class="img-fluid" alt="Ipsum lorem dolor sit amet">
                    </a>
                </div>
                <div class="col">
                    <a class="gallery-item" href="https://picsum.photos/id/74/1200/800.webp">
                        <img src="https://picsum.photos/id/74/480/320.webp" class="img-fluid" alt="Dolor lorem ipsum sit amet">
                    </a>
                </div>
                <div class="col">
                    <a class="gallery-item" href="https://picsum.photos/id/92/1200/800.webp">
                        <img src="https://picsum.photos/id/92/480/320.webp" class="img-fluid" alt="Sit amet lorem ipsum dolor">
                    </a>
                </div>
                <div class="col">
                    <a class="gallery-item" href="https://picsum.photos/id/62/1200/800.webp">
                        <img src="https://picsum.photos/id/62/480/320.webp" class="img-fluid" alt="Aut ipsam deserunt nostrum quo">
                    </a>
                </div>
                <div class="col">
                    <a class="gallery-item" href="https://picsum.photos/id/575/1200/800.webp">
                        <img src="https://picsum.photos/id/575/480/320.webp" class="img-fluid" alt="Nulla ex nihil eligendi tempora">
                    </a>
                </div>
                <div class="col">
                    <a class="gallery-item" href="https://picsum.photos/id/110/1200/800.webp">
                        <img src="https://picsum.photos/id/110/480/320.webp" class="img-fluid" alt="Nemo perspiciatis voluptatum">
                    </a>
                </div>
                <div class="col">
                    <a class="gallery-item" href="https://picsum.photos/id/177/1200/800.webp">
                        <img src="https://picsum.photos/id/177/480/320.webp" class="img-fluid" alt="Accusantium consequuntur modi">
                    </a>
                </div>
                <div class="col">
                    <a class="gallery-item" href="https://picsum.photos/id/197/1200/800.webp">
                        <img src="https://picsum.photos/id/197/480/320.webp" class="img-fluid" alt="Dolore asperiores reprehenderit">
                    </a>
                </div>
            </div>
        </div>
    </section>

   

<!--JS-->
    <div class="modal fade lightbox-modal" id="lightbox-modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen">
            <div class="modal-content">
                <button type="button" class="btn-fullscreen-enlarge" aria-label="Enlarge fullscreen">
                    <svg class="bi">
                        <use href="#enlarge"></use>
                    </svg>
                </button>
                <button type="button" class="btn-fullscreen-exit d-none" aria-label="Exit fullscreen">
                    <svg class="bi">
                        <use href="#exit"></use>
                    </svg>
                </button>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="lightbox-content">
                        <script>
                            const html = document.querySelector('html');
                            html.setAttribute('data-bs-theme', 'dark');

                            document.addEventListener('DOMContentLoaded', () => {
                                // --- Create LightBox
                                const galleryGrid = document.querySelector(".gallery-grid");
                                const links = galleryGrid.querySelectorAll("a");
                                const imgs = galleryGrid.querySelectorAll("img");
                                const lightboxModal = document.getElementById("lightbox-modal");
                                const bsModal = new bootstrap.Modal(lightboxModal);
                                const modalBody = lightboxModal.querySelector(".lightbox-content");

                                function createCaption(caption) {
                                    return `<div class="carousel-caption d-none d-md-block">
        <h4 class="m-0">${caption}</h4>
      </div>`;
                                }

                                function createIndicators(img) {
                                    let markup = "",
                                        i, len;

                                    const countSlides = links.length;
                                    const parentCol = img.closest('.col');
                                    const curIndex = [...parentCol.parentElement.children].indexOf(parentCol);

                                    for (i = 0, len = countSlides; i < len; i++) {
                                        markup += `
        <button type="button" data-bs-target="#lightboxCarousel"
          data-bs-slide-to="${i}"
          ${i === curIndex ? 'class="active" aria-current="true"' : ''}
          aria-label="Slide ${i + 1}">
        </button>`;
                                    }

                                    return markup;
                                }

                                function createSlides(img) {
                                    let markup = "";
                                    const currentImgSrc = img.closest('.gallery-item').getAttribute("href");

                                    for (const img of imgs) {
                                        const imgSrc = img.closest('.gallery-item').getAttribute("href");
                                        const imgAlt = img.getAttribute("alt");

                                        markup += `
        <div class="carousel-item${currentImgSrc === imgSrc ? " active" : ""}">
          <img class="d-block img-fluid w-100" src=${imgSrc} alt="${imgAlt}">
          ${imgAlt ? createCaption(imgAlt) : ""}
        </div>`;
                                    }

                                    return markup;
                                }

                                function createCarousel(img) {
                                    const markup = `
      <!-- Lightbox Carousel -->
      <div id="lightboxCarousel" class="carousel slide carousel-fade" data-bs-ride="true">
        <!-- Indicators/dots -->
        <div class="carousel-indicators">
          ${createIndicators(img)}
        </div>
        <!-- Wrapper for Slides -->
        <div class="carousel-inner justify-content-center mx-auto">
          ${createSlides(img)}
        </div>
        <!-- Controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#lightboxCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#lightboxCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      `;

                                    modalBody.innerHTML = markup;
                                }

                                for (const link of links) {
                                    link.addEventListener("click", function(e) {
                                        e.preventDefault();
                                        const currentImg = link.querySelector("img");
                                        const lightboxCarousel = document.getElementById("lightboxCarousel");

                                        if (lightboxCarousel) {
                                            const parentCol = link.closest('.col');
                                            const index = [...parentCol.parentElement.children].indexOf(parentCol);

                                            const bsCarousel = new bootstrap.Carousel(lightboxCarousel);
                                            bsCarousel.to(index);
                                        } else {
                                            createCarousel(currentImg);
                                        }

                                        bsModal.show();
                                    });
                                }

                                // --- Support Fullscreen
                                const fsEnlarge = document.querySelector(".btn-fullscreen-enlarge");
                                const fsExit = document.querySelector(".btn-fullscreen-exit");

                                function enterFS() {
                                    lightboxModal.requestFullscreen().then({}).catch(err => {
                                        alert(`Error attempting to enable full-screen mode: ${err.message} (${err.name})`);
                                    });
                                    fsEnlarge.classList.toggle("d-none");
                                    fsExit.classList.toggle("d-none");
                                }

                                function exitFS() {
                                    document.exitFullscreen();
                                    fsExit.classList.toggle("d-none");
                                    fsEnlarge.classList.toggle("d-none");
                                }

                                fsEnlarge.addEventListener("click", (e) => {
                                    e.preventDefault();
                                    enterFS();
                                });

                                fsExit.addEventListener("click", (e) => {
                                    e.preventDefault();
                                    exitFS();
                                });
                            })
                        </script>
                    </div>
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



    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/app.js"></script>






</body>

</html>