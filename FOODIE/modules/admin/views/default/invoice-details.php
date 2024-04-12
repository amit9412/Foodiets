<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Invoice Details</title>
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
                                <h4 class="mb-sm-0 font-size-18">Invoice Details</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a
                                                href="<?php echo BASE_URL?>/super-admin/dashboard.php">Dashboards</a></li>
                                        <li class="breadcrumb-item"><a
                                                href="<?php echo BASE_URL?>/super-admin/vendor-invoice.php">Vendor Invoice</a></li>
                                        <li class="breadcrumb-item active">Details</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Breadcrumb End-->
                    <div class="card">
                        <div class="card-body">
                            <div class="invoice-title">
                                <h4 class="float-end font-size-16">Order # 12345</h4>
                                <div class="mb-3">
                                    <img src="<?php echo ADMIN_IMAGES_URL ?>/logo-light.svg" alt="logo" height="50" />
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    <address>
                                        <strong>Billed To:</strong><br>
                                        John Smith<br>
                                        1234 Main<br>
                                        Apt. 4B<br>
                                        Springfield, ST 54321
                                    </address>
                                </div>
                                <div class="col-sm-6 text-sm-end">
                                    <address class="mt-2 mt-sm-0">
                                        <strong>Shipped To:</strong><br>
                                        Kenny Rigdon<br>
                                        1234 Main<br>
                                        Apt. 4B<br>
                                        Springfield, ST 54321
                                    </address>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 mt-3">
                                    <address>
                                        <strong>Payment Method:</strong><br>
                                        Visa ending **** 4242<br>
                                        jsmith@email.com
                                    </address>
                                </div>
                                <div class="col-sm-6 mt-3 text-sm-end">
                                    <address>
                                        <strong>Order Date:</strong><br>
                                        October 16, 2019<br><br>
                                    </address>
                                </div>
                            </div>
                            <div class="py-2 mt-3">
                                <h3 class="font-size-15 font-weight-bold">Order summary</h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-nowrap">
                                    <thead>
                                        <tr>
                                            <th style="width: 70px;">No.</th>
                                            <th>Item</th>
                                            <th class="text-end">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td>Skote - Admin Dashboard Template</td>
                                            <td class="text-end">$499.00</td>
                                        </tr>

                                        <tr>
                                            <td>02</td>
                                            <td>Skote - Landing Template</td>
                                            <td class="text-end">$399.00</td>
                                        </tr>

                                        <tr>
                                            <td>03</td>
                                            <td>Veltrix - Admin Dashboard Template</td>
                                            <td class="text-end">$499.00</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="text-end">Sub Total</td>
                                            <td class="text-end">$1397.00</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="border-0 text-end">
                                                <strong>Shipping</strong>
                                            </td>
                                            <td class="border-0 text-end">$13.00</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="border-0 text-end">
                                                <strong>Total</strong>
                                            </td>
                                            <td class="border-0 text-end">
                                                <h4 class="m-0">$1410.00</h4>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-print-none">
                                <div class="float-end">
                                    <a href="javascript:window.print()"
                                        class="btn btn-success waves-effect waves-light me-1"><i
                                            class="bx bx-printer"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-primary w-md waves-effect waves-light">Send</a>
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