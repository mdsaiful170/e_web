<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deshboard page</title>

    <link rel="stylesheet" href="../css/animate.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link rel="stylesheet" href="../css/admin_style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


    <style>
        body {
            padding: 2rem;
            text-transform: capitalize;
            /* background-color:var(--white); */
            background: url(./images/home-bg.jpg) repeat !important;
            background-size: contain;
            background-position: center;
        }

        .card-box {
            background: url(./images/home-bg.jpg) repeat !important;
            background-size: contain;
            background-position: center;
            border: 2px solid black;
        }

        .btn-1 {
            background-color: orchid !important;
            font-size: 1.2rem;
            font-weight: 500;
            text-align: center;
            border-radius: 8px;
            padding: .6rem;
        }

        .btn-1:hover {
            background-color: white !important;
            color: black !important;
        }

        ul li a .arrow {
            padding-right: .2rem;
            transition: .3s linear;
        }

        ul li a:hover .arrow {
            padding-right: .7rem;
        }

        ul li a:hover {
            color: orange !important;
        }
        html{
            font-size: 68% !important;
        }
    </style>
</head>

<body>
    <?php


    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'food_db';


    $connection = mysqli_connect($hostname, $username, $password, $dbname);

    ?>

    <div class="container-fluid wow animate__zoomIn">
        <div class="row">
            <div class="col-xl-12  card-body">
                <div class="card-header text-center pb-2">
                    <h1>Admin Deshboard </h1>
                </div>
                <div class="card card-box border-1 shadow-2">
                    <div class="row d-flex align-itmes-center justify-content-center text-center py-2 pt-3">

                        <h5 class="text-dark fw-bold col-xl-3 col-md-3">Deshboard</h5>
                        <a class=" col-xl-6 col-md-5 card-link fs-5 fw-bold text-dark text-decoration-none  class"
                            href="#">Admin
                            Name:
                            MD.Saiful
                            Islam</a>
                        <a class="col-xl-2 col-md-3 card-link fs-5 fw-bold " href="./admin/logout.php"><u>Logout</u></a>

                    </div>
                    <hr class=" border-dark">
                    <div class="row px-2">
                        <div class="col-xl-3 card-body">
                            <div class="card bg-dark" style="min-height:100%">
                                <div class="card-header border-bottom-1 border-light">
                                    <h5 class="text-center text-white">update</h5>
                                </div>
                                <ul class="text-none">
                                    <li class="mt-2"><a class="text-light text-decoration-none"
                                            href="./deshboard-file/home_deshboard.php"><i
                                                class="fas fa-arrow-right arrow"></i> Home</a></li>

                                    <li class="mt-2"><a class="text-light text-decoration-none"
                                            href="./deshboard-file/about_deshboard.php"><i
                                                class="fas fa-arrow-right arrow"></i> about</a></li>
                                    <li class="mt-2"><a class="text-light text-decoration-none"
                                            href="./deshboard-file/menu_deshboard.php"><i
                                                class="fas fa-arrow-right arrow"></i> menu </a></li>
                                    <li class="mt-2"><a class="text-light text-decoration-none"
                                            href="./deshboard-file/contatimg_deshboard.php"><i
                                                class="fas fa-arrow-right arrow"></i> contact </a></li>


                                    <li class="mt-2"><a class="text-light text-decoration-none"
                                            href="./deshboard-file/message_deshboard.php"><i
                                                class="fas fa-arrow-right arrow"></i> message </a></li>


                                    <li class="mt-2"><a class="text-light text-decoration-none"
                                            href="./deshboard-file/order_deshboard.php"><i
                                                class="fas fa-arrow-right arrow"></i> order </a></li>


                                    <li class="mt-2"><a class="text-light text-decoration-none"
                                            href="./deshboard-file/user_deshboard.php"><i
                                                class="fas fa-arrow-right arrow"></i> user </a></li>
                                    <li class="mt-2"><a class="text-light text-decoration-none"
                                            href="./deshboard-file/admin_deshboard.php"><i
                                                class="fas fa-arrow-right arrow"></i> admin </a></li>



                                </ul>

                            </div>
                        </div>
                        <div class="col-xl-9 ">
                            <div class="row">

                                <div class="col-xl-6 col-lg-4 col-md-6 col-sm-3 card-body">
                                    <div class="card bg-dark">
                                        <div class="card-header border-bottom-1 border-light">
                                            <h5 class="text-white text-center">admin accounts</h5>
                                        </div>
                                        <h2 class="text-center fw-bold text-white">1</h2>
                                        <div class="py-4"><a
                                                class="text-light text-decoration-none btn-1 bg-info d-block w-50 m-auto "
                                                href="./deshboard-file/admin_deshboard.php">see now</a></div>



                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-4 col-md-6 col-sm-3 card-body">
                                    <div class="card bg-dark">
                                        <div class="card-header border-bottom-1 border-light">
                                            <h5 class="text-white text-center">user accounts</h5>
                                        </div>
                                        <h2 class="text-center fw-bold text-white">1</h2>

                                        <div class="py-4"><a
                                                class="text-light text-decoration-none btn-1 bg-info d-block w-50 m-auto "
                                                href="./deshboard-file/user_deshboard.php">see now</a>
                                        </div>



                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-4 col-md-6 col-sm-3 card-body">
                                    <div class="card bg-dark">
                                        <div class="card-header border-bottom-1 border-light">
                                            <h5 class="text-white text-center">toral order</h5>
                                        </div>
                                        <h2 class="text-center fw-bold text-white">2</h2>

                                        <div class="py-4"><a
                                                class="text-light text-decoration-none btn-1 bg-info d-block w-50 m-auto "
                                                href="./deshboard-file/order_deshboard.php">see now</a></div>



                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-4 col-md-6 col-sm-3 card-body">
                                    <div class="card bg-dark">
                                        <div class="card-header border-bottom-1 border-light">
                                            <h5 class="text-white text-center">total products</h5>
                                        </div>
                                        <h2 class="text-center fw-bold text-white">40</h2>

                                        <div class="py-4"><a
                                                class="text-light text-decoration-none btn-1 bg-info d-block w-50 m-auto "
                                                href="./deshboard-file/menu_deshboard.php">see now</a></div>



                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-4 col-md-6 col-sm-3 card-body">
                                    <div class="card bg-dark">
                                        <div class="card-header border-bottom-1 border-light">
                                            <h5 class="text-white text-center">order complate/pending</h5>
                                        </div>
                                        <h2 class="text-center fw-bold text-white">2/3</h2>

                                        <div class="py-4"><a
                                                class="text-light text-decoration-none btn-1 bg-info d-block w-50 m-auto "
                                                href="./deshboard-file/order_deshboard.php">see now</a></div>


                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-4 col-md-6 col-sm-3 card-body">
                                    <div class="card bg-dark">
                                        <div class="card-header border-bottom-1 border-light">

                                            <h5 class="text-white text-center">total message</h5>
                                        </div>
                                        <h2 class="text-center fw-bold text-white">4</h2>


                                        <div class="py-4"><a
                                                class="text-light text-decoration-none btn-1 bg-info d-block w-50 m-auto "
                                                href="./deshboard-file/message_deshboard.php">see now</a></div>


                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-4 col-md-6 col-sm-3 card-body">
                                    <div class="card bg-dark">
                                        <div class="card-header border-bottom-1 border-light">
                                            <h5 class="text-white text-center">order complate/pending</h5>
                                        </div>
                                        <h2 class="text-center fw-bold text-white">2/3</h2>

                                        <div class="py-4"><a
                                                class="text-light text-decoration-none btn-1 bg-info d-block w-50 m-auto "
                                                href="./deshboard-file/order_deshboard.php">see now</a></div>


                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-4 col-md-6 col-sm-3 card-body">
                                    <div class="card bg-dark">
                                        <div class="card-header border-bottom-1 border-light">

                                            <h5 class="text-white text-center">total message</h5>
                                        </div>
                                        <h2 class="text-center fw-bold text-white">4</h2>


                                        <div class="py-4"><a
                                                class="text-light text-decoration-none btn-1 bg-info d-block w-50 m-auto "
                                                href="./deshboard-file/message_deshboard.php">see now</a></div>


                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>











    <!-- jquery js link -->
    <script src="../js/jquery.js"></script>

    <script src="../js/admin_script.js"></script>

    <!-- jquery letter js-->
    <script src="../js/jquery.lettering.js"></script>

    <!-- jquery text js-->
    <script src="../js/jquery.textillate.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

    <script>
        new WOW().init({
            loop: true,
        });

        $(function () {
            $('.tlt').textillate({
                loop: true,
                minDisplayTime: 100,
            });
        });


    </script>

    <script>
        AOS.init({
            offset: 150,
            duration: 1000,
        });
        new WOW().init({
            loop: true,
        });

        $(function () {
            $('.tlt').textillate({
                loop: true,
                minDisplayTime: 100,
            });
        })


    </script>

</body>

</html>