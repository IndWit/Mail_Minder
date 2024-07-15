<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- font awesome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css link -->
    <link rel="stylesheet" href="..\style.css">
    <style>
        .admin_image {
    width: 100px;
    object-fit: contain;
    }

        .footer {
            position: absolute;
            bottom: 0;
        }
    </style>
</head>
<body>
    <!-- navbar -->
    <div class="container-fluid p-0">
        <!-- navbar for admin panel -->
        <nav class="navbar navbar-expand-lg" style="background-color: #f5ecd4;">
            <div class="container-fluid">
                <img src="..\img\logo 2.png" alt="" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Welcome Guest</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>

        <!-- text section -->
        <div class="bg-light">
            <h3 class="text-center p-2">Handle Complain Letters</h3>
        </div>

        <!-- admin function section -->
        <div class="row">
            <div class="col-md-12 p-1 d-flex align-items-center" style="background-color: #ac866b;">
                <div class="p-5">
                    <a href="#"><img src="..\img\adminpic.jpg" alt="" class="admin_image"></a>
                    <p class="text-light text-center">Admin Name</p>
                </div>
                    <div class="button text-center">
                        <button class="my-3"><a href="" class="nav-link my-1" style="background-color: #f5ecd4;">Insert Letters</a></button>
                        <button><a href="" class="nav-link my-1" style="background-color: #f5ecd4;">View Letters</a></button>
                        <button><a href="index.php?insert_section" class="nav-link my-1" style="background-color: #f5ecd4;">Insert Section</a></button>
                        <button><a href="" class="nav-link my-1" style="background-color: #f5ecd4;">View Sections</a></button>
                        <button><a href="index.php?insert_month" class="nav-link my-1" style="background-color: #f5ecd4;">Insert Month/Year</a></button>
                        <button><a href="" class="nav-link my-1" style="background-color: #f5ecd4;">View Month/Year</a></button>
                        <button><a href="" class="nav-link my-1" style="background-color: #f5ecd4;">All Letters</a></button>
                        <button><a href="" class="nav-link my-1" style="background-color: #f5ecd4;">All Checked Letters</a></button>
                        <button><a href="" class="nav-link my-1" style="background-color: #f5ecd4;">List Users</a></button>
                        <button><a href="" class="nav-link my-1" style="background-color: #f5ecd4;">Logout</a></button>
                    </div>
                
            </div>
        </div>

        <!-- section selection, moth/year -->
        <div class="container my-5">
            <?php 
            if(isset($_GET['insert_section'])){
                include('insert_sections.php');
            }
            if(isset($_GET['insert_month'])){
                include('insert_months.php');
            }
            ?>
        </div>

        <!-- footer -->
        <div class="p-3 text-center footer" style="background-color: #f5ecd4;">
            <p>All rights reserved © Designed by Onyx</p>
        </div>
    </div>


    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>