<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

$this->title = Yii::t("app", "Vendor | Customers");

?>

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Customer Details</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="<?=Url::to(['/deliveryboy-panel/order/today-order'])?>">Orders List</a>
                    </li>
                    <li class="breadcrumb-item active">Details</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End-->
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <dl class="row mb-0">
                    <dt class="col-sm-3 mb-sm-2 mb-1">Customer Name</dt>
                    <dd class="col-sm-9 mb-sm-2 mb-3">John Doe</dd>
                    <dt class="col-sm-3 mb-sm-2 mb-1">Group Name</dt>
                    <dd class="col-sm-9 mb-sm-2 mb-3">A Group</dd>
                    <dt class="col-sm-3 mb-sm-2 mb-1">Order Id</dt>
                    <dd class="col-sm-9 mb-sm-2 mb-3">#56985</dd>
                    <dt class="col-sm-3 mb-sm-2 mb-1">Start Date</dt>
                    <dd class="col-sm-9 mb-sm-2 mb-3">01/01/2021</dd>
                    <dt class="col-sm-3 mb-sm-2 mb-1">End Date</dt>
                    <dd class="col-sm-9 mb-sm-2 mb-3">31/01/2021</dd>
                    <dt class="col-sm-3 mb-sm-2 mb-1">Tiffin (D/M/T)</dt>
                    <dd class="col-sm-9 mb-sm-2 mb-3">15 Days</dd>
                    <dt class="col-sm-3 mb-sm-2 mb-1">Time (F/M/N)</dt>
                    <dd class="col-sm-9 mb-sm-2 mb-3">Full</dd>
                    <dt class="col-sm-3 mb-sm-2 mb-1">Home Delivery Time</dt>
                    <dd class="col-sm-9 mb-sm-2 mb-3">Night</dd>
                    <dt class="col-sm-3 mb-sm-2 mb-1">Offices Delivery Time</dt>
                    <dd class="col-sm-9 mb-sm-2 mb-3">Morning</dd>
                    <dt class="col-sm-3 mb-sm-2 mb-1">Home Address</dt>
                    <dd class="col-sm-9 mb-sm-2 mb-3">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Reprehenderit error.</dd>
                    <dt class="col-sm-3 mb-sm-2 mb-1">Offices Address</dt>
                    <dd class="col-sm-9 mb-sm-2 mb-3">Lorem ipsum dolor sit amet consectetur
                    </dd>
                    <dt class="col-sm-3 mb-sm-2 mb-1">Status</dt>
                    <dd class="col-sm-9 mb-sm-2 mb-3">
                        <span class="badge bg-success font-size-11">Active</span>
                    </dd>
                </dl>
            </div>
        </div>
    </div>
</div>