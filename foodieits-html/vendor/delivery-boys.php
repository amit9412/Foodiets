<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Delivery Boys</title>
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
                                <h4 class="mb-sm-0 font-size-18">Delivery Boys</h4>
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
                            <div class="d-flex flex-wrap justify-content-between mb-2">
                                <div class="me-2 mb-2 mb-sm-0">
                                    <input type="search" class="form-control form-control-sm"
                                        placeholder="Search order">
                                </div>
                                <div class="">
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#addDeliveryBoy"
                                        class="btn btn-primary btn-sm w-xs waves-effect waves-light">Add Delivery Boy</button>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table align-middle table-nowrap mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Sno</th>
                                            <th>Id</th>
                                            <th>Delivery Boy Name</th>
                                            <th>Email Id</th>
                                            <th>Mobile Number</th>
                                            <th>Group Name</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>#1</td>
                                            <td>#56985</td>
                                            <td>John Doe</td>
                                            <td>john.doe@gmail.com</td>
                                            <td>989-8878-987</td>
                                            <td>A Group</td>
                                            <td>
                                                <div class="form-check form-switch form-switch-md" dir="ltr">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="SwitchCheckSizemd">
                                                    <label class="form-check-label" for="SwitchCheckSizemd"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" data-bs-toggle="modal"
                                                    data-bs-target="#ViewDetails"
                                                    class="btn p-0 avatar-xs btn-primary waves-effect waves-light">
                                                    <i class="bx bx-list-ul mt-2 font-size-15 align-middle"></i>
                                                </a>
                                                <a href="javascript:void(0);"
                                                    class="btn p-0 avatar-xs btn-success waves-effect waves-light">
                                                    <i class="bx bx-edit-alt mt-2 font-size-15 align-middle"></i>
                                                </a>
                                                <a id="sa-warning" href="javascript:void(0);"
                                                    class="btn p-0 avatar-xs btn-danger waves-effect waves-light">
                                                    <i class="bx bx-trash-alt mt-2 font-size-16 align-middle"></i>
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
<!--Add Delivery Boy Modal -->
<div id="addDeliveryBoy" class="modal fade" tabindex="-1" aria-labelledby="addDeliveryBoyLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="addDeliveryBoyLabel">Add Delivery Boy</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row mb-4">
                        <label for="uploadImg" class="col-sm-4 col-form-label">Upload Image</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control" id="uploadImg">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="Title" class="col-sm-4 col-form-label">Delivery Boy Name</label>
                        <div class="col-sm-8">
                            <input id="Title" type="text" placeholder="Enter name" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="emailid" class="col-sm-4 col-form-label">Email Id</label>
                        <div class="col-sm-8">
                            <input id="emailid" type="email" placeholder="Enter email id" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="mobile-number" class="col-sm-4 col-form-label">Mobile Number</label>
                        <div class="col-sm-8">
                            <input id="mobile-number" type="text" placeholder="Enter mobile number"
                                class="form-control">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="mobile-number" class="col-sm-4 col-form-label">Select Group</label>
                        <div class="col-sm-8">
                            <select class="form-select">
                                <option>Select</option>
                                <option>Group A</option>
                                <option>Group B</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="add-address" class="col-sm-4 col-form-label">Address</label>
                        <div class="col-sm-8">
                            <input id="add-address" type="text" placeholder="Enter address" class="form-control">
                        </div>
                    </div>
                    <div class="text-xl-end">
                        <button type="button" class="btn btn-secondary waves-effect"
                            data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary waves-effect waves-light">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
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
                <h5>Id</h5>
                <p>#5669</p>
                <h5>Delivery Boy Name</h5>
                <p>John Doe</p>
                <h5>Email</h5>
                <p>johndoe@gmail.com</p>
                <h5>Mobile</h5>
                <p>656-6989-698 </p>
                <h5>Group Name</h5>
                <p>A Group </p>
                <h5>Address</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa illo porro reprehenderit accusamus
                    velit non quis. Aliquam officia suscipit voluptate perferendis? Nesciunt aperiam quae voluptas,
                    molestiae doloribus voluptatem molestias modi.</p>
            </div>
        </div>
    </div>
</div>

</html>