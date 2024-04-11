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
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Orders</a></li>
                                        <li class="breadcrumb-item active">Profile Details</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Breadcrumb End-->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Details</h4>
                                    <div>
                                        <dl class="row mb-0">
                                            <dt class="col-sm-3 mb-sm-2 mb-1">Image</dt>
                                            <dd class="col-sm-9 mb-sm-2 mb-3">
                                                <img class="rounded-circle avatar-sm" alt=""
                                                    src="<?php echo ADMIN_IMAGES_URL ?>/avatar-2.jpg">
                                            </dd>
                                            <dt class="col-sm-3 mb-sm-2 mb-1">Name</dt>
                                            <dd class="col-sm-9 mb-sm-2 mb-3">John Doe</dd>
                                            <dt class="col-sm-3 mb-sm-2 mb-1">Mobile Number</dt>
                                            <dd class="col-sm-9 mb-sm-2 mb-3">(123) 123 1234</dd>
                                            <dt class="col-sm-3 mb-sm-2 mb-1">Email Id</dt>
                                            <dd class="col-sm-9 mb-sm-2 mb-3">john.doe@gmail.com</dd>
                                            <dt class="col-sm-3 mb-sm-2 mb-1">Group</dt>
                                            <dd class="col-sm-9 mb-sm-2 mb-3">A-Group, B-Group</dd>
                                            <dt class="col-sm-3 mb-sm-2 mb-1">Status</dt>
                                            <dd class="col-sm-9 mb-sm-2 mb-3">
                                                <span class="badge bg-success font-size-11">Verified</span>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
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