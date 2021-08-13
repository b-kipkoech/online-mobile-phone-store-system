<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap css -->
    <link href="./styles/bootstrap.min.css" rel="stylesheet">

    <!-- Custom css -->
    <link rel="stylesheet" href="../styles/main.css" />

    <!-- Ionic icons -->
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

    <title>Phone Parlour</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-default">
        <div class="container-fluid">
            <a class="navbar-brand me-auto" href="#">Phone Parlour</a>
            <button class="navbar-toggler bg-info text-dark" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="login.php">Sign In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Feedbabck Message -->

    <?php if(isset($_SESSION['success'])) { ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo $_SESSION['success']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <?php unset($_SESSION['success']); }
     if(isset($_SESSION['error'])) { ?>


    <div class="alert alert-danger alert-dismissible fade show" role="alert">

        <?php echo $_SESSION['error']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <?php
     unset($_SESSION['error']); }
     ?>