<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | My Profile</title>
    <?php include 'includes/admin-head.php';?>
</head>

<body data-sidebar="dark">
    <div id="layout-wrapper">
        <!-- Header Start-->
        <?php include 'includes/admin-header.php';?>
        <!-- Header End-->
        <!-- Sidebar Start-->
        <?php include 'includes/left-sidebar.php';?>
        <!-- Sidebar End-->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <!-- Breadcrumb Start-->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0 font-size-18">My Profile</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboards</a></li>
                                        <li class="breadcrumb-item active">Profile Details</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Breadcrumb End-->
                    <div class="card">
                        <div class="card-body">
                            <form>
                                <div class="row mb-4">
                                    <label for="uploadlogo" class="col-sm-3 col-form-label">Upload Profile</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" id="uploadlogo">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="unm" class="col-sm-3 col-form-label">Full Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="unm" placeholder="Enter Full Name">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="enm" class="col-sm-3 col-form-label">Eamil</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="enm" placeholder="Enter Email">
                                    </div>
                                </div>
                                <div class="text-xl-end">
                                    <button type="submit" class="btn btn-primary w-md">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Start-->
        <?php include 'includes/admin-footer.php';?>
        <!-- Footer End-->
    </div>
</body>
<?php include 'includes/admin-footerlink.php';?>

</html>