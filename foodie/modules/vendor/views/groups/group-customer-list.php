<?php

/* @var $this yii\web\View */
use yii\helpers\Url;

$this->title = Yii::t("app", "Admin | Chat");

?>

<!-- Breadcrumb Start-->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Group Customer</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="<?php echo BASE_URL ?>/vendor/dashboard.php">Dashboards</a></li>
                    <li class="breadcrumb-item active">Group Customer List</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End-->
<div class="card">
    <div class="card-body">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h4 class="card-title mb-0">Group List</h4>
            <div class="ms-2">
                <input type="search" class="form-control form-control-sm" placeholder="Search">
            </div>
        </div>
        <div class="table-responsive">
            <table class="table minWidth-600 align-middle table-nowrap mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Sno</th>
                        <th>Order Id</th>
                        <th>Customer Name</th>
                        <th>Email Id</th>
                        <th>Groups</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#1</td>
                        <td>#56985</td>
                        <td>John Doe</td>
                        <td>john.doe@gmail.com</td>
                        <td>
                            <select class="form-select">
                                <option>Select Group</option>
                                <option>Group A</option>
                                <option>Group B</option>
                                <option>Group C</option>
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>