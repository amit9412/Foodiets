<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'includes/admin-head.php';?>
    <title>Admin | Registration</title>
</head>

<body>
    <section class="account-pages y-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <h4 class="card-title text-center mb-3">Vendor Registration</h4>
                            <form class="form-horizontal" action="dashboards.php">
                                <div class="mb-3">
                                    <label for="user-name" class="form-label">User Name</label>
                                    <input type="text" class="form-control" id="user-name" placeholder="Enter user name">
                                </div>
                                <div class="mb-3">
                                    <label for="mobile-number" class="form-label">Mobile Number</label>
                                    <input type="text" class="form-control" id="mobile-number" placeholder="Enter mobile number">
                                </div>
                                <div class="mb-3">
                                    <label for="email-id" class="form-label">Email Id</label>
                                    <input type="email" class="form-control" id="email-id" placeholder="Enter email Id">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <div class="input-group auth-pass-inputgroup">
                                        <input type="password" class="form-control" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
                                        <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Confirm Password</label>
                                    <div class="input-group auth-pass-inputgroup">
                                        <input type="password" class="form-control" placeholder="Enter confirm password" aria-label="confirm-password" aria-describedby="confirm-password">
                                        <button class="btn btn-light" type="button" id="confirm-password"><i class="mdi mdi-eye-outline"></i></button>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-check form-check-success">
                                        <input class="form-check-input" type="checkbox" id="remember-check">
                                        <label class="form-check-label text-muted" for="remember-check">
                                        Accept all <a href="javascript:void(0);" class="fw-medium text-dark">Terms & Conditions</a> or <a href="javascript:void(0);" class="fw-medium text-dark">Privacy Policy</a> 
                                        </label>
                                    </div>
                                </div>
                                <div class="mt-3 d-grid">
                                    <a href="<?php echo BASE_URL ?>/vendor/verification-otp.php"
                                        class="btn btn-success waves-effect waves-light"> Continue</a>
                                </div>
                                <div class="mt-4 text-center">
                                    <span class="text-muted">
                                    Already have an account? <a href="<?php echo BASE_URL ?>/vendor/index.php" class="fw-medium text-dark"> Login</a>
                                    </span>                                    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<?php include 'includes/admin-footerlink.php';?>

</html>