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
            <h4 class="mb-sm-0 font-size-18">Admin Payment</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="<?= Url::to(['/vendor/dashboard']) ?>">Dashboards</a>
                    </li>
                    <li class="breadcrumb-item active">Payment List</li>
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
                <a class="nav-link active" data-bs-toggle="tab" href="#pending-payment" role="tab">
                    Pending
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#complete-payment" role="tab">
                    Complete
                </a>
            </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="pending-payment" role="tabpanel">
                <div class="d-flex flex-wrap align-items-center justify-content-between mb-3">
                    <div class="me-2 mb-2 mb-sm-0">
                        <input type="search" class="form-control form-control-sm" placeholder="Search">
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-middle table-nowrap mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Sno</th>
                                <th>Invoice Id</th>
                                <th>Vendor Id</th>
                                <th>Vendor Name</th>
                                <th>Amount</th>
                                <th>Payment Status</th>
                                <th>Make Payment</th>
                                <th>Send By</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#1</td>
                                <td>#56985</td>
                                <td>#56985</td>
                                <td>John Doe</td>
                                <td>₹1500.00</td>
                                <td><span class="badge badge-pill badge-soft-warning font-size-12">Pending</span>
                                </td>
                                <td><button type="button"
                                        class="btn btn-success w-xs btn-sm waves-effect waves-light">Pay</button></td>
                                <td>Vendor Name</td>
                                <td>05/08/2021</td>
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
            <div class="tab-pane" id="complete-payment" role="tabpanel">
                <div class="d-flex flex-wrap align-items-center justify-content-between mb-3">
                    <div class="me-2 mb-2 mb-sm-0">
                        <input type="search" class="form-control form-control-sm" placeholder="Search">
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-middle table-nowrap mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Sno</th>
                                <th>Transfer Id</th>
                                <th>Invoice Id</th>
                                <th>Vendor Id</th>
                                <th>Vendor Name</th>
                                <th>Amount</th>
                                <th>Payment Status</th>
                                <th>Send By</th>
                                <th>Date</th>
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
                                <td>₹1500.00</td>
                                <td><span class="badge badge-pill badge-soft-success font-size-12">Paid</span>
                                </td>
                                <td>Vendor Name</td>
                                <td>05/08/2021</td>
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