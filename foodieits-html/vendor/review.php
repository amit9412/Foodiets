<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Review List</title>
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
                                <h4 class="mb-sm-0 font-size-18">Review List</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a
                                                href="<?php echo BASE_URL?>/vendor/dashboard.php">Dashboards</a></li>
                                        <li class="breadcrumb-item active">List</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Breadcrumb End-->
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <h4 class="card-title mb-0">Review List</h4>
                                <div class="ms-2">
                                    <input type="search" class="form-control form-control-sm"
                                        placeholder="Search review">
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table align-middle table-nowrap mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Sno</th>
                                            <th>Image</th>
                                            <th>Customer Name</th>
                                            <th>Email Id</th>
                                            <th>Review</th>
                                            <th>Comment</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>#1</td>
                                            <td>
                                                <img src="<?php echo ADMIN_IMAGES_URL ?>/avatar-2.jpg" alt=""
                                                    class="avatar-xs rounded-circle">
                                            </td>
                                            <td>John Doe</td>
                                            <td>john.doe@gmail.com</td>
                                            <td>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bx-star text-warning"></i>
                                            </td>
                                            <td>Lorem ipsum dolor sit...</td>
                                            <td>
                                                <a href="javascript:void(0);" data-bs-toggle="modal"
                                                    data-bs-target="#ViewDetails"
                                                    class="btn p-0 avatar-xs btn-primary waves-effect waves-light">
                                                    <i class="bx bx-list-ul mt-2 font-size-15 align-middle"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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
<!-- View Details Modal -->
<div id="ViewDetails" class="modal fade" tabindex="-1" aria-labelledby="ViewDetailsLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="ViewDetailsLabel">View Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-1 text-center">
                    <img class="rounded-circle avatar-md" src="<?php echo ADMIN_IMAGES_URL ?>/avatar-2.jpg" alt="">
                </div>
                <h5>Customer Name</h5>
                <p>John Doe</p>
                <h5>Email</h5>
                <p>johndoe@gmail.com</p>
                <h5>Review</h5>
                <p>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bx-star text-warning"></i>
                </p>
                <h5>Comment</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa illo porro reprehenderit accusamus
                    velit non quis. Aliquam officia suscipit voluptate perferendis? Nesciunt aperiam quae voluptas,
                    molestiae doloribus voluptatem molestias modi.</p>
            </div>
        </div>
    </div>
</div>
</html>