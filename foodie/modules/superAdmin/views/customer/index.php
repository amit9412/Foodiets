<?php

use yii\helpers\Url;

?>

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Customers List</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="<?= Url::to(['/admin/dashboard']) ?>">Dashboards</a></li>
                    <li class=" breadcrumb-item active">List</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End-->
<div class="card">
    <div class="card-body">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h4 class="card-title mb-0">List</h4>
            <div class="ms-2">
                <input type="search" class="form-control form-control-sm" placeholder="Search customer">
            </div>
        </div>
        <div class="table-responsive">
            <table class="table align-middle table-nowrap mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Sno</th>
                        <th>Customer Id</th>
                        <th>Customer Name</th>
                        <th>Email Id</th>
                        <th>Mobile Number</th>
                        <th>Vendor</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (count($model) > 0) {
                        foreach ($model as $singleKey => $singleValue) {
                    ?>
                            <tr>
                                <td>#1</td>
                                <td><?= $singleValue->id ?></td>
                                <td><?= $singleValue->name ?></td>
                                <td><?= $singleValue->email ?></td>
                                <td><?= $singleValue->mobile ?></td>
                                <td>john</td>
                                <td>
                                    <span class="badge bg-success font-size-11">Active</span>
                                </td>
                                <td>
                                    <a href="<?= Url::to(['/admin/customer/view', 'id' => $singleValue->id]) ?>" class=" btn p-0 avatar-xs btn-primary waves-effect waves-light">
                                        <i class="bx bx-list-ul mt-2 font-size-15 align-middle"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php }
                    } else { ?>

                        <tr>
                            <td colspan="8">No Data Found!!</td>
                        </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>