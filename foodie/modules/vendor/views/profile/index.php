<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

$this->title = Yii::t("app", "Vendor | Profile");

?>

<!-- Breadcrumb Start-->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">My Profile</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="<?=Url::to(['/vendor-panel/dashboard'])?>">Dashboards</a></li>
                    <li class="breadcrumb-item active">Profile Details</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End-->
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Owner Details</h4>
                <div>
                    <dl class="row mb-0">
                        <dt class="col-sm-5 mb-sm-2 mb-1">Owner Name</dt>
                        <dd class="col-sm-7 mb-sm-2 mb-3">John Doe</dd>
                        <dt class="col-sm-5 mb-sm-2 mb-1">Mobile Number</dt>
                        <dd class="col-sm-7 mb-sm-2 mb-3">(123) 123 1234</dd>
                        <dt class="col-sm-5 mb-sm-2 mb-1">Email Id</dt>
                        <dd class="col-sm-7 mb-sm-2 mb-3">john.doe@gmail.com</dd>
                        <dt class="col-sm-5 mb-sm-2 mb-1">Aadhar Card</dt>
                        <dd class="col-sm-7 mb-sm-2 mb-3">5698-98998-98655</dd>
                        <dt class="col-sm-5 mb-sm-2 mb-1">Pan Card</dt>
                        <dd class="col-sm-7 mb-sm-2 mb-3">ABCD-5698</dd>
                        <dt class="col-sm-5 mb-sm-2 mb-1">Date of Birth</dt>
                        <dd class="col-sm-7 mb-sm-2 mb-3">01/01/1990</dd>
                        <dt class="col-sm-5 mb-sm-2 mb-1">City</dt>
                        <dd class="col-sm-7 mb-sm-2 mb-3">Indore</dd>
                        <dt class="col-sm-5 mb-sm-2 mb-1">State</dt>
                        <dd class="col-sm-7 mb-sm-2 mb-3">M.P.</dd>
                        <dt class="col-sm-5 mb-sm-2 mb-1">Status</dt>
                        <dd class="col-sm-7 mb-sm-2 mb-3">
                            <span class="badge bg-success font-size-11">Verified</span>
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Bank Details</h4>
                <div>
                    <dl class="row mb-0">
                        <dt class="col-sm-5 mb-sm-2 mb-1">Account Holder Name</dt>
                        <dd class="col-sm-7 mb-sm-2 mb-3">John Doe</dd>
                        <dt class="col-sm-5 mb-sm-2 mb-1">Account Number</dt>
                        <dd class="col-sm-7 mb-sm-2 mb-3">(123) 123 1234</dd>
                        <dt class="col-sm-5 mb-sm-2 mb-1">Bank Name</dt>
                        <dd class="col-sm-7 mb-sm-2 mb-3">SBI Bank</dd>
                        <dt class="col-sm-5 mb-sm-2 mb-1">IFSC Code</dt>
                        <dd class="col-sm-7 mb-sm-2 mb-3">SBI-9898</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Shop Details</h4>
                <div>
                    <dl class="row mb-0">
                        <dt class="col-sm-5 mb-sm-2 mb-1">Shop Image</dt>
                        <dd class="col-sm-7 mb-sm-2 mb-3">
                            <img class="rounded-circle avatar-sm" alt=""
                                src="<?= Yii::getAlias('@web') ?>/themes/backend/admin-assets/images/avatar-2.jpg">
                        </dd>
                        <dt class="col-sm-5 mb-sm-2 mb-1">Shop Name</dt>
                        <dd class="col-sm-7 mb-sm-2 mb-3">Bhojan Thali</dd>
                        <dt class="col-sm-5 mb-sm-2 mb-1">Eamil Id</dt>
                        <dd class="col-sm-7 mb-sm-2 mb-3">bhojan.thali@gmail.com</dd>
                        <dt class="col-sm-5 mb-sm-2 mb-1">Landline Number</dt>
                        <dd class="col-sm-7 mb-sm-2 mb-3">899-96589-985</dd>
                        <dt class="col-sm-5 mb-sm-2 mb-1">Mobile Number</dt>
                        <dd class="col-sm-7 mb-sm-2 mb-3">899-96589-985</dd>
                        <dt class="col-sm-5 mb-sm-2 mb-1">Shop Address</dt>
                        <dd class="col-sm-7 mb-sm-2 mb-3">Lorem ipsum dolor sit, amet consectetur
                            adipisicing elit.</dd>
                        <dt class="col-sm-5 mb-sm-2 mb-1">GST</dt>
                        <dd class="col-sm-7 mb-sm-2 mb-3">5698-9898-989</dd>
                        <dt class="col-sm-5 mb-sm-2 mb-1">Shop Documents/License</dt>
                        <dd class="col-sm-7 mb-sm-2 mb-3">
                            <div class="popup-gallery d-flex flex-wrap">
                                <a class="me-2" href="<?= Yii::getAlias('@web') ?>/themes/backend/admin-assets/images/img-3.jpg" title="Project 1">
                                    <img class="img-thumbnail img-fluid" src="<?= Yii::getAlias('@web') ?>/themes/backend/admin-assets/images/img-3.jpg"
                                        alt="" width="120">
                                </a>
                                <a href="<?= Yii::getAlias('@web') ?>/themes/backend/admin-assets/images/img-3.jpg" title="Project 2">
                                    <img class="img-thumbnail img-fluid" src="<?= Yii::getAlias('@web') ?>/themes/backend/admin-assets/images/img-3.jpg"
                                        alt="" width="120">
                                </a>
                            </div>
                        </dd>
                        <dt class="col-sm-5 mb-sm-2 mb-1">Certification</dt>
                        <dd class="col-sm-7 mb-sm-2 mb-3">
                            <div class="popup-gallery d-flex flex-wrap">
                                <a class="me-2" href="<?= Yii::getAlias('@web') ?>/themes/backend/admin-assets/images/img-3.jpg" title="Project 1">
                                    <img class="img-thumbnail img-fluid" src="<?= Yii::getAlias('@web') ?>/themes/backend/admin-assets/images/img-3.jpg"
                                        alt="" width="120">
                                </a>
                                <a href="<?= Yii::getAlias('@web') ?>/themes/backend/admin-assets/images/img-3.jpg" title="Project 2">
                                    <img class="img-thumbnail img-fluid" src="<?= Yii::getAlias('@web') ?>/themes/backend/admin-assets/images/img-3.jpg"
                                        alt="" width="120">
                                </a>
                            </div>
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>