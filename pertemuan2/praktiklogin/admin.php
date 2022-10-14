<?php
session_start();
// cek apakah ada username
if(!isset($_SESSION['username'])){
    header('Location:login-page.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Layouting</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>


<body>
    <div class="container" style="background-color:rgb(119, 136, 153)">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>

            <nav class="navbar navbar-expand-lg rounded navbar-dark bg-dark">
                <div class="container">
                    <a class="navbar-brand" href="#">Surakarta Secondstuff</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                    <div class="col-md-3 text-center">
                        <button type="button" class="btn btn-outline-warning me-2">Login</button>
                        <button type="button" class="btn btn-danger">Sign-up</button>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarScroll">
                        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Link
                        </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Link</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </header>
    </div>
    <div class="container">
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Surakarta Secondstuff</h1>
                    <p class="lead fw-normal text-50 mb-0">With this shop homepage </p>
                </div>
            </div>
        </header>
        <div class="container" style="background-color:rgb(255, 255, 255)">
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="image/toko.jpeg" height="500px" class="d-block w-100" alt="....">
                        <div class="container">
                            <div class="carousel-caption text-start">
                                <div class="text-center text-black">
                                    <h1>Example headline</h1>
                                    <p>Someone representative placeholder content for the second slide of the carousel</p>
                                    <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="image/toko2.jpg.crdownload" height="500px" class="d-block w-100" alt="....">
                        <div class="container">
                            <div class="carousel-caption">
                                <div class="text-center text-black">
                                    <h1>Another example headline.</h1>
                                    <p>Some representative placeholder content for the second slide of the carousel.</p>
                                    <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="image/tortonadi.jpg" height="500px" class="d-block w-100" alt="....">
                        <div class="container">
                            <div class="carousel-caption text-end">
                                <div class="text-center text-black">
                                    <h1>One more for good measure.</h1>
                                    <p>Some representative placeholder content for the third slide of this carousel.</p>
                                    <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
            </div>
            <div class="row my-1 ">
                <div class="col-xl col-6 d-flex align-items-center justify-content-center my-2" style="height: 500px;">
                    <div class="card" style="width: 18rem;">
                        <div class="badge bg-dark text-white position-absolute" style="top : 0.5rem ; right : 0.5rem">Sale</div>
                        <img src="image/jaketbulangjpeg.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Jacke Bulang UNIQL0</h5>
                            <h5 class="card-title">Rp.450.000</h5>
                            <p class="card-text">Barang second ya guys,kondisi masih bagus,teliti sebelum membeli.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl col-6 d-flex align-items-center justify-content-center my-2" style="height:  500px;">
                    <div class="card" style="width: 18rem;">
                        <div class="badge bg-dark text-white position-absolute" style="top : 0.5rem ; right : 0.5rem">Sale</div>
                        <img src="image/jaketoutdor.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Jacket Outdor T&F</h5>
                            <h5 class="card-title">Rp.360.000</h5>
                            <p class="card-text">Barang second ya guys,kondisi masih bagus,teliti sebelum membeli.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl col-6 d-flex align-items-center justify-content-center my-2" style="height: 500px; ">
                    <div class="card" style="width: 18rem;">
                        <div class="badge bg-dark text-white position-absolute" style="top : 0.5rem ; right : 0.5rem">Sale</div>
                        <img src="image/jaketvintage.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Jacket Vintage Windbreaker</h5>
                            <h5 class="card-title">Rp.135.000</h5>
                            <p class="card-text">Barang second ya guys,kondisi masih bagus,teliti sebelum membeli.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl col-6 d-flex align-items-center justify-content-center my-2" style="height: 500px; ">
                    <div class="card" style="width: 18rem;">
                        <div class="badge bg-dark text-white position-absolute" style="top : 0.5rem ; right : 0.5rem">Sale</div>
                        <img src="image/vest jaket.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Vest Jacket </h5>
                            <h5 class="card-title">Rp.95.000</h5>
                            <p class="card-text">Barang second ya guys,kondisi masih bagus,teliti sebelum membeli.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mx-1">
                <div class="col-xl col-6 d-flex align-items-center justify-content-center my-2" style="height: 500px; ">
                    <div class="card" style="width: 18rem;">
                        <div class="badge bg-dark text-white position-absolute" style="top : 0.5rem ; right : 0.5rem">Sale</div>
                        <img src="image/sepatu new balance.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Sepatu New Balance</h5>
                            <h5 class="card-title">Rp.550.000</h5>
                            <p class="card-text">Barang second ya guys,kondisi masih bagus,teliti sebelum membeli.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl col-6 d-flex align-items-center justify-content-center my-2" style="height:  500px; ">
                    <div class="card" style="width: 18rem;">
                        <div class="badge bg-dark text-white position-absolute" style="top : 0.5rem ; right : 0.5rem">Sale</div>
                        <img src="image/niqe.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Sepatu Nike</h5>
                            <h5 class="card-title">Rp.650.000</h5>
                            <p class="card-text">Barang second ya guys,kondisi masih bagus,teliti sebelum membeli.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl col-6 d-flex align-items-center justify-content-center my-2" style="height: 500px; ;">
                    <div class="card" style="width: 18rem;">
                        <div class="badge bg-dark text-white position-absolute" style="top : 0.5rem ; right : 0.5rem">Sale</div>
                        <img src="image/corduroy.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Celana Corduroy</h5>
                            <h5 class="card-title">Rp.159.000</h5>
                            <p class="card-text">Barang second ya guys,kondisi masih bagus,teliti sebelum membeli.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl col-6 d-flex align-items-center justify-content-center my-2" style="height: 500px; ">
                    <div class="card" style="width: 18rem;">
                        <div class="badge bg-dark text-white position-absolute" style="top : 0.5rem ; right : 0.5rem">Sale</div>
                        <img src="image/dickies.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Celana Dickies</h5>
                            <h5 class="card-title">Rp.90.000</h5>
                            <p class="card-text">Barang second ya guys,kondisi masih bagus,teliti sebelum membeli.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container my-5">
                <!-- Footer -->
                <footer class="text-center text-lg-start text-white" style="background-color: #45526e">
                    <!-- Grid container -->
                    <div class="container p-4 pb-0">
                        <!-- Section: Links -->
                        <section class="">
                            <!--Grid row-->
                            <div class="row">
                                <!-- Grid column -->
                                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                                    <h6 class="text-uppercase mb-4 font-weight-bold">
                                        Company name
                                    </h6>
                                    <p>
                                        Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    </p>
                                </div>
                                <!-- Grid column -->

                                <hr class="w-100 clearfix d-md-none" />

                                <!-- Grid column -->
                                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                                    <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
                                    <p>
                                        <a class="text-white">MDBootstrap</a>
                                    </p>
                                    <p>
                                        <a class="text-white">MDWordPress</a>
                                    </p>
                                    <p>
                                        <a class="text-white">BrandFlow</a>
                                    </p>
                                    <p>
                                        <a class="text-white">Bootstrap Angular</a>
                                    </p>
                                </div>
                                <!-- Grid column -->

                                <hr class="w-100 clearfix d-md-none" />

                                <!-- Grid column -->
                                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                                    <h6 class="text-uppercase mb-4 font-weight-bold">
                                        Useful links
                                    </h6>
                                    <p>
                                        <a class="text-white">Your Account</a>
                                    </p>
                                    <p>
                                        <a class="text-white">Become an Affiliate</a>
                                    </p>
                                    <p>
                                        <a class="text-white">Shipping Rates</a>
                                    </p>
                                    <p>
                                        <a class="text-white">Help</a>
                                    </p>
                                </div>

                                <!-- Grid column -->
                                <hr class="w-100 clearfix d-md-none" />

                                <!-- Grid column -->
                                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                                    <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                                    <p><i class="fas fa-home mr-3"></i> Solo, surakarta </p>
                                    <p><i class="fas fa-envelope mr-3"></i> surakartasecondstuff@gmail.com</p>
                                    <p><i class="fas fa-phone mr-3"></i> +62 857 5632 8265</p>
                                    <p><i class="fas fa-print mr-3"></i> +62 858 2247 8977</p>
                                </div>
                                <!-- Grid column -->
                            </div>
                            <!--Grid row-->
                        </section>
                        <!-- Section: Links -->

                        <hr class="my-3">

                        <!-- Section: Copyright -->
                        <section class="p-3 pt-0">
                            <div class="row d-flex align-items-center">
                                <!-- Grid column -->
                                <div class="col-md-7 col-lg-8 text-center text-md-start">
                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
                                    <!-- Facebook -->
                                    <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i class=""></i></a>

                                    <!-- Twitter -->
                                    <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i class=""></i></a>

                                    <!-- Google -->
                                    <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i class=""></i></a>

                                    <!-- Instagram -->
                                    <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i class=""></i></a>
                                </div>
                                <!-- Grid column -->
                            </div>
                        </section>
                        <!-- Section: Copyright -->
                    </div>
                    <!-- Grid container -->
                </footer>
                <!-- Footer -->
            </div>
        </div>
    </div>
</body>

</html>
