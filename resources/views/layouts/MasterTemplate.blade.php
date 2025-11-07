<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<!-- include head.blade.php -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Card Actions - Stack Responsive Bootstrap 4 Admin Template</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
        rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/vendors.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN STACK CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/app.css">
    <!-- END STACK CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END Custom CSS-->
</head>

<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click"
    data-menu="vertical-menu" data-col="2-columns">
    <!-- fixed-top-->
    <!-- include nav.blade.php -->
    <nav
        class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-semi-light bg-gradient-x-grey-blue">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-md-none mr-auto"><a
                            class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                                class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item">
                        <a class="navbar-brand" href="index.html">
                            <img class="brand-logo" alt="stack admin logo"
                                src="../../../app-assets/images/logo/stack-logo-light.png">
                            <h2 class="brand-text">Stack</h2>
                        </a>
                    </li>
                    <li class="nav-item d-md-none">
                        <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i
                                class="fa fa-ellipsis-v"></i></a>
                    </li>
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs"
                                href="#"><i class="ft-menu"></i></a></li>

                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i
                                    class="ficon ft-maximize"></i></a></li>
                        <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i
                                    class="ficon ft-search"></i></a>
                            <div class="search-input">
                                <input class="input" type="text" placeholder="Explore Stack...">
                            </div>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav float-right">


                        <li class="dropdown dropdown-user nav-item">
                            <a class="dropdown-toggle nav-link dropdown-user-link" href="#"
                                data-toggle="dropdown">
                                <span class="avatar avatar-online">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-1.png"
                                        alt="avatar"><i></i></span>
                                <span class="user-name">John Doe</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item"
                                    href="user-profile.html"><i class="ft-user"></i> Edit Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="login-with-bg-image.html"><i class="ft-power"></i>
                                    Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <!-- include menu.blade.php -->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" navigation-header">
                    <span>General</span><i class=" ft-minus" data-toggle="tooltip" data-placement="right"
                        data-original-title="General"></i>
                </li>
                <li class=" nav-item"><a href="index.html"><i class="ft-home"></i><span class="menu-title"
                            data-i18n="">Dashboard</span><span
                            class="badge badge badge-primary badge-pill float-right mr-2">3</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="dashboard-ecommerce.html">eCommerce</a>
                        </li>
                        <li><a class="menu-item" href="dashboard-analytics.html">Analytics</a>
                        </li>
                        <li><a class="menu-item" href="dashboard-fitness.html">Fitness</a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="ft-monitor"></i><span class="menu-title"
                            data-i18n="">Templates</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="#">Vertical</a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="../vertical-modern-menu-template">Modern Menu</a>
                                </li>
                                <li><a class="menu-item" href="../vertical-menu-template">Semi Light</a>
                                </li>
                                <li><a class="menu-item" href="../vertical-menu-template-semi-dark">Semi Dark</a>
                                </li>
                                <li><a class="menu-item" href="../vertical-menu-template-nav-dark">Nav Dark</a>
                                </li>
                                <li><a class="menu-item" href="../vertical-menu-template-light">Light</a>
                                </li>
                                <li><a class="menu-item" href="../vertical-overlay-menu-template">Overlay Menu</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="menu-item" href="#">Horizontal</a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="../horizontal-menu-template">Classic</a>
                                </li>
                                <li><a class="menu-item" href="../horizontal-menu-template-nav">Nav Dark</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class=" nav-item"><a href="#"><i class="ft-edit"></i><span class="menu-title"
                            data-i18n="">Forms</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="#">Form Elements</a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="form-inputs.html">Form Inputs</a>
                                </li>
                                <li><a class="menu-item" href="form-input-groups.html">Input Groups</a>
                                </li>
                                <li><a class="menu-item" href="form-input-grid.html">Input Grid</a>
                                </li>
                                <li><a class="menu-item" href="form-extended-inputs.html">Extended Inputs</a>
                                </li>
                                <li><a class="menu-item" href="form-checkboxes-radios.html">Checkboxes &amp;
                                        Radios</a>
                                </li>
                                <li><a class="menu-item" href="form-switch.html">Switch</a>
                                </li>
                                <li><a class="menu-item" href="form-select2.html">Select2</a>
                                </li>
                                <li><a class="menu-item" href="form-tags-input.html">Tags Input</a>
                                </li>
                                <li><a class="menu-item" href="form-validation.html">Validation</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="menu-item" href="#">Form Layouts</a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="form-layout-basic.html">Basic Forms</a>
                                </li>
                                <li><a class="menu-item" href="form-layout-horizontal.html">Horizontal Forms</a>
                                </li>
                                <li><a class="menu-item" href="form-layout-hidden-labels.html">Hidden Labels</a>
                                </li>
                                <li><a class="menu-item" href="form-layout-form-actions.html">Form Actions</a>
                                </li>
                                <li><a class="menu-item" href="form-layout-bordered.html">Bordered</a>
                                </li>
                                <li><a class="menu-item" href="form-layout-striped-rows.html">Striped Rows</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="menu-item" href="form-dual-listbox.html"
                                data-i18n="nav.form_elements.form_dual_listbox">Dual
                                Listbox</a>
                        </li>
                        <li><a class="menu-item" href="form-wizard.html">Form Wizard</a>
                        </li>
                        <li><a class="menu-item" href="form-repeater.html">Form Repeater</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>


    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Components</a>
                                </li>
                                <li class="breadcrumb-item active">Card Actions
                                </li>
                            </ol>
                        </div>
                    </div>
                    <h3 class="content-header-title mb-0">Card Actions</h3>
                </div>

            </div>
            <div class="content-body">
                <!-- card actions section start -->
                <section id="card-actions">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Card Actions Example</h4>
                                    <a class="heading-elements-toggle"><i
                                            class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-12 mb-2">
                                                test
                                            </div>
                                            <div class="col-xl-6 col-lg-12">
                                                test2
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
                <!-- // card-actions section end -->
            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <footer class="footer footer-static footer-light navbar-border">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
            <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2018 <a
                    class="text-bold-800 grey darken-2"
                    href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT
                </a>, All
                rights reserved. </span>
            <span class="float-md-right d-block d-md-inline-block d-none d-lg-block">Hand-crafted & Made with <i
                    class="ft-heart pink"></i></span>
        </p>
    </footer>
    <!-- BEGIN VENDOR JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN STACK JS-->
    <script src="../../../app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="../../../app-assets/js/core/app.js" type="text/javascript"></script>
    <script src="../../../app-assets/js/scripts/customizer.js" type="text/javascript"></script>
    <!-- END STACK JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
</body>

</html>
