
<?php  ?>
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
    <title>Instructor List | LMS </title>
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
                <div class="nk-sidebar-element">
                    <div class="nk-sidebar-content">
                        <div class="nk-sidebar-menu" data-simplebar>
                            <ul class="nk-menu">
                                <li class="nk-menu-item active current-page">
                                    <a href="./index.php" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-growth-fill"></em></span>
                                        <span class="nk-menu-text">Statistics</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="./courses.php" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-book-fill"></em></span>
                                        <span class="nk-menu-text">Courses</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="./category.php" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-file-docs"></em></span>
                                        <span class="nk-menu-text">Quizzes</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="./instructor-list.php" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-user-fill"></em></span>
                                        <span class="nk-menu-text">Instructors</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="./students.php" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                                        <span class="nk-menu-text">Students</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="./admin-profile.php" class="nk-menu-link">
                                      <span class="nk-menu-icon"
                                        ><em class="icon ni ni-account-setting-fill"></em
                                      ></span>
                                      <span class="nk-menu-text">Profile</span>
                                    </a>
                                  </li>
                            </ul><!-- .nk-menu -->
                        </div><!-- .nk-sidebar-menu -->
                    </div><!-- .nk-sidebar-content -->
                </div><!-- .nk-sidebar-element -->
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
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Instructors</h3>
                                        </div>
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="more-options"><em class="icon ni ni-more-v"></em></a>
                                                <div class="toggle-expand-content" data-content="more-options">
                                                    <ul class="nk-block-tools g-3">
                                                        <li>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right">
                                                                    <em class="icon ni ni-search"></em>
                                                                </div>
                                                                <input type="text" class="form-control" id="default-04" placeholder="Search by name">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle dropdown-indicator btn btn-outline-light btn-white" data-bs-toggle="dropdown">Status</a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><span>Actived</span></a></li>
                                                                        <li><a href="#"><span>Inactived</span></a></li>
                                                                        <li><a href="#"><span>Blocked</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="card">
                                        <div class="card-inner-group">
                                            <div class="card-inner p-0">
                                                <div class="nk-tb-list nk-tb-ulist">
                                                    <div class="nk-tb-item nk-tb-head">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid">
                                                                <label class="custom-control-label" for="uid"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col"><span class="sub-text">Instructor</span></div>
                                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Phone</span></div>
                                                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">Country</span></div>
                                                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">Description</span></div>
                                                        <div class="nk-tb-col tb-col-mb"><span class="sub-text"></span>Active courses</div>
                                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1 my-n1">
                                                                <li>
                                                                    <div class="drodown">
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#"><em class="icon ni ni-mail"></em><span>Send Email to All</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend Selected</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Seleted</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid1">
                                                                <label class="custom-control-label" for="uid1"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <a href="./instructor-details.php">
                                                                <div class="user-card">
                                                                    <div class="user-avatar bg-primary">
                                                                        <span>AB</span>
                                                                    </div>
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">Abu Bin Ishtiyak <span class="dot dot-success d-md-none ms-1"></span></span>
                                                                        <span>info@softnio.com</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>+811 758-756433</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>United State</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>Lorem ipsum dolor sit amet.</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <span>12 active courses</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="tb-status text-success">Active</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="./instructor-details.php"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                  
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid2">
                                                                <label class="custom-control-label" for="uid2"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <a href="./instructor-details.php">
                                                                <div class="user-card">
                                                                    <div class="user-avatar">
                                                                        <img src="./assets/images/avatar/a-sm.jpg" alt="">
                                                                    </div>
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">Ashley Lawson <span class="dot dot-warning d-md-none ms-1"></span></span>
                                                                        <span>ashley@softnio.com</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>+811 534-98324</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>United kingdom</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>Lorem ipsum dolor sit amet.</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <span>24 active courses</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="tb-status text-warning">Pending</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                                        <em class="icon ni ni-mail-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="./instructor-details.php"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                  
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid3">
                                                                <label class="custom-control-label" for="uid3"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <a href="./instructor-details.php">
                                                                <div class="user-card">
                                                                    <div class="user-avatar bg-info">
                                                                        <span>JL</span>
                                                                    </div>
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">Joe Larson <span class="dot dot-success d-md-none ms-1"></span></span>
                                                                        <span>larson@example.com</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>+811 987-4958</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>United State</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>Lorem ipsum dolor sit amet.</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <span>2 active courses</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="tb-status text-success">Active</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                                        <em class="icon ni ni-mail-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="./instructor-details.php"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                  
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid4">
                                                                <label class="custom-control-label" for="uid4"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <a href="./instructor-details.php">
                                                                <div class="user-card">
                                                                    <div class="user-avatar bg-danger">
                                                                        <span>JM</span>
                                                                    </div>
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">Jane Montgomery <span class="dot dot-danger d-md-none ms-1"></span></span>
                                                                        <span>jane84@example.com</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>+811 765-4958</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>Canada</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>Lorem ipsum dolor sit amet.</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <span>14 active courses</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="tb-status text-danger">Suspend</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                                        <em class="icon ni ni-mail-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="./instructor-details.php"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                  
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid5">
                                                                <label class="custom-control-label" for="uid5"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <a href="./instructor-details.php">
                                                                <div class="user-card">
                                                                    <div class="user-avatar">
                                                                        <img src="./assets/images/avatar/b-sm.jpg" alt="">
                                                                    </div>
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">Frances Burns <span class="dot dot-success d-md-none ms-1"></span></span>
                                                                        <span>frances@example.com</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>+811 987-9875</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>Australia</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>Lorem ipsum dolor sit amet.</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <span>20 active courses</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="tb-status text-success">Active</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                                        <em class="icon ni ni-mail-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="./instructor-details.php"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                  
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid6">
                                                                <label class="custom-control-label" for="uid6"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <a href="./instructor-details.php">
                                                                <div class="user-card">
                                                                    <div class="user-avatar">
                                                                        <img src="./assets/images/avatar/c-sm.jpg" alt="">
                                                                    </div>
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">Alan Butler <span class="dot dot-info d-md-none ms-1"></span></span>
                                                                        <span>butler@example.com</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>+811 847-4532</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>Brazil</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>Lorem ipsum dolor sit amet.</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <span>3 active courses</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="tb-status text-info">Inactive</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                                        <em class="icon ni ni-mail-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="./instructor-details.php"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                  
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid7">
                                                                <label class="custom-control-label" for="uid7"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <a href="./instructor-details.php">
                                                                <div class="user-card">
                                                                    <div class="user-avatar bg-warning">
                                                                        <span>VL</span>
                                                                    </div>
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">Victoria Lynch <span class="dot dot-success d-md-none ms-1"></span></span>
                                                                        <span>victoria@example.com</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>+811 231-5463</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>India</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>Lorem ipsum dolor sit amet.</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <span>5 active courses</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="tb-status text-success">Active</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                                        <em class="icon ni ni-mail-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="./instructor-details.php"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                  
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid8">
                                                                <label class="custom-control-label" for="uid8"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <a href="./instructor-details.php">
                                                                <div class="user-card">
                                                                    <div class="user-avatar bg-success">
                                                                        <span>PN</span>
                                                                    </div>
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">Patrick Newman <span class="dot dot-success d-md-none ms-1"></span></span>
                                                                        <span>patrick@example.com</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>+811 347-4958</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>Bangladesh</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>Lorem ipsum dolor sit amet.</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <span>29 active courses</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="tb-status text-success">Active</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                                        <em class="icon ni ni-mail-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="./instructor-details.php"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                  
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid9">
                                                                <label class="custom-control-label" for="uid9"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <a href="./instructor-details.php">
                                                                <div class="user-card">
                                                                    <div class="user-avatar">
                                                                        <img src="./assets/images/avatar/d-sm.jpg" alt="">
                                                                    </div>
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">Jane Harris <span class="dot dot-warning d-md-none ms-1"></span></span>
                                                                        <span>harris@example.com</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>+811 816-4958</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>India</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>Lorem ipsum dolor sit amet.</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <span>6 active courses</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="tb-status text-warning">Pending</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                                        <em class="icon ni ni-mail-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="./instructor-details.php"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                  
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid10">
                                                                <label class="custom-control-label" for="uid10"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <a href="./instructor-details.php">
                                                                <div class="user-card">
                                                                    <div class="user-avatar bg-purple">
                                                                        <span>EW</span>
                                                                    </div>
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">Emma Walker <span class="dot dot-success d-md-none ms-1"></span></span>
                                                                        <span>walker@example.com</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>+811 162-5647</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>Brazil</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>Lorem ipsum dolor sit amet.</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <span>35 active courses</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="tb-status text-success">Active</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                                        <em class="icon ni ni-mail-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="./instructor-details.php"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                  
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                </div><!-- .nk-tb-list -->
                                            </div>
                                            <div class="card-inner">
                                                <div class="nk-block-between-md g-3">
                                                    <div class="g">
                                                        <ul class="pagination justify-content-center justify-content-md-start">
                                                            <li class="page-item"><a class="page-link" href="#"><em class="icon ni ni-chevrons-left"></em></a></li>
                                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                            <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
                                                            <li class="page-item"><a class="page-link" href="#">6</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">7</a></li>
                                                            <li class="page-item"><a class="page-link" href="#"><em class="icon ni ni-chevrons-right"></em></a></li>
                                                        </ul><!-- .pagination -->
                                                    </div>
                                                    <div class="g">
                                                        <div class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                                                            <div>Page</div>
                                                            <div>
                                                                <select class="form-select js-select2" data-search="on" data-dropdown="xs center">
                                                                    <option value="page-1">1</option>
                                                                    <option value="page-2">2</option>
                                                                    <option value="page-4">4</option>
                                                                    <option value="page-5">5</option>
                                                                    <option value="page-6">6</option>
                                                                    <option value="page-7">7</option>
                                                                    <option value="page-8">8</option>
                                                                    <option value="page-9">9</option>
                                                                    <option value="page-10">10</option>
                                                                    <option value="page-11">11</option>
                                                                    <option value="page-12">12</option>
                                                                    <option value="page-13">13</option>
                                                                    <option value="page-14">14</option>
                                                                    <option value="page-15">15</option>
                                                                    <option value="page-16">16</option>
                                                                    <option value="page-17">17</option>
                                                                    <option value="page-18">18</option>
                                                                    <option value="page-19">19</option>
                                                                    <option value="page-20">20</option>
                                                                </select>
                                                            </div>
                                                            <div>OF 102</div>
                                                        </div>
                                                    </div><!-- .pagination-goto -->
                                                </div><!-- .nk-block-between -->
                                            </div><!--card inner-->
                                        </div>
                                    </div><!--card-->
                                </div><!-- .nk-block -->
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
</body>

</html>