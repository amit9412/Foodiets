<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

$this->title = Yii::t("app", "Admin | Login");

?>

<!-- Breadcrumb Start-->
<div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0 font-size-18">New Orders List</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a
                                                href="<?php echo BASE_URL?>/vendor/dashboard.php">Dashboards</a></li>
                                        <li class="breadcrumb-item active">New Orders</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Breadcrumb End-->
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="mb-2">
                                        <img class="rounded-circle avatar-sm" src="<?php echo ADMIN_IMAGES_URL ?>/avatar-2.jpg"
                                            alt="">
                                    </div>
                                    <h5 class="font-size-15 text-dark mb-1">John Doe</h5>
                                    <p class="text-muted mb-2">989-8878-987</p>

                                    <div>
                                        <span class="badge bg-secondary font-size-11 m-1">15 Days</span>
                                        <span class="badge bg-secondary font-size-11 m-1">Full Time</span>
                                    </div>
                                </div>
                                <div class="card-footer bg-transparent border-top">
                                    <div class="contact-links d-flex font-size-20">
                                        <div class="flex-fill">
                                            <a href="javascript:void(0);" id="sa-success" class="text-success">
                                                <i class="bx bx-user-check"></i>
                                            </a>
                                        </div>
                                        <div class="flex-fill">
                                            <a href="javascript:void(0);" id="sa-warning" class="text-danger"><i class="bx bx-user-x"></i></a>
                                        </div>
                                        <div class="flex-fill">
                                            <a href="<?php echo BASE_URL?>/vendor/customer-details.php" class="text-info"><i class="bx bx-list-ul"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="mb-2">
                                        <img class="rounded-circle avatar-sm" src="<?php echo ADMIN_IMAGES_URL ?>/avatar-2.jpg"
                                            alt="">
                                    </div>
                                    <h5 class="font-size-15 text-dark mb-1">John Doe</h5>
                                    <p class="text-muted mb-2">989-8878-987</p>

                                    <div>
                                        <span class="badge bg-secondary font-size-11 m-1">15 Days</span>
                                        <span class="badge bg-secondary font-size-11 m-1">Full Time</span>
                                    </div>
                                </div>
                                <div class="card-footer bg-transparent border-top">
                                    <div class="contact-links d-flex font-size-20">
                                        <div class="flex-fill">
                                            <a href="javascript:void(0);" id="sa-success" class="text-success">
                                                <i class="bx bx-user-check"></i>
                                            </a>
                                        </div>
                                        <div class="flex-fill">
                                            <a href="javascript:void(0);" id="sa-warning" class="text-danger"><i class="bx bx-user-x"></i></a>
                                        </div>
                                        <div class="flex-fill">
                                            <a href="<?php echo BASE_URL?>/vendor/customer-details.php" class="text-info"><i class="bx bx-list-ul"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="mb-2">
                                        <img class="rounded-circle avatar-sm" src="<?php echo ADMIN_IMAGES_URL ?>/avatar-2.jpg"
                                            alt="">
                                    </div>
                                    <h5 class="font-size-15 text-dark mb-1">John Doe</h5>
                                    <p class="text-muted mb-2">989-8878-987</p>

                                    <div>
                                        <span class="badge bg-secondary font-size-11 m-1">15 Days</span>
                                        <span class="badge bg-secondary font-size-11 m-1">Full Time</span>
                                    </div>
                                </div>
                                <div class="card-footer bg-transparent border-top">
                                    <div class="contact-links d-flex font-size-20">
                                        <div class="flex-fill">
                                            <a href="javascript:void(0);" id="sa-success" class="text-success">
                                                <i class="bx bx-user-check"></i>
                                            </a>
                                        </div>
                                        <div class="flex-fill">
                                            <a href="javascript:void(0);" id="sa-warning" class="text-danger"><i class="bx bx-user-x"></i></a>
                                        </div>
                                        <div class="flex-fill">
                                            <a href="<?php echo BASE_URL?>/vendor/customer-details.php" class="text-info"><i class="bx bx-list-ul"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="mb-2">
                                        <img class="rounded-circle avatar-sm" src="<?php echo ADMIN_IMAGES_URL ?>/avatar-2.jpg"
                                            alt="">
                                    </div>
                                    <h5 class="font-size-15 text-dark mb-1">John Doe</h5>
                                    <p class="text-muted mb-2">989-8878-987</p>

                                    <div>
                                        <span class="badge bg-secondary font-size-11 m-1">15 Days</span>
                                        <span class="badge bg-secondary font-size-11 m-1">Full Time</span>
                                    </div>
                                </div>
                                <div class="card-footer bg-transparent border-top">
                                    <div class="contact-links d-flex font-size-20">
                                        <div class="flex-fill">
                                            <a href="javascript:void(0);" id="sa-success" class="text-success">
                                                <i class="bx bx-user-check"></i>
                                            </a>
                                        </div>
                                        <div class="flex-fill">
                                            <a href="javascript:void(0);" id="sa-warning" class="text-danger"><i class="bx bx-user-x"></i></a>
                                        </div>
                                        <div class="flex-fill">
                                            <a href="<?php echo BASE_URL?>/vendor/customer-details.php" class="text-info"><i class="bx bx-list-ul"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>