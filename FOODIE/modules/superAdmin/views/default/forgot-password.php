<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'includes/admin-head.php';?>
    <title>Admin | Forgot Password</title>
</head>
<body>
    <section class="account-pages y-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="card-body"> 
                            <div class="auth-logo text-center">
                                <h5> Reset Password</h5>
                                <p>Re-Password with Email/Mobile Number.</p>    
                            </div>
                            <div class="alert alert-success text-center" role="alert">
                                Enter your Email/Mobile Number and instructions will be sent to you!
                            </div>
                            <form class="form-horizontal" action="">        
                                <div class="mb-3">
                                    <label for="useremail" class="form-label">Email/Mobile Number</label>
                                    <input type="email" class="form-control" id="useremail" placeholder="Enter email/mobile">
                                </div>                
                                <div class="text-end">
                                    <a href="<?php echo BASE_URL ?>/super-admin/dashboard.php" class="btn btn-success w-md waves-effect waves-light"> Reset</a>
                                </div>
                                <div class="mt-4 text-center">
                                    <span class="text-muted">
                                        Remember It ? <a href="<?php echo BASE_URL ?>/super-admin/index.php" class="fw-medium text-dark"> Login Here</a>
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