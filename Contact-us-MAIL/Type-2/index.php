<?php include 'process.php'; ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DanielBorisov</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/js/main.js">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <!--Fancybox-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
</head>

<body>



    <!--CONTACT-->
    <section id="contact" class="section-padding bg-white ">
        <div class="container">
            <div class="row ">
                <div class="col-12 text-center">
                    <div class="section-title">
                        <h1 class="display-4 text-white fw-semibold"> Gate in touch</h1>
                        <div class="line bg-white"></div>
                        <p class="text-white">We love to craft digital experiances for brands rather than crap and more
                            lorem ipsums and do crazy skills</p>



                    </div>

                </div>


            </div>

            <div class="row justify-content-center mb-4">
                <div class="col-lg-4 col-12">

                    <?php
                    $Msg = "";
                       if(isset($_GET['error'])){

                        $Msg = "Please Fill in the Blanks";
                        echo '<div class="alert alert-danger">'.$Msg.'</div>';
                       }

                       if(isset($_GET['success'])){

                        $Msg = "Your Message Has Been Sent";
                        echo '<div class="alert alert-success">'.$Msg.'</div>';

                       }

                    ?>


                </div>
                
            </div>


            <div class="row justify-content-center">
                <div class="col-lg-8">

                    <form action="process.php" method="POST" class="row g-3 p-lg-5 p-4 bg-white theme-shadow"><!--p-lg-5 padding-large-->


                    <!--required-->
                        <div class="col-lg-6 form-group">
                            <input type="text" class="form-control"  placeholder="Enter first name" name="FName">
                        </div>

                        <div class="col-lg-6 form-group">
                            <input type="text" class="form-control"  placeholder="Enter last name" name="LName">
                        </div>

                        <div class="col-lg-12 form-group">
                            <input type="email" class="form-control"  placeholder="Enter Email adress" name="Email">
                        </div>

                        <div class="col-lg-12 form-group">
                            <input type="text" class="form-control"  placeholder="Enter subject" name="Subject">
                        </div>

                        <div class="col-lg-12 form-group">
                            <textarea name="msg"  rows="5" class="form-control"
                                placeholder="Enter massage"></textarea>
                        </div>

                        <div class="col-lg-12 form-group d-grid"> <!--d-grid прави го на пълен размер col-12-->
                            <button type="submit" name="btn-send" class="btn btn-brand">Send Message</button>
                        </div>

                    </form>



                </div>
            </div>

        </div>
    </section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!--Fancybox-->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <!---->
    <script src="./assets/js/main.js"></script>

</body>

</html>