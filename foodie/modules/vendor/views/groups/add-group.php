<?php

/* @var $this yii\web\View */
use yii\helpers\Url;

$this->title = Yii::t("app", "Vendor | Groups");

?>

<!-- Breadcrumb Start-->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Add Groups</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="<?= Url::to(['/vendor/dashboard']) ?>">Dashboards</a></li>
                    <li class="breadcrumb-item active">Groups</li>
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
                <button type="button" data-bs-toggle="modal" data-bs-target="#addGroups"
                    class="btn btn-primary btn-sm w-xs waves-effect waves-light">Add Group</button>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table align-middle table-nowrap mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Sno</th>
                        <th>Group Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#1</td>
                        <td>Group A</td>
                        <td>
                            <button type="button" class="btn p-0 avatar-xs btn-success waves-effect waves-light">
                                <i class="bx bx-edit-alt font-size-16 align-middle"></i>
                            </button>
                            <button id="sa-warning" type="button"
                                class="btn p-0 avatar-xs btn-danger waves-effect waves-light">
                                <i class="bx bx-trash-alt font-size-16 align-middle"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div id="addGroups" class="modal fade" tabindex="-1" aria-labelledby="addGroupsLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="addGroupsLabel">Add Group</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row mb-4">
                        <label for="Title" class="col-sm-4 col-form-label">Group Name</label>
                        <div class="col-sm-8">
                            <input id="Title" type="text" placeholder="Enter group name" class="form-control">
                        </div>
                    </div>
                    <div class="text-xl-end">
                        <button type="button" class="btn btn-secondary waves-effect"
                            data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary waves-effect waves-light">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>