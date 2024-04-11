<!doctype html>
<html lang="en">

<head>
    <!--d meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include 'includes/headlinks.php';?>
    <title>Foodieits- Reset Password</title>
</head>

<body>
    <main>
        <?php include 'includes/before-login-header.php';?>
        <div class="main-sec">
            <section class="breadcrumb-section light-bg">
                <div class="container">
                    <div class="breadcrumb-text">
                        <h1>Reset Password</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Reset Password</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </section>
            <section class="form-section pd-sec-50">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 col-sm-8">
                            <form>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Enter New Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Enter Confirm Password">
                                </div>
                                <div class="form-group">
                                    <a href="login.php" class="btn btn-block btn-primary">Submit</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php include 'includes/footer.php';?>
    </main>
</body>
<?php include 'includes/footerlinks.php';?>

</html>