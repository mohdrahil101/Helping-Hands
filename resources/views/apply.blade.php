<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply as Caretaker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/adopt.css') }}">
    <style>
        .card-registration .select-input.form-control[readonly]:not([disabled]) {
            font-size: 1rem;
            line-height: 2.15;
            padding-left: .75em;
            padding-right: .75em;
        }
        .card-registration .select-arrow {
            top: 13px;
        }
    </style>
</head>
<body>
    <!-- Navbar Section Start -->
    <nav class="navbar navbar-expand-sm scroll">
        <a href="#" class="navbar-brand"><span>H</span>elping Hands</a>
        <div>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{ url('/adopt') }}" class="nav-link">Buy</a></li>
                <li class="nav-item"><a href="{{ url('/hire') }}" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="{{ url('/login') }}" class="nav-link">Login</a></li>
                <li class="nav-item"><a href="{{ url('/apply') }}" class="nav-link">Apply</a></li>
            </ul>
        </div>
    </nav>
    <!-- Navbar Section End -->

    <section class="h-100 bg-dark">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card card-registration my-4">
                        <div class="row g-0">
                            <div class="col-xl-6 d-none d-xl-block">
                                <img src="{{ asset('images/work.webp') }}" alt="Sample photo" class="img-fluid" style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem; height: 100%;" />
                            </div>
                            <div class="col-xl-6">
                                @if(session('success'))
                                    <div class="alert alert-success">{{ session('success') }}</div>
                                @endif

                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form action="{{ route('apply.submit') }}" method="POST">
                                    @csrf
                                    <div class="card-body p-md-5 text-black">
                                        <h3 class="mb-5 text-uppercase">Work As A Plumber<br>Apply Now</h3>

                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <input type="text" name="fname" class="form-control form-control-lg" placeholder="First name" value="{{ old('fname') }}" required>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <input type="text" name="lname" class="form-control form-control-lg" placeholder="Last name" value="{{ old('lname') }}" required>
                                            </div>
                                        </div>

                                        <input type="text" name="address" class="form-control form-control-lg mb-4" placeholder="Address" value="{{ old('address') }}" required>

                                        <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
                                            <h6 class="mb-0 me-4">Gender: </h6>
                                            @foreach(['Female', 'Male', 'Other'] as $g)
                                                <div class="form-check form-check-inline mb-0 me-4">
                                                    <input class="form-check-input" type="radio" name="gender" value="{{ $g }}" {{ old('gender') == $g ? 'checked' : '' }}>
                                                    <label>{{ $g }}</label>
                                                </div>
                                            @endforeach
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <select class="form-select" name="state">
                                                    <option value="">Select State</option>
                                                    @foreach(['Punjab', 'Delhi', 'UP'] as $state)
                                                        <option value="{{ $state }}" {{ old('state') == $state ? 'selected' : '' }}>{{ $state }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <select class="form-select" name="work">
                                                    <option value="">Select Work</option>
                                                    @foreach(['Residential Plumber', 'Sanitary Plumber', 'Construction Plumber'] as $animal)
                                                        <option value="{{ $animal }}" {{ old('work') == $animal ? 'selected' : '' }}>{{ $animal }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <input type="text" name="DOB" class="form-control form-control-lg mb-4" placeholder="DOB" value="{{ old('DOB') }}" required>
                                        <input type="email" name="email" class="form-control form-control-lg mb-4" placeholder="Email ID" value="{{ old('email') }}" required>
                                        <input type="text" name="mobile" class="form-control form-control-lg mb-4" placeholder="Mobile No." value="{{ old('mobile') }}">

                                        <div class="d-flex justify-content-end pt-3">
                                            <button type="submit" class="btn btn-warning btn-lg ms-2">Apply now</button>
                                        </div>
                                    </div>
                                </form>
                            </div> <!-- col-xl-6 -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
