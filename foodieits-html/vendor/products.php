<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Products</title>
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
                                <h4 class="mb-sm-0 font-size-18">Product List</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a
                                                href="<?php echo BASE_URL?>/vendor/dashboard.php">Dashboards</a></li>
                                        <li class="breadcrumb-item active">List</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Breadcrumb End-->
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-wrap justify-content-between mb-2">
                                <div class="me-2 mb-2 mb-sm-0">
                                    <input type="search" class="form-control form-control-sm"
                                        placeholder="Search products">
                                </div>
                                <div class="">
                                    <a href="<?php echo BASE_URL?>/vendor/add-products.php"
                                        class="btn btn-primary btn-sm w-xs waves-effect waves-light">
                                        Add Product
                                    </a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table align-middle table-nowrap mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Sno</th>
                                            <th>Image</th>
                                            <th>Product Id</th>
                                            <th>Product Name</th>
                                            <th>Order Range</th>
                                            <th>Price(M)</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>#1</td>
                                            <td><img src="<?php echo ADMIN_IMAGES_URL ?>/avatar-2.jpg" alt=""
                                                    class="avatar-xs rounded-circle"></td>
                                            <td>#14455</td>
                                            <td>Daily Thali</td>
                                            <td>15 K.M.</td>
                                            <td>₹2,500</td>
                                            <td>
                                                <div class="form-check form-switch form-switch-md" dir="ltr">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="SwitchCheckSizemd">
                                                    <label class="form-check-label" for="SwitchCheckSizemd"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);"
                                                    class="btn p-0 avatar-xs btn-success waves-effect waves-light">
                                                    <i class="bx bx-edit-alt mt-2 font-size-16 align-middle"></i>
                                                </a>
                                                <a href="javascript:void(0);"
                                                    class="btn p-0 avatar-xs btn-danger waves-effect waves-light">
                                                    <i class="bx bx-trash-alt mt-2 font-size-16 align-middle"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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