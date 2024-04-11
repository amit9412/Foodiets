<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'includes/admin-head.php';?>
    <title>Admin | Change Password</title>
</head>
<body>
    <section class="account-pages y-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="card-body"> 
                            <div class="auth-logo text-center">
                                <img src="<?php echo ADMIN_IMAGES_URL ?>/logo.svg" alt="" height="50">
                                <h5 class="mt-2"> Change Password</h5>
                                <p>Re-Password your password</p>    
                            </div>
                            <form class="form-horizontal" action="">        
                                <div class="mb-3">
                                    <label for="oldpwd" class="form-label">Old Password</label>
                                    <input type="password" class="form-control" id="oldpwd" placeholder="Enter old password">
                                </div>  
                                <div class="mb-3">
                                    <label for="newpwd" class="form-label">New Password</label>
                                    <input type="password" class="form-control" id="newpwd" placeholder="Enter new password">
                                </div>    
                                <div class="mb-3">
                                    <label for="confirmpwd" class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" id="confirmpwd" placeholder="Enter confirm password">
                                </div>           
                                <div class="text-end">
                                    <a href="<?php echo BASE_URL ?>/delivery-boy/orders.php" class="btn btn-primary w-md waves-effect waves-light"> Change</a>
                                </div>
                                <div class="mt-4 text-center">
                                    <span class="text-muted">
                                        Back <a href="<?php echo BASE_URL ?>/delivery-boy/index.php" class="fw-medium text-primary"> Click here</a>
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