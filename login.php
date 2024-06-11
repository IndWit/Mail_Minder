<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MailMinder Login</title>
    <link rel="stylesheet" href="style.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    
    <div class="container-flex navbar-bg">
        <div class="container  border-bottom d-flex justify-content-between align-items-center">
            <div class="vh-5">
                <img src="img/logo 2.png">
            </div>
            <div class="div nav-menu">
                <ul class="nav d-flex justify-content-end">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">About</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Contact</a>
                    </li>
                  </ul>
            </div>
        </div>
    </div>
    

    
    <div class="login-secstion">
        <form action = "login_check.php" method = "POST" class="login-form">
            <div class="d-flex justify-content-center">
                <div>
                    <img src="img/user.png" width="40px">
                </div>
            </div>
            
            <div class="input-section">
                <label for="userid">UserID:</label>
                <i class='bx bx-id-card'></i>
                <input type="text" id="userid" name="userid" required placeholder="UserID">
                
            </div>

            <div class="input-section">
                <label for="password">Password:</label>
                <i class='bx bxs-lock-alt'></i>
                <input type="password" id="pass" name="password" required placeholder="Password">
            </div>

            <button type="submit">Log In</button>
            <a href="#"><strong>Fogot Password?<strong></a>
        </form>
    </div>
    


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>