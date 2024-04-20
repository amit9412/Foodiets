<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

$this->title = Yii::t("app", "Admin | Notification");

?>
<!-- Breadcrumb Start-->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Notification List</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="<?php echo BASE_URL ?>/vendor/dashboard.php">Dashboards</a></li>
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
            <div class="">
                <input type="search" class="form-control form-control-sm" placeholder="Search notification">
            </div>
        </div>
        <div class="table-responsive">
            <table class="table align-middle table-nowrap mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Sno</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Date & Time</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#1</td>
                        <td>Your order is placed</td>
                        <td>
                            <div class="break-txt maxWidth-350">
                                "Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Hic animi nostrum necessitatibus."-
                                <strong>Admin</strong>
                            </div>
                        </td>
                        <td>15/05/2021</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>