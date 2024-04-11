<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Customers List</title>
    <?php include 'includes/admin-head.php';?>
</head>

<body data-sidebar="dark">
    <div id="layout-wrapper">
        <!-- Header Start-->
        <?php include 'includes/admin-header.php';?>
        <!-- Header End-->
        <!-- Sidebar Start-->
        <?php include 'includes/left-sidebar.php';?>
        <!-- Sidebar End-->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <!-- Breadcrumb Start-->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0 font-size-18">Chat</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a
                                                href="<?php echo BASE_URL?>/vendor/dashboard.php">Dashboards</a></li>
                                        <li class="breadcrumb-item active">Chat</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Breadcrumb End-->
                    <div class="d-lg-flex">
                        <div class="chat-leftsidebar me-lg-4">
                            <div class="">
                                <div class="py-3 border-bottom">
                                    <div class="media align-items-center">
                                        <div class="align-self-center me-3">
                                            <img src="<?php echo ADMIN_IMAGES_URL ?>/avatar-1.jpg"
                                                class="avatar-xs rounded-circle" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h5 class="font-size-15 mt-0 mb-1">Henry Wells</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="search-box chat-search-box py-3">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <i class="bx bx-search-alt search-icon"></i>
                                    </div>
                                </div>

                                <div class="chat-leftsidebar-nav">
                                    <ul class="nav nav-pills nav-justified">
                                        <li class="nav-item">
                                            <a href="#chat" data-bs-toggle="tab" aria-expanded="true"
                                                class="nav-link active">
                                                <i class="bx bx-chat font-size-20 d-sm-none"></i>
                                                <span class="d-none d-sm-block">Chat</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#groups" data-bs-toggle="tab" aria-expanded="false"
                                                class="nav-link">
                                                <i class="bx bx-group font-size-20 d-sm-none"></i>
                                                <span class="d-none d-sm-block">Groups</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content py-3">
                                        <div class="tab-pane show active" id="chat">
                                            <div>
                                                <ul class="list-unstyled chat-list" data-simplebar
                                                    style="max-height: 410px;">
                                                    <li class="active">
                                                        <a href="javascript:void(0);">
                                                            <div class="media">

                                                                <div class="align-self-center me-3">
                                                                    <img src="<?php echo ADMIN_IMAGES_URL ?>/avatar-2.jpg"
                                                                        class="rounded-circle avatar-xs" alt="">
                                                                </div>

                                                                <div class="media-body overflow-hidden">
                                                                    <h5 class="text-truncate font-size-14 mb-1">Steven
                                                                        Franklin</h5>
                                                                    <p class="text-truncate mb-0">Hey! there I'm
                                                                        available</p>
                                                                </div>
                                                                <div class="font-size-11">05 min</div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">
                                                            <div class="media">

                                                                <div class="align-self-center me-3">
                                                                    <img src="<?php echo ADMIN_IMAGES_URL ?>/avatar-3.jpg"
                                                                        class="rounded-circle avatar-xs" alt="">
                                                                </div>
                                                                <div class="media-body overflow-hidden">
                                                                    <h5 class="text-truncate font-size-14 mb-1">Adam
                                                                        Miller</h5>
                                                                    <p class="text-truncate mb-0">I've finished it! See
                                                                        you so</p>
                                                                </div>
                                                                <div class="font-size-11">12 min</div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="groups">
                                            <ul class="list-unstyled chat-list" data-simplebar
                                                style="max-height: 410px;">
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <div class="media align-items-center">
                                                            <div class="avatar-xs me-3">
                                                                <span
                                                                    class="avatar-title rounded-circle bg-primary bg-soft text-primary">
                                                                    G
                                                                </span>
                                                            </div>

                                                            <div class="media-body">
                                                                <h5 class="font-size-14 mb-0">General</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <div class="media align-items-center">
                                                            <div class="avatar-xs me-3">
                                                                <span
                                                                    class="avatar-title rounded-circle bg-primary bg-soft text-primary">
                                                                    R
                                                                </span>
                                                            </div>

                                                            <div class="media-body">
                                                                <h5 class="font-size-14 mb-0">Reporting</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <div class="media align-items-center">
                                                            <div class="avatar-xs me-3">
                                                                <span
                                                                    class="avatar-title rounded-circle bg-primary bg-soft text-primary">
                                                                    M
                                                                </span>
                                                            </div>

                                                            <div class="media-body">
                                                                <h5 class="font-size-14 mb-0">Meeting</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <div class="media align-items-center">
                                                            <div class="avatar-xs me-3">
                                                                <span
                                                                    class="avatar-title rounded-circle bg-primary bg-soft text-primary">
                                                                    A
                                                                </span>
                                                            </div>

                                                            <div class="media-body">
                                                                <h5 class="font-size-14 mb-0">Project A</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <div class="media align-items-center">
                                                            <div class="avatar-xs me-3">
                                                                <span
                                                                    class="avatar-title rounded-circle bg-primary bg-soft text-primary">
                                                                    B
                                                                </span>
                                                            </div>

                                                            <div class="media-body">
                                                                <h5 class="font-size-14 mb-0">Project B</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="w-100 user-chat">
                            <div class="card">
                                <div class="p-3 border-bottom ">
                                    <h5 class="font-size-15 mb-0">Steven Franklin</h5>
                                </div>
                                <div>
                                    <div class="chat-conversation p-3">
                                        <ul class="list-unstyled mb-0" data-simplebar style="max-height: 486px;">
                                            <li>
                                                <div class="chat-day-title">
                                                    <span class="title">Today</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="conversation-list">
                                                    <div class="ctext-wrap">
                                                        <p class="mb-0">
                                                            Hello!
                                                        </p>

                                                    </div>
                                                    <p class="chat-time mt-1 d-flex align-items-center mb-0"><i
                                                            class="bx bx-time-five align-middle me-1"></i> 10:00</p>
                                                </div>
                                            </li>
                                            <li class="right">
                                                <div class="conversation-list">
                                                    <div class="ctext-wrap">
                                                        <p class="mb-0">
                                                            Hi, How are you? What about our next meeting?
                                                        </p>
                                                    </div>
                                                    <p class="chat-time mt-1 d-flex align-items-center mb-0"><i
                                                            class="bx bx-time-five align-middle me-1"></i> 10:02</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="conversation-list">
                                                    <div class="ctext-wrap">
                                                        <p class="mb-0">
                                                            Hello!
                                                        </p>

                                                    </div>
                                                    <p class="chat-time mt-1 d-flex align-items-center mb-0"><i
                                                            class="bx bx-time-five align-middle me-1"></i> 10:00</p>
                                                </div>
                                            </li>
                                            <li class="right">
                                                <div class="conversation-list">
                                                    <div class="ctext-wrap">
                                                        <p class="mb-0">
                                                            Hi, How are you? What about our next meeting?
                                                        </p>
                                                    </div>
                                                    <p class="chat-time mt-1 d-flex align-items-center mb-0"><i
                                                            class="bx bx-time-five align-middle me-1"></i> 10:02</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="conversation-list">
                                                    <div class="ctext-wrap">
                                                        <p class="mb-0">
                                                            Hello!
                                                        </p>

                                                    </div>
                                                    <p class="chat-time mt-1 d-flex align-items-center mb-0"><i
                                                            class="bx bx-time-five align-middle me-1"></i> 10:00</p>
                                                </div>
                                            </li>
                                            <li class="right">
                                                <div class="conversation-list">
                                                    <div class="ctext-wrap">
                                                        <p class="mb-0">
                                                            Hi, How are you? What about our next meeting?
                                                        </p>
                                                    </div>
                                                    <p class="chat-time mt-1 d-flex align-items-center mb-0"><i
                                                            class="bx bx-time-five align-middle me-1"></i> 10:02</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="conversation-list">
                                                    <div class="ctext-wrap">
                                                        <p class="mb-0">
                                                            Hello!
                                                        </p>

                                                    </div>
                                                    <p class="chat-time mt-1 d-flex align-items-center mb-0"><i
                                                            class="bx bx-time-five align-middle me-1"></i> 10:00</p>
                                                </div>
                                            </li>
                                            <li class="right">
                                                <div class="conversation-list">
                                                    <div class="ctext-wrap">
                                                        <p class="mb-0">
                                                            Hi, How are you? What about our next meeting?
                                                        </p>
                                                    </div>
                                                    <p class="chat-time mt-1 d-flex align-items-center mb-0"><i
                                                            class="bx bx-time-five align-middle me-1"></i> 10:02</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="conversation-list">
                                                    <div class="ctext-wrap">
                                                        <p class="mb-0">
                                                            Hello!
                                                        </p>

                                                    </div>
                                                    <p class="chat-time mt-1 d-flex align-items-center mb-0"><i
                                                            class="bx bx-time-five align-middle me-1"></i> 10:00</p>
                                                </div>
                                            </li>
                                            <li class="right">
                                                <div class="conversation-list">
                                                    <div class="ctext-wrap">
                                                        <p class="mb-0">
                                                            Hi, How are you? What about our next meeting?
                                                        </p>
                                                    </div>
                                                    <p class="chat-time mt-1 d-flex align-items-center mb-0"><i
                                                            class="bx bx-time-five align-middle me-1"></i> 10:02</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="conversation-list">
                                                    <div class="ctext-wrap">
                                                        <p class="mb-0">
                                                            Hello!
                                                        </p>

                                                    </div>
                                                    <p class="chat-time mt-1 d-flex align-items-center mb-0"><i
                                                            class="bx bx-time-five align-middle me-1"></i> 10:00</p>
                                                </div>
                                            </li>
                                            <li class="right">
                                                <div class="conversation-list">
                                                    <div class="ctext-wrap">
                                                        <p class="mb-0">
                                                            Hi, How are you? What about our next meeting?
                                                        </p>
                                                    </div>
                                                    <p class="chat-time mt-1 d-flex align-items-center mb-0"><i
                                                            class="bx bx-time-five align-middle me-1"></i> 10:02</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="p-3 chat-input-section">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control chat-input"
                                                        placeholder="Enter Message...">
                                                    <div class="chat-input-links" id="tooltip-container">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item"><a href="javascript:void(0);"
                                                                    title="Emoji"><i
                                                                        class="mdi mdi-emoticon-happy-outline"></i></a>
                                                            </li>
                                                            <li class="list-inline-item"><a href="javascript:void(0);"
                                                                    title="Images"><i
                                                                        class="mdi mdi-file-image-outline"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 text-end">
                                                <button type="submit"
                                                    class="btn btn-primary btn-rounded chat-send w-md waves-effect waves-light"><span
                                                        class="d-none d-sm-inline-block me-2">Send</span> <i
                                                        class="mdi mdi-send"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Start-->
        <?php include 'includes/admin-footer.php';?>
        <!-- Footer End-->
    </div>
</body>
<?php include 'includes/admin-footerlink.php';?>

</html>