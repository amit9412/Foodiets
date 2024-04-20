<?php

use yii\helpers\Url;

/** @var yii\web\View $this */

$this->title = 'Foodieits- Book Food';
?>

<section class="breadcrumb-section light-bg">
    <div class="container">
        <div class="breadcrumb-text">
            <h1>About Us</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= Url::to(['site/index']) ?>">Home</a></li>
                    <li class="breadcrumb-item active">Book Food</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<section class="form-section pd-sec-50">
    <div class="container">
        <form>
            <h2 class="text-left">User Details</h2>
            <div class="form-row">
                <div class="col-md-4 col-sm-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter User Name">
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
            <h2 class="text-left">Food Details</h2>
            <div class="form-row">
                <div class="col-md-4 col-sm-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Quantity">
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
                            <option value="">Select Day/Month/Trial</option>
                            <option value="">Day</option>
                            <option value="">Month</option>
                            <option value="">Trial</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="form-group">
                        <select class="form-control form-select2">
                            <option value="">Select Days</option>
                            <option value="">Monday</option>
                            <option value="">Tuesday</option>
                            <option value="">Wednesday</option>
                            <option value="">Thursday</option>
                            <option value="">Friday</option>
                            <option value="">Saturday</option>
                            <option value="">Sunday</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Days">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="form-group">
                        <select class="form-control form-select2">
                            <option value="">Delivery Type</option>
                            <option value="">Full Time</option>
                            <option value="">Day</option>
                            <option value="">Night</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="form-group">
                        <select class="form-control form-select2">
                            <option value="">Select Address</option>
                            <option value="">Home</option>
                            <option value="">Office</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Home Address">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="form-group">
                        <select class="form-control form-select2">
                            <option value="">Full Time</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="form-group">
                        <select class="form-control form-select2">
                            <option value="">Select Address</option>
                            <option value="">Full Time Office</option>
                            <option value="">Full Time Home</option>
                            <option value="">Both Home or Office</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="form-group">
                        <select class="form-control form-select2">
                            <option value="">Select Office Time</option>
                            <option value="">Morning Office</option>
                            <option value="">Night Office</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="form-group">
                        <select class="form-control form-select2">
                            <option value="">Select Home Time</option>
                            <option value="">Morning Home</option>
                            <option value="">Night Home</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Office Address">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Home Address">
                    </div>
                </div>
            </div>
            <div class="text-right">
                <a href="<?= Url::to(['site/checkout']) ?>" class="btn btn-primary">Continue</a>
            </div>
        </form>
    </div>
</section>