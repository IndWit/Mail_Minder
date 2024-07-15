<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MailMinder - The Complain Letter Tracking System</title>
    <!-- bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- font awesome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css file -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- navbar -->
    <div class="container-fluid p-0">
        <!-- first child -->
            <nav class="navbar navbar-expand-lg" style="background-color: #f5ecd4;" >
    <div class="container-fluid">
        <img src="img\logo 2.png" alt="" class="logo">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Dashboard</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">About us</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Register</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Contact us</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa-solid fa-envelope"></i><sup>1<sup></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Total Letters</a>
            </li>
        </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-dark" type="submit">Search</button>
        </form>
        </div>
    </div>
    </nav>

        <!-- user login/logout display -->
        <nav class="navbar navbar-expand-lg" style="background-color: #ac866b;" >
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Welcome Guest</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
            </ul>
        </nav>

        <!-- welcome section -->
        <div class="bg-light">
            <h3 class="text-center">MailMinder</h3>
            <p class="text-center">Where You Can Manage, Find and Track Complain Letters</p>
        </div>

        <!-- side nav and letter section -->
        <div class="row">
            <div class="col-md-10">
                <!-- display the complain letters -->
                <div class="row">
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src="img/Land Complain Letter.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Letter ID</h5>
                                    <p class="card-text">Small description about the complain letter</p>
                                    <a href="#" class="btn" style="background-color: #ac866b;">Select Letter</a>
                                    <a href="#" class="btn" style="background-color: #f5ecd4;">View more..</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src="img/Social and Conservation.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Letter ID</h5>
                                    <p class="card-text">Small description about the complain letter</p>
                                    <a href="#" class="btn" style="background-color: #ac866b;">Select Letter</a>
                                    <a href="#" class="btn" style="background-color: #f5ecd4;">View more..</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src="img/Samurdhi Complain Letter.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Letter ID</h5>
                                    <p class="card-text">Small description about the complain letter</p>
                                    <a href="#" class="btn" style="background-color: #ac866b;">Select Letter</a>
                                    <a href="#" class="btn" style="background-color: #f5ecd4;">View more..</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src="img/Account Development Complain Letter.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Letter ID</h5>
                                    <p class="card-text">Small description about the complain lette</p>
                                    <a href="#" class="btn" style="background-color: #ac866b;">Select Letter</a>
                                    <a href="#" class="btn" style="background-color: #f5ecd4;">View more..</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src="img/Land Complain Letter.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Letter ID</h5>
                                    <p class="card-text">Small description about the complain letter</p>
                                    <a href="#" class="btn" style="background-color: #ac866b;">Select Letter</a>
                                    <a href="#" class="btn" style="background-color: #f5ecd4;">View more..</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src="img/Social and Conservation.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Letter ID</h5>
                                    <p class="card-text">Small description about the complain letter</p>
                                    <a href="#" class="btn" style="background-color: #ac866b;">Select Letter</a>
                                    <a href="#" class="btn" style="background-color: #f5ecd4;">View more..</a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-2 p-0" style="background-color: #f5ecd4;">
                <!-- side nav months-->
                <ul class="navbar-nav me-auto text-center">
                    <li class="nav-item" style="background-color: #ac866b;">
                        <a href="#" class="nav-link text-light"><h4>Months</h4></a>
                    </li>
                    <li class="nav-item" style="background-color: #f5ecd4;">
                        <a href="#" class="nav-link text-dark">January</a>
                    </li>
                    <li class="nav-item" style="background-color: #f5ecd4;">
                        <a href="#" class="nav-link text-dark">February</a>
                    </li>
                    <li class="nav-item" style="background-color: #f5ecd4;">
                        <a href="#" class="nav-link text-dark">March</a>
                    </li>
                    <li class="nav-item" style="background-color: #f5ecd4;">
                        <a href="#" class="nav-link text-dark">April</a>
                    </li>
                    <li class="nav-item" style="background-color: #f5ecd4;">
                        <a href="#" class="nav-link text-dark">May</a>
                    </li>
                    <li class="nav-item" style="background-color: #f5ecd4;">
                        <a href="#" class="nav-link text-dark">June</a>
                    </li>
                    <li class="nav-item" style="background-color: #f5ecd4;">
                        <a href="#" class="nav-link text-dark">July</a>
                    </li>
                    <li class="nav-item" style="background-color: #f5ecd4;">
                        <a href="#" class="nav-link text-dark">August</a>
                    </li>
                    <li class="nav-item" style="background-color: #f5ecd4;">
                        <a href="#" class="nav-link text-dark">September</a>
                    </li>
                    <li class="nav-item" style="background-color: #f5ecd4;">
                        <a href="#" class="nav-link text-dark">October</a>
                    </li>
                    <li class="nav-item" style="background-color: #f5ecd4;">
                        <a href="#" class="nav-link text-dark">November</a>
                    </li>
                    <li class="nav-item" style="background-color: #f5ecd4;">
                        <a href="#" class="nav-link text-dark">December</a>
                    </li>
                </ul>

                <!-- complain letter sections -->
                <ul class="navbar-nav me-auto text-center">
                    <li class="nav-item" style="background-color: #ac866b;">
                        <a href="#" class="nav-link text-light"><h4>Sections</h4></a>
                    </li>
                    <li class="nav-item" style="background-color: #f5ecd4;">
                        <a href="#" class="nav-link text-dark">Land</a>
                    </li>
                    <li class="nav-item" style="background-color: #f5ecd4;">
                        <a href="#" class="nav-link text-dark">Social and Conservation</a>
                    </li>
                    <li class="nav-item" style="background-color: #f5ecd4;">
                        <a href="#" class="nav-link text-dark">Samurdhi</a>
                    </li>
                    <li class="nav-item" style="background-color: #f5ecd4;">
                        <a href="#" class="nav-link text-dark">Account Development</a>
                    </li>
                </ul>

            </div>
            </div>

        <!-- footer -->
        <div class="p-3 text-center" style="background-color: #f5ecd4;">
            <p>All rights reserved © Designed by Onyx</p>
        </div>
    </div>



    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>