<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'includes/admin-head.php';?>
    <title>Admin | Full Registration</title>
</head>

<body>
    <section class="account-pages y-5 pt-sm-5">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Vendor Registration</h4>
                    <div id="basic-example">
                        <!-- Basic Details -->
                        <h3>Basic Details</h3>
                        <section>
                            <form>
                                <div class="row">
                                    <div class="col-md-3 col-sm-6">
                                        <div class="mb-3">
                                            <label>Owner Name</label>
                                            <input type="text" class="form-control" placeholder="Enter owner name">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="mb-3">
                                            <label>Mobile Number</label>
                                            <input type="text" class="form-control" placeholder="Enter mobile">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="mb-3">
                                            <label>Email</label>
                                            <input type="email" class="form-control" placeholder="Enter email">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="mb-3">
                                            <label>Aadhar Card</label>
                                            <input type="text" class="form-control" placeholder="Enter aadhar card">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="mb-3">
                                            <label>Pan Card</label>
                                            <input type="text" class="form-control" placeholder="Enter pan card">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="mb-3">
                                            <label>Date of Birth</label>
                                            <div id="datepicker1">
                                                <input type="text" class="form-control" placeholder="dd,mm,yyyy"
                                                    data-date-format="dd M, yyyy" data-date-container='#datepicker1'
                                                    data-provide="datepicker">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="mb-3">
                                            <label>City</label>
                                            <select class="form-select">
                                                <option>Select City</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="mb-3">
                                            <label>State</label>
                                            <select class="form-select">
                                                <option>Select State</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </section>
                        <!-- Shop Details -->
                        <h3>Shop Details</h3>
                        <section>
                            <form>
                                <div class="row">
                                    <div class="col-md-3 col-sm-6">
                                        <div class="mb-3">
                                            <label>Shop Image</label>
                                            <input type="file" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="mb-3">
                                            <label>Shop Name</label>
                                            <input type="text" class="form-control" placeholder="Enter shop name">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="mb-3">
                                            <label>Eamil</label>
                                            <input type="email" class="form-control" placeholder="Enter email">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="mb-3">
                                            <label>Landline Number</label>
                                            <input type="text" class="form-control" placeholder="Enter landline number">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="mb-3">
                                            <label>Mobile Number</label>
                                            <input type="text" class="form-control" placeholder="Enter mobile number">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="mb-3">
                                            <label>Shop Address</label>
                                            <input type="text" class="form-control" placeholder="Enter shop address">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="mb-3">
                                            <label>GST Number</label>
                                            <input type="text" class="form-control" placeholder="Enter gst number">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label>Shop Documents/License</label>
                                            <div class="d-flex mb-2">
                                                <input type="file" class="form-control me-2">
                                                <button type="button" class="btn btn-success w-md">Add More</button>
                                            </div>
                                            <div class="d-flex mb-2">
                                                <input type="file" class="form-control me-2">
                                                <button type="button" class="btn btn-danger w-md">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label>Certification</label>
                                            <div class="d-flex mb-2">
                                                <input type="file" class="form-control me-2">
                                                <button type="button" class="btn btn-success w-md">Add More</button>
                                            </div>
                                            <div class="d-flex mb-2">
                                                <input type="file" class="form-control me-2">
                                                <button type="button" class="btn btn-danger w-md">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </section>

                        <!-- Bank Details -->
                        <h3>Bank Details</h3>
                        <section>
                            <div>
                                <form>
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="mb-3">
                                                <label>Account Holder Name</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter account holder name">
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="mb-3">
                                                <label>Account Number</label>
                                                <input type="text" class="form-control" placeholder="Enter account number">
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="mb-3">
                                                <label>Bank Name</label>
                                                <input type="text" class="form-control" placeholder="Enter bank name">
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="mb-3">
                                                <label>IFSC Code</label>
                                                <input type="text" class="form-control" placeholder="Enter ifsc code">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </section>
                    </div>
                </div>
                <!-- end card body -->
            </div>
        </div>
    </section>
</body>
<?php include 'includes/admin-footerlink.php';?>

</html>