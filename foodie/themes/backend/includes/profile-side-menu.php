<div class="text-right d-md-none mb-2">
    <button type="button" class="btn filterShow btn-primary btn-sm"><em class="fa fa-user"></em></button>
</div>
<div class="user-left">
    <div class="user-box">
        <img src="<?php echo IMAGES_URL?>/default-user.jpg" alt="">
    </div>
    <ul>
        <li>
            <a href="user.php" class="<?php if($page=='user'){echo 'active';}?>">Profile</a>
        </li>
        <li>
            <a href="order.php" class="<?php if($page=='order'){echo 'active';}?>">Order</a>
        </li>
        <li>
            <a href="payment.php" class="<?php if($page=='payment'){echo 'active';}?>">Payment</a>
        </li>
        <li>
            <a href="settings.php" class="<?php if($page=='settings'){echo 'active';}?>">Settings</a>
        </li>
        <li>
            <a href="help.php" class="<?php if($page=='help'){echo 'active';}?>"> Help</a>
        </li>
    </ul>
</div>