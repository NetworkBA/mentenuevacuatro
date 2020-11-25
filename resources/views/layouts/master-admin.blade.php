<!DOCTYPE html>
<html lang="en">

<head>
    <title>GURU Able - Premium Admin Template </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('/admin/assets/images/favicon.ico')}}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('/admin/bower_components/bootstrap/css/bootstrap.min.css')}}">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('/admin/assets/icon/themify-icons/themify-icons.css')}}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{asset('/admin/assets/icon/icofont/css/icofont.css')}}">
    <!-- flag icon framework css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/admin/assets/pages/flag-icon/flag-icon.min.css')}}">
    <!-- Menu-Search css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/admin/assets/pages/menu-search/css/component.css')}}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/admin/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin/assets/css/jquery.mCustomScrollbar.css')}}">
    @yield('css')
</head>

<body>
    <!-- Pre-loader start -->
    {{--<div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>--}}

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                        <i class="ti-menu"></i>
                    </a>
                        <a class="mobile-search morphsearch-search" href="#">
                        <i class="ti-search"></i>
                    </a>
                        <a href="index.html">
                        <img class="img-fluid" src="{{asset('/admin/assets/images/logo.png')}}" alt="Theme-Logo" />
                    </a>
                        <a class="mobile-options">
                        <i class="ti-more"></i>
                    </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                <i class="ti-fullscreen"></i>
                            </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="user-profile header-notification">
                                <a href="#!">
                                <img src="{{asset('/admin/assets/images/avatar-4.jpg')}}" class="img-radius" alt="User-Profile-Image">
                                <span>John Doe</span>
                                <i class="ti-angle-down"></i>
                            </a>
                                <ul class="show-notification profile-notification">
                                    <li>
                                        <a href="#!">
                                        <i class="ti-settings"></i> Settings
                                    </a>
                                    </li>
                                    <li>
                                        <a href="user-profile.html">
                                        <i class="ti-user"></i> Profile
                                    </a>
                                    </li>
                                    <li>
                                        <a href="email-inbox.html">
                                        <i class="ti-email"></i> My Messages
                                    </a>
                                    </li>
                                    <li>
                                        <a href="auth-lock-screen.html">
                                        <i class="ti-lock"></i> Lock Screen
                                    </a>
                                    </li>
                                    <li>
                                        <a href="auth-normal-sign-in.html">
                                        <i class="ti-layout-sidebar-left"></i> Logout
                                    </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                    <img class="img-40 img-radius" src="{{asset('/admin/assets/images/avatar-4.jpg')}}" alt="User-Profile-Image">
                                    <div class="user-details">
                                        <span>John Doe</span>
                                        <span id="more-details">UX Designer<i class="ti-angle-down"></i></span>
                                    </div>
                                </div>

                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            <a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
                                            <a href="#!"><i class="ti-settings"></i>Settings</a>
                                            <a href="auth-normal-sign-in.html"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pcoded-search">
                                <span class="searchbar-toggle">  </span>
                                <div class="pcoded-search-box ">
                                    <input type="text" placeholder="Search">
                                    <span class="search-icon"><i class="ti-search" aria-hidden="true"></i></span>
                                </div>
                            </div>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Navigation</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="index.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.dash.default">Default</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="dashboard-ecommerce.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.dash.ecommerce">Ecommerce</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="dashboard-crm.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.dash.crm">CRM</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dashboard-analytics.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.dash.analytics">Analytics</span>
                                            <span class="pcoded-badge label label-info ">NEW</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dashboard-project.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.dash.project">Project</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-layout"></i><b>P</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.page_layout.main">Page layouts</span>
                                    <span class="pcoded-badge label label-warning">NEW</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                    <ul class="pcoded-submenu">

                                        <li class=" pcoded-hasmenu">
                                            <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                            <span class="pcoded-mtext">Vertical</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                            <ul class="pcoded-submenu">
                                                <li class=" ">
                                                    <a href="menu-static.html">
                                                    <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.page_layout.vertical.static-layout">Static Layout</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="menu-header-fixed.html">
                                                    <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.page_layout.vertical.header-fixed">Header Fixed</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="menu-compact.html">
                                                    <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.page_layout.vertical.compact">Compact</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="menu-sidebar.html">
                                                    <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.page_layout.vertical.sidebar-fixed">Sidebar Fixed</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                                </li>

                                            </ul>
                                        </li>
                                        <li class=" pcoded-hasmenu">
                                            <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.page_layout.horizontal.main">Horizontal</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                            <ul class="pcoded-submenu">
                                                <li class=" ">
                                                    <a href="menu-horizontal-static.html" target="_blank">
                                                    <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.page_layout.horizontal.static-layout">Static Layout</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="menu-horizontal-fixed.html" target="_blank">
                                                    <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.page_layout.horizontal.fixed-layout">Fixed layout</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="menu-horizontal-icon.html" target="_blank">
                                                    <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                    <span class="pcoded-mtext"  data-i18n="nav.page_layout.horizontal.static-with-icon">Static With Icon</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="menu-horizontal-icon-fixed.html" target="_blank">
                                                    <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.page_layout.horizontal.fixed-with-icon">Fixed With Icon</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class=" ">
                                            <a href="menu-bottom.html">
                                            <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.page_layout.bottom-menu">Bottom Menu</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="box-layout.html" target="_blank">
                                            <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.page_layout.box-layout">Box Layout</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="menu-rtl.html" target="_blank">
                                            <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.page_layout.rtl">RTL</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>

                                    </ul>
                                </li>
                                <li class=""> <a href="navbar-light.html">        <span class="pcoded-micon"><i class="ti-layout-cta-right"></i><b>N</b></span>        <span class="pcoded-mtext" data-i18n="nav.navigate.main">Navigation</span>        <span class="pcoded-mcaret"></span>    </a></li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-view-grid"></i><b>W</b></span>
                                    <span class="pcoded-mtext"  data-i18n="nav.widget.main">Widget</span>
                                    <span class="pcoded-badge label label-danger">100+</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="widget-statistic.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.navigate.navbar">Statistic</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="widget-data.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.navigate.navbar-inverse">Data</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="widget-chart.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext"  data-i18n="nav.navigate.navbar-with-elements">Chart Widget</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="widget-chart-advance.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext"  data-i18n="nav.navigate.navbar-with-elements">Advance Widgets</span>
                                            <span class="pcoded-badge label label-info">25+</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.ui-element">UI Element</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu active pcoded-trigger">
                                    <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i><b>BC</b></span>
                                    <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Basic Components</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="alert.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Alert</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="breadcrumb.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Breadcrumbs</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="button.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.button">Button</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="box-shadow.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.box-shadow">Box-Shadow</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="active">
                                            <a href="accordion.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.collapse–accordion">Accordion</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="generic-class.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.generic-class">Generic Class</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="tabs.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.tabs">Tabs</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="color.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.color">Color</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="label-badge.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext">Label Badge</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="progress-bar.html" data-i18n="nav.basic-components.progress-bar">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.label-badge">Progress Bar</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="preloader.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.pre-loader">Pre-Loader</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="list.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.list">List</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="tooltip.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.tooltip-popover">Tooltip And Popover</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="typography.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.typography">Typography</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="other.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.other">Other</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-crown"></i><b>AC</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.advance-components.main">Advance Components</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="draggable.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.advance-components.draggable">Draggable</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="bs-grid.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.advance-components.grid-stack">Grid Stack</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="light-box.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.advance-components.light-box">Light Box</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="modal.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.advance-components.modal">Modal</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>

                                        <li class=" ">
                                            <a href="notification.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.advance-components.notifications">Notifications</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="notify.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext"  data-i18n="nav.advance-components.pnotify">PNOTIFY</span>
                                            <span class="pcoded-badge label label-info">NEW</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="rating.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext"  data-i18n="nav.advance-components.rating">Rating</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="range-slider.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext"  data-i18n="nav.advance-components.range-slider">Range Slider</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="slider.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.advance-components.slider">Slider</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="syntax-highlighter.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext"  data-i18n="nav.advance-components.syntax-highlighter">Syntax Highlighter</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="tour.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.advance-components.tour">Tour</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="treeview.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.advance-components.tree-view">Tree View</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="nestable.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.advance-components.nestable">Nestable</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="toolbar.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.advance-components.toolbar">Toolbar</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="x-editable.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.advance-components.x-editable">X-Editable</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-gift"></i><b>EC</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.extra-components.main">Extra Components</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="session-timeout.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.extra-components.session-timeout">Session Timeout</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="session-idle-timeout.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.extra-components.session-idle-timeout">Session Idle Timeout</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="offline.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.extra-components.offline">Offline</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>

                                    </ul>
                                </li>
                                <li class=" ">
                                    <a href="animation.html">
                                    <span class="pcoded-micon"><i class="ti-reload rotate-refresh"></i><b>A</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.animations.main">Animations</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                </li>
                                <li class=" ">
                                    <a href="sticky.html">
                                    <span class="pcoded-micon"><i class="ti-layers-alt"></i><b>S</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.sticky-notes.main">Sticky Notes</span>
                                    <span class="pcoded-badge label label-danger">HOT</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-star"></i><b>I</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.icons.main">Icons</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="icon-font-awesome.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.icons.font-awesome">Font Awesome</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="icon-themify.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.icons.themify">Themify</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="icon-simple-line.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.icons.simple-line-icon">Simple Line Icon</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="icon-ion.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.icons.ion-icon">Ion Icon</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="icon-material-design.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.icons.material-design">Material Design</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="icon-icofonts.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.icons.ico-fonts">Ico Fonts</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="icon-weather.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.icons.weather-icon">Weather Icon</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="icon-typicons.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.icons.typicons">Typicons</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="icon-flags.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.icons.flags">Flags</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Forms</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Form Components</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="form-elements-component.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.form-components.form-components">Form Components</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="form-elements-add-on.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.form-components.form-elements-add-on">Form-Elements-Add-On</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="form-elements-advance.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext"  data-i18n="nav.form-components.form-elements-advance">Form-Elements-Advance</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="form-validation.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.form-components.form-validation">Form Validation</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>

                                    </ul>
                                </li>
                                <li class=" ">
                                    <a href="form-picker.html">
                                    <span class="pcoded-micon"><i class="ti-pencil-alt"></i><b>FP</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.form-pickers.main">Form Picker</span>
                                    <span class="pcoded-badge label label-warning">NEW</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                </li>

                                <li class=" ">
                                    <a href="form-select.html">
                                    <span class="pcoded-micon"><i class="ti-shortcode"></i><b>FS</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.form-select.main">Form Select</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                </li>
                                <li class=" ">
                                    <a href="form-masking.html">
                                    <span class="pcoded-micon"><i class="ti-write"></i><b>FM</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.form-masking.main">Form Masking</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                </li>
                                <li class=" ">
                                    <a href="form-wizard.html">
                                    <span class="pcoded-micon"><i class="ti-archive"></i><b>F</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.form-wizard.main">Form Wizard</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-receipt"></i><b>R</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.ready-to-use.main">Ready To Use</span>
                                    <span class="pcoded-badge label label-danger">HOT</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="ready-cloned-elements-form.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.ready-to-use.cloned-elements-form">Cloned Elements Form</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-currency-form.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.ready-to-use.currency-form">Currency Form</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-form-booking.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.ready-to-use.booking-form">Booking Form</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-form-booking-multi-steps.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.ready-to-use.booking-multi-steps-form">Booking Multi Steps Form</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-form-comment.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.ready-to-use.comment-form">Comment Form</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-form-contact.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.ready-to-use.contact-form">Contact Form</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-job-application-form.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext"  data-i18n="nav.ready-to-use.job-application-form">Job Application Form</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-js-addition-form.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.ready-to-use.jS-addition-form">JS Addition Form</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-login-form.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.ready-to-use.login-form">Login Form</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-popup-modal-form.html" target="_blank">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.ready-to-use.popup-modal-form">Popup Modal Form</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-registration-form.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.ready-to-use.registration-form">Registration Form</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-review-form.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.ready-to-use.review-form">Review Form</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-subscribe-form.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.ready-to-use.subscribe-form">Subscribe Form</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-suggestion-form.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.ready-to-use.suggestion-form">Suggestion Form</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-tabs-form.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.ready-to-use.tabs-form">Tabs Form</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.tables">Tables</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-receipt"></i><b>B</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.bootstrap-table.main">Bootstrap Table</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="bs-basic-table.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.bootstrap-table.basic-table">Basic Table</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="bs-table-sizing.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.bootstrap-table.sizing-table">Sizing Table</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="bs-table-border.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.bootstrap-table.border-table">Border Table</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="bs-table-styling.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.bootstrap-table.styling-table">Styling Table</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-widgetized"></i><b>DT</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.data-table.main">Data Table</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="dt-basic.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.data-table.basic-initialization">Basic Initialization</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-advance.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.data-table.advance-initialization">Advance Initialization</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-styling.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.data-table.styling">Styling</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-api.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.data-table.api">API</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-ajax.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.data-table.ajax">Ajax</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-server-side.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.data-table.server-side">Server Side</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-plugin.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.data-table.plug-in">Plug-In</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-data-sources.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.data-table.data-sources">Data Sources</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-loop"></i><b>D</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.data-table-extensions.main">Data Table Extensions</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="dt-ext-autofill.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.data-table-extensions.autofill">AutoFill</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="pcoded-hasmenu">
                                            <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.data-table-extensions.button.main">Button</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                            <ul class="pcoded-submenu">
                                                <li class=" ">
                                                    <a href="dt-ext-basic-buttons.html">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.data-table-extensions.button.basic-button">Basic Button</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="dt-ext-buttons-html-5-data-export.html">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.data-table-extensions.button.html-data-export">Html-5 Data Export</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                                </li>

                                            </ul>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-ext-col-reorder.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.data-table-extensions.col-reorder">Col Reorder</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-ext-fixed-columns.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.data-table-extensions.fixed-columns">Fixed Columns</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-ext-fixed-header.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.data-table-extensions.fixed-header">Fixed Header</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-ext-key-table.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.data-table-extensions.key-table">Key Table</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-ext-responsive.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.data-table-extensions.responsive">Responsive</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-ext-row-reorder.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.data-table-extensions.row-recorder">Row Reorder</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-ext-scroller.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext"  data-i18n="nav.data-table-extensions.scroller">Scroller</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-ext-select.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.data-table-extensions.select-tbl">Select Table</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=" ">
                                    <a href="foo-table.html">
                                    <span class="pcoded-micon"><i class="ti-view-list-alt"></i><b>F</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.foo-table.main">FooTable</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-view-list"></i><b>HT</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.handson-table.main">Handson Table</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="handson-appearance.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.handson-table.appearance">Appearance</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="handson-data-operation.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.handson-table.data-operation">Data Operation</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="handson-rows-cols.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.handson-table.rows-columns">Rows Columns</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="handson-columns-only.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.handson-table.columns-Only">Columns Only</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="handson-cell-features.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.handson-table.cell-features">Cell Features</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="handson-cell-types.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.handson-table.cell-types">Cell Types</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="handson-integrations.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.handson-table.integrations">Integrations</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="handson-rows-only.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.handson-table.rows-Only">Rows Only</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="handson-utilities.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.handson-table.utilities">Utilities</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="editable-table.html">
                                    <span class="pcoded-micon"><i class="ti-write"></i><b>E</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.editable-table.main">Editable Table</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.chart-and-maps">Chart And Maps</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-bar-chart-alt"></i><b>C</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.charts.main">Charts</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="chart-google.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.charts.google-chart">Google Chart</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-echart.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.charts.echarts">Echarts</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-chartjs.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.charts.chartjs">ChartJs</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-list.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.charts.list-chart">List Chart</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-float.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.charts.float-chart">Float Chart</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-knob.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.charts.know-chart">Knob chart</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-morris.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.charts.morris-chart">Morris Chart</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-nvd3.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.charts.nvd3-chart">Nvd3 Chart</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-peity.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.charts.peity-chart">Peity Chart</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-radial.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.charts.radial chart">Radial Chart</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-rickshaw.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.charts.rickshaw-chart">Rickshaw Chart</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-sparkline.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.charts.sparkline-chart">Sparkline Chart</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-c3.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.charts.c3-chart">C3 Chart</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-map-alt"></i><b>M</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.maps.main">Maps</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="map-google.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.maps.google-maps">Google Maps</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="map-vector.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.maps.vector-map">Vector Maps</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="map-api.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.maps.google-map-api">Google Map Search API</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="location.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.maps.location">Location</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="landingpage/index.html" target="_blank">
                                    <span class="pcoded-micon"><i class="ti-mobile"></i><b>LP</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.landing-page.main">Landing Page</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.pages">Pages</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-id-badge"></i><b>A</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.authentication.main">Authentication</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="auth-normal-sign-in.html" target="_blank">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.authentication.login-bg-image">Login With BG Image</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-sign-in-social.html" target="_blank">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.authentication.login-soc-icon">Login With Social Icon</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-sign-in-social-header-footer.html" target="_blank">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.authentication.login-soc-h-f">Login Social With Header And Footer</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-normal-sign-in-header-footer.html" target="_blank">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.authentication.login-h-f">Login With Header And Footer</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-sign-up.html" target="_blank">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.authentication.registration-bg-image">Registration BG Image</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-sign-up-social.html" target="_blank">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.authentication.registration-soc-icon">Registration Social Icon</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-sign-up-social-header-footer.html" target="_blank">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.authentication.registration-soc-h-f">Registration Social With Header And Footer</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-sign-up-header-footer.html" target="_blank">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.authentication.registration-h-f">Registration With Header And Footer</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-multi-step-sign-up.html" target="_blank">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.authentication.multi-step-registration">Multi Step Registration</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-reset-password.html" target="_blank">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.authentication.forgot-password">Forgot Password</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-lock-screen.html" target="_blank">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.authentication.lock-screen">Lock Screen</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-modal.html" target="_blank">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.authentication.modal">Modal</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-settings"></i><b>M</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.maintenance.main">Maintenance</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="error.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.maintenance.error">Error</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="comming-soon.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.maintenance.comming-soon">Comming Soon</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="offline-ui.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.maintenance.offline-ui">Offline UI</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-user"></i><b>UP</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.user-profile.main">User Profile</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="timeline.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.user-profile.timeline">Timeline</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="timeline-social.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.user-profile.timeline-social">Timeline Social</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="user-profile.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.user-profile.user-profile">User Profile</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="user-card.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.user-profile.user-card">User Card</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-shopping-cart"></i><b>E</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.e-commerce.main">E-Commerce</span>
                                    <span class="pcoded-badge label label-danger">NEW</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="product.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.e-commerce.product">Product</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="product-list.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.e-commerce.product-list">Product List</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="product-edit.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.e-commerce.product-edit">Product Edit</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="product-detail.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.e-commerce.product-detail">Product Detail</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="product-cart.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.e-commerce.product-card">Product Card</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="product-payment.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.e-commerce.credit-card-form">Credit Card Form</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-email"></i><b>E</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.email.main">Email</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="email-compose.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.email.compose-mail">Compose Email</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="email-inbox.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.email.inbox">Inbox</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="email-read.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.email.read-read-mail">Read Mail</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="pcoded-hasmenu ">
                                            <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="ti-email"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.email.email-template.main">Email Template</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                            <ul class="pcoded-submenu">
                                                <li class="">
                                                    <a href="email-templates/email-welcome.html">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.email.email-template.welcome-email">Welcome Email</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                                </li>
                                                <li class="">
                                                    <a href="email-templates/email-password.html">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext"  data-i18n="nav.email.email-template.reset-password">Reset Password</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                                </li>
                                                <li class="">
                                                    <a href="email-templates/email-newsletter.html">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext"  data-i18n="nav.email.email-template.newsletter-email">Newsletter Email</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                                </li>
                                                <li class="">
                                                    <a href="email-templates/email-launch.html">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.email.email-template.app-launch">App Launch</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                                </li>
                                                <li class="">
                                                    <a href="email-templates/email-activation.html">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.email.email-template.activation-code">Activation Code</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.app">App</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class=" ">
                                    <a href="chat.html">
                                    <span class="pcoded-micon"><i class="ti-comments"></i><b>C</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.chat.main">Chat</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                </li>

                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-dribbble"></i><b>S</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.social.main">Social</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="fb-wall.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.social.fb-wall">Wall</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="message.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.social.messages">Messages</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-check-box"></i><b>T</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.task.main">Task</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="task-list.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.task.task-list">Task List</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="task-board.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.task.task-board">Task Board</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="task-detail.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.task.task-detail">Task Detail</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="issue-list.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.task.issue list">Issue List</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-notepad"></i><b>T</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.to-do.main">To-Do</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="todo.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.to-do.todo">To-Do</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="notes.html" data-i18n="nav.to-do.notes">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext">Notes</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-gallery"></i><b>G</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.gallery.main">Gallery</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="gallery-grid.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.gallery.gallery-grid">Gallery-Grid</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="gallery-masonry.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.gallery.masonry-gallery">Masonry Gallery</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="gallery-advance.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.gallery.advance-gallery">Advance Gallery</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-search"></i><b>S</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.search.main">Search</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="search-result.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.search.simple-search">Simple Search</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="search-result2.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.search.grouping-search">Grouping Search</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-medall-alt"></i><b>JS</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.job-search.main">Job Search</span>
                                    <span class="pcoded-badge label label-danger">NEW</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="job-card-view.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.job-search.card-view">Card View</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="job-details.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.job-search.job-detailed">Job Detailed</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="job-find.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.job-search.job-find">Job Find</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="job-panel-view.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.job-search.job-panel-view">Job Panel View</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.extension">Extension</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-pencil-alt"></i><b>E</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.editor.main">Editor</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="ck-editor.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.editor.ck-editor">CK-Editor</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="wysiwyg-editor.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.editor.wysiwyg-editor">WYSIWYG Editor</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="ace-editor.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.editor.ace-editor">Ace Editor</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>

                                        <li class="">
                                            <a href="long-press-editor.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.editor.long-press-editor">Long Press Editor</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-layout-media-right"></i><b>I</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.invoice.main">Invoice</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="invoice.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.invoice.invoice">Invoice</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="invoice-summary.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.invoice.invoice-summery">Invoice Summary</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="invoice-list.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.invoice.invoice-list">Invoice List</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-calendar"></i><b>EC</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.event-calendar.main">Event Calendar</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="event-full-calender.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.full-calendar.full-calendar">Full Calendar</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="event-clndr.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.clnder.clnder">CLNDER</span>
                                            <span class="pcoded-badge label label-info">NEW</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="image-crop.html">
                                    <span class="pcoded-micon"><i class="ti-cut"></i><b>IC</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.image-cropper.main">Image Cropper</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                </li>
                                <li class="">
                                    <a href="file-upload.html">
                                    <span class="pcoded-micon"><i class="ti-cloud-up"></i><b>FU</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.file-upload.main">File Upload</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-world"></i><b>I</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.internationalize.main">Internationalize</span>
                                    <span class="pcoded-badge label label-danger">HOT</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="internationalization/internationalization-after-init.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.internationalize.after-init">After Init</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="internationalization/internationalization-fallback.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.internationalize.fallback">Fallback</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="internationalization/internationalization-on-init.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.internationalize.on-int">On Init</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="internationalization/internationalization-resources.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.internationalize.resources">Resources</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="internationalization/internationalization-xhr-backend.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.internationalize.xhr-backend">XHR Backend</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="change-loges.html">
                                    <span class="pcoded-micon"><i class="ti-list"></i><b>CL</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.change-loges.main">Change Loges</span>
                                    <span class="pcoded-badge label label-warning">1.0</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.other">Other</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-direction-alt"></i><b>M</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.menu-levels.main">Menu Levels</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-21">Menu Level 2.1</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="pcoded-hasmenu ">
                                            <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="ti-direction-alt"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-22.main">Menu Level 2.2</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                            <ul class="pcoded-submenu">
                                                <li class="">
                                                    <a href="javascript:void(0)">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-22.menu-level-31">Menu Level 3.1</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="">
                                            <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-23">Menu Level 2.3</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="">
                                    <a href="javascript:void(0)" class="disabled">
                                    <span class="pcoded-micon"><i class="ti-na"></i><b>D</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.disabled-menu.main" >Disabled Menu</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                </li>
                                <li class="">
                                    <a href="sample-page.html">
                                    <span class="pcoded-micon"><i class="ti-layout-sidebar-left"></i><b>S</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.sample-page.main">Sample Page</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.support">Support</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="http://html.codedthemes.com/guru-able/doc" target="_blank">
                                    <span class="pcoded-micon"><i class="ti-file"></i><b>D</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.documentation.main">Documentation</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                </li>
                                <li class="">
                                    <a href="#" target="_blank">
                                    <span class="pcoded-micon"><i class="ti-layout-list-post"></i><b>SI</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.submit-issue.main">Submit Issue</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-header start -->
                                    <div class="page-header card">
                                        <div class="row align-items-end">
                                            <div class="col-lg-8">
                                                <div class="page-header-title">
                                                    <div class="d-inline">
                                                        <h4>@yield('titulo-header')</h4>
                                                        <span>@yield('descripcion-header')</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-header end -->

                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        @yield('contenido')
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Required Jquery -->
    <script type="text/javascript" src="{{asset('/admin/bower_components/jquery/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin/bower_components/jquery-ui/js/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin/bower_components/popper.js/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin/bower_components/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{asset('/admin/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{asset('/admin/bower_components/modernizr/js/modernizr.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin/bower_components/modernizr/js/css-scrollbars.js')}}"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="{{asset('/admin/bower_components/i18next/js/i18next.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin/bower_components/jquery-i18next/js/jquery-i18next.min.js')}}"></script>
    
    <script src="{{asset('/admin/assets/js/pcoded.min.js')}}"></script>
    <script src="{{asset('/admin/assets/js/demo-12.js')}}"></script>
    <script src="{{asset('/admin/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    @yield('js')
</body>

</html>