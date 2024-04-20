<?php

use yii\helpers\Url;

/** @var yii\web\View $this */

$this->title = 'Foodieits- Product Detail';
?>

<section class="breadcrumb-section light-bg">
    <div class="container">
        <div class="breadcrumb-text">
            <h1>Product Details</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= Url::to(['site/index']) ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?= Url::to(['site/product-list']) ?>">Product List</a></li>
                    <li class="breadcrumb-item active">Food Shop</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<section class="filter-section pd-sec-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="filter-right product-details">
                    <div class="product-box mb-0">
                        <div class="product-box-img">
                            <img src="<?php yii::getAlias('@web') ?>/themes/frontend/assets/img/product-1.jpg" alt="">
                        </div>
                        <div class="product-box-txt">
                            <h3>
                                Glacier Walk Combo
                            </h3>
                            <h4><em class="fa fa-location-arrow"></em> 1.5 K.M.</h4>
                            <div class="d-flex align-items-center justify-content-between mt-2 mb-2">
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
                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top"
                                            title="" data-original-title="Share to Facebook">
                                            <em class="fa fa-facebook-f"></em>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top"
                                            title="" data-original-title="Share to Instagram">
                                            <em class="fa fa-instagram"></em>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top"
                                            title="" data-original-title="Share to Linkedin">
                                            <em class="fa fa-linkedin"></em>
                                        </a>

                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top"
                                            title="" data-original-title="Share to Whatsapp">
                                            <em class="fa fa-whatsapp"></em>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <a href="<?= Url::to(['site/book-food']) ?>" class="btn btn-primary">Book Now</a>
                                <h5>₹2,500 <span>/Month</span></h5>
                            </div>
                            <p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla
                                ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel
                                augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas
                                tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem
                                neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
                                Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis
                                faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo.
                            </p>
                            <h2>Food Type</h2>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>S.no</th>
                                            <th>Food Name</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Daily Thali</td>
                                            <td>
                                                <div class="break-txt">
                                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error sed
                                                    consectetur rem voluptatibus id tempore tenetur molestias asperiores
                                                    autem vitae perspiciatis quisquam est nemo vel fugiat reprehenderit
                                                    odit, in doloremque.
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Sunday Special</td>
                                            <td>
                                                <div class="break-txt">
                                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error sed
                                                    consectetur rem voluptatibus id tempore tenetur molestias asperiores
                                                    autem vitae perspiciatis quisquam est nemo vel fugiat reprehenderit
                                                    odit, in doloremque.
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Daily Thali</td>
                                            <td>
                                                <div class="break-txt">
                                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error sed
                                                    consectetur rem voluptatibus id tempore tenetur molestias asperiores
                                                    autem vitae perspiciatis quisquam est nemo vel fugiat reprehenderit
                                                    odit, in doloremque.
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Sunday Special</td>
                                            <td>
                                                <div class="break-txt">
                                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error sed
                                                    consectetur rem voluptatibus id tempore tenetur molestias asperiores
                                                    autem vitae perspiciatis quisquam est nemo vel fugiat reprehenderit
                                                    odit, in doloremque.
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <h2>Gallery</h2>
                            <div class="owl-carousel mb-3 gallery-owl owl-theme">
                                <div class="item">
                                    <div class="gallery-box">
                                        <img src="<?php yii::getAlias('@web') ?>/themes/frontend/assets/img/gallery-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="gallery-box">
                                        <img src="<?php yii::getAlias('@web') ?>/themes/frontend/assets/img/gallery-2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="gallery-box">
                                        <img src="<?php yii::getAlias('@web') ?>/themes/frontend/assets/img/gallery-3.jpg" alt="">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="gallery-box">
                                        <img src="<?php yii::getAlias('@web') ?>/themes/frontend/assets/img/gallery-4.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <h2 class="mb-0">Tour Reviews</h2>
                                <a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal"
                                    data-target="#addReviews">Add Reviews</a>
                            </div>
                            <div class="reviews-media">
                                <div class="media">
                                    <div class="reviews-img">
                                        <img src="<?php yii::getAlias('@web') ?>/themes/frontend/assets/img/reviews-1.png" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h6>Luaka Smith</h6>
                                        <div class="d-flex align-items-center justify-content-between">
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
                                            <p class="m-0"> 12 minitues ago</p>
                                        </div>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis qui
                                            soluta dolorem facere veritatis esse explicabo nostrum quas perferendis
                                            cumque repellat, debitis, rerum provident nulla corrupti mollitia inventore
                                            labore sint.</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="reviews-img">
                                        <img src="<?php yii::getAlias('@web') ?>/themes/frontend/assets/img/reviews-2.png" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h6>Luaka Smith</h6>
                                        <div class="d-flex align-items-center justify-content-between">
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
                                            <p class="m-0"> 12 minitues ago</p>
                                        </div>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis qui
                                            soluta dolorem facere veritatis esse explicabo nostrum quas perferendis
                                            cumque repellat, debitis, rerum provident nulla corrupti mollitia inventore
                                            labore sint.</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="reviews-img">
                                        <img src="<?php yii::getAlias('@web') ?>/themes/frontend/assets/img/reviews-1.png" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h6>Luaka Smith</h6>
                                        <div class="d-flex align-items-center justify-content-between">
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
                                            <p class="m-0"> 12 minitues ago</p>
                                        </div>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis qui
                                            soluta dolorem facere veritatis esse explicabo nostrum quas perferendis
                                            cumque repellat, debitis, rerum provident nulla corrupti mollitia inventore
                                            labore sint.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <h2>More Information</h2>
                <div class="filter-left sticky-filter">
                    <p class="more-info text-center mb-2">Please sign up for more information</p>
                    <a href="<?= Url::to(['site/signup']) ?>" class="btn btn-primary btn-block">Sign Up</a>
                    <p class="more-info text-left d-none mb-0"><strong>Phone Number:</strong> 1-567-124-44227</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Review Modal -->
<div class="modal fade" id="addReviews" tabindex="-1" aria-labelledby="addReviewsLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addReviewsLabel">Reviews</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group">
                        <select class="form-control">
                            <option value="">1 star</option>
                            <option value="">2 star</option>
                            <option value="">3 star</option>
                            <option value="">4 star</option>
                            <option value="">5 star</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <input type="Email" class="form-control" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Comment"></textarea>
                    </div>
                    <button type="button" class="btn btn-primary btn-block">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>