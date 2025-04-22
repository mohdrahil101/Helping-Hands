<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('css/adopt.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hire.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/favicon.ico') }}">

    <!-- Libraries Styles -->
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet">

    <title>Helping Hands</title>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-sm fixed-top">
    <a href="#" class="navbar-brand"><span>H</span>elping Hands</a>
    <ul class="navbar-nav">
        <li class="nav-item"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="{{ url('/adopt') }}" class="nav-link">Buy</a></li>
        <li class="nav-item"><a href="{{ url('/hire') }}" class="nav-link">Services</a></li>
        <li class="nav-item"><a href="{{ url('/login') }}" class="nav-link">Login</a></li>
        <li class="nav-item"><a href="{{ url('/apply') }}" class="nav-link">Apply</a></li>
    </ul>
</nav>

<!-- Hero Section -->
<section>
    <div class="header">
        <div>
            <div class="img">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="{{ asset('images/b1.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="{{ asset('images/b2.jpg') }}" class="d-block w-100" alt="...">
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
        <div class="Content2">
            <h3>Trusted Plumbers Near You</h3><br>
            <h1>Best Plumbing Services</h1><br>
            <a href="#content"><button class="btn1">Services</button></a>
        </div>
    </div>
</section>

<!-- Booking Section -->
<section>
    <div class="container-fluid bg-light" id="container">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="bg-primary py-5 px-4 px-sm-5">
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form class="py-5" id="bookingform" action="{{ route('services.book') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="fname" class="form-control border-0 p-4" placeholder="Your Name" value="{{ old('fname') }}" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control border-0 p-4" placeholder="Your Email" value="{{ old('email') }}" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="date" class="form-control border-0 p-4" placeholder="Reservation Date (dd/mm/yyyy)" value="{{ old('date') }}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="address" class="form-control border-0 p-4" placeholder="Address" value="{{ old('address') }}" required>
                            </div>
                            <div class="form-group">
                                <select class="custom-select border-0 px-4" name="services" style="height: 47px;">
                                    <option selected disabled>Select A Service</option>
                                    <option value="Pet Grooming">Drain Cleaning</option>
                                    <option value="Pet Feeding">Plumbing Repairs</option>
                                    <option value="Pet Boarding">Sewer Line Repair</option>
                                    <option value="Pet Exercise">Emergency Plumbing</option>
                                    <option value="Pet Training">Toilet Repair</option>
                                    <option value="Pet Treatment">Leak Detection and Repair</option>
                                </select>
                            </div>
                            <div>
                                <input class="btn btn-dark btn-block border-0 py-3" type="submit" value="Book Now">
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Right-side Description -->
                <div class="col-lg-7 py-5 py-lg-0 px-3 px-lg-5">
                    <h4 class="text-secondary mb-3">Service you can Trust!</h4>
                    <h1 class="display-4 mb-4">Get A <span class="text-primary">Helping Hand</span></h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum eos nisi animi voluptates blanditiis!</p>
                    <div class="row py-2">
                        @foreach (['draining' => 'Drain Cleaning', 'plumbing' => 'Plumbing Repairs', 'sewer' => 'Sewer Line Repair', 'repairs' => 'Emergency Plumbing'] as $img => $label)
                        <div class="col-sm-6">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-2">
                                    <img src="{{ asset('images/' . substr($img, 0, 1) . '1.jpg') }}" class="{{ $loop->even ? 'img2' : 'img1' }}" alt="">
                                    <h5 class="text-truncate m-0">{{ $label }}</h5>
                                </div>
                                <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services List Section -->
<section>
    <div class="buy container">
        <div class="content" id="content">
            <h6><span>S</span>ervices</h6>
        </div>
        <div class="row">
            @foreach ([
                ['img' => 'draining.webp', 'title' => 'Drain Cleaning'],
                ['img' => 'plumbing.webp', 'title' => 'Plumbing Repairs'],
                ['img' => 'toilet.webp', 'title' => 'Toilet Repair'],
                ['img' => 'sewer.webp', 'title' => 'Sewer Line Repair'],
                ['img' => 'emg.webp', 'title' => 'Emergency Repair'],
                ['img' => 'leak.webp', 'title' => 'Leak Detection'],
            ] as $service)
                <div class="col-sm-4">
                    <div class="box">
                        <img src="{{ asset('images/' . $service['img']) }}" class="img-fluid" alt="{{ $service['title'] }}">
                        <h5>{{ $service['title'] }}</h5>
                        <p>Lorem ipsum dolor sit amet <br> consectetur adipisicing elit. Inventore.</p>
                        <a href="#container"><button class="btn1">Book Now</button></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Quote Section -->
<section>
    <div class="second_header">
        <div>
            <div class="img">
                <img src="{{ asset('images/issue.jpg') }}" alt="">
            </div>
            <div class="Overlay"></div>
        </div>
        <div class="Content">
            <h6 style="color: #fff;">"Have a  <span>Plumbing Issue? </span><br>Contact our <span>Friendly Team!"</span></h6>
        </div>
    </div>
</section>

<!-- Caretakers -->
<section>
    <div class="container adopt">
        <div class="content">
            <h6><span>P</span>lumbers</h6>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="box">
                    <img src="{{ asset('images/h1.jpg') }}" class="img-fluid" alt="">
                    <h5>Alex</h5>
                    <p>2 Years Experience <br> consectetur adipisicing elit. Inventore.</p>
                    <button class="btn1">Hire Now</button>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="box">
                    <img src="{{ asset('images/h2.jpg') }}" class="img-fluid" alt="">
                    <h5>Ruby</h5>
                    <p>2 Years Experience <br> consectetur adipisicing elit. Inventore.</p>
                    <button class="btn1">Hire Now</button>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="box">
                    <img src="{{ asset('images/h3.jpg') }}" class="img-fluid" alt="">
                    <h5>Ethan</h5>
                    <p>2 Years Experience <br> consectetur adipisicing elit. Inventore.</p>
                    <button class="btn1">Hire Now</button>
                </div>
            </div>
            <!-- Add other caretakers similarly -->
        </div>
    </div>
</section>
<footer>
    <a href="">Contact Us:9936173712<br>Email:abc@gmail.com</a>
</footer>
<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- jQuery (required for scroll toggle script) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap JS (already included earlier) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Navbar scroll class toggle -->
<script>
    $(document).scroll(function(){
        $(".navbar").toggleClass("scroll", $(this).scrollTop() > $(".navbar").height());
    });
</script>

</body>
</html>
