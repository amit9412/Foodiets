<?php

use yii\helpers\Url;

$userRole = (\Yii::$app->user->identity) ? \Yii::$app->user->identity->user_role : 'undefined';
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
                        <a href="<?= Url::to(['/superadmin-panel/dashboard']) ?>" class="waves-effect">
                            <i class="bx bx-home-circle"></i>
                            <span key="t-dashboards">Dashboards</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['/superadmin-panel/customer']) ?>" class="waves-effect">
                            <i class="bx bx-id-card"></i>
                            <span key="t-customers">Customers</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['/superadmin-panel/vendor']) ?>" class="waves-effect">
                            <i class="bx bx-user-pin"></i>
                            <span key="t-vendors">Vendors</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['/superadmin-panel/chat']) ?>" class="waves-effect">
                            <i class="bx bx-chat"></i>
                            <span key="t-chat">Chat</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['/superadmin-panel/report']) ?>" class="waves-effect">
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
                            <li><a href="<?= Url::to(['/superadmin-panel/invoice/vendor-invoice']) ?>"
                                    key="t-pending-invoice">Vendor Invoice</a></li>
                            <li><a href="<?= Url::to(['/superadmin-panel/invoice/received-invoice']) ?>"
                                    key="t-received-invoice">Received Invoice</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-rupee"></i>
                            <span key="t-payment">Payment</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="<?= Url::to(['/superadmin-panel/payment/customer-payment']) ?>"
                                    key="t-customer-payment">Customer Payment</a></li>
                            <li><a href="<?= Url::to(['/superadmin-panel/payment/admin-payment']) ?>" key="t-admin-payment">Admin
                                    Payment</a></li>
                            <li><a href="<?= Url::to(['/superadmin-panel/payment/vendor-payment']) ?>"
                                    key="t-vendor-payment">Vendor Payment</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?= Url::to(['/superadmin-panel/transaction']) ?>" class="waves-effect">
                            <i class="bx bx-file"></i>
                            <span key="t-transactions">Transactions</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['/superadmin-panel/notification']) ?>" class="waves-effect">
                            <i class="bx bx-bell"></i>
                            <span key="t-notifications">Notifications</span>
                        </a>
                    </li>

                <?php } ?>


                <!-- vendor -->

                <?php if ($userRole == 'vendor') { ?>

                    <li>
                        <a href="<?= Url::to(['/vendor-panel/dashboard']) ?>" class="waves-effect">
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
                            <li><a href="<?= Url::to(['/vendor-panel/order/new-order']) ?>" key="t-new-order">New Order <span
                                        class="badge rounded-pill bg-success float-end">10</span></a> </li>
                            <li><a href="<?= Url::to(['/vendor-panel/order/today-order']) ?>" key="t-today-order">Today Order </a>
                            </li>
                            <li><a href="<?= Url::to(['/vendor-panel/order/total-order']) ?>" key="t-total-order">Total Order </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-group"></i>
                            <span key="t-groups">Groups</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="<?= Url::to(['/vendor-panel/group/add-group']) ?>" key="t-add-groups">Add Groups</a>
                            </li>
                            <li><a href="<?= Url::to(['/vendor-panel/group/group-customer-list']) ?>"
                                    key="t-group-customer-list">Group Customer List</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?= Url::to(['/vendor-panel/product']) ?>" class="waves-effect">
                            <i class="bx bx-store"></i>
                            <span key="t-products">Products</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['/vendor-panel/customer']) ?>" class="waves-effect">
                            <i class="bx bx-id-card"></i>
                            <span key="t-customers">Customers</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['/vendor-panel/chat']) ?>" class="waves-effect">
                            <i class="bx bx-chat"></i>
                            <span key="t-chat">Chat</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['/vendor-panel/report']) ?>" class="waves-effect">
                            <i class="bx bxs-bar-chart-alt-2"></i>
                            <span key="t-reports">Reports</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['/vendor-panel/delivery-boy']) ?>" class="waves-effect">
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
                            <li><a href="<?= Url::to(['/vendor-panel/invoice/pending-invoice']) ?>"
                                    key="t-pending-invoice">Pending Invoice</a></li>
                            <li><a href="<?= Url::to(['/vendor-panel/invoice/received-invoice']) ?>"
                                    key="t-received-invoice">Received Invoice</a></li>
                            <li><a href="<?= Url::to(['/vendor-panel/invoice/complete-invoice']) ?>"
                                    key="t-complete-invoice">Complete Invoice</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?= Url::to(['/vendor-panel/review']) ?>" class="waves-effect">
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
                            <li><a href="<?= Url::to(['/vendor-panel/payment/customer-payment']) ?>" key="t-customer-payment">Customer
                                    Payment</a></li>
                            <li><a href="<?= Url::to(['/vendor-panel/payment/admin-payment']) ?>" key="t-admin-payment">Admin Payment</a>
                            </li>
                            <li><a href="<?= Url::to(['/vendor-panel/payment/vendor-payment']) ?>" key="t-vendor-payment">Vendor
                                    Payment</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?= Url::to(['/vendor-panel/transaction']) ?>" class="waves-effect">
                            <i class="bx bx-file"></i>
                            <span key="t-transactions">Transactions</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['/vendor-panel/notification']) ?>/" class="waves-effect">
                            <i class="bx bx-bell"></i>
                            <span key="t-notifications">Notifications</span>
                        </a>
                    </li>

                <?php } ?>


                <!-- delivery boy -->
                <?php if ($userRole == 'delivery-boy') { ?>

                    <li>
                        <a href="<?= Url::to(['/deliveryboy-panel/order/today-order']) ?>" class="waves-effect">
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