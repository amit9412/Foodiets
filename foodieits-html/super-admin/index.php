<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'includes/admin-head.php';?>
    <title>Admin | Login</title>
</head>

<body>
    <section class="account-pages y-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="auth-logo mb-3 text-center">
                                <img src="<?php echo ADMIN_IMAGES_URL ?>/logo.svg" alt="" height="50">
                            </div>
                            <form class="form-horizontal" action="dashboards.php">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" placeholder="Enter username">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <div class="input-group auth-pass-inputgroup">
                                        <input type="password" class="form-control" placeholder="Enter password"
                                            aria-label="Password" aria-describedby="password-addon">
                                        <button class="btn btn-light " type="button" id="password-addon"><i
                                                class="mdi mdi-eye-outline"></i></button>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <a href="<?php echo BASE_URL ?>/super-admin/forgot-password.php" class="text-muted"><i
                                            class="mdi mdi-lock me-1"></i> Forgot your password?</a>
                                </div>
                                <div class="mt-3 d-grid">
                                    <a href="<?php echo BASE_URL ?>/super-admin/dashboard.php"
                                        class="btn btn-success waves-effect waves-light"> Log In</a>
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