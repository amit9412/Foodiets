<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

$this->title = Yii::t("app", "Admin | Chat");

?>

<!-- Breadcrumb Start-->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Reports</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="<?php echo BASE_URL ?>/vendor/dashboard.php">Dashboards</a></li>
                    <li class="breadcrumb-item active">Reports</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End-->
<div class="card">
    <div class="card-body">
        <div class="d-flex flex-wrap">
            <h5 class="card-title me-2">All Reports</h5>
            <div class="ms-auto">
                <div class="toolbar button-items text-end">
                    <button type="button" class="btn btn-primary active btn-sm">
                        ALL
                    </button>
                    <button type="button" class="btn btn-light btn-sm">
                        1M
                    </button>
                    <button type="button" class="btn btn-light btn-sm">
                        6M
                    </button>
                    <button type="button" class="btn btn-light btn-sm active">
                        1Y
                    </button>
                </div>
            </div>
        </div>
        <div id="column-charts" dir="ltr"></div>
    </div>
</div>