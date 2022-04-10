<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style.css">
    <title>Siri Clinic</title>
</head>

<body>

    <?php include_once "./header.php"; ?>

    <div id="carouselIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>
            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="8" aria-label="Slide 9"></button>
            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="9" aria-label="Slide 10"></button>
            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="10" aria-label="Slide 11"></button>
            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="11" aria-label="Slide 12"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./home-slide/Sl1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./home-slide/Sl2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./home-slide/Sl3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./home-slide/Sl4.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./home-slide/Sl5.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./home-slide/Sl6.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./home-slide/Sl7.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./home-slide/Sl8.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./home-slide/Sl9.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./home-slide/Sl10.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./home-slide/Sl11.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./home-slide/Sl12.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-8 col-md-6 py-3 py-md-0 my-auto mx-auto">
                    <div class="row">
                        <div class="col">
                            <img src="./logo.png" alt="" class="w-100 d-none d-md-block">
                            <img src="./siri-logo.png" alt="" class="w-100 d-block d-md-none">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 mx-auto py-3 py-md-0 my-auto">
                    <div class="row">
                        <div class="col-8 col-md mx-auto">
                            <img src="./k-foncire.png" alt="" class="w-100 d-none d-md-block">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 py-3 py-md-0 my-auto">
                    <div class="row">
                        <div class="col-auto mx-auto">
                            <div class="row mb-3">
                                <div class="col-auto">
                                    <i class="fa-brands fa-facebook-square fa-3x text-danger"></i>
                                </div>
                                <div class="col my-auto">
                                    <a href="https://www.facebook.com/Siri-Clinic-720382801356905" target="_blank" class="text-decoration-none fs-1 text-gold">Siri Clinic</a>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-auto">
                                    <i class="fa-brands fa-facebook-square fa-3x text-danger"></i>
                                </div>
                                <div class="col my-auto">
                                    <a href="https://www.facebook.com/Siri-Care-532227303612220" target="_blank" class="text-decoration-none fs-1 text-gold">Siri Care 1</a>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-auto">
                                    <i class="fa-brands fa-facebook-square fa-3x text-danger"></i>
                                </div>
                                <div class="col my-auto">
                                    <a href="https://www.facebook.com/Siri-Care2-143672439702016/" target="_blank" class="text-decoration-none fs-1 text-gold">Siri Care 2</a>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-auto">
                                    <i class="fa-brands fa-facebook-square fa-3x text-danger"></i>
                                </div>
                                <div class="col my-auto">
                                    <a href="https://www.facebook.com/Siri-Care3-776929109148064" target="_blank" class="text-decoration-none fs-1 text-gold">Siri Care 3</a>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-auto">
                                    <img src="./youtube.png" alt="" class="body-social-icon rounded">
                                </div>
                                <div class="col my-auto">
                                    <a href="https://www.youtube.com/channel/UC_nkNoMyujqyjVp-FePi6Lw" target="_blank" class="text-decoration-none fs-1 text-gold">YouTube</a>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-auto">
                                    <img src="./line.png" alt="" class="body-social-icon rounded">
                                </div>
                                <div class="col my-auto">
                                    <a href="https://line.me/ti/p/~siriclinic" target="_blank" class="text-decoration-none fs-1 text-gold">siriclinic</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5 py-3 py-md-0 mx-auto my-auto">
                    <div class="row my-4 d-block d-md-none">
                        <div class="col-8 col-md mx-auto">
                            <img src="./k-foncire.png" alt="" class="w-100">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10 mx-auto">
                            <img src="./money.png" alt="" class="w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-5 mx-auto my-auto">
                    <img src="./map1.jpg" alt="" class="w-100 img-thumbnail">
                </div>
                <div class="col-12 col-md-5 mx-auto my-4 my-md-auto">
                    <img src="./map2.jpg" alt="" class="w-100 img-thumbnail">
                </div>
            </div>
        </div>
    </section>

    <?php include_once "footer.php"; ?>
</body>

</html>