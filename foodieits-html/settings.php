<!doctype html>
<html lang="en">

<head>
    <!--d meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include 'includes/headlinks.php';?>
    <title>Foodieits- Settings</title>
</head>

<body>
    <main>
        <?php include 'includes/before-login-header.php';?>
        <div class="main-sec">
            <section class="breadcrumb-section light-bg">
                <div class="container">
                    <div class="breadcrumb-text">
                        <h1>Your Settings</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Settings List</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </section>
            <section class="form-section pd-sec-50">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-4">
                            <?php $page = 'settings'; include 'includes/profile-side-menu.php';?>
                        </div>
                        <div class="col-lg-9 col-md-8">
                            <div class="user-tabs">
                                <form>
                                    <div class="form-group row align-items-center">
                                        <div class="col-sm-2">
                                            <label class="col-form-label pt-0">Notification</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                                <label class="custom-control-label" for="customSwitch1"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row align-items-center">
                                        <div class="col-sm-2">
                                            <label class="col-form-label pt-0">Location</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                                <label class="custom-control-label" for="customSwitch2"></label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
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