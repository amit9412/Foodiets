<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Vendor Invoice</title>
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
                                <h4 class="mb-sm-0 font-size-18">Vendor Invoice</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a
                                                href="<?php echo BASE_URL?>/super-admin/dashboard.php">Dashboards</a></li>
                                        <li class="breadcrumb-item active">Invoice List</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Breadcrumb End-->
                    <div class="card">
                        <div class="card-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs nav-tabs-custom mb-3" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#admin-invoice" role="tab">
                                        Pending Invoice
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#customer-invoice" role="tab">
                                        Complete Invoice
                                    </a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="admin-invoice" role="tabpanel">
                                    <div class="d-flex flex-wrap align-items-center justify-content-between mb-3">
                                        <div class="me-2 mb-2 mb-sm-0">
                                            <input type="search" class="form-control form-control-sm"
                                                placeholder="Search invoice">
                                        </div>
                                        <div class="button-items text-end">
                                            <button type="button"
                                                class="btn btn-danger w-xs btn-sm waves-effect waves-light">Cancel</button>
                                            <button type="button"
                                                class="btn btn-success w-xs btn-sm waves-effect waves-light">Send
                                                Invoice</button>
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
                                                    <th>Invoice Id</th>
                                                    <th>Vendor Id</th>
                                                    <th>Amount</th>
                                                    <th>Payment Status</th>
                                                    <th>Date</th>
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
                                                    <td>#56985</td>
                                                    <td>₹1500.00</td>
                                                    <td><span
                                                            class="badge badge-pill badge-soft-warning font-size-12">Pending</span>
                                                    </td>
                                                    <td>05/08/2021</td>
                                                    <td>
                                                        <a href="<?php echo BASE_URL?>/super-admin/invoice-details.php"
                                                            class="btn p-0 avatar-xs btn-primary waves-effect waves-light">
                                                            <i class="bx bx-list-ul mt-2 font-size-15 align-middle"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane" id="customer-invoice" role="tabpanel">
                                    <div class="d-flex flex-wrap align-items-center justify-content-between mb-3">
                                        <div class="">
                                            <input type="search" class="form-control form-control-sm"
                                                placeholder="Search invoice">
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table align-middle table-nowrap mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Sno</th>
                                                    <th>Invoice Id</th>
                                                    <th>Transfer Id	</th>
                                                    <th>Vendor Id</th>
                                                    <th>Amount</th>
                                                    <th>Payment Status</th>
                                                    <th>Date</th>
                                                    <th>Send By</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>#1</td>
                                                    <td>#56985</td>
                                                    <td>#56985</td>
                                                    <td>#56985</td>
                                                    <td>₹1500.00</td>
                                                    <td><span
                                                            class="badge badge-pill badge-soft-warning font-size-12">Pending</span>
                                                    </td>
                                                    <td>05/08/2021</td>
                                                    <td>Super Admin</td>
                                                    <td>
                                                        <a href="<?php echo BASE_URL?>/super-admin/invoice-details.php"
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