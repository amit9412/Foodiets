<!doctype html>
<html lang="en">

<head>
    <!--d meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include 'includes/headlinks.php';?>
    <title>Foodieits- Product List</title>
</head>

<body>
    <main>
        <?php include 'includes/before-login-header.php';?>
        <div class="main-sec">
            <section class="breadcrumb-section light-bg">
                <div class="container">
                    <div class="breadcrumb-text">
                        <h1>Enjoy Food</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Food List</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </section>
            <section class="filter-section pd-sec-50">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="text-right d-md-none mb-2">
                                <button type="button" class="btn filterShow btn-primary btn-sm"><em
                                        class="fa fa-filter"></em></button>
                            </div>
                            <h2 class="d-none d-md-block">Filter</h2>
                            <div class="filter-left mb-3 sticky-filter moreShow">
                                <form action="">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Search Location">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-6">
                                            <div class="form-group">
                                                <select class="form-control form-select2">
                                                    <option value="">Select City</option>
                                                    <option value="">Indore</option>
                                                    <option value="">Mandsaur</option>
                                                    <option value="">Ratlam</option>
                                                    <option value="">Indore</option>
                                                    <option value="">Mandsaur</option>
                                                    <option value="">Ratlam</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-6">
                                            <div class="form-group">
                                                <select class="form-control form-select2">
                                                    <option value="">Select K.M.</option>
                                                    <option value="">0.1 K.M. - 0.9 K.M.</option>
                                                    <option value="">1 K.M. - 5 K.M. </option>
                                                    <option value="">5 K.M. - 10 K.M. </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-6">
                                            <div class="form-group">
                                                <select class="form-control form-select2">
                                                    <option value="">Select Prize</option>
                                                    <option value="">₹0.00 - ₹1500.00 </option>
                                                    <option value="">₹1600.00 - ₹2000.00 </option>
                                                    <option value="">₹2100.00 - ₹3000.00 </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary btn-block">Search</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="filter-right">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="product-box">
                                            <div class="product-box-img">
                                                <img src="<?php echo IMAGES_URL?>/product-1.jpg" alt="">
                                            </div>
                                            <div class="product-box-txt mb-0">
                                                <h3>
                                                    <a href="product-detail.php">Glacier Walk Combo</a>
                                                </h3>
                                                <h4><em class="fa fa-location-arrow"></em> 1.5 K.M.</h4>
                                                <div
                                                    class="d-flex align-items-center justify-content-between mt-2 mb-2">
                                                    <ul class="rating">
                                                        <li>
                                                            <em class="fa fa-star"></em>
                                                        </li>
                                                        <li>
                                                            <em class="fa fa-star"></em>
                                                        </li>
                                                        <li>
                                                            <em class="fa fa-star"></em>
                                                        </li>
                                                        <li>
                                                            <em class="fa fa-star"></em>
                                                        </li>
                                                        <li>
                                                            <em class="fa fa-star-o"></em>
                                                        </li>
                                                    </ul>
                                                    <ul class="social">
                                                        <li>
                                                            <a href="javascript:void(0);" data-toggle="tooltip"
                                                                data-placement="top" title=""
                                                                data-original-title="Share to Facebook">
                                                                <em class="fa fa-facebook-f"></em>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" data-toggle="tooltip"
                                                                data-placement="top" title=""
                                                                data-original-title="Share to Instagram">
                                                                <em class="fa fa-instagram"></em>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" data-toggle="tooltip"
                                                                data-placement="top" title=""
                                                                data-original-title="Share to Linkedin">
                                                                <em class="fa fa-linkedin"></em>
                                                            </a>

                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" data-toggle="tooltip"
                                                                data-placement="top" title=""
                                                                data-original-title="Share to Whatsapp">
                                                                <em class="fa fa-whatsapp"></em>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <a href="book-food.php" class="btn btn-primary">Book Now</a>
                                                    <h5>₹2,500 <span>/Month</span></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="product-box">
                                            <div class="product-box-img">
                                                <img src="<?php echo IMAGES_URL?>/product-1.jpg" alt="">
                                            </div>
                                            <div class="product-box-txt mb-0">
                                                <h3>
                                                    <a href="product-detail.php">Glacier Walk Combo</a>
                                                </h3>
                                                <h4><em class="fa fa-location-arrow"></em> 1.5 K.M.</h4>
                                                <div
                                                    class="d-flex align-items-center justify-content-between mt-2 mb-2">
                                                    <ul class="rating">
                                                        <li>
                                                            <em class="fa fa-star"></em>
                                                        </li>
                                                        <li>
                                                            <em class="fa fa-star"></em>
                                                        </li>
                                                        <li>
                                                            <em class="fa fa-star"></em>
                                                        </li>
                                                        <li>
                                                            <em class="fa fa-star"></em>
                                                        </li>
                                                        <li>
                                                            <em class="fa fa-star-o"></em>
                                                        </li>
                                                    </ul>
                                                    <ul class="social">
                                                        <li>
                                                            <a href="javascript:void(0);" data-toggle="tooltip"
                                                                data-placement="top" title=""
                                                                data-original-title="Share to Facebook">
                                                                <em class="fa fa-facebook-f"></em>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" data-toggle="tooltip"
                                                                data-placement="top" title=""
                                                                data-original-title="Share to Instagram">
                                                                <em class="fa fa-instagram"></em>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" data-toggle="tooltip"
                                                                data-placement="top" title=""
                                                                data-original-title="Share to Linkedin">
                                                                <em class="fa fa-linkedin"></em>
                                                            </a>

                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" data-toggle="tooltip"
                                                                data-placement="top" title=""
                                                                data-original-title="Share to Whatsapp">
                                                                <em class="fa fa-whatsapp"></em>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <a href="book-food.php" class="btn btn-primary">Book Now</a>
                                                    <h5>₹2,500 <span>/Month</span></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="product-box">
                                            <div class="product-box-img">
                                                <img src="<?php echo IMAGES_URL?>/product-1.jpg" alt="">
                                            </div>
                                            <div class="product-box-txt mb-0">
                                                <h3>
                                                    <a href="product-detail.php">Glacier Walk Combo</a>
                                                </h3>
                                                <h4><em class="fa fa-location-arrow"></em> 1.5 K.M.</h4>
                                                <div
                                                    class="d-flex align-items-center justify-content-between mt-2 mb-2">
                                                    <ul class="rating">
                                                        <li>
                                                            <em class="fa fa-star"></em>
                                                        </li>
                                                        <li>
                                                            <em class="fa fa-star"></em>
                                                        </li>
                                                        <li>
                                                            <em class="fa fa-star"></em>
                                                        </li>
                                                        <li>
                                                            <em class="fa fa-star"></em>
                                                        </li>
                                                        <li>
                                                            <em class="fa fa-star-o"></em>
                                                        </li>
                                                    </ul>
                                                    <ul class="social">
                                                        <li>
                                                            <a href="javascript:void(0);" data-toggle="tooltip"
                                                                data-placement="top" title=""
                                                                data-original-title="Share to Facebook">
                                                                <em class="fa fa-facebook-f"></em>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" data-toggle="tooltip"
                                                                data-placement="top" title=""
                                                                data-original-title="Share to Instagram">
                                                                <em class="fa fa-instagram"></em>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" data-toggle="tooltip"
                                                                data-placement="top" title=""
                                                                data-original-title="Share to Linkedin">
                                                                <em class="fa fa-linkedin"></em>
                                                            </a>

                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" data-toggle="tooltip"
                                                                data-placement="top" title=""
                                                                data-original-title="Share to Whatsapp">
                                                                <em class="fa fa-whatsapp"></em>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <a href="book-food.php" class="btn btn-primary">Book Now</a>
                                                    <h5>₹2,500 <span>/Month</span></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="product-box">
                                            <div class="product-box-img">
                                                <img src="<?php echo IMAGES_URL?>/product-1.jpg" alt="">
                                            </div>
                                            <div class="product-box-txt mb-0">
                                                <h3>
                                                    <a href="product-detail.php">Glacier Walk Combo</a>
                                                </h3>
                                                <h4><em class="fa fa-location-arrow"></em> 1.5 K.M.</h4>
                                                <div
                                                    class="d-flex align-items-center justify-content-between mt-2 mb-2">
                                                    <ul class="rating">
                                                        <li>
                                                            <em class="fa fa-star"></em>
                                                        </li>
                                                        <li>
                                                            <em class="fa fa-star"></em>
                                                        </li>
                                                        <li>
                                                            <em class="fa fa-star"></em>
                                                        </li>
                                                        <li>
                                                            <em class="fa fa-star"></em>
                                                        </li>
                                                        <li>
                                                            <em class="fa fa-star-o"></em>
                                                        </li>
                                                    </ul>
                                                    <ul class="social">
                                                        <li>
                                                            <a href="javascript:void(0);" data-toggle="tooltip"
                                                                data-placement="top" title=""
                                                                data-original-title="Share to Facebook">
                                                                <em class="fa fa-facebook-f"></em>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" data-toggle="tooltip"
                                                                data-placement="top" title=""
                                                                data-original-title="Share to Instagram">
                                                                <em class="fa fa-instagram"></em>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" data-toggle="tooltip"
                                                                data-placement="top" title=""
                                                                data-original-title="Share to Linkedin">
                                                                <em class="fa fa-linkedin"></em>
                                                            </a>

                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" data-toggle="tooltip"
                                                                data-placement="top" title=""
                                                                data-original-title="Share to Whatsapp">
                                                                <em class="fa fa-whatsapp"></em>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <a href="book-food.php" class="btn btn-primary">Book Now</a>
                                                    <h5>₹2,500 <span>/Month</span></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <ul class="pagination justify-content-end">
                                            <li class="page-item"><a class="page-link"
                                                    href="javascript:void(0);">Previous</a></li>
                                            <li class="page-item active"><a class="page-link"
                                                    href="javascript:void(0);">1</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a>
                                            </li>
                                            <li class="page-item"><a class="page-link"
                                                    href="javascript:void(0);">Next</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php include 'includes/footer.php';?>
    </main>
</body>
<?php include 'includes/footerlinks.php';?>

</html>