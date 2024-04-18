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
            <h4 class="mb-sm-0 font-size-18">My Profile</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboards</a></li>
                    <li class="breadcrumb-item active">Profile Details</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End-->
<div class="card">
    <div class="card-body">
        <form>
            <div class="row mb-4">
                <label for="uploadlogo" class="col-sm-3 col-form-label">Upload Profile</label>
                <div class="col-sm-9">
                    <input type="file" class="form-control" id="uploadlogo">
                </div>
            </div>
            <div class="row mb-4">
                <label for="unm" class="col-sm-3 col-form-label">Full Name</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="unm" placeholder="Enter Full Name">
                </div>
            </div>
            <div class="row mb-4">
                <label for="enm" class="col-sm-3 col-form-label">Eamil</label>
                <div class="col-sm-9">
                    <input type="email" class="form-control" id="enm" placeholder="Enter Email">
                </div>
            </div>
            <div class="text-xl-end">
                <button type="submit" class="btn btn-primary w-md">Submit</button>
            </div>
        </form>
    </div>
</div>