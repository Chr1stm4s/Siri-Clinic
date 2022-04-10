<?php
    session_start();

    $lang = ($_SESSION['lang']) ? $_SESSION['lang'] : "th";
?>

<section id="headerTop">
    <div class="container">
        <div class="row">
            <div class="col 12 col-md-4">
                <img src="./logo.png" alt="" class="header-logo">
            </div>
            <div class="col-12 col-md text-center text-md-end my-auto">
                <div class="row">
                    <div class="col col-md-auto ms-auto text-center">
                        <a href="tel:02-275-8891" class="text-decoration-none text-gold fs-1"><i class="fa-solid fa-phone pe-3"></i>02-275-8891</a>
                        <ul class="list-unstyled d-flex mt-2">
                            <li> <a href="https://www.facebook.com/Siri-Clinic-720382801356905" target="_blank"><img src="./facebook.png" alt="" class="social-icon bg-white rounded"></a> </li>
                            <li> <a href="https://www.youtube.com/channel/UC_nkNoMyujqyjVp-FePi6Lw" target="_blank"><img src="./youtube.png" alt="" class="social-icon rounded"></a> </li>
                            <li> <a href="https://line.me/ti/p/~siriclinic" target="_blank"><img src="./line.png" alt="" class="social-icon rounded"></a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<header class="sticky-top bg-gold">
    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg">
                    <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-solid fa-bars text-white border border-white rounded py-1 px-2"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav d-flex w-100">
                            <li class="nav-item mx-2 rounded active">
                                <a class="nav-link text-center fs-4" aria-current="page" href="./"><?=($lang == "th") ? "หน้าแรก" : "Home"; ?></a>
                            </li>
                            <li class="nav-item mx-2 rounded">
                                <a class="nav-link text-center fs-4" href="./promotions.php"><?=($lang == "th") ? "โปรโมชั่น" : "Promotions"; ?></a>
                            </li>
                            <li class="nav-item mx-2 rounded">
                                <a class="nav-link text-center fs-4" href="./gallery.php"><?=($lang == "th") ? "แกลอรี่รูป" : "Gallery"; ?></a>
                            </li>
                            <li class="nav-item mx-2 rounded">
                                <a class="nav-link text-center fs-4" href="./contact.php"><?=($lang == "th") ? "ติดต่อเรา" : "Contact"; ?></a>
                            </li>
                            <li class="nav-item mx-2 text-center my-auto">
                                <a href="#EN" class="text-decoration-none language" data-lang="en">
                                    <img src="./us.png" class="img-flag" alt="">
                                </a>
                                <a href="#TH" class="text-decoration-none language" data-lang="th">
                                    <img src="./th.png" class="img-flag" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>