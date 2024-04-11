<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Reports</title>
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
                                <h4 class="mb-sm-0 font-size-18">Reports</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a
                                                href="<?php echo BASE_URL?>/vendor/dashboard.php">Dashboards</a></li>
                                        <li class="breadcrumb-item active">Reports</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Breadcrumb End-->
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-wrap">
                                <h5 class="card-title me-2">All Reports</h5>
                                <div class="ms-auto">
                                    <div class="toolbar button-items text-end">
                                        <button type="button" class="btn btn-primary active btn-sm">
                                            ALL
                                        </button>
                                        <button type="button" class="btn btn-light btn-sm">
                                            1M
                                        </button>
                                        <button type="button" class="btn btn-light btn-sm">
                                            6M
                                        </button>
                                        <button type="button" class="btn btn-light btn-sm active">
                                            1Y
                                        </button>                                        
                                    </div>
                                </div>
                            </div>
                            <div id="column-charts" dir="ltr"></div>
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