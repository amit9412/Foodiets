<?php
use yii\helpers\Url;

/*
<header id="header">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => ['class' => 'navbar-expand-md navbar-dark bg-dark fixed-top']
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest
                ? ['label' => 'Login', 'url' => ['/site/login']]
                : '<li class="nav-item">'
                . Html::beginForm(['/site/logout'])
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'nav-link btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
        ]
    ]);
    NavBar::end();
    ?>
</header>
*/


$userRole = (\Yii::$app->user->identity) ? \Yii::$app->user->identity->user_role : 'undefined';
if ($userRole == 'super-admin') {
    $main_url = Url::to(['/superadmin-panel/dashboard']);
} else if ($userRole == 'vendor') {
    $main_url = Url::to(['/vendor-panel/dashboard']);
} else if ($userRole == 'delivery-boy') {
    $main_url = Url::to(['/deliveryboy-panel/order/today-order']);
} else {
    $main_url = '';
}

?>

<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="<?= $main_url ?>" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="<?= Yii::getAlias('@web') ?>/themes/backend/admin-assets/images/logo-light.svg" alt=""
                            height="35">
                    </span>
                    <span class="logo-lg">
                        <img src="<?= Yii::getAlias('@web') ?>/themes/backend/admin-assets/images/logo-light.svg" alt=""
                            height="35">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                <i class="bx bx-menu-alt-left bx-sm"></i>
            </button>
        </div>
        <div class="d-flex">
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <img id="header-lang-img" src="<?= Yii::getAlias('@web') ?>/themes/backend/admin-assets/images/uk.png"
                        alt="Header Language" height="16">
                </button>
                <div class="dropdown-menu dropdown-menu-end">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="en">
                        <img src="<?= Yii::getAlias('@web') ?>/themes/backend/admin-assets/images/uk.png" alt="user-image"
                            class="me-1" height="12">
                        <span class="align-middle">English</span>
                    </a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr">
                        <img src="<?= Yii::getAlias('@web') ?>/themes/backend/admin-assets/images/india.png"
                            alt="user-image" class="me-1" height="12">
                        <span class="align-middle">हिंदी</span>
                    </a>
                </div>
            </div>
            <?php if ($userRole != 'delivery-boy') { ?>
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item noti-icon waves-effect"
                        id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="bx bx-bell bx-tada"></i>
                        <span class="badge bg-danger rounded-pill">3</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                        aria-labelledby="page-header-notifications-dropdown">
                        <div class="p-3">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="m-0" key="t-notifications"> Notifications </h6>
                                </div>
                                <div class="col-auto">
                                    <a href="javascript:void(0);" class="small" key="t-view-all"> View All</a>
                                </div>
                            </div>
                        </div>
                        <div data-simplebar style="max-height: 230px;">
                            <a href="javascript:void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="avatar-xs me-3">
                                        <span class="avatar-title bg-primary rounded-circle font-size-16">
                                            <i class="bx bx-cart"></i>
                                        </span>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mt-0 mb-1" key="t-your-order">Your order is placed</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1" key="t-grammer">If several languages coalesce the grammar</p>
                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">3
                                                    min ago</span></p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <img src="<?= Yii::getAlias('@web') ?>/themes/backend/admin-assets/images/avatar-3.jpg"
                                        class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                    <div class="media-body">
                                        <h6 class="mt-0 mb-1">James Lemire</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1" key="t-simplified">It will seem like simplified English.</p>
                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago">1
                                                    hours ago</span></p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="avatar-xs me-3">
                                        <span class="avatar-title bg-success rounded-circle font-size-16">
                                            <i class="bx bx-badge-check"></i>
                                        </span>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mt-0 mb-1" key="t-shipped">Your item is shipped</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1" key="t-grammer">If several languages coalesce the grammar</p>
                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">3
                                                    min ago</span></p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript:void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <img src="<?= Yii::getAlias('@web') ?>/themes/backend/admin-assets/images/avatar-4.jpg"
                                        class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                    <div class="media-body">
                                        <h6 class="mt-0 mb-1">Salena Layfield</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1" key="t-occidental">As a skeptical Cambridge friend of mine
                                                occidental.</p>
                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago">1
                                                    hours ago</span></p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="p-2 border-top d-grid">
                            <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                <i class="mdi mdi-arrow-right-circle me-1"></i> <span key="t-view-more">View More..</span>
                            </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user"
                        src="<?= Yii::getAlias('@web') ?>/themes/backend/admin-assets/images/avatar-1.jpg"
                        alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1" key="t-henry">Tarun Bhati</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">

                    <?php if ($userRole == 'super-admin') { ?>

                        <!-- super admin -->
                        <a class="dropdown-item" href="<?= Url::to(['/superadmin-panel/profile']) ?>">
                            <i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span>
                        </a>
                        <a class="dropdown-item" href="<?= Url::to(['/superadmin-panel/profile/change-password']) ?>">
                            <i class="bx bx-lock-open font-size-16 align-middle me-1"></i> <span key="t-lock-screen">Change
                                Password</span>
                        </a>
                        <a class="dropdown-item text-danger" href="<?= Url::to(['/superadmin-panel/profile/logout']) ?>">
                            <i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span
                                key="t-logout">Logout</span>
                        </a>

                    <?php } ?>


                    <?php if ($userRole == 'vendor') { ?>
                        <!-- vendor -->
                        <a class="dropdown-item" href="<?= Url::to(['/vendor-panel/profile']) ?>">
                            <i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span>
                        </a>
                        <a class="dropdown-item" href="<?= Url::to(['/vendor-panel/profile/edit-profile']) ?>">
                            <i class="bx bx-edit font-size-16 align-middle me-1"></i> <span key="t-edit-profile">Edit
                                Profile</span>
                        </a>
                        <a class="dropdown-item" href="<?= Url::to(['/vendor-panel/profile/change-password']) ?>">
                            <i class="bx bx-lock-open font-size-16 align-middle me-1"></i> <span key="t-lock-screen">Change
                                Password</span>
                        </a>
                        <a class="dropdown-item text-danger" href="<?= Url::to(['/vendor-panel/profile/logout']) ?>">
                            <i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span
                                key="t-logout">Logout</span>
                        </a>
                    <?php } ?>

                    <?php if ($userRole == 'delivery-boy') { ?>
                        <!-- delivery boy -->
                        <a class="dropdown-item" href="<?= Url::to(['/deliveryboy-panel/profile']) ?>">
                            <i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span>
                        </a>
                        <a class="dropdown-item" href="<?= Url::to(['/deliveryboy-panel/profile/change-password']) ?>">
                            <i class="bx bx-lock-open font-size-16 align-middle me-1"></i> <span key="t-lock-screen">Change
                                Password</span>
                        </a>
                        <a class="dropdown-item text-danger" href="<?= Url::to(['/deliveryboy-panel/profile/logout']) ?>">
                            <i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span
                                key="t-logout">Logout</span>
                        </a>
                    <?php } ?>


                </div>
            </div>
        </div>
    </div>
</header>