<!doctype html>
<html lang="en">

<head>
    <!--d meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include 'includes/headlinks.php';?>
    <title>Foodieits- Checkout</title>
</head>

<body>
    <main>
        <?php include 'includes/after-login-header.php';?>
        <div class="main-sec">
            <section class="breadcrumb-section light-bg">
                <div class="container">
                    <div class="breadcrumb-text">
                        <h1>Checkout</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="book-food.php">Book Food</a></li>
                                <li class="breadcrumb-item active">Checkout</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </section>
            <section class="form-section pd-sec-50">
                <div class="container">
                    <form>
                        <div class="row">
                            <div class="col-lg-8 col-md-7">
                                <h2 class="text-left">Billing Details</h2>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter First Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter Last Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter Mobile Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter Email Id">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter Address">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select class="form-control form-select2">
                                                <option value="">Select City</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select class="form-control form-select2">
                                                <option value="">Select State</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter Offer Code">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Write Note"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-5">
                                <h2 class="text-left">Order Summury</h2>
                                <div class="order-list">
                                    <ul>
                                        <li>
                                            <span>Order Id</span>
                                            #5564554
                                        </li>
                                        <li>
                                            <span>Quantity:</span>
                                            1
                                        </li>
                                        <li>
                                            <span>Days:</span>
                                            5
                                        </li>
                                        <li>
                                            <span>Prize:</span>
                                            ₹2,490.00
                                        </li>
                                        <li>
                                            <span>Discount:</span>
                                            -₹10.00
                                        </li>
                                        <li>
                                            <span>Sub Total:</span>
                                            ₹2,490.00
                                        </li>
                                        <li>
                                            <span>Grand Total:</span>
                                            ₹2,490.00
                                        </li>
                                    </ul>
                                </div>
                                <div class="mt-3">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#makePayment"
                                        class="btn btn-primary btn-block">Payment</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
        <?php include 'includes/footer.php';?>
    </main>
</body>
<!-- Payment Modal -->
<div class="modal fade" id="makePayment" tabindex="-1" aria-labelledby="makePaymentLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="makePaymentLabel">Payment Mode</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="mb-3">
                        <div class="custom-control custom-radio mb-2">
                            <input type="radio" id="customRadio1" name="pay" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio1">Direct Bank Transfer</label>
                        </div>
                        <div class="custom-control custom-radio mb-2">
                            <input type="radio" id="customRadio2" name="pay" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio2">Credit/Debit Card</label>
                        </div>
                        <div class="custom-control custom-radio mb-2">
                            <input type="radio" id="customRadio3" name="pay" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio3">PTM</label>
                        </div>
                        <div class="custom-control custom-radio mb-2">
                            <input type="radio" id="customRadio4" name="pay" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio4">Phone Pay</label>
                        </div>
                        <div class="custom-control custom-radio mb-2">
                            <input type="radio" id="customRadio5" name="pay" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio5">UPI Scan</label>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary btn-block">Pay</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/footerlinks.php';?>

</html>