<?php
use yii\helpers\Url;

?>

<div class="preloader">
    <div class="loading-text">
        <span class="loading-text-words" data-preloader="L">L</span>
        <span class="loading-text-words" data-preloader="O">O</span>
        <span class="loading-text-words" data-preloader="A">A</span>
        <span class="loading-text-words" data-preloader="D">D</span>
        <span class="loading-text-words" data-preloader="I">I</span>
        <span class="loading-text-words" data-preloader="N">N</span>
        <span class="loading-text-words" data-preloader="G">G</span>
    </div>
</div>
<a href="javascript:void(0);" class="back-home">
    <em class="fa fa-long-arrow-up"></em>
</a>
<header class="main-header">
    <div class="container">
        <div class="top-header">
            <div class="row">
                <div class="col-md-6 d-md-block d-none">
                    <ul class="unstyled">
                        <li><a href="javascript:void(0);"><em class="fa fa-envelope"></em> info@example.com</a></li>
                        <li><a href="javascript:void(0);"><em class="fa fa-phone"></em> +91-659-6598-784</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="unstyled social-icon">
                        <li><a href="javascript:void(0);"><em class="fa fa-facebook"></em></a></li>
                        <li><a href="javascript:void(0);"><em class="fa fa-twitter"></em></a></li>
                        <li><a href="javascript:void(0);"><em class="fa fa-pinterest"></em></a></li>
                        <li><a href="javascript:void(0);"><em class="fa fa-instagram"></em></a></li>
                        <li><a href="javascript:void(0);" data-toggle="modal" data-target="#becomeSeller">Become a
                                Seller</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="down-header">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="<?= Url::to(['/site/index']) ?>">
                    <img src="<?= Yii::getAlias('@web') ?>/themes/frontend/assets/img/logo.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto align-items-center">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= Url::to(['/site/index']) ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= Url::to(['/site/about']) ?>">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= Url::to(['/site/contact']) ?>">Contact</a>
                        </li>
                        <?php if (Yii::$app->user->isGuest) { ?>
                            <li class="nav-item">
                                <a class="nav-link btn nav-btn" href="login.php">Login</a>
                            </li>
                        <?php } else { ?>

                            <?php
                            $u = Yii::$app->user->identity;
                            ?>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="javascript:void(0);" data-toggle="dropdown">
                                    <?php if ($u) {
                                        echo $u->name;
                                    } ?>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="<?= Url::to(['/site/user']) ?>">Profile</a>
                                    <a class="dropdown-item" data-toggle="modal" data-target="#changePassword"
                                        href="javascript:void(0);">Change Password</a>
                                    <a class="dropdown-item" href="<?= Url::to(['/site/logout']) ?>">Logout</a>
                                </div>
                            </li>

                        <?php } ?>


                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>