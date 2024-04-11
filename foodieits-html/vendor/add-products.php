<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Add Products</title>
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
                                <h4 class="mb-sm-0 font-size-18">Add Product</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a
                                                href="<?php echo BASE_URL?>/vendor/dashboard.php">Dashboards</a></li>
                                        <li class="breadcrumb-item"><a
                                                href="<?php echo BASE_URL?>/vendor/products.php">Product List</a></li>
                                        <li class="breadcrumb-item active">Add</li>
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
                                    <label class="col-sm-4 col-form-label">Product Image</label>
                                    <div class="col-sm-8">
                                        <input type="file" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-sm-4 col-form-label">Product Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" placeholder="Enter product name">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-sm-4 col-form-label">Order Range(K.M.)</label>
                                    <div class="col-sm-8">
                                        <select class="form-select">
                                            <option>Select</option>
                                            <option>10KM</option>
                                            <option>20KM</option>
                                            <option>30KM</option>
                                            <option>40KM</option>
                                            <option>50KM</option>
                                            <option>Accept All Orders</option>
                                            <option>Select Self</option>
                                        </select>
                                        <!-- <input type="text" class="form-control" placeholder="Enter km"> -->
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-sm-4 col-form-label">Price of Month</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" placeholder="Enter price">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-sm-4 col-form-label">Single Lunchbox Price</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" placeholder="Enter price">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-sm-4 col-form-label">Trial Lunchbox Price</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" placeholder="Enter price">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-sm-4 col-form-label">Delivery Type</label>
                                    <div class="col-sm-8">
                                        <select class="select2 form-control select2-multiple" multiple="multiple"
                                            data-placeholder="Select type">
                                            <option value="Full Time">Full Time</option>
                                            <option value="Day">Day</option>
                                            <option value="Night">Night</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-sm-4 col-form-label">Select Weeks</label>
                                    <div class="col-sm-8">
                                        <select class="select2 form-control select2-multiple" multiple="multiple"
                                            data-placeholder="Select type">
                                            <option value="All">All</option>
                                            <option value="Monday">Monday</option>
                                            <option value="Tuesday">Tuesday</option>
                                            <option value="Wednesday">Wednesday</option>
                                            <option value="Thursday">Thursday</option>
                                            <option value="Friday">Friday</option>
                                            <option value="Saturday">Saturday</option>
                                            <option value="Sunday">Sunday</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-sm-4 col-form-label">Description</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" placeholder="Enter description">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-sm-4 col-form-label">Gallery Images</label>
                                    <div class="col-sm-8">
                                        <div class="d-flex mb-3">
                                            <input type="file" class="form-control me-2">
                                            <button type="button" class="btn btn-success w-sm">Add More</button>
                                        </div>
                                        <div class="d-flex mb-3">
                                            <input type="file" class="form-control me-2">
                                            <button type="button" class="btn btn-danger w-sm">Delete</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <button type="button" class="btn btn-success">Add Product</button>
                                    <button type="button" class="btn btn-danger">Cancel</button>
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