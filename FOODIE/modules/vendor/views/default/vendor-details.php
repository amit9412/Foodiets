<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Vendor Details</title>
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
                                <h4 class="mb-sm-0 font-size-18">Vendor Details</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a
                                                href="<?php echo BASE_URL?>/super-admin/dashboard.php">Dashboards</a></li>
                                        <li class="breadcrumb-item"><a
                                                href="<?php echo BASE_URL?>/super-admin/vendors.php">Vendor List</a></li>
                                        <li class="breadcrumb-item active">Details</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Breadcrumb End-->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Owner Details</h4>
                                    <div>
                                        <dl class="row mb-0">
                                            <dt class="col-sm-5 mb-sm-2 mb-1">Owner Name</dt>
                                            <dd class="col-sm-7 mb-sm-2 mb-3">John Doe</dd>
                                            <dt class="col-sm-5 mb-sm-2 mb-1">Mobile Number</dt>
                                            <dd class="col-sm-7 mb-sm-2 mb-3">(123) 123 1234</dd>
                                            <dt class="col-sm-5 mb-sm-2 mb-1">Email Id</dt>
                                            <dd class="col-sm-7 mb-sm-2 mb-3">john.doe@gmail.com</dd>
                                            <dt class="col-sm-5 mb-sm-2 mb-1">Aadhar Card</dt>
                                            <dd class="col-sm-7 mb-sm-2 mb-3">5698-98998-98655</dd>
                                            <dt class="col-sm-5 mb-sm-2 mb-1">Pan Card</dt>
                                            <dd class="col-sm-7 mb-sm-2 mb-3">ABCD-5698</dd>
                                            <dt class="col-sm-5 mb-sm-2 mb-1">Date of Birth</dt>
                                            <dd class="col-sm-7 mb-sm-2 mb-3">01/01/1990</dd>
                                            <dt class="col-sm-5 mb-sm-2 mb-1">City</dt>
                                            <dd class="col-sm-7 mb-sm-2 mb-3">Indore</dd>
                                            <dt class="col-sm-5 mb-sm-2 mb-1">State</dt>
                                            <dd class="col-sm-7 mb-sm-2 mb-3">M.P.</dd>
                                            <dt class="col-sm-5 mb-sm-2 mb-1">Status</dt>
                                            <dd class="col-sm-7 mb-sm-2 mb-3">
                                                <span class="badge bg-success font-size-11">Active</span>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Bank Details</h4>
                                    <div>
                                        <dl class="row mb-0">
                                            <dt class="col-sm-5 mb-sm-2 mb-1">Account Holder Name</dt>
                                            <dd class="col-sm-7 mb-sm-2 mb-3">John Doe</dd>
                                            <dt class="col-sm-5 mb-sm-2 mb-1">Account Number</dt>
                                            <dd class="col-sm-7 mb-sm-2 mb-3">(123) 123 1234</dd>
                                            <dt class="col-sm-5 mb-sm-2 mb-1">Bank Name</dt>
                                            <dd class="col-sm-7 mb-sm-2 mb-3">SBI Bank</dd>
                                            <dt class="col-sm-5 mb-sm-2 mb-1">IFSC Code</dt>
                                            <dd class="col-sm-7 mb-sm-2 mb-3">SBI-9898</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Shop Details</h4>
                                    <div>
                                        <dl class="row mb-0">
                                            <dt class="col-sm-5 mb-sm-2 mb-1">Shop Image</dt>
                                            <dd class="col-sm-7 mb-sm-2 mb-3">
                                                <img class="rounded-circle avatar-sm" alt=""
                                                    src="<?php echo ADMIN_IMAGES_URL ?>/avatar-2.jpg">
                                            </dd>
                                            <dt class="col-sm-5 mb-sm-2 mb-1">Shop Name</dt>
                                            <dd class="col-sm-7 mb-sm-2 mb-3">Bhojan Thali</dd>
                                            <dt class="col-sm-5 mb-sm-2 mb-1">Eamil Id</dt>
                                            <dd class="col-sm-7 mb-sm-2 mb-3">bhojan.thali@gmail.com</dd>
                                            <dt class="col-sm-5 mb-sm-2 mb-1">Landline Number</dt>
                                            <dd class="col-sm-7 mb-sm-2 mb-3">899-96589-985</dd>
                                            <dt class="col-sm-5 mb-sm-2 mb-1">Mobile Number</dt>
                                            <dd class="col-sm-7 mb-sm-2 mb-3">899-96589-985</dd>
                                            <dt class="col-sm-5 mb-sm-2 mb-1">Shop Address</dt>
                                            <dd class="col-sm-7 mb-sm-2 mb-3">Lorem ipsum dolor sit, amet consectetur
                                                adipisicing elit.</dd>
                                            <dt class="col-sm-5 mb-sm-2 mb-1">GST</dt>
                                            <dd class="col-sm-7 mb-sm-2 mb-3">5698-9898-989</dd>
                                            <dt class="col-sm-5 mb-sm-2 mb-1">Shop Documents/License</dt>
                                            <dd class="col-sm-7 mb-sm-2 mb-3">
                                                <div class="popup-gallery d-flex flex-wrap">
                                                    <a class="me-2" href="<?php echo ADMIN_IMAGES_URL ?>/img-3.jpg"
                                                        title="Project 1">
                                                        <img class="img-thumbnail img-fluid"
                                                            src="<?php echo ADMIN_IMAGES_URL ?>/img-3.jpg" alt=""
                                                            width="120">
                                                    </a>
                                                    <a href="<?php echo ADMIN_IMAGES_URL ?>/img-3.jpg"
                                                        title="Project 2">
                                                        <img class="img-thumbnail img-fluid"
                                                            src="<?php echo ADMIN_IMAGES_URL ?>/img-3.jpg" alt=""
                                                            width="120">
                                                    </a>
                                                </div>
                                            </dd>
                                            <dt class="col-sm-5 mb-sm-2 mb-1">Certification</dt>
                                            <dd class="col-sm-7 mb-sm-2 mb-3">
                                                <div class="popup-gallery d-flex flex-wrap">
                                                    <a class="me-2" href="<?php echo ADMIN_IMAGES_URL ?>/img-3.jpg"
                                                        title="Project 1">
                                                        <img class="img-thumbnail img-fluid"
                                                            src="<?php echo ADMIN_IMAGES_URL ?>/img-3.jpg" alt=""
                                                            width="120">
                                                    </a>
                                                    <a href="<?php echo ADMIN_IMAGES_URL ?>/img-3.jpg"
                                                        title="Project 2">
                                                        <img class="img-thumbnail img-fluid"
                                                            src="<?php echo ADMIN_IMAGES_URL ?>/img-3.jpg" alt=""
                                                            width="120">
                                                    </a>
                                                </div>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                        <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <h4 class="card-title mb-0">Customers</h4>
                                <div class="ms-2">
                                    <input type="search" class="form-control form-control-sm"
                                        placeholder="Search customer">
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table align-middle table-nowrap mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Sno</th>
                                            <th>Customer Id</th>
                                            <th>Customer Name</th>
                                            <th>Email Id</th>
                                            <th>Mobile Number</th>
                                            <th>Vendor</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>#1</td>
                                            <td>#56985</td>
                                            <td>John Doe</td>
                                            <td>john.doe@gmail.com</td>
                                            <td>989-8878-987</td>
                                            <td>john</td>
                                            <td>
                                                <span class="badge bg-success font-size-11">Active</span>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);"
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