<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply as Caretaker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/adopt.css')); ?>">
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
                <li class="nav-item"><a href="<?php echo e(url('/')); ?>" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="<?php echo e(url('/adopt')); ?>" class="nav-link">Buy</a></li>
                <li class="nav-item"><a href="<?php echo e(url('/hire')); ?>" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="<?php echo e(url('/login')); ?>" class="nav-link">Login</a></li>
                <li class="nav-item"><a href="<?php echo e(url('/apply')); ?>" class="nav-link">Apply</a></li>
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
                                <img src="<?php echo e(asset('images/work.webp')); ?>" alt="Sample photo" class="img-fluid" style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem; height: 100%;" />
                            </div>
                            <div class="col-xl-6">
                                <?php if(session('success')): ?>
                                    <div class="alert alert-success"><?php echo e(session('success')); ?></div>
                                <?php endif; ?>

                                <?php if($errors->any()): ?>
                                    <div class="alert alert-danger">
                                        <ul>
                                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><?php echo e($error); ?></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>

                                <form action="<?php echo e(route('apply.submit')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <div class="card-body p-md-5 text-black">
                                        <h3 class="mb-5 text-uppercase">Work As A Plumber<br>Apply Now</h3>

                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <input type="text" name="fname" class="form-control form-control-lg" placeholder="First name" value="<?php echo e(old('fname')); ?>" required>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <input type="text" name="lname" class="form-control form-control-lg" placeholder="Last name" value="<?php echo e(old('lname')); ?>" required>
                                            </div>
                                        </div>

                                        <input type="text" name="address" class="form-control form-control-lg mb-4" placeholder="Address" value="<?php echo e(old('address')); ?>" required>

                                        <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
                                            <h6 class="mb-0 me-4">Gender: </h6>
                                            <?php $__currentLoopData = ['Female', 'Male', 'Other']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="form-check form-check-inline mb-0 me-4">
                                                    <input class="form-check-input" type="radio" name="gender" value="<?php echo e($g); ?>" <?php echo e(old('gender') == $g ? 'checked' : ''); ?>>
                                                    <label><?php echo e($g); ?></label>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <select class="form-select" name="state">
                                                    <option value="">Select State</option>
                                                    <?php $__currentLoopData = ['Punjab', 'Delhi', 'UP']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($state); ?>" <?php echo e(old('state') == $state ? 'selected' : ''); ?>><?php echo e($state); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <select class="form-select" name="work">
                                                    <option value="">Select Work</option>
                                                    <?php $__currentLoopData = ['Residential Plumber', 'Sanitary Plumber', 'Construction Plumber']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $animal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($animal); ?>" <?php echo e(old('work') == $animal ? 'selected' : ''); ?>><?php echo e($animal); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>

                                        <input type="text" name="DOB" class="form-control form-control-lg mb-4" placeholder="DOB" value="<?php echo e(old('DOB')); ?>" required>
                                        <input type="email" name="email" class="form-control form-control-lg mb-4" placeholder="Email ID" value="<?php echo e(old('email')); ?>" required>
                                        <input type="text" name="mobile" class="form-control form-control-lg mb-4" placeholder="Mobile No." value="<?php echo e(old('mobile')); ?>">

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
<?php /**PATH E:\Rahil\This is the place to be\r\prj\resources\views/apply.blade.php ENDPATH**/ ?>