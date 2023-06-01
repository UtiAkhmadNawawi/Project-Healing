<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <!-- <meta name="author" content="Softnio"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <link rel="shortcut icon" href="<?php echo base_url() ?>AdminCSS/images/favicon.png">
    <title>Hotel Management Dashboard - Layout | DashLite Admin Template</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>AdminCSS/assets/css/admin.css">
    <link id="skin-default" rel="stylesheet" href="<?php echo base_url() ?>AdminCSS/assets/css/theme.css">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-91615293-4"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-91615293-4');
    </script>
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <div class="nk-main ">
            <div class="nk-sidebar nk-sidebar-fixed " data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-menu-trigger"><a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none"
                            data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a><a href="#"
                            class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex"
                            data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a></div>
                    <div class="nk-sidebar-brand"><a href="/demo1/hotel/index.html"
                            class="logo-link nk-sidebar-logo"><img class="logo-light logo-img"
                                src="<?php echo base_url() ?>AdminCSS/images/logo.png"
                                srcset="/demo1/images/logo2x.png 2x" alt="logo"><img class="logo-dark logo-img"
                                src="<?php echo base_url() ?>AdminCSS/images/low-res-logo.png"
                                srcset="/demo1/images/logo-dark2x.png 2x" alt="logo-dark"></a></div>
                </div>
                <div class="nk-sidebar-element nk-sidebar-body">
                    <div class="nk-sidebar-content">
                        <div class="nk-sidebar-menu" data-simplebar>
                            <ul class="nk-menu">
                                <li class="nk-menu-item"><a href="http://localhost/project-Healing/Admin/admin/index"
                                        class="nk-menu-link"><span class="nk-menu-icon"><em
                                                class="icon ni ni-dashboard-fill"></em></span><span
                                            class="nk-menu-text">Dashboard</span></a></li>
                                <li class="nk-menu-item has-sub"><a
                                        href="http://localhost/project-Healing/Admin/admin/bookinglist"
                                        class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon"><em
                                                class="icon ni ni-calendar-booking-fill"></em></span><span
                                            class="nk-menu-text">Bookings</span></a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item"><a href="/demo1/hotel/bookings.html"
                                                class="nk-menu-link"><span class="nk-menu-text">All Bookings</span></a>
                                        </li>
                                        <li class="nk-menu-item"><a href="/demo1/hotel/booking-add.html"
                                                class="nk-menu-link"><span class="nk-menu-text">Add Booking</span></a>
                                        </li>
                                        <li class="nk-menu-item"><a href="/demo1/hotel/booking-edit.html"
                                                class="nk-menu-link"><span class="nk-menu-text">Edit Booking</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nk-menu-item has-sub"><a
                                        href="http://localhost/project-Healing/Admin/admin/roomlist"
                                        class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon"><em
                                                class="icon ni ni-home-fill"></em></span><span
                                            class="nk-menu-text">Room</span></a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item"><a href="/demo1/hotel/room-list.html"
                                                class="nk-menu-link"><span class="nk-menu-text">All Rooms</span></a>
                                        </li>
                                        <li class="nk-menu-item"><a href="/demo1/hotel/room-type.html"
                                                class="nk-menu-link"><span class="nk-menu-text">Room Types</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                            class="nk-menu-icon"><em class="icon ni ni-reports"></em></span><span
                                            class="nk-menu-text">Reports</span></a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item"><a href="/demo1/hotel/report-stocks.html"
                                                class="nk-menu-link"><span class="nk-menu-text">Stocks</span></a></li>
                                        <li class="nk-menu-item"><a href="/demo1/hotel/report-expenses.html"
                                                class="nk-menu-link"><span class="nk-menu-text">Expenses</span></a></li>
                                        <li class="nk-menu-item"><a href="/demo1/hotel/report-booking.html"
                                                class="nk-menu-link"><span class="nk-menu-text">Booking</span></a></li>
                                    </ul>
                                </li> -->
                                <li class="nk-menu-item"><a
                                        href="http://localhost/project-Healing/Admin/admin/customerlist"
                                        class="nk-menu-link"><span class="nk-menu-icon"><em
                                                class="icon ni ni-users-fill"></em></span><span
                                            class="nk-menu-text">Customers</span></a></li>
                                <li class="nk-menu-item has-sub"><a
                                        href="http://localhost/project-Healing/Admin/admin/invoicelist"
                                        class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon"><em
                                                class="icon ni ni-coins"></em></span><span
                                            class="nk-menu-text">Payment</span></a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item"><a href="/demo1/hotel/payment-methods.html"
                                                class="nk-menu-link"><span class="nk-menu-text">Payment
                                                    Methods</span></a></li>
                                        <li class="nk-menu-item"><a href="/demo1/hotel/invoice-list.html"
                                                class="nk-menu-link"><span class="nk-menu-text">Invocie List</span></a>
                                        </li>
                                        <li class="nk-menu-item"><a href="/demo1/hotel/invoice-details.html"
                                                class="nk-menu-link"><span class="nk-menu-text">Invocie
                                                    Details</span></a></li>
                                    </ul>
                                </li>
                                <li class="nk-menu-item"><a href="http://localhost/project-Healing/Admin/admin/support"
                                        class="nk-menu-link"><span class="nk-menu-icon"><em
                                                class="icon ni ni-chat-circle-fill"></em></span><span
                                            class="nk-menu-text">Support</span></a></li>
                                <li class="nk-menu-item"><a href="http://localhost/project-Healing/Admin/admin/setting"
                                        class="nk-menu-link"><span class="nk-menu-icon"><em
                                                class="icon ni ni-setting-alt-fill"></em></span><span
                                            class="nk-menu-text">Settings</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nk-wrap ">
                <div class="nk-header nk-header-fixed">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ms-n1"><a href="#"
                                    class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em
                                        class="icon ni ni-menu"></em></a></div>
                            <div class="nk-header-brand d-xl-none"><a href="/demo1/index.html" class="logo-link"><img
                                        class="logo-light logo-img"
                                        src="<?php echo base_url() ?>AdminCSS/images/logo.png"
                                        srcset="/demo1/images/logo2x.png 2x" alt="logo"><img class="logo-dark logo-img"
                                        src="/demo1/images/logo-dark.png" srcset="/demo1/images/logo-dark2x.png 2x"
                                        alt="logo-dark"></a></div>
                            <div class="nk-header-news d-none d-xl-block">
                                <div class="nk-news-list"><a class="nk-news-item" href="#">
                                        <div class="nk-news-icon"><em class="icon ni ni-card-view"></em></div>
                                        <!-- <div class="nk-news-text">
                                            <p>Jangan lupa Makan hehe</p><em class="icon ni ni-external"></em>
                                        </div> -->
                                    </a></div>
                            </div>
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <li class="dropdown language-dropdown d-none d-sm-block me-n1"><a href="#"
                                            class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                                            <div class="quick-icon border border-light"><img class="icon"
                                                    src="<?php echo base_url() ?>AdminCSS/images/flags/english-sq.png"
                                                    alt=""></div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-s1">
                                            <ul class="language-list">
                                                <li><a href="#" class="language-item"><img
                                                            src="<?php echo base_url() ?>AdminCSS/images/flags/english.png"
                                                            alt="" class="language-flag"><span
                                                            class="language-name">English</span></a></li>
                                                <li><a href="#" class="language-item"><img
                                                            src="<?php echo base_url() ?>AdminCSS/images/flags/spanish.png"
                                                            alt="" class="language-flag"><span
                                                            class="language-name">Español</span></a></li>
                                                <li><a href="#" class="language-item"><img
                                                            src="<?php echo base_url() ?>AdminCSS/images/flags/french.png"
                                                            alt="" class="language-flag"><span
                                                            class="language-name">Français</span></a></li>
                                                <li><a href="#" class="language-item"><img
                                                            src="<?php echo base_url() ?>AdminCSS/images/flags/turkey.png"
                                                            alt="" class="language-flag"><span
                                                            class="language-name">Türkçe</span></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="dropdown user-dropdown"><a href="#" class="dropdown-toggle"
                                            data-bs-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm"><em class="icon ni ni-user-alt"></em></div>
                                                <div class="user-info d-none d-md-block">
                                                    <div class="user-status">Administrator</div>
                                                    <div class="user-name dropdown-indicator">Uti Akhmad Nawawi</div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end dropdown-menu-s1">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                    <div class="user-avatar"><span>AB</span></div>
                                                    <div class="user-info"><span class="lead-text">Abu Bin
                                                            Ishtiyak</span><span
                                                            class="sub-text">info@softnio.com</span></div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="#"><em class="icon ni ni-user-alt"></em><span>View
                                                                Profile</span></a></li>
                                                    <li><a href="/demo1/hotel/settings.html"><em
                                                                class="icon ni ni-setting-alt"></em><span>Account
                                                                Setting</span></a></li>
                                                    <li><a href="/demo1/hotel/settings-activity-log.html"><em
                                                                class="icon ni ni-activity-alt"></em><span>Login
                                                                Activity</span></a></li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="#"><em class="icon ni ni-signout"></em><span>Sign
                                                                out</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown notification-dropdown me-n1"><a href="#"
                                            class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                                            <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end dropdown-menu-s1">
                                            <div class="dropdown-head"><span
                                                    class="sub-title nk-dropdown-title">Notifications</span><a
                                                    href="#">Mark All as Read</a></div>
                                            <div class="dropdown-body">
                                                <div class="nk-notification">
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon"><em
                                                                class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">You have requested to
                                                                <span>Widthdrawl</span>
                                                            </div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon"><em
                                                                class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Your <span>Deposit
                                                                    Order</span> is placed</div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon"><em
                                                                class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">You have requested to
                                                                <span>Widthdrawl</span>
                                                            </div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon"><em
                                                                class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Your <span>Deposit
                                                                    Order</span> is placed</div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon"><em
                                                                class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">You have requested to
                                                                <span>Widthdrawl</span>
                                                            </div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon"><em
                                                                class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Your <span>Deposit
                                                                    Order</span> is placed</div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-foot center"><a href="#">View All</a></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>