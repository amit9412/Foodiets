<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Today Orders</title>
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
                                <h4 class="mb-sm-0 font-size-18">Today Order List</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Breadcrumb End-->
                    <div class="card">
                        <div class="card-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs nav-tabs-custom mb-3" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#morning-order" role="tab">
                                        Morning Order
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#night-order" role="tab">
                                        Night Order
                                    </a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="morning-order" role="tabpanel">
                                    <div class="d-flex flex-wrap justify-content-between">
                                        <div class="me-2 mb-2 mb-sm-0">
                                            <select class="form-select form-select-sm">
                                                <option value="">Select Group</option>
                                                <option value="A-Group">A Group</option>
                                            </select>
                                        </div>
                                        <div class="button-items text-end mb-0">
                                            <button type="button"
                                                class="btn btn-primary btn-sm w-xs waves-effect waves-light">Order
                                                Delivered</button>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table align-middle table-nowrap mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>
                                                        <div class="form-check mb-0">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="productdiscountCheck1">
                                                        </div>
                                                    </th>
                                                    <th>Sno</th>
                                                    <th>Order Id</th>
                                                    <th>Customer Name</th>
                                                    <th>Email Id</th>
                                                    <th>Mobile Number</th>
                                                    <th>Group Name</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="form-check mb-0">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="productdiscountCheck1">
                                                        </div>
                                                    </td>
                                                    <td>#1</td>
                                                    <td>#56985</td>
                                                    <td>John Doe</td>
                                                    <td>john.doe@gmail.com</td>
                                                    <td>989-8878-987</td>
                                                    <td>A Group</td>
                                                    <td>
                                                        <a href="<?php echo BASE_URL?>/delivery-boy/customer-details.php"
                                                            class="btn p-0 avatar-xs btn-primary waves-effect waves-light">
                                                            <i class="bx bx-list-ul mt-2 font-size-15 align-middle"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane" id="night-order" role="tabpanel">
                                    <div class="d-flex flex-wrap justify-content-between">
                                        <div class="me-2 mb-2 mb-sm-0">
                                            <select class="form-select form-select-sm">
                                                <option value="">Select Group</option>
                                                <option value="A-Group">A Group</option>
                                            </select>
                                        </div>
                                        <div class="button-items text-end mb-0">
                                            <button type="button"
                                                class="btn btn-primary btn-sm w-xs waves-effect waves-light">Order
                                                Delivered</button>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table align-middle table-nowrap mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>
                                                        <div class="form-check mb-0">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="productdiscountCheck1">
                                                        </div>
                                                    </th>
                                                    <th>Sno</th>
                                                    <th>Order Id</th>
                                                    <th>Customer Name</th>
                                                    <th>Email Id</th>
                                                    <th>Mobile Number</th>
                                                    <th>Group Name</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="form-check mb-0">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="productdiscountCheck1">
                                                        </div>
                                                    </td>
                                                    <td>#1</td>
                                                    <td>#56985</td>
                                                    <td>John Doe</td>
                                                    <td>john.doe@gmail.com</td>
                                                    <td>989-8878-987</td>
                                                    <td>A Group</td>
                                                    <td>
                                                        <a href="<?php echo BASE_URL?>/delivery-boy/customer-details.php"
                                                            class="btn p-0 avatar-xs btn-primary waves-effect waves-light">
                                                            <i class="bx bx-list-ul mt-2 font-size-15 align-middle"></i>
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
            </div>
        </div>
        <!-- Footer Start-->
        <?php include 'includes/admin-footer.php';?>
        <!-- Footer End-->
    </div>
</body>
<?php include 'includes/admin-footerlink.php';?>

</html>