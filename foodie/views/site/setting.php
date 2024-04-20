<?php

use yii\helpers\Url;

/** @var yii\web\View $this */

$this->title = 'Foodieits- Setting';
?>

<section class="breadcrumb-section light-bg">
    <div class="container">
        <div class="breadcrumb-text">
            <h1>Your Settings</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= Url::to(['site/index']) ?>">Home</a></li>
                    <li class="breadcrumb-item active">Settings List</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<section class="form-section pd-sec-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <?php $page = 'settings';
                include(yii::getAlias('@web') . 'themes/frontend/profile-side-menu.php'); ?>
            </div>
            <div class="col-lg-9 col-md-8">
                <div class="user-tabs">
                    <form>
                        <div class="form-group row align-items-center">
                            <div class="col-sm-2">
                                <label class="col-form-label pt-0">Notification</label>
                            </div>
                            <div class="col-sm-10">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                    <label class="custom-control-label" for="customSwitch1"></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-sm-2">
                                <label class="col-form-label pt-0">Location</label>
                            </div>
                            <div class="col-sm-10">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                    <label class="custom-control-label" for="customSwitch2"></label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>