<?php

use yii\helpers\Url;
?>
<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li>
                    <a href="<?= Url::to(['/vendor/dashboard']) ?>" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards">Dashboards</span>
                    </a>
                </li>
                <li>
                    <a href="<?= Url::to(['/super-admin/customer']) ?>" class="waves-effect">
                        <i class="bx bx-id-card"></i>
                        <span key="t-customers">Customers</span>
                    </a>
                </li>
                <li>
                    <a href="<?= Url::to(['/super-admin/vendor']) ?>" class="waves-effect">
                        <i class="bx bx-user-pin"></i>
                        <span key="t-vendors">Vendors</span>
                    </a>
                </li>
                <li>
                    <a href="<?= Url::to(['/super-admin/chat']) ?>" class="waves-effect">
                        <i class="bx bx-chat"></i>
                        <span key="t-chat">Chat</span>
                    </a>
                </li>
                <li>
                    <a href="<?= Url::to(['/super-admin/report']) ?>" class="waves-effect">
                        <i class="bx bxs-bar-chart-alt-2"></i>
                        <span key="t-reports">Reports</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-receipt"></i>
                        <span key="t-invoice">Invoice</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?= Url::to(['/super-admin/invoice/vendor-invoice']) ?>" key="t-pending-invoice">Vendor Invoice</a></li>
                        <li><a href="<?= Url::to(['/super-admin/invoice/received-invoice']) ?>" key="t-received-invoice">Received Invoice</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-rupee"></i>
                        <span key="t-payment">Payment</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?= Url::to(['/super-admin/payment/customer-payment']) ?>" key="t-customer-payment">Customer Payment</a></li>
                        <li><a href="<?= Url::to(['/super-admin/payment/admin-payment']) ?>" key="t-admin-payment">Admin Payment</a></li>
                        <li><a href="<?= Url::to(['/super-admin/payment/vendor-payment']) ?>" key="t-vendor-payment">Vendor Payment</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?= Url::to(['/super-admin/transaction']) ?>" class="waves-effect">
                        <i class="bx bx-file"></i>
                        <span key="t-transactions">Transactions</span>
                    </a>
                </li>
                <li>
                    <a href="<?= Url::to(['/super-admin/notification']) ?>" class="waves-effect">
                        <i class="bx bx-bell"></i>
                        <span key="t-notifications">Notifications</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->