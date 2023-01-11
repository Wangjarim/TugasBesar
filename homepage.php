<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>GYM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link href="assets/css/landingpage.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand ms-5 title" hrsewa/sewa.phpf="#">Nino Gym</a>
            <a class="nav-link pe-5 text-white ms-auto" href="login/login.php"><i class="fa-solid fa-user pe-2"></i>Login</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">
                        GYM
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 ssspe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#hero">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#fullbody">FULL BODY WORKOUTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#upperbody">UPPER BODY WORKOUTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#lowerbody">LOWER BODY WORKOUTS</a>
                        </li>
                        <li class="nav-item">
                            <!-- <a class="nav-link pe-5" href="index.php"><i class="fa-solid fa-user pe-2"></i>Logout</a> -->
                        </li>

                    </ul>
                </div>
            </div>

        </div>

    </nav>

    <div id="hero" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/gym-hero.jpg" style="height: 600px;" class="d-block w-100" alt="..." />
                <div class="container">
                    <div class="carousel-caption text-start wow fadeInUp">
                        <h1 class="text-primary">FREE WORKOUT VIDEOS</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="bg-light" id="fullbody" style="margin-top: 45px">
        <div class="container wow fadeInUp" data-wow-delay="0.4s">
            <hr class="featurette-divider" />

            <div class="text-center mt-5 mb-5">
                <h1 class="display-2">FULL BODY WORKOUTS</h1>
            </div>
            <hr class="featurette-divider" />

            <div class="row featurette fadeInUp" data-wow-delay="0.2s">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1 fadeInUp" data-wow-delay="0.2s">
                        <i><strong>FAT BURNING (30 MINS)</strong></i>
                    </h2>
                    <p class="h5 mt-3 mb-3">#1 Squats</p>
                    <p class="h5 mb-3">#2 Mountain climbers</p>
                    <p class="h5 mb-3">#3 Kettlebell swings</p>
                    <p class="h5 mb-3">#4 Alternating Lunge</p>
                    <p class="h5 mb-3">#5 Burpees</p>
                    <p class="h5 mb-3">4 sets: 40 seconds on/ 20 seconds rest.</p>
                    <p class="h5 mb-3">1 minute rest between sets.</p>
                </div>
                <div class="col-md-5 d-flex justify-content-center align-items-center">
                    <!-- <iframe class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="560" height="315" style="height: 255px" src="https://www.youtube.com/embed/Zqk2MF71qyY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
                    <div class="card ">
                        <div class="card-body">
                            <h5 class="card-title">FAT BURNING (30 MINS)</h5>
                            <p class="card-text">Rp. 20.000,00</p>
                            <a href="sewa/sewa.php" class="btn btn-primary">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="featurette-divider mt-5" />

            <div class="row featurette mt-5 fadeInUp" data-wow-delay="0.4s">
                <div class="col-md-7 fadeInUp" data-wow-delay="0.2s" s>
                    <h2 class="featurette-heading fw-normal lh-1">
                        <i><strong>20 MINUTE FULL BODY BLAST</strong></i>
                    </h2>
                    <p class="h5 mt-3 mb-3">#1 20 MINUTE FULL BODY BLAST</p>
                    <p class="h5 mb-3">#2 Push press - 7 reps</p>
                    <p class="h5 mb-3">#3 Chest to floor plate burpee - 5 reps</p>
                    <p class="h5 mb-3">#4 Dumbbell deadlift - 7 reps</p>
                    <p class="h5 mb-3">
                        #5 Front rack reverse lunge - 4 reps (per side)
                    </p>
                    <p class="h5 mb-3">Do as many rounds as you can in 20 minutes.</p>
                </div>
                <div class="col-md-5 d-flex justify-content-center align-items-center">
                    <!-- <iframe width="560" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" style="height: 255px" height="315" src="https://www.youtube.com/embed/F4G07WYSsZQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
                        <div class="card ">
                        <div class="card-body">
                            <h5 class="card-title">20 MINUTE FULL BODY BLAST</h5>
                            <p class="card-text">Rp. 20.000,00</p>
                            <a href="sewa/sewa.php" class="btn btn-primary">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="upperbody" class="">
        <div class="container wow fadeInUp" data-wow-delay="0.2s">
            <div class="text-center mt-5 mb-5 fadeIn" data-wow-delay="0.2s">
                <h1 class="display-2">UPPER BODY WORKOUTS</h1>
                <p>
                    Building upper body strength has so many benefits, from improving
                    your posture, to helping you lift heavy items. Focusing on upper
                    body in a single session is a great way to build strength and mass
                    in your back, chest, shoulders, and arms.
                </p>
            </div>

            <hr class="featurette-divider mt-5" />

            <div class="row featurette">
                <div class="col-md-7 wow fadeInUp" data-wow-delay="0.2s">
                    <h2 class="featurette-heading fw-normal lh-1">
                        <i><strong>BEGINNERS ARMS</strong></i>
                    </h2>
                    <p class="h5 mt-3 mb-3">#1 Overhead tricep extensions</p>
                    <p class="h5 mb-3">#2 Single arm curls with dumbbells</p>
                    <p class="h5 mb-3">#3 Shoulder press with dumbbells</p>
                    <p class="h5 mb-3">#4 Push up from knees</p>
                    <p class="h5 mb-3">#5 Floor press</p>
                </div>
                <div class="col-md-5 wow fadeInUp d-flex justify-content-center align-items-center" data-wow-delay="0.2s">
                    <!-- <iframe class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" style="height: 255px" width="560" height="315" src="https://www.youtube.com/embed/7YFsaGjuu1Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
                    <div class="card ">
                        <div class="card-body">
                            <h5 class="card-title">BEGINNERS ARMS</h5>
                            <p class="card-text">Rp. 20.000,00</p>
                            <a href="sewa/sewa.php" class="btn btn-primary">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="featurette-divider mt-5" />

            <div class="row featurette fadeInUp">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1">
                        <i><strong>INTERMEDIATE ARMS</strong></i>
                    </h2>
                    <p class="h5 mt-3 mb-3">#1 Wide grip push up</p>
                    <p class="h5 mb-3">#2 Double arm curls with dumbbells</p>
                    <p class="h5 mb-3">#3 Tricep push ups</p>
                    <p class="h5 mb-3">#4 Floor press</p>
                    <p class="h5 mb-3">#5 Skull crushers</p>
                </div>
                <div class="col-md-5 wow fadeInUp d-flex justify-content-center align-items-center">
                    <!-- <iframe class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" style="height: 255px" width="560" height="315" src="https://www.youtube.com/embed/cpi4ziswNCo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
                        <div class="card ">
                        <div class="card-body">
                            <h5 class="card-title">INTERMEDIATE ARMS</h5>
                            <p class="card-text">Rp. 20.000,00</p>
                            <a href="sewa/sewa.php" class="btn btn-primary">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="featurette-divider mt-5" />

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1">
                        <i><strong>UPPER BODY STRENGTHEN AND SCULPT (25 MINS)</strong></i>
                    </h2>
                    <p class="h5 mt-3 mb-3">#1 Renegade row</p>
                    <p class="h5 mb-3">#2 Plank to shoulder press</p>
                    <p class="h5 mb-3">#3 Chest press</p>
                    <p class="h5 mb-3">#4 Bent over row</p>
                    <p class="h5 mb-3">#5 Arnold press</p>
                    <p class="h5 mb-3">12-15 reps of each exercise. 4 sets/1min rest in between sets.</p>
                </div>
                <div class="col-md-5 wow fadeInUp d-flex justify-content-center align-items-center">
                    <!-- <iframe width="500" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" style="height: 255px" height="285" src="https://www.youtube.com/embed/Kr_nGUvNCJQ" title="UPPER BODY: STRENGTHEN AND SCULPT" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                        <div class="card ">
                        <div class="card-body">
                            <h5 class="card-title">UPPER BODY STRENGTHEN AND SCULPT (25 MINS)</h5>
                            <p class="card-text">Rp. 20.000,00</p>
                            <a href="sewa/sewa.php" class="btn btn-primary">Pesan Sekarang</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="bg-light wow fadeInUp" id="lowerbody">
        <div class="container">
            <div class="text-center mt-5 mb-5">
                <h1 class="display-2">
                    LOWER BODY WORKOUTS
                </h1>
                <p>Strong legs are the foundation for a strong, healthy body. Lower body strength training can improve your circulatory health, as well as balance, posture, speed, and power.
                </p>
                <p>Strong legs are the foundation for a strong, healthy body. Lower body strength training can improve your circulatory health, as well as balance, posture, speed, and power.

                </p>
            </div>
            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1"><i><strong>BEGINNERS LEGS
                            </strong></i></h2>
                    <p class="h5 mt-3 mb-3">#1 Bodyweight squat</p>
                    <p class="h5 mb-3">#2 Reverse lunge</p>
                    <p class="h5 mb-3">#3 Glute bridge</p>
                    <p class="h5 mb-3">#4 Goblet squat</p>
                    <p class="h5 mb-3">#5 Kettlebell swings</p>
                </div>
                <div class="col-md-5 wow fadeInUp d-flex justify-content-center align-items-center">
                    <!-- <iframe class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" style="height: 255px" width="500" height="285" src="https://www.youtube.com/embed/77hYo33TBHU" title="Beginners leg workout" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                        <div class="card ">
                        <div class="card-body">
                            <h5 class="card-title">BEGINNERS LEGS</h5>
                            <p class="card-text">Rp. 20.000,00</p>
                            <a href="sewa/sewa.php" class="btn btn-primary">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="featurette-divider mt-5">

            <div class="row featurette mt-5">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1"><i><strong>INTERMEDIATE LEGS</strong></i></h2>
                    <p class="h5 mt-3 mb-3">#1 Barbell front squat</p>
                    <p class="h5 mb-3">#2 Weighted lunge</p>
                    <p class="h5 mb-3">#3 Weighted glute bridge</p>
                    <p class="h5 mb-3">#4 Stiff leg deadlift</p>
                    <p class="h5 mb-3">#5 Barbell pulse squats</p>
                </div>
                <div class="col-md-5 wow fadeInUp d-flex justify-content-center align-items-center">
                    <!-- <iframe width="500" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" style="height: 255px" height="285" src="https://www.youtube.com/embed/2jhOjsLJjKw" title="Intermediate leg workout" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                        <div class="card ">
                        <div class="card-body">
                            <h5 class="card-title">INTERMEDIATE LEGS</h5>
                            <p class="card-text">Rp. 20.000,00</p>
                            <a href="sewa/sewa.php" class="btn btn-primary">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="featurette-divider mt-5">

            <div class="row featurette mt-5">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1"><i><strong>STRONG LEAN LEGS (25 MINS)</strong></i></h2>
                    <p class="h5 mt-3 mb-3">#1 Squats</p>
                    <p class="h5 mb-3">#2 Overhead lunge</p>
                    <p class="h5 mb-3">#3 Romanian deadlift</p>
                    <p class="h5 mb-3">#4 Side squats</p>
                    <p class="h5 mb-3">#5 Goblet squats</p>
                    <p class="h5 mb-3">12-15 Reps of each exercise. 4 sets. 1 minute rest between sets.</p>
                </div>
                <div class="col-md-5 wow fadeInUp d-flex justify-content-center align-items-center">
                    <!-- <iframe class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" style="height: 255px" width="500" height="285" src="https://www.youtube.com/embed/VnncvKbnJD0" title="STRONG LEAN LEGS" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                        <div class="card ">
                        <div class="card-body">
                            <h5 class="card-title">STRONG LEAN LEGS (25 MINS)</h5>
                            <p class="card-text">Rp. 20.000,00</p>
                            <a href="sewa/sewa.php" class="btn btn-primary">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="featurette-divider mt-5">

            <div class="row featurette mt-5">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1"><i><strong>BEGINNER DUMBBELL LEG WORKOUT</strong></i></h2>
                    <p class="h5 mt-3 mb-3">#1 Tempo Squats - 12 reps</p>
                    <p class="h5 mb-3">#2 Reverse Lunge - 10 reps each side</p>
                    <p class="h5 mb-3">#3 Step Ups - 10 reps each side</p>
                    <p class="h5 mb-3">#4 Glute Bridge - 12 reps</p>
                    <p class="h5 mb-3">#5 Hamstring Step Outs - 30 secs</p>
                    <p class="h5 mb-3">Complete 3-4 sets of each action and rest for 45 seconds between sets.</p>
                </div>
                <div class="col-md-5 wow fadeInUp d-flex justify-content-center align-items-center">
                    <!-- <iframe class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" style="height: 255px" width="500" height="285" src="https://www.youtube.com/embed/EV8mrNqg6_s" title="Beginner Dumbbell Leg Workout" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                        <div class="card ">
                        <div class="card-body">
                            <h5 class="card-title">BEGINNER DUMBBELL LEG WORKOUT</h5>
                            <p class="card-text">Rp. 20.000,00</p>
                            <a href="sewa/sewa.php" class="btn btn-primary">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
</body>

</html>