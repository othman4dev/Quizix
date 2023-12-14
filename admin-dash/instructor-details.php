<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./assets/images/favicon.png">
    <!-- Page Title  -->
    <title>Instructor Details | LMS </title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="./assets/css/dashlite.css?ver=3.2.3">
    <link id="skin-default" rel="stylesheet" href="./assets/css/theme.css?ver=3.2.3">
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            <div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-sidebar-brand">
                        <a href="./index.php" class="logo-link nk-sidebar-logo">
                            <img class="logo-light logo-img" src="./assets/images/logo-dark.svg" srcset="./assets/images/logo2x.png 2x" alt="logo">
                            <img class="logo-dark logo-img" src="./assets/images/logo.svg" srcset="./assets/images/logo-dark2x.png 2x" alt="logo-dark">
                            <img class="logo-small logo-img logo-img-small" src="./assets/images/logo-small.svg" srcset="./assets/images/logo-small2x.png 2x" alt="logo-small">
                        </a>
                    </div>
                    <div class="nk-menu-trigger me-n2">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
                        <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                    </div>
                </div><!-- .nk-sidebar-element -->
                <?php include_once('./templates/sidebar.php'); ?>
            </div>
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                <div class="nk-header nk-header-fixed is-light">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ms-n1">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                            </div>
                            <div class="nk-header-brand d-xl-none">
                                <a href="./index.php" class="logo-link">
                                    <img class="logo-light logo-img" src="./assets/images/logo.png" srcset="./assets/images/logo2x.png 2x" alt="logo">
                                    <img class="logo-dark logo-img" src="./assets/images/logo-dark.png" srcset="./assets/images/logo-dark2x.png 2x" alt="logo-dark">
                                </a>
                            </div><!-- .nk-header-brand -->
                            <!-- .nk-header-news -->
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">



                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle me-n1" data-bs-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt"></em>
                                                </div>
                                                <div class="user-info d-none d-xl-block">
                                                    <div class="user-status user-status-active">Administator</div>
                                                    <div class="user-name dropdown-indicator">Abu Bin Ishityak</div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <span>AB</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text">Abu Bin Ishtiyak</span>
                                                        <span class="sub-text">info@softnio.com</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="./admin-profile.php"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                                    <li><a href="./admin-profile.php"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a>
                                                    </li>

                                                    <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="#"><em class="icon ni ni-signout"></em><span>Sign out</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- .nk-header-wrap -->
                    </div><!-- .container-fliud -->
                </div>
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h3 class="nk-block-title page-title">Instructor/ <strong class="text-primary small">Abu Bin Ishtiyak</strong></h3>
                                    </div>
                                </div>
                                <div class="nk-block nk-block-lg">
                                    <div class="card card-stretch">
                                        <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#personal-info"><em class="icon ni ni-user-circle-fill"></em><span>Personal information</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#profile-overview"><em class="icon ni ni-eye-fill"></em><span>Overview</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#profile-courses"><em class="icon ni ni-book-fill"></em><span>Courses</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#profile-review"><em class="icon ni ni-file-docs"></em><span>Quizes</span> </a>
                                            </li>
                                            <li class="nav-item nav-item-trigger">
                                                <a href="#" class="btn btn-icon btn-trigger"><em class="icon ni ni-edit"></em></a>
                                            </li>
                                        </ul>
                                        <div class="card-inner">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="personal-info">
                                                    <div class="nk-block">
                                                        <div class="profile-ud-list">
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">Gender</span>
                                                                    <span class="profile-ud-value">Male</span>
                                                                </div>
                                                            </div>
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">Full Name</span>
                                                                    <span class="profile-ud-value">Abu Bin Ishtiyak</span>
                                                                </div>
                                                            </div>
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">Date of Birth</span>
                                                                    <span class="profile-ud-value">10 Aug, 1980</span>
                                                                </div>
                                                            </div>
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">User ID</span>
                                                                    <span class="profile-ud-value">19</span>
                                                                </div>
                                                            </div>
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">Mobile Number</span>
                                                                    <span class="profile-ud-value">+212 758-756433</span>
                                                                </div>
                                                            </div>
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">Email Address</span>
                                                                    <span class="profile-ud-value">info@softnio.com</span>
                                                                </div>
                                                            </div>
                                                        </div><!-- .profile-ud-list -->
                                                    </div><!-- .nk-block -->
                                                    <div class="nk-block">
                                                        <div class="nk-block-head nk-block-head-line">
                                                            <h6 class="title overline-title text-base">Additional Information</h6>
                                                        </div><!-- .nk-block-head -->
                                                        <div class="profile-ud-list">


                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">Country</span>
                                                                    <span class="profile-ud-value">United State</span>
                                                                </div>
                                                            </div>
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">Nationality</span>
                                                                    <span class="profile-ud-value">United State</span>
                                                                </div>
                                                            </div>
                                                        </div><!-- .profile-ud-list -->
                                                    </div><!-- .nk-block -->
                                                    <div class="nk-divider divider md"></div>

                                                </div><!-- tab pane -->
                                                <div class="tab-pane" id="profile-overview">
                                                    <div class="nk-block-head nk-block-head-md">
                                                        <div class="nk-block-between">
                                                            <div class="nk-block-head-content">
                                                                <h5 class="nk-block-title">Profile Overview</h5>
                                                            </div><!-- .nk-block-head-content -->
                                                            <div class="nk-block-head-content">
                                                                <div class="toggle-wrap nk-block-tools-toggle">
                                                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                                                    <div class="toggle-expand-content" data-content="pageMenu">
                                                                        <ul class="nk-block-tools g-3">
                                                                            <li>
                                                                                <div class="drodown">
                                                                                    <a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-bs-toggle="dropdown"><em class="d-none d-sm-inline icon ni ni-calender-date"></em><span><span class="d-none d-md-inline">Last</span> 30 Days</span><em class="dd-indc icon ni ni-chevron-right"></em></a>
                                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                                        <ul class="link-list-opt no-bdr">
                                                                                            <li><a href="#"><span>Last 30 Days</span></a></li>
                                                                                            <li><a href="#"><span>Last 6 Months</span></a></li>
                                                                                            <li><a href="#"><span>Last 1 Years</span></a></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div><!-- .toggle-wrap -->
                                                            </div><!-- .nk-block-head-content -->
                                                        </div>
                                                    </div><!-- .nk-block-head -->
                                                    <div class="nk-block">
                                                        <div class="row g-gs">
                                                            <div class="col-xxl-8 col-lg-12">
                                                                <div class="card card-full card-bordered border-light">
                                                                    <div class="nk-ecwg nk-ecwg5">
                                                                        <div class="card-inner">
                                                                            <div class="card-title-group align-start pb-3 g-2">
                                                                                <div class="card-title">
                                                                                    <h6 class="title">Total Earning</h6>
                                                                                </div>
                                                                                <div class="card-tools">
                                                                                    <em class="card-hint icon ni ni-help" data-bs-toggle="tooltip" data-bs-placement="left" title="Revenu of this month"></em>
                                                                                </div>
                                                                            </div>
                                                                            <div class="data-group">
                                                                                <div class="data">
                                                                                    <div class="title">Monthly</div>
                                                                                    <div class="amount amount-sm">9.28K</div>
                                                                                    <div class="change up"><em class="icon ni ni-arrow-long-up"></em>4.63%</div>
                                                                                </div>
                                                                                <div class="data">
                                                                                    <div class="title">Weekly</div>
                                                                                    <div class="amount amount-sm">2.69K</div>
                                                                                    <div class="change down"><em class="icon ni ni-arrow-long-down"></em>1.92%</div>
                                                                                </div>
                                                                                <div class="data">
                                                                                    <div class="title">Daily (Avg)</div>
                                                                                    <div class="amount amount-sm">0.94K</div>
                                                                                    <div class="change up"><em class="icon ni ni-arrow-long-up"></em>3.45%</div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="nk-ecwg5-ck">
                                                                                <canvas class="lms-line-chart-s4" id="storeVisitors"></canvas>
                                                                            </div>
                                                                            <div class="chart-label-group">
                                                                                <div class="chart-label">01 Jul, 2020</div>
                                                                                <div class="chart-label">30 Jul, 2020</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- .card -->
                                                            </div><!-- .col -->
                                                            <div class="col-xxl-4">
                                                                <div class="row g-gs">
                                                                    <div class="col-xxl-12 col-md-6">
                                                                        <div class="card card-full card-bordered border-light">
                                                                            <div class="nk-ecwg nk-ecwg3">
                                                                                <div class="card-inner pb-2">
                                                                                    <div class="card-title-group">
                                                                                        <div class="card-title">
                                                                                            <h6 class="title"><a href="">Active Students</a></h6>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="data">
                                                                                        <div class="data-group">
                                                                                            <div class="amount">329</div>
                                                                                            <div class="info text-end"><span class="change up text-danger"><em class="icon ni ni-arrow-long-up"></em>4.63%</span><br><span>vs. last week</span></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div><!-- .card-inner -->
                                                                                <div class="nk-ck-wrap mt-auto overflow-hidden rounded-bottom">
                                                                                    <div class="nk-ecwg3-ck">
                                                                                        <canvas class="lms-line-chart-s1" id="activeStudents"></canvas>
                                                                                    </div>
                                                                                </div>
                                                                            </div><!-- .nk-ecwg -->
                                                                        </div><!-- .card -->
                                                                    </div><!-- .col -->
                                                                    <div class="col-xxl-12 col-md-6">
                                                                        <div class="card card-full card-bordered border-light">
                                                                            <div class="nk-ecwg nk-ecwg3">
                                                                                <div class="card-inner pb-2">
                                                                                    <div class="card-title-group">
                                                                                        <div class="card-title">
                                                                                            <h6 class="title"><a href="">New Enrolment</a></h6>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="data">
                                                                                        <div class="data-group">
                                                                                            <div class="amount">194</div>
                                                                                            <div class="info text-end"><span class="change up text-danger"><em class="icon ni ni-arrow-long-up"></em>4.63%</span><br><span>vs. Yesterday</span></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div><!-- .card-inner -->
                                                                                <div class="nk-ck-wrap mt-auto overflow-hidden rounded-bottom">
                                                                                    <div class="nk-ecwg3-ck">
                                                                                        <canvas class="lms-line-chart-s1" id="newStudents"></canvas>
                                                                                    </div>
                                                                                </div>
                                                                            </div><!-- .nk-ecwg -->
                                                                        </div><!-- .card -->
                                                                    </div><!-- .col -->
                                                                </div><!-- .row -->
                                                            </div><!-- .col -->
                                                        </div><!-- .row -->
                                                    </div><!-- .nk-block -->
                                                </div><!--tab pane-->
                                                <div class="tab-pane" id="profile-courses">
                                                    <div class="nk-tb-list border border-light rounded overflow-hidden is-compact">
                                                        <div class="nk-tb-item nk-tb-head">
                                                            <div class="nk-tb-col">
                                                                <span class="lead-text">#</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="lead-text">Courses List</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="lead-text d-none d-sm-inline">Type</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="lead-text d-none d-sm-inline">Progress</span>
                                                            </div>

                                                        </div>
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col"> 1 </div>
                                                            <div class="nk-tb-col"> Learn Android Development with project </div>
                                                            <div class="nk-tb-col">
                                                                <span class="badge badge-dot badge-dot-xs bg-success">Course</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="badge badge-dot badge-dot-xs bg-warning">90%</span>
                                                            </div>

                                                        </div>
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col"> 2 </div>
                                                            <div class="nk-tb-col"> Learn Android Development with project </div>
                                                            <div class="nk-tb-col">
                                                                <span class="badge badge-dot badge-dot-xs bg-success">Course</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="badge badge-dot badge-dot-xs bg-warning">1%</span>
                                                            </div>

                                                        </div>
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col"> 3 </div>
                                                            <div class="nk-tb-col"> Learn Android Development with project </div>
                                                            <div class="nk-tb-col">
                                                                <span class="badge badge-dot badge-dot-xs bg-success">Course</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="badge badge-dot badge-dot-xs bg-warning">80%</span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div><!--tab pane-->
                                                <div class="tab-pane" id="profile-review">
                                                    <div class="tab-pane active show" id="profile-courses" role="tabpanel">
                                                        <div class="nk-tb-list border border-light rounded overflow-hidden is-compact">
                                                            <div class="nk-tb-item nk-tb-head">
                                                                <div class="nk-tb-col">
                                                                    <span class="lead-text">#</span>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <span class="lead-text">Quizes List</span>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <span class="lead-text d-none d-sm-inline">Type</span>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <span class="lead-text d-none d-sm-inline">Result</span>
                                                                </div>

                                                            </div>
                                                            <div class="nk-tb-item">
                                                                <div class="nk-tb-col"> 1 </div>
                                                                <div class="nk-tb-col"> Learn Android Development with project </div>
                                                                <div class="nk-tb-col">
                                                                    <span class="badge badge-dot badge-dot-xs bg-success">Course</span>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <span class="badge badge-dot badge-dot-xs bg-warning">90%</span>
                                                                </div>

                                                            </div>
                                                            <div class="nk-tb-item">
                                                                <div class="nk-tb-col"> 2 </div>
                                                                <div class="nk-tb-col"> Learn Android Development with project </div>
                                                                <div class="nk-tb-col">
                                                                    <span class="badge badge-dot badge-dot-xs bg-success">Course</span>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <span class="badge badge-dot badge-dot-xs bg-warning">1%</span>
                                                                </div>

                                                            </div>
                                                            <div class="nk-tb-item">
                                                                <div class="nk-tb-col"> 3 </div>
                                                                <div class="nk-tb-col"> Learn Android Development with project </div>
                                                                <div class="nk-tb-col">
                                                                    <span class="badge badge-dot badge-dot-xs bg-success">Course</span>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <span class="badge badge-dot badge-dot-xs bg-warning">80%</span>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!--tab pane-->
                                            </div><!--tab content-->
                                        </div><!--card inner-->
                                    </div><!--card-->
                                </div><!--nk block lg-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                <div class="nk-footer">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright"> &copy; 2023 DashLite. Template by <a href="https://softnio.com" target="_blank">Softnio</a>
                            </div>
                            <div class="nk-footer-links">
                                <ul class="nav nav-sm">
                                    <li class="nav-item dropup">
                                        <a href="#" class="dropdown-toggle dropdown-indicator has-indicator nav-link text-base" data-bs-toggle="dropdown" data-offset="0,10"><span>English</span></a>
                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                            <ul class="language-list">
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <span class="language-name">English</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <span class="language-name">Español</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <span class="language-name">Français</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <span class="language-name">Türkçe</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- select region modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="region">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title mb-4">Select Your Country</h5>
                    <div class="nk-country-region">
                        <ul class="country-list text-center gy-2">
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./assets/images/flags/arg.png" alt="" class="country-flag">
                                    <span class="country-name">Argentina</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./assets/images/flags/aus.png" alt="" class="country-flag">
                                    <span class="country-name">Australia</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./assets/images/flags/bangladesh.png" alt="" class="country-flag">
                                    <span class="country-name">Bangladesh</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./assets/images/flags/canada.png" alt="" class="country-flag">
                                    <span class="country-name">Canada <small>(English)</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./assets/images/flags/china.png" alt="" class="country-flag">
                                    <span class="country-name">Centrafricaine</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./assets/images/flags/china.png" alt="" class="country-flag">
                                    <span class="country-name">China</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./assets/images/flags/french.png" alt="" class="country-flag">
                                    <span class="country-name">France</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./assets/images/flags/germany.png" alt="" class="country-flag">
                                    <span class="country-name">Germany</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./assets/images/flags/iran.png" alt="" class="country-flag">
                                    <span class="country-name">Iran</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./assets/images/flags/italy.png" alt="" class="country-flag">
                                    <span class="country-name">Italy</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./assets/images/flags/mexico.png" alt="" class="country-flag">
                                    <span class="country-name">México</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./assets/images/flags/philipine.png" alt="" class="country-flag">
                                    <span class="country-name">Philippines</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./assets/images/flags/portugal.png" alt="" class="country-flag">
                                    <span class="country-name">Portugal</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./assets/images/flags/s-africa.png" alt="" class="country-flag">
                                    <span class="country-name">South Africa</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./assets/images/flags/spanish.png" alt="" class="country-flag">
                                    <span class="country-name">Spain</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./assets/images/flags/switzerland.png" alt="" class="country-flag">
                                    <span class="country-name">Switzerland</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./assets/images/flags/uk.png" alt="" class="country-flag">
                                    <span class="country-name">United Kingdom</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./assets/images/flags/english.png" alt="" class="country-flag">
                                    <span class="country-name">United State</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div><!-- .modal -->
    <!-- Add instructor-->
    <div class="modal fade" role="dialog" id="instructor-add">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title">Add Instructor</h5>
                    <form action="#" class="pt-2">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="first-name">First Name</label>
                                    <input type="text" class="form-control" id="first-name" placeholder="First name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="last-name">Last Name</label>
                                    <input type="text" class="form-control" id="last-name" placeholder="Last name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="email">Email Address</label>
                                    <input type="email" class="form-control" id="email" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Phone Number</label>
                                    <input type="text" class="form-control" id="phone-no" value="+880" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="address-l1">Address Line 1</label>
                                    <input type="text" class="form-control" id="address-l1" value="2337 Kildeer Drive">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="address-line2">Address Line 2</label>
                                    <input type="text" class="form-control" id="address-line2" value="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="address-st">State</label>
                                    <input type="text" class="form-control" id="address-st" value="Kentucky">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="country">Country</label>
                                    <select class="form-select js-select2" id="country">
                                        <option>Canada</option>
                                        <option>United State</option>
                                        <option>United Kindom</option>
                                        <option>Australia</option>
                                        <option>India</option>
                                        <option>Bangladesh</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="about-instractor">About Instractor</label>
                                    <textarea class="form-control textarea-sm" id="about-instractor" placeholder="Discribe a little bit"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <a href="#" class="btn btn-primary">Add Instructor</a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
    <!-- JavaScript -->
    <script src="./assets/js/bundle.js?ver=3.2.3"></script>
    <script src="./assets/js/scripts.js?ver=3.2.3"></script>
    <script src="./assets/js/charts/chart-lms.js?ver=3.2.3"></script>
</body>

</html>