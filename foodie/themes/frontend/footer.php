<?php
use yii\helpers\Url;
?>

<footer>
    <div class="container">
        <div class="footer-top">
            <a href="index.php"><img src="<?=Yii::getAlias('@web')?>/themes/frontend/assets/img/footer-logo.png" alt=""></a>
            <p>ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br class="d-none d-lg-block"> tempor
                incididunt. ipsum dolor sit amet, consectetur</p>
            <ul>
                <li>
                    <a href="javascript:void(0);">Privacy & Policy</a>
                    |
                </li>
                <li>
                    <a href="javascript:void(0);">Terms & Conditions</a>
                    |
                </li>
                <li>
                    <a href="<?= Url::to(['/site/faq']) ?>">Faq</a>
                </li>
            </ul>
        </div>
        <div class="footer-down">
            <p>Copyright@2021, Lunchbox. All Rights Reserved. | Power by <a
                    href="javascript:void(0);">PriorDesignStudio</a></p>
        </div>
    </div>
</footer>
<div class="bgShow d-md-none"></div>
<!-- Change Password Modal -->
<div class="modal fade" id="changePassword" tabindex="-1" aria-labelledby="changePasswordLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="changePasswordLabel">Change Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Enter Old Password">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Enter New Password">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Enter Confirm Password">
                    </div>
                    <button type="button" class="btn btn-primary btn-block">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Become Seller Modal -->
<div class="modal fade" id="becomeSeller" tabindex="-1" aria-labelledby="becomeSellerLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="becomeSellerLabel">Become Seller</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="mb-3">
                        <div class="custom-control custom-radio mb-2">
                            <input type="radio" id="seller01" name="becomeSeller" class="custom-control-input">
                            <label class="custom-control-label" for="seller01">Login</label>
                        </div>
                        <div class="custom-control custom-radio mb-2">
                            <input type="radio" id="seller02" name="becomeSeller" class="custom-control-input">
                            <label class="custom-control-label" for="seller02">Register</label>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary btn-block">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>