


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('css/adopt.css')); ?>">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Helping Hands</title>
</head>
<body style="overflow: hidden;">

    <!-- Navbar Section Start -->
    <nav class="navbar navbar-expand-sm fixed-top">
        <a href="#" class="navbar-brand"><span>H</span>elping Hands</a>
        <div>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="<?php echo e(url('/')); ?>" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="<?php echo e(url('/adopt')); ?>" class="nav-link">Buy</a></li>
                <li class="nav-item"><a href="<?php echo e(url('/hire')); ?>" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="<?php echo e(url('/login')); ?>" class="nav-link">Login</a></li>
                <li class="nav-item"><a href="<?php echo e(url('/apply')); ?>" class="nav-link">Apply</a></li>
            </ul>
        </div>
    </nav>
    <!-- Navbar Section End -->

    <section>
        <div class="header">
            <div>
                <div class="img"></div>
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="<?php echo e(asset('images/home.webp')); ?>" class="d-block w-100" alt="..." style="height: 100%;">
                        </div>
                    </div>
                </div>
                <div class="Overlay"></div>
            </div>
            <div class="Content1">
                <h1>Your Plumbing<br>Professionals</h1>
                <br>
                <p>A house plumbing system<br>designed to solve you plumbing problems!</p>
                <a href="<?php echo e(url('/adopt')); ?>">
                    <button class="btn1">EXPLORE</button>
                </a>
            </div>
        </div>
    </section>

</body>
</html>
<?php /**PATH E:\Rahil\This is the place to be\r\prj\resources\views/user.blade.php ENDPATH**/ ?>