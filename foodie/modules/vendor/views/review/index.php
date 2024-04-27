<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

$this->title = Yii::t("app", "Vendor | Review");

?>

<!-- Breadcrumb Start-->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Review List</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="<?= Url::to(['/vendor-panel/dashboard']) ?>">Dashboards</a></li>
                    <li class="breadcrumb-item active">List</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End-->
<div class="card">
    <div class="card-body">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h4 class="card-title mb-0">Review List</h4>
            <div class="ms-2">
                <input type="search" class="form-control form-control-sm" placeholder="Search review">
            </div>
        </div>
        <div class="table-responsive">
            <table class="table align-middle table-nowrap mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Sno</th>
                        <th>Image</th>
                        <th>Customer Name</th>
                        <th>Email Id</th>
                        <th>Review</th>
                        <th>Comment</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#1</td>
                        <td>
                            <img src="<?= Yii::getAlias('@web') ?>/themes/backend/admin-assets/images/avatar-2.jpg" alt=""
                                class="avatar-xs rounded-circle">
                        </td>
                        <td>John Doe</td>
                        <td>john.doe@gmail.com</td>
                        <td>
                            <i class="bx bxs-star text-warning"></i>
                            <i class="bx bxs-star text-warning"></i>
                            <i class="bx bxs-star text-warning"></i>
                            <i class="bx bxs-star text-warning"></i>
                            <i class="bx bx-star text-warning"></i>
                        </td>
                        <td>Lorem ipsum dolor sit...</td>
                        <td>
                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#ViewDetails"
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