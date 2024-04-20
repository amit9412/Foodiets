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
            <h4 class="mb-sm-0 font-size-18">Complete Invoice</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="<?php echo BASE_URL ?>/vendor/dashboard.php">Dashboards</a></li>
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
                <a class="nav-link active px-2" data-bs-toggle="tab" href="#admin-invoice" role="tab">
                    Admin
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link px-2" data-bs-toggle="tab" href="#customer-invoice" role="tab">
                    Customer
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link px-2" data-bs-toggle="tab" href="#received-invoice" role="tab">
                    Received
                </a>
            </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="admin-invoice" role="tabpanel">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <div class="">
                        <input type="search" class="form-control form-control-sm" placeholder="Search invoice">
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-middle table-nowrap mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Sno</th>
                                <th>Invoice Id</th>
                                <th>Transfer Id </th>
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
                                <td>₹1500.00</td>
                                <td><span class="badge badge-pill badge-soft-success font-size-12">Paid</span>
                                </td>
                                <td>05/08/2021</td>
                                <td>You</td>
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
            <div class="tab-pane" id="customer-invoice" role="tabpanel">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <div class="">
                        <input type="search" class="form-control form-control-sm" placeholder="Search invoice">
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-middle table-nowrap mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Sno</th>
                                <th>Invoice Id</th>
                                <th>Transfer Id </th>
                                <th>Order Id</th>
                                <th>Customer Name</th>
                                <th>Group Name</th>
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
                                <td>John Doe</td>
                                <td>A Group</td>
                                <td>₹1500.00</td>
                                <td><span class="badge badge-pill badge-soft-success font-size-12">Paid</span>
                                </td>
                                <td>05/08/2021</td>
                                <td>You</td>
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
            <div class="tab-pane" id="received-invoice" role="tabpanel">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <div class="">
                        <input type="search" class="form-control form-control-sm" placeholder="Search invoice">
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-middle table-nowrap mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Sno</th>
                                <th>Invoice Id</th>
                                <th>Transfer Id </th>
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
                                <td>₹1500.00</td>
                                <td><span class="badge badge-pill badge-soft-success font-size-12">Paid</span>
                                </td>
                                <td>05/08/2021</td>
                                <td>Admin</td>
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