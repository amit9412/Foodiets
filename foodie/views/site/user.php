<?php

use yii\helpers\Url;

/** @var yii\web\View $this */

$this->title = 'Foodieits- Profile';
?>

<section class="breadcrumb-section light-bg">
    <div class="container">
        <div class="breadcrumb-text">
            <h1>Profile</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= Url::to(['site/index']) ?>">Home</a></li>
                    <li class="breadcrumb-item active">User Details</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<section class="form-section pd-sec-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <?php $page = 'user';
                include(yii::getAlias('@web') . 'themes/frontend/profile-side-menu.php'); ?>
            </div>
            <div class="col-lg-9 col-md-8">
                <form>
                    <div class="form-row">
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <div class="custom-file overflow-hidden">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter User Name">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Email">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Mobile Number">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Adharcard Number">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <input type="date" class="form-control" placeholder="Enter Date of Birth">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <select class="form-control form-select2">
                                    <option value="">Select City</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <select class="form-control form-select2">
                                    <option value="">Select State</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="text-right">
                        <a href="javascript:void(0);" class="btn btn-primary">Update Profile</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>