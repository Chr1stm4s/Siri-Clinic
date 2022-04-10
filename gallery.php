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

    <section class="py-4">
        <div class="container">
            <div class="row">
                <div class="col text-center py-3 pt-md-0">
                    <h1 class="btn btn-warning px-5 btn-lg fs-1 mb-0"><?=($lang == "th") ? "แกลอรี่รูป" : "Gallery"; ?></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 py-0 py-md-4 text-center">
                    <h2 class="mb-4 text-danger f-shadow head-gallery">Siri Clinic</h2>
                    <img src="./siri-clinic/siri1.jpg" alt="" class="img-thumbnail my-3">
                    <img src="./siri-clinic/siri2.jpg" alt="" class="img-thumbnail my-3">
                    <img src="./siri-clinic/siri3.jpg" alt="" class="img-thumbnail my-3">
                    <img src="./siri-clinic/siri4.jpg" alt="" class="img-thumbnail my-3">
                    <img src="./siri-clinic/siri5.jpg" alt="" class="img-thumbnail my-3">
                    <img src="./siri-clinic/siri6.jpg" alt="" class="img-thumbnail my-3">
                    <img src="./siri-clinic/siri7.jpg" alt="" class="img-thumbnail my-3">
                </div>
                <div class="col-12 col-md-6 py-4 text-center">
                    <h2 class="mb-4 text-danger f-shadow head-gallery">K FONCIRE</h2>
                    <img src="./k-foncire/K1.jpg" alt="" class="img-thumbnail my-3">
                    <img src="./k-foncire/K2.jpg" alt="" class="img-thumbnail my-3">
                    <img src="./k-foncire/K3.jpg" alt="" class="img-thumbnail my-3">
                    <img src="./k-foncire/K4.jpg" alt="" class="img-thumbnail my-3">
                    <img src="./k-foncire/K5.jpg" alt="" class="img-thumbnail my-3">
                    <img src="./k-foncire/K6.jpg" alt="" class="img-thumbnail my-3">
                    <img src="./k-foncire/K7.jpg" alt="" class="img-thumbnail my-3">
                </div>
            </div>
        </div>
    </section>

    <?php include_once "footer.php"; ?>
</body>

</html>