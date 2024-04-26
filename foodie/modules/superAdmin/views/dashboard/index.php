<?php
use yii\helpers\Url;

?>

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Dashboard</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="<?= Url::to(['/superadmin-panel/dashboard']) ?>">Dashboards</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End-->
<div class="row">
    <div class="col-md-4">
        <div class="card mini-stats-wid">
            <div class="card-body">
                <div class="media">
                    <div class="media-body">
                        <p class="text-muted fw-medium">Total Vendors</p>
                        <h4 class="mb-0">1500</h4>
                    </div>
                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                        <span class="avatar-title">
                            <i class="bx bx-user-pin font-size-24"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mini-stats-wid">
            <div class="card-body">
                <div class="media">
                    <div class="media-body">
                        <p class="text-muted fw-medium">Total Customer</p>
                        <h4 class="mb-0">35,723</h4>
                    </div>

                    <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                        <span class="avatar-title rounded-circle bg-primary">
                            <i class="bx bx-user font-size-24"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mini-stats-wid">
            <div class="card-body">
                <div class="media">
                    <div class="media-body">
                        <p class="text-muted fw-medium">Total Earnings</p>
                        <h4 class="mb-0">₹1600.00</h4>
                    </div>

                    <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                        <span class="avatar-title rounded-circle bg-primary">
                            <i class="bx bx-rupee font-size-24"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div id="bar-charts" dir="ltr"></div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h4 class="card-title mb-0">Contact Massage</h4>
                    <div class="ms-2">
                        <input type="search" class="form-control form-control-sm" placeholder="Search">
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-middle table-nowrap mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Sno</th>
                                <th>Date</th>
                                <th>Full Name</th>
                                <th>Phone/Mobile</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#1</td>
                                <td>10/04/2021</td>
                                <td>John Doe</td>
                                <td>656-6989-698</td>
                                <td>
                                    Lorem ipsum dolor sit...
                                </td>
                                <td>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#ViewDetails"
                                        class="btn p-0 avatar-xs btn-primary waves-effect waves-light">
                                        <i class="bx bx-list-ul font-size-16 align-middle"></i>
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
    </div>
</div>
<div id="ViewDetails" class="modal fade" tabindex="-1" aria-labelledby="ViewDetailsLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="ViewDetailsLabel">View Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5>Full Name</h5>
                <p>John Doe</p>
                <h5>Phone/Mobile</h5>
                <p>656-6989-698 </p>
                <h5>Description</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa illo porro reprehenderit accusamus
                    velit non quis. Aliquam officia suscipit voluptate perferendis? Nesciunt aperiam quae voluptas,
                    molestiae doloribus voluptatem molestias modi.</p>
            </div>
        </div>
    </div>
</div>