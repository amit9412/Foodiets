<?php
use yii\helpers\Url;

$this->title = Yii::t("app", "Total Order");
?>
<!-- Breadcrumb Start-->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Total Order List</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="<?= Url::to(['/vendor-panel/dashboard']) ?>">Dashboards</a></li>
                    <li class="breadcrumb-item active">Orders</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End-->
<div class="card">
    <div class="card-body">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h4 class="card-title mb-0">Total Order</h4>
            <div class="ms-2">
                <input type="search" class="form-control form-control-sm" placeholder="Search order">
            </div>
        </div>
        <div class="table-responsive">
            <table class="table align-middle table-nowrap mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Sno</th>
                        <th>Order Id</th>
                        <th>Customer Name</th>
                        <th>Email Id</th>
                        <th>Mobile Number</th>
                        <th>Group Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#1</td>
                        <td>#56985</td>
                        <td>John Doe</td>
                        <td>john.doe@gmail.com</td>
                        <td>989-8878-987</td>
                        <td>A Group</td>
                        <td>
                            <div class="form-check form-switch form-switch-md" dir="ltr">
                                <input class="form-check-input" type="checkbox" id="SwitchCheckSizemd">
                                <label class="form-check-label" for="SwitchCheckSizemd"></label>
                            </div>
                        </td>
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