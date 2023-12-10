<?php require "./inc/connection.php"; ?>
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
    <title>Courses | LMS </title>
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
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Courses</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>You have total 20 Courses.</p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        <li>
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-bs-toggle="dropdown"><em class="d-none d-sm-inline icon ni ni-filter-alt"></em><span>Filtered By</span><em class="dd-indc icon ni ni-chevron-right"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><span>Active</span></a></li>
                                                                        <li><a href="#"><span>Pending</span></a></li>
                                                                        <li><a href="#"><span>Rejected</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="nk-block-tools-opt d-none d-sm-block">
                                                            <!-- get me here -->
                                                            <a href="./createcourse.php" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Add Course</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- .toggle-wrap -->
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="card card-stretch">
                                        <div class="card-inner-group">
                                            <div class="card-inner p-0">
                                                <table class="nk-tb-list nk-tb-ulist">
                                                    <thead>
                                                        <tr class="nk-tb-item nk-tb-head">
                                                            <th class="nk-tb-col nk-tb-col-check">
                                                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                    <input type="checkbox" class="custom-control-input" id="pid-all">
                                                                    <label class="custom-control-label" for="pid-all"></label>
                                                                </div>
                                                            </th>
                                                            <th class="nk-tb-col"><span class="sub-text">Course Name</span></th>
                                                            <th class="nk-tb-col tb-col-lg"><span class="sub-text">Category</span></th>
                                                            <th class="nk-tb-col tb-col-lg"><span class="sub-text">Admin Name</span></th>
                                                            <th class="nk-tb-col tb-col-lg"><span class="sub-text">Quiz Name</span></th>
                                                            <!-- <th class="nk-tb-col tb-col-xxl"><span class="sub-text">Enrole Student</span></th> -->
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                                                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Progress</span></th>
                                                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">startTime</span></th>
                                                            <th class="nk-tb-col nk-tb-col-tools text-end">
                                                                <ul class="nk-tb-actions gx-1">
                                                                    <li>
                                                                        <div class="dropdown">
                                                                            <a href="#" class="btn btn-sm btn-trigger btn-icon dropdown-toggle" data-bs-toggle="dropdown" data-offset="0,5"><em class="icon ni ni-more-h"></em></a>
                                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                                <ul class="link-list-opt no-bdr">
                                                                                    <li><a href="#"><em class="icon ni ni-archive"></em><span>Mark As Archive</span></a></li>
                                                                                    <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Category</span></a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </th>
                                                        </tr><!-- .nk-tb-item -->
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        // Generate HTML dynamically based on the retrieved data
                                                        $selected = "SELECT c.*, a.*, q.*, COUNT(*) AS total_chapters, SUM(cc.passed) AS passed_chapters,c.courId FROM cours c LEFT JOIN administrateur a ON c.adminId = a.adminId LEFT JOIN quiz q ON c.courId = q.courId INNER JOIN cour_chapters cc ON c.courId = cc.cour_id GROUP BY c.courId, a.adminId, q.quizId;";
                                                        $result = $conn->query($selected);
                                                        while ($row = $result->fetch_assoc()) {
                                                            echo "
                                                        <tr class='nk-tb-item'>
                                                        <td class='nk-tb-col nk-tb-col-check'>
                                                            <div class='custom-control custom-control-sm custom-checkbox notext'>
                                                                <input type='checkbox' class='custom-control-input' id='pid-10'>
                                                                <label class='custom-control-label' for='pid-10'></label>
                                                            </div>
                                                        </td>
                                                        <td class='nk-tb-col'>
                                                            
                                                            <a href='./passcour.php?courId=".$row["courId"]."' class='project-title'>
                                                                <div class='user-avatar sq bg-purple'><span>" . substr($row['courName'], 0, 2) . "</span></div>
                                                                <div class='project-info'>
                                                                    <h6 class='title'>".$row['courName']."</h6>
                                                                </div>
                                                            </a>
                                                        </td>
                                                        <td class='nk-tb-col tb-col-lg'>
                                                            <span>" . $row["category"] . "</span>
                                                        </td>
                                                        <td class='nk-tb-col tb-col-lg'>
                                                            <span>" . $row["adminName"] . "</span>
                                                        </td>
                                                        <td class='nk-tb-col tb-col-lg'>
                                                            <span>" . $row["quizName"] . "</span>
                                                        </td>
                                                        <td class='nk-tb-col tb-col-md'>
                                                            <span class='badge badge-dim bg-success'>Active</span>
                                                        </td>
                                                        <td class='nk-tb-col tb-col-mb'>
                                                           <div class='progress'>
                                                            <div class='progress-bar progress-bar-striped bg-success' role='progressbar' style='width: ".(($row['passed_chapters'] / $row['total_chapters']) * 100)."%' aria-valuenow='10' aria-valuemin='0' aria-valuemax='100'></div>
                                                        </div>
                                                        </td>
                                                        <td class='nk-tb-col tb-col-mb'>
                                                            <span>20.4.2021</span>
                                                        </td>
                                                        <td class='nk-tb-col nk-tb-col-tools'>
                                                            <ul class='nk-tb-actions gx-1'>
                                                                <li>
                                                                    <div class='drodown'>
                                                                        <a href='#' class='dropdown-toggle btn btn-sm btn-icon btn-trigger' data-bs-toggle='dropdown'><em class='icon ni ni-more-h'></em></a>
                                                                        <div class='dropdown-menu dropdown-menu-end'>
                                                                            <ul class='link-list-opt no-bdr'>
                                                                                <li><a data-bs-toggle='modal' href='#modalDelete' onclick='transferId(" . $row["quizId"] . ")'><em class='icon ni ni-delete'></em><span>Delete Student</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>";
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table><!-- .nk-tb-list -->
                                            </div>
                                            <div class="card-inner">
                                                <div class="nk-block-between-md g-3">
                                                    <div class="g">
                                                        <ul class="pagination justify-content-center justify-content-md-start">
                                                            <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                            <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
                                                            <li class="page-item"><a class="page-link" href="#">6</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">7</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
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
                                            </div><!-- .card-inner -->
                                        </div>
                                    </div><!-- .card -->
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
    <div class="modal fade" id="modalCreate">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close"> <em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="modal-title">Create Course</h5>
                    <form action="#" class="pt-2">
                        <div class="row gy-3 gx-gs">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="course-name">Course Name</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="course-name" placeholder="e.g. Responsive Design">
                                    </div>
                                </div><!-- .form-group -->
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="course-category">Course category</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2" id="course-category">
                                            <option>Web Development</option>
                                            <option>Mobile Application</option>
                                            <option>Graphics Design</option>
                                        </select>
                                    </div>
                                </div><!-- .form-group -->
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="dificulties">Course Dificulties</label>
                                    <select class="form-select js-select2" id="dificulties">
                                        <option>Beginners</option>
                                        <option>Intermediate</option>
                                        <option>Advanced</option>
                                    </select>
                                </div><!-- .form-group -->
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="course-lesson">Total Lesson</label>
                                    <div class="form-control-wrap">
                                        <input type="number" class="form-control" id="course-lesson" placeholder="40">
                                    </div>
                                </div><!-- .form-group -->
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="thumb">Course thumbnail</label>
                                    <div class="form-control-wrap">
                                        <div class="form-file">
                                            <input type="file" multiple class="form-file-input" id="customFile-create">
                                            <label class="form-file-label" for="customFile-create">Choose file</label>
                                        </div>
                                    </div>
                                </div><!-- .form-group -->
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="thumb">Course Description</label>
                                    <div class="form-control-wrap">
                                        <div class="quill-minimal"></div>
                                    </div>
                                </div><!-- .form-group -->
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="thumb">Status</label>
                                    <div class="form-control-wrap">
                                        <ul class="custom-control-group g-3 align-center flex-wrap">
                                            <li>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" checked name="reg-public" id="reg-enable">
                                                    <label class="custom-control-label" for="reg-enable">Active</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="reg-public" id="reg-disable">
                                                    <label class="custom-control-label" for="reg-disable">Pending</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="reg-public" id="reg-request">
                                                    <label class="custom-control-label" for="reg-request">Rejected</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- .form-group -->
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="course-price">Course Price</label>
                                    <div class="form-control-wrap">
                                        <input type="number" class="form-control" id="course-price" placeholder="30">
                                    </div>
                                </div><!-- .form-group -->
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label">Deadline</label>
                                    <div class="form-control-wrap">
                                        <div class="form-icon form-icon-left"> <em class="icon ni ni-calendar-alt"></em>
                                        </div>
                                        <input type="text" class="form-control date-picker" placeholder="mm/dd/yyyy">
                                    </div>
                                </div><!-- .form-group -->
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <button data-bs-dismiss="modal" type="submit" class="btn btn-primary">Save Informations</button>
                                </div><!-- .form-group -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- .Create Modal-Content -->
    <div class="modal fade" id="modalEdit">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close"> <em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title">Edit Course</h5>
                    <form action="#" class="pt-2">
                        <div class="row gy-3 gx-gs">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="edit-course-name">Course Name</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="edit-course-name" value="Responsive Design">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="edit-category">Course category</label>
                                    <select class="form-select js-select2" id="edit-category">
                                        <option>Web Development</option>
                                        <option>Mobile Application</option>
                                        <option>Graphics Design</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="edit-dificulties">Course Dificulties</label>
                                    <select class="form-select js-select2" id="edit-dificulties">
                                        <option>Beginners</option>
                                        <option>Intermediate</option>
                                        <option>Advanced</option>
                                    </select>
                                </div><!-- .form-group -->
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="edit-lesson">Total Lesson</label>
                                    <div class="form-control-wrap">
                                        <input type="number" class="form-control" id="edit-lesson" value="40">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="thumb">Course thumbnail</label>
                                    <div class="form-control-wrap">
                                        <div class="form-file">
                                            <input type="file" multiple class="form-file-input" id="edit-customFile">
                                            <label class="form-file-label" for="edit-customFile">Choose file</label>
                                        </div>
                                    </div>
                                </div><!-- .form-group -->
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="edit-description">Course Description</label>
                                    <div class="form-control-wrap">
                                        <div class="quill-minimal"></div>
                                    </div>
                                </div><!-- .form-group -->
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="status">Status</label>
                                    <div class="form-control-wrap">
                                        <ul class="custom-control-group g-3 align-center flex-wrap">
                                            <li>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" checked name="reg-public" id="edit-course-active">
                                                    <label class="custom-control-label" for="edit-course-active">Active</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="reg-public" id="edit-course-pending">
                                                    <label class="custom-control-label" for="edit-course-pending">Pending</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="reg-public" id="edit-course-reject">
                                                    <label class="custom-control-label" for="edit-course-reject">Rejected</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- .form-group -->
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="course-price-edit">Course Price</label>
                                    <div class="form-control-wrap">
                                        <input type="number" class="form-control" id="course-price-edit" value="30">
                                    </div>
                                </div><!-- .form-group -->
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label">Deadline</label>
                                    <div class="form-control-wrap">
                                        <div class="form-icon form-icon-left"> <em class="icon ni ni-calendar-alt"></em> </div>
                                        <input type="text" class="form-control date-picker" placeholder="mm/dd/yyyy">
                                    </div>
                                </div><!-- .form-group -->
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <button data-bs-dismiss="modal" type="submit" class="btn btn-primary">Save Informations</button>
                                </div><!-- .form-group -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- .Edit Modal-Content -->
    <div class="modal fade" id="modalDelete">
        <div class="modal-dialog" role="document">
            <div class="modal-content"> <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg text-center">
                    <div class="nk-modal py-4"> <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-cross bg-danger"></em>
                        <h4 class="nk-modal-title">Are You Sure ?</h4>
                        <div class="nk-modal-text mt-n2">
                            <p class="text-soft">This event data will be removed permanently.</p>
                        </div>
                        <ul class="d-flex justify-content-center gx-4 mt-4">
                            <li>
                                <button data-bs-dismiss="modal" id="deleteEvent" class="btn btn-success">Yes, Delete it</button>
                            </li>
                            <li>
                                <button data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#editEventPopup" class="btn btn-danger btn-dim">Cancel</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .Delete Modal-content -->
    <!-- JavaScript -->
    <script src="./assets/js/bundle.js?ver=3.2.3"></script>
    <script src="./assets/js/scripts.js?ver=3.2.3"></script>
    <link rel="stylesheet" href="./assets/css/editors/quill.css?ver=3.2.3">
    <script src="./assets/js/libs/editors/quill.js?ver=3.2.3"></script>
    <script src="./assets/js/editors.js?ver=3.2.3"></script>
</body>

</html>