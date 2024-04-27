<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

$this->title = Yii::t("app", "Admin | Received Invoice");

?>

<!-- Breadcrumb Start-->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Received Invoice</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="<?= Url::to(['/vendor-panel/dashboard']) ?>">Dashboards</a></li>
                    <li class="breadcrumb-item active">Invoice List</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End-->
<div class="card">
    <div class="card-body">
        <div class="d-flex align-items-center mb-3">
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
                        <th>Amount</th>
                        <th>Payment Status</th>
                        <th>Date</th>
                        <th>Make Payment</th>
                        <th>Send By</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#1</td>
                        <td>#56985</td>
                        <td>₹1500.00</td>
                        <td><span class="badge badge-pill badge-soft-warning font-size-12">Pending</span>
                        </td>
                        <td>05/08/2021</td>
                        <td>
                            <button type="button"
                                class="btn btn-success w-xs btn-sm waves-effect waves-light">Pay</button>
                        </td>
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