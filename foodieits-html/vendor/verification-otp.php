<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'includes/admin-head.php';?>
    <title>Admin | Verification</title>
</head>

<body>
    <section class="account-pages y-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="p-2">
                                <div class="text-center">
                                    <div class="avatar-md mx-auto">
                                        <div class="avatar-title rounded-circle bg-light">
                                            <i class="bx bxs-envelope h1 mb-0 text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="p-2 mt-2">
                                        <h4>Verification OTP</h4>
                                        <p>We have sent you verification OTP <span
                                                class="font-weight-semibold">965-8788-989</span>.<br> Please Enter</p>
                                        <form action="" class="mt-3">
                                            <div class="mb-3">
                                                <input type="text" class="form-control" placeholder="Enter Verification otp">
                                            </div>
                                            <a href="<?php echo BASE_URL?>/vendor/registration.php" class="btn btn-success w-md">Submit</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<?php include 'includes/admin-footerlink.php';?>

</html>