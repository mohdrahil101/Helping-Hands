<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/adopt.css') }}">
    <title>Register</title>
</head>
<body style="background-color: #9A616D;">

<nav class="navbar navbar-expand-sm scroll">
    <a href="#" class="navbar-brand"><span>H</span>elping Hands</a>
    <div>
        <ul class="navbar-nav">
            <li class="nav-item"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="{{ url('/adopt') }}" class="nav-link">Buy</a></li>
            <li class="nav-item"><a href="{{ url('/services') }}" class="nav-link">Services</a></li>
            <li class="nav-item"><a href="{{ url('/login') }}" class="nav-link">Login</a></li>
            <li class="nav-item"><a href="{{ url('/apply') }}" class="nav-link">Apply</a></li>
        </ul>
    </div>
</nav>
<br>

<section>
    <div class="container py-2 h-80">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem; height: 650px;">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <img src="{{ asset('images/register.webp') }}" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; height: 650px;" />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">
                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <div class="alert alert-danger">{{ $error }}</div>
                                    @endforeach
                                @endif

                                @if (session('success'))
                                    <div class="alert alert-success">{{ session('success') }}</div>
                                @endif

                                <form action="{{ route('register.submit') }}" method="POST">
                                    @csrf

                                    <div class="d-flex align-items-center mb-3 pb-1">
                                        <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                        <span class="h1 fw-bold mb-0">Helping Hands</span>
                                    </div>

                                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Create your account.</h5>

                                    <div class="form-outline mb-4">
                                        <input type="text" id="fname" name="fname" required class="form-control form-control-lg" value="{{ old('fname') }}" />
                                        <label for="fname">Username</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="email" id="email" name="email" required class="form-control form-control-lg" value="{{ old('email') }}" />
                                        <label for="email">Email</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" id="password" name="password" required class="form-control form-control-lg" />
                                        <label for="password">Password</label>
                                    </div>

                                    <div class="pt-1 mb-4">
                                        <input class="btn btn-dark btn-lg btn-block" type="submit" value="Sign Up">
                                    </div>

                                    <p class="mb-5 pb-lg-2" id="signup" style="color: #393f81;">Already have an account? <a href="{{ route('login') }}" style="color: #393f81;">Login here</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>
