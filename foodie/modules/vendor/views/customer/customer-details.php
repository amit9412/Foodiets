<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

$this->title = Yii::t("app", "Admin | Chat");

?>


<!-- Breadcrumb Start-->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Customer Details</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="<?php echo BASE_URL ?>/vendor/dashboard.php">Dashboards</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo BASE_URL ?>/vendor/new-order.php">New Order</a></li>
                    <li class="breadcrumb-item active">Details</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End-->
<div class="row">
    <div class="col-lg-5">
        <div class="card">
            <div class="card-body">
                <div class="media mb-3">
                    <img src="<?php echo ADMIN_IMAGES_URL ?>/avatar-2.jpg" alt="" class="avatar-sm rounded-circle me-3">
                    <div class="media-body overflow-hidden">
                        <h5 class="text-truncate font-size-15 mb-1">John Doe</h5>
                        <p class="text-muted mb-0">john.doe@gmail.com</p>
                    </div>
                </div>
                <div>
                    <dl class="row mb-0">
                        <dt class="col-sm-6 mb-sm-2 mb-1">Id</dt>
                        <dd class="col-sm-6 mb-sm-2 mb-3">#5698</dd>
                        <dt class="col-sm-6 mb-sm-2 mb-1">Mobile Number</dt>
                        <dd class="col-sm-6 mb-sm-2 mb-3">(123) 123 1234</dd>
                        <dt class="col-sm-6 mb-sm-2 mb-1">Date of Birth</dt>
                        <dd class="col-sm-6 mb-sm-2 mb-3">01/01/1990</dd>
                        <dt class="col-sm-6 mb-sm-2 mb-1">City</dt>
                        <dd class="col-sm-6 mb-sm-2 mb-3">Indore</dd>
                        <dt class="col-sm-6 mb-sm-2 mb-1">State</dt>
                        <dd class="col-sm-6 mb-sm-2 mb-3">M.P.</dd>
                        <dt class="col-sm-6 mb-sm-2 mb-1">Request</dt>
                        <dd class="col-sm-6 mb-sm-2 mb-3">
                            <span class="badge bg-warning font-size-11">Pending</span>
                        </dd>
                        <dt class="col-sm-6 mb-sm-2 mb-1">Status</dt>
                        <dd class="col-sm-6 mb-sm-2 mb-3">
                            <span class="badge bg-success font-size-11">Active</span>
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Food Details</h4>
                <dl class="row mb-0">
                    <dt class="col-sm-6 mb-sm-2 mb-1">Group Name</dt>
                    <dd class="col-sm-6 mb-sm-2 mb-3">A Group</dd>
                    <dt class="col-sm-6 mb-sm-2 mb-1">Order Id</dt>
                    <dd class="col-sm-6 mb-sm-2 mb-3">#56985</dd>
                    <dt class="col-sm-6 mb-sm-2 mb-1">Payment</dt>
                    <dd class="col-sm-6 mb-sm-2 mb-3">₹1500.00</dd>
                    <dt class="col-sm-6 mb-sm-2 mb-1">Payment Mode</dt>
                    <dd class="col-sm-6 mb-sm-2 mb-3">Cash</dd>
                    <dt class="col-sm-6 mb-sm-2 mb-1">Payment Status</dt>
                    <dd class="col-sm-6 mb-sm-2 mb-3">Paid</dd>
                    <dt class="col-sm-6 mb-sm-2 mb-1">Start Date</dt>
                    <dd class="col-sm-6 mb-sm-2 mb-3">01/01/2021</dd>
                    <dt class="col-sm-6 mb-sm-2 mb-1">End Date</dt>
                    <dd class="col-sm-6 mb-sm-2 mb-3">31/01/2021</dd>
                    <dt class="col-sm-6 mb-sm-2 mb-1">Tiffin (D/M/T)</dt>
                    <dd class="col-sm-6 mb-sm-2 mb-3">15 Days</dd>
                    <dt class="col-sm-6 mb-sm-2 mb-1">Time (F/M/N)</dt>
                    <dd class="col-sm-6 mb-sm-2 mb-3">Full</dd>
                    <dt class="col-sm-6 mb-sm-2 mb-1">Home Delivery Time</dt>
                    <dd class="col-sm-6 mb-sm-2 mb-3">Night</dd>
                    <dt class="col-sm-6 mb-sm-2 mb-1">Offices Delivery Time</dt>
                    <dd class="col-sm-6 mb-sm-2 mb-3">Morning</dd>
                    <dt class="col-sm-6 mb-sm-2 mb-1">Home Address</dt>
                    <dd class="col-sm-6 mb-sm-2 mb-3">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Reprehenderit error.</dd>
                    <dt class="col-sm-6 mb-sm-2 mb-1">Offices Address</dt>
                    <dd class="col-sm-6 mb-sm-2 mb-3">Lorem ipsum dolor sit amet consectetur</dd>
                    <dt class="col-sm-6 mb-sm-2 mb-1">Select Days</dt>
                    <dd class="col-sm-6 mb-sm-2 mb-3">
                        Monday, Tuesday, Wednesday, Thursday, Friday, Saturday,
                        Sunday
                    </dd>
                </dl>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-tabs-custom mb-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#latest-order" role="tab">
                            Latest Order
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#all-order" role="tab">
                            All Order
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="latest-order" role="tabpanel">
                        <div class="d-flex align-items-center mb-3">
                            <div class="me-2">
                                <input type="search" class="form-control form-control-sm" placeholder="Search order">
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-middle table-nowrap mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Sno</th>
                                        <th>Date</th>
                                        <th>Order Id</th>
                                        <th>Order Status</th>
                                        <th>Remark</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#1</td>
                                        <td>06/09/2021</td>
                                        <td>#56985</td>
                                        <td>
                                            <span class="badge bg-success font-size-11">Delivered</span>
                                        </td>
                                        <td>
                                            <div class="break-txt maxWidth-350"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#2</td>
                                        <td>05/09/2021</td>
                                        <td>#56985</td>
                                        <td>
                                            <span class="badge bg-danger font-size-11">Cancel</span>
                                        </td>
                                        <td>
                                            <div class="break-txt maxWidth-350">
                                                "Lorem ipsum dolor sit amet consectetur adipisicing
                                                elit. Hic animi nostrum necessitatibus."-
                                                <strong>Admin</strong>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane" id="all-order" role="tabpanel">
                        <div class="d-flex align-items-center mb-3">
                            <div class="me-2">
                                <input type="search" class="form-control form-control-sm" placeholder="Search order">
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-middle table-nowrap mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Sno</th>
                                        <th>Date</th>
                                        <th>Order Id</th>
                                        <th>Order Status</th>
                                        <th>Remark</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#1</td>
                                        <td>06/09/2021</td>
                                        <td>#56985</td>
                                        <td>
                                            <span class="badge bg-success font-size-11">Delivered</span>
                                        </td>
                                        <td>
                                            <div class="break-txt maxWidth-350"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#2</td>
                                        <td>05/09/2021</td>
                                        <td>#56985</td>
                                        <td>
                                            <span class="badge bg-danger font-size-11">Cancel</span>
                                        </td>
                                        <td>
                                            <div class="break-txt maxWidth-350">
                                                "Lorem ipsum dolor sit amet consectetur adipisicing
                                                elit. Hic animi nostrum necessitatibus."-
                                                <strong>Admin</strong>
                                            </div>
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