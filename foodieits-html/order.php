<!doctype html>
<html lang="en">

<head>
    <!--d meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include 'includes/headlinks.php';?>
    <title>Foodieits- Order</title>
</head>

<body>
    <main>
        <?php include 'includes/after-login-header.php';?>
        <div class="main-sec">
            <section class="breadcrumb-section light-bg">
                <div class="container">
                    <div class="breadcrumb-text">
                        <h1>Your Order</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Order List</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </section>
            <section class="form-section pd-sec-50">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-4">
                            <?php $page = 'order'; include 'includes/profile-side-menu.php';?>
                        </div>
                        <div class="col-lg-9 col-md-8">
                            <div class="user-tabs">
                                <ul class="nav nav-pills" id="pills-tab">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="today-order-tab" data-toggle="pill"
                                            href="#today-order">Today Order</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="all-order-tab" data-toggle="pill"
                                            href="#all-order">Completed Orders</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="today-order">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>S.no</th>
                                                        <th>Shop Name</th>
                                                        <th>Delivery Status</th>
                                                        <th>Remark</th>
                                                        <th>Time</th>
                                                        <th>Quantity</th>
                                                        <th>Order Cancel</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Daily Thali</td>
                                                        <td>
                                                            <span class="badge badge-pill badge-warning">Pending</span>
                                                        </td>
                                                        <td></td>
                                                        <td>Full Time</td>
                                                        <td>1</td>
                                                        <td>
                                                            <button type="button" data-toggle="modal"
                                                                data-target="#orderCancel"
                                                                class="btn btn-danger btn-sm"> Cancel</button>
                                                        </td>
                                                        <td>
                                                            <a href="edit-food.php" class="btn btn-primary btn-sm"><i
                                                                    class="fa fa-edit"></i></a>
                                                            <button type="button" data-toggle="modal"
                                                                data-target="#viewInfo"
                                                                class="btn btn-secondary btn-sm"><i
                                                                    class="fa fa-eye"></i></button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="all-order">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>S.no</th>
                                                        <th>Shop Name</th>
                                                        <th>Delivery Status</th>
                                                        <th>Remark</th>
                                                        <th>Time</th>
                                                        <th>Cancel Status</th>
                                                        <th>Quantity</th>
                                                        <th>Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Daily Thali</td>
                                                        <td>
                                                            <span
                                                                class="badge badge-pill badge-success">Delivered</span>
                                                        </td>
                                                        <td></td>
                                                        <td>Morning</td>
                                                        <td>Morning Cancel</td>
                                                        <td>1</td>
                                                        <td>1/02/2021</td>
                                                        <td>
                                                            <button type="button" data-toggle="modal"
                                                                data-target="#viewInfo"
                                                                class="btn btn-secondary btn-sm"><i
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
<!-- Order Cancel Modal -->
<div class="modal fade" id="orderCancel" tabindex="-1" aria-labelledby="orderCancelLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="orderCancelLabel">Order Cancel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group">
                        <input type="date" class="form-control" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <select name="" id="" class="form-control">
                            <option value="">Morning</option>
                            <option value="">Night</option>
                            <option value="">Both</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Comment"></textarea>
                    </div>
                    <button type="button" class="btn btn-primary btn-block">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- View Info Modal -->
<div class="modal fade" id="viewInfo" tabindex="-1" aria-labelledby="viewInfoLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewInfoLabel">Order Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td>Shop Name</td>
                                <td>Daily Thali</td>
                            </tr>
                            <tr>
                                <td>Time</td>
                                <td>Full</td>
                            </tr>
                            <tr>
                                <td>Days</td>
                                <td>15</td>
                            </tr>
                            <tr>
                                <td>Start-End Date</td>
                                <td>15/01/2015 - 15/02/2015</td>
                            </tr>
                            <tr>
                                <td>Price</td>
                                <td>₹2,500 /Month</td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>Dolor ipsum dolor</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/footerlinks.php';?>

</html>