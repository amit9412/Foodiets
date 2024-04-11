<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="<?php echo BASE_URL ?>/delivery-boy/dashboard.php" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="<?php echo ADMIN_IMAGES_URL ?>/logo-light.svg" alt="" height="35">
                    </span>
                    <span class="logo-lg">
                        <img src="<?php echo ADMIN_IMAGES_URL ?>/logo-light.svg" alt="" height="35">
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
                    <img id="header-lang-img" src="<?php echo ADMIN_IMAGES_URL ?>/uk.png" alt="Header Language"
                        height="16">
                </button>
                <div class="dropdown-menu dropdown-menu-end">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="en">
                        <img src="<?php echo ADMIN_IMAGES_URL ?>/uk.png" alt="user-image" class="me-1" height="12">
                        <span class="align-middle">English</span>
                    </a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr">
                        <img src="<?php echo ADMIN_IMAGES_URL ?>/india.png" alt="user-image" class="me-1" height="12">
                        <span class="align-middle">हिंदी</span>
                    </a>
                </div>
            </div>
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="<?php echo ADMIN_IMAGES_URL ?>/avatar-1.jpg"
                        alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1" key="t-henry">Tarun Bhati</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="<?php echo BASE_URL?>/delivery-boy/profile.php"><i
                            class="bx bx-user font-size-16 align-middle me-1"></i> <span
                            key="t-profile">Profile</span></a>
                    <a class="dropdown-item" href="<?php echo BASE_URL?>/delivery-boy/change-password.php"><i
                            class="bx bx-lock-open font-size-16 align-middle me-1"></i> <span key="t-lock-screen">Change
                            Password</span></a>
                    <a class="dropdown-item text-danger" href="<?php echo BASE_URL?>/delivery-boy/index.php"><i
                            class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span
                            key="t-logout">Logout</span></a>
                </div>
            </div>
        </div>
    </div>
</header>