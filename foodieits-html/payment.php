<!doctype html>
<html lang="en">

<head>
    <!--d meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include 'includes/headlinks.php';?>
    <title>Foodieits- Payment</title>
</head>

<body>
    <main>
        <?php include 'includes/after-login-header.php';?>
        <div class="main-sec">
            <section class="breadcrumb-section light-bg">
                <div class="container">
                    <div class="breadcrumb-text">
                        <h1>Your Payment</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Payment List</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </section>
            <section class="form-section pd-sec-50">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-4">
                            <?php $page = 'payment'; include 'includes/profile-side-menu.php';?>
                        </div>
                        <div class="col-lg-9 col-md-8">
                            <div class="user-tabs">
                                <ul class="nav nav-pills" id="pills-tab">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pending-payment-tab" data-toggle="pill"
                                            href="#pending-payment">Pending Payment</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="all-payment-tab" data-toggle="pill"
                                            href="#all-payment">Complete Payment</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pending-payment">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>S.no</th>
                                                        <th>Shop Name</th>
                                                        <th>Days</th>
                                                        <th>Dates</th>
                                                        <th>Time</th>
                                                        <th>Quantity</th>
                                                        <th>Make Payment</th>
                                                        <th>View Invoice</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Daily Thali</td>
                                                        <td>
                                                            15
                                                        </td>
                                                        <td>1/02/2021 - 01/03/2021</td>
                                                        <td>Full Time</td>
                                                        <td>1</td>
                                                        <td>
                                                            <button type="button" class="btn btn-primary btn-sm">
                                                                Pay</button>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-secondary btn-sm"><i
                                                                    class="fa fa-eye"></i></button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="all-payment">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>S.no</th>
                                                        <th>Shop Name</th>
                                                        <th>Days</th>
                                                        <th>Dates</th>
                                                        <th>Time</th>
                                                        <th>Quantity</th>
                                                        <th>Payment Status</th>
                                                        <th>Payment Mode</th>
                                                        <th>View Invoice</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Daily Thali</td>
                                                        <td>
                                                            15
                                                        </td>
                                                        <td>1/02/2021 - 01/03/2021 </td>
                                                        <td>Full</td>
                                                        <td>1</td>
                                                        <td><span
                                                                class="badge badge-pill badge-success">Delivered</span>
                                                        </td>
                                                        <td>Cash</td>
                                                        <td>
                                                            <button type="button" class="btn btn-secondary btn-sm"><i
                                                                    class="fa fa-eye"></i></button>
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
            </section>
        </div>
        <?php include 'includes/footer.php';?>
    </main>
</body>
<?php include 'includes/footerlinks.php';?>

</html>