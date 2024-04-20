<?php

use yii\helpers\Url;

$userRole = (\Yii::$app->user->identity) ? \Yii::$app->user->identity->user_role : 'undefined';

$userRole = 'super-admin';
?>
<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <?php if ($userRole == 'super-admin') { ?>

                    <li>
                        <a href="<?= Url::to(['/super-admin/dashboard']) ?>" class="waves-effect">
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
                            <li><a href="<?= Url::to(['/super-admin/invoice/vendor-invoice']) ?>"
                                    key="t-pending-invoice">Vendor Invoice</a></li>
                            <li><a href="<?= Url::to(['/super-admin/invoice/received-invoice']) ?>"
                                    key="t-received-invoice">Received Invoice</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-rupee"></i>
                            <span key="t-payment">Payment</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="<?= Url::to(['/super-admin/payment/customer-payment']) ?>"
                                    key="t-customer-payment">Customer Payment</a></li>
                            <li><a href="<?= Url::to(['/super-admin/payment/admin-payment']) ?>" key="t-admin-payment">Admin
                                    Payment</a></li>
                            <li><a href="<?= Url::to(['/super-admin/payment/vendor-payment']) ?>"
                                    key="t-vendor-payment">Vendor Payment</a></li>
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

                <?php } ?>


                <!-- vendor -->

                <?php if ($userRole == 'vendor') { ?>

                    <li>
                        <a href="<?= Url::to(['/vendor/dashboard']) ?>" class="waves-effect">
                            <i class="bx bx-home-circle"></i>
                            <span key="t-dashboards">Dashboards</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-copy-alt"></i>
                            <span key="t-orders">Orders</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="<?= Url::to(['/vendor/order/new-order']) ?>" key="t-new-order">New Order <span
                                        class="badge rounded-pill bg-success float-end">10</span></a> </li>
                            <li><a href="<?= Url::to(['/vendor/order/today-order']) ?>" key="t-today-order">Today Order </a>
                            </li>
                            <li><a href="<?= Url::to(['/vendor/order/total-order']) ?>" key="t-total-order">Total Order </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-group"></i>
                            <span key="t-groups">Groups</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="<?= Url::to(['/vendor/group/add-groups']) ?>" key="t-add-groups">Add Groups</a>
                            </li>
                            <li><a href="<?= Url::to(['/vendor/group/group-customer-list']) ?>"
                                    key="t-group-customer-list">Group Customer List</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?= Url::to(['/vendor/product']) ?>" class="waves-effect">
                            <i class="bx bx-store"></i>
                            <span key="t-products">Products</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['/vendor/customer']) ?>" class="waves-effect">
                            <i class="bx bx-id-card"></i>
                            <span key="t-customers">Customers</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['/vendor/chat']) ?>" class="waves-effect">
                            <i class="bx bx-chat"></i>
                            <span key="t-chat">Chat</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['/vendor/report']) ?>" class="waves-effect">
                            <i class="bx bxs-bar-chart-alt-2"></i>
                            <span key="t-reports">Reports</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['/vendor/delivery-boy']) ?>" class="waves-effect">
                            <i class="bx bxs-user-detail"></i>
                            <span key="t-delivery-boys">Delivery Boys</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-receipt"></i>
                            <span key="t-invoice">Invoice</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="<?= Url::to(['/vendor/invoice/pending-invoice']) ?>"
                                    key="t-pending-invoice">Pending Invoice</a></li>
                            <li><a href="<?= Url::to(['/vendor/invoice/received-invoice']) ?>"
                                    key="t-received-invoice">Received Invoice</a></li>
                            <li><a href="<?= Url::to(['/vendor/invoice/complete-invoice']) ?>"
                                    key="t-complete-invoice">Complete Invoice</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?= Url::to(['/vendor/review']) ?>" class="waves-effect">
                            <i class="bx bx-star"></i>
                            <span key="t-review">Review</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-rupee"></i>
                            <span key="t-payment">Payment</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="<?= Url::to(['/vendor/customer-payment']) ?>" key="t-customer-payment">Customer
                                    Payment</a></li>
                            <li><a href="<?= Url::to(['/vendor/admin-payment']) ?>" key="t-admin-payment">Admin Payment</a>
                            </li>
                            <li><a href="<?= Url::to(['/vendor/vendor-payment']) ?>" key="t-vendor-payment">Vendor
                                    Payment</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?= Url::to(['/vendor/transaction']) ?>" class="waves-effect">
                            <i class="bx bx-file"></i>
                            <span key="t-transactions">Transactions</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['/vendor/notification']) ?>/" class="waves-effect">
                            <i class="bx bx-bell"></i>
                            <span key="t-notifications">Notifications</span>
                        </a>
                    </li>

                <?php } ?>


                <!-- delivery boy -->
                <?php if ($userRole == 'delivery-boy') { ?>

                    <li>
                        <a href="<?= Url::to(['/delivery-boy/order/today-order']) ?>" class="waves-effect">
                            <i class="bx bx-copy-alt"></i>
                            <span key="t-orders">Orders</span>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->