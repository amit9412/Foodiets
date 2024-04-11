<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li>
                    <a href="<?php echo BASE_URL?>/super-admin/dashboard.php" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards">Dashboards</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL?>/super-admin/customers.php" class="waves-effect">
                        <i class="bx bx-id-card"></i>
                        <span key="t-customers">Customers</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL?>/super-admin/vendors.php" class="waves-effect">
                        <i class="bx bx-user-pin"></i>
                        <span key="t-vendors">Vendors</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL?>/super-admin/chat.php" class="waves-effect">
                        <i class="bx bx-chat"></i>
                        <span key="t-chat">Chat</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL?>/super-admin/reports.php" class="waves-effect">
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
                        <li><a href="<?php echo BASE_URL?>/super-admin/vendor-invoice.php" key="t-pending-invoice">Vendor Invoice</a></li>
                        <li><a href="<?php echo BASE_URL?>/super-admin/received-invoice.php" key="t-received-invoice">Received Invoice</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-rupee"></i>
                        <span key="t-payment">Payment</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?php echo BASE_URL?>/super-admin/customer-payment.php" key="t-customer-payment">Customer Payment</a></li>
                        <li><a href="<?php echo BASE_URL?>/super-admin/admin-payment.php" key="t-admin-payment">Admin Payment</a></li>
                        <li><a href="<?php echo BASE_URL?>/super-admin/vendor-payment.php" key="t-vendor-payment">Vendor Payment</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo BASE_URL?>/super-admin/transactions.php" class="waves-effect">
                        <i class="bx bx-file"></i>
                        <span key="t-transactions">Transactions</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL?>/super-admin/notifications.php" class="waves-effect">
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