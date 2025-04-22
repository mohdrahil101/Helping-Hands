<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('css/adopt.css')); ?>">

    <title>Filozoos</title>
</head>
<body>
    <!-- Navbar -->
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

    <!-- Header with Carousel -->
    <section>
        <div class="header">
            <div>
                <div class="img">
                    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <img src="<?php echo e(asset('images/bgg1.jpg')); ?>" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="<?php echo e(asset('images/bgg2.jpg')); ?>" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="Overlay"></div>
            </div>
            <div class="Content">
                <input type="text" class="font-weight-bold" placeholder="Search your Part">
            </div>
        </div>
    </section>

    <!-- Adopt Section -->
    <section>
        <div class="container adopt">
            <div class="content">
                <h6><span>N</span>ew Arrivals</h6>
            </div>
            <div class="row">
                <?php $__currentLoopData = [
                    ['img' => 'buy1.webp', 'name' => 'Pipes'],
                    ['img' => 'buy2.webp', 'name' => 'Pipe Wrench'],
                    ['img' => 'buy3.jpg', 'name' => 'Hole Saw Kit']
                ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-sm-4">
                        <div class="box">
                            <img src="<?php echo e(asset('images/' . $pet['img'])); ?>" class="img-fluid" alt="">
                            <h5><?php echo e($pet['name']); ?></h5>
                            <p>Lorem ipsum dolor sit amet <br> consectetur adipisicing elit. Inventore.</p>
                            <button class="btn1">Buy Now</button>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    <!-- Second Header -->
    <section>
        <div class="second_header">
            <div>
                <div class="img">
                    <img src="<?php echo e(asset('images/backy.jpg')); ?>" alt="">
                </div>
                <div class="Overlay"></div>
            </div>
            <div class="Content">
                <h6>"<span>Built </span>TO Endure. <br>Design To<span>Impress </span><br><span>Engineered</span> For Excellence."</h6>
            </div>
        </div>
    </section>

    <!-- Buy Section -->
    <section>
        <div class="buy container">
            <div class="content">
                <h6><span>B</span>uy Now</h6>
            </div>
            <div class="row">
                <?php $__currentLoopData = [
                    ['buy4.webp', 'Flaring and Skwaging Tools', 'Used to tighten<br> small pipes '],
                    ['buy5.webp', 'Wash Basin', 'Ceramic, Porcelain, Ensuring Durability <br> and Glossy,Easy to Clean Surface  '],
                    ['buy6.webp', 'Commode', 'Durable, Ceramic , Offering A <br> Stain Resistant Surface.'],
                    ['buy7.webp', 'Lateral Pipes', 'Secondary Pipes that Branch of From <br>Main Water System to Different Areas'],
                    ['buy8.webp', 'Supply Lines', 'Flexible Tubes Connecting <br> Water System to Individual Fixtures .'],
                    ['buy9.webp', 'Drain Auger', 'Use to Clear the Clogs<br> in Plumbing Systems']
                ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as [$img, $title, $desc]): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-sm-4">
                        <div class="box">
                            <img src="<?php echo e(asset('images/' . $img)); ?>" class="img-fluid" alt="">
                            <h5><?php echo e($title); ?></h5>
                            <p><?php echo $desc; ?></p>
                            <button class="btn1">Buy Now</button>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>



    <!-- Footer -->
    <footer>
        <a href="#">Contact Us: 9936173712<br>Email: abc@gmail.com</a>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <script>
        $(document).scroll(function () {
            $(".navbar").toggleClass("scroll", $(this).scrollTop() > $(".navbar").height());
        });
    </script>
</body>
</html>
<?php /**PATH C:\Users\sujal\OneDrive\Desktop\lv\prj\resources\views/adopt.blade.php ENDPATH**/ ?>