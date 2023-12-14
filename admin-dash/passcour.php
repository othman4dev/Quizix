<?php include "./inc/connection.php"; ?>
<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8" />
    <meta name="author" content="Softnio" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers." />
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./assets/images/favicon.png" />
    <!-- Page Title  -->
    <title>Regular Page v1 | DashLite Admin Template</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="./assets/css/dashlite.css?ver=3.2.3" />
    <link rel="stylesheet" href="./assets/css/added.css" />
    <link id="skin-default" rel="stylesheet" href="./assets/css/theme.css?ver=3.2.3" />
    <style>
        .passed {
            display: none;
        }

        .passed.show {
            display: block;
        }

        .submit-it:disabled {
            opacity: 0.3;
            cursor: not-allowed;
        }
    </style>
</head>

<body class="nk-body bg-lighter npc-default has-sidebar">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main">
            <!-- sidebar @s -->
            <div class="nk-sidebar nk-sidebar-fixed is-light" data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-sidebar-brand">
                        <a href="html/dashboard-u.php" class="logo-link nk-sidebar-logo">
                            <img class="logo-light logo-img" src="./assets/images/logo.svg" srcset="./assets/images/logo2x.png 2x" alt="logo" />
                            <img class="logo-dark logo-img" src="./assets/images/logo-dark.png" srcset="./assets/images/logo-dark2x.png 2x" alt="logo-dark" />
                            <img class="logo-small logo-img logo-img-small" src="./assets/images/logo-small.png" srcset="./assets/images/logo-small2x.png 2x" alt="logo-small" />
                        </a>
                    </div>
                    <div class="nk-menu-trigger me-n2">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
                        <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                    </div>
                </div>
                <!-- .nk-sidebar-element -->
                <?php include_once('./templates/sidebar.php'); ?>
            </div>
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap">
                <!-- main header @s -->
                <div class="nk-header nk-header-fixed is-light">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ms-n1">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                            </div>
                            <div class="nk-header-brand d-xl-none">
                                <a href="html/dashboard-u.php" class="logo-link">
                                    <img class="logo-light logo-img" src="./assets/images/logo.svg" srcset="./assets/images/logo2x.png 2x" alt="logo" />
                                    <img class="logo-dark logo-img" src="./assets/images/logo-dark.png" srcset="./assets/images/logo-dark2x.png 2x" alt="logo-dark" />
                                </a>
                            </div>
                            <!-- .nk-header-brand -->
                            <div class="nk-header-search ms-3 ms-xl-0">
                                <em class="icon ni ni-search"></em>
                                <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search anything" />
                            </div>
                            <!-- .nk-header-news -->
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <li class="dropdown language-dropdown d-none d-sm-block me-n1">
                                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                                            <div class="quick-icon border border-light">
                                                <img class="icon" src="./assets/images/flags/english-sq.png" alt="" />
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-s1">
                                            <ul class="language-list">
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <img src="./assets/images/flags/english.png" alt="" class="language-flag" />
                                                        <span class="language-name">English</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <img src="./assets/images/flags/spanish.png" alt="" class="language-flag" />
                                                        <span class="language-name">Español</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <img src="./assets/images/flags/french.png" alt="" class="language-flag" />
                                                        <span class="language-name">Français</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <img src="./assets/images/flags/turkey.png" alt="" class="language-flag" />
                                                        <span class="language-name">Türkçe</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <!-- .dropdown -->
                                    <li class="dropdown chats-dropdown hide-mb-xs">
                                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                                            <div class="icon-status icon-status-na">
                                                <em class="icon ni ni-comments"></em>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                            <div class="dropdown-head">
                                                <span class="sub-title nk-dropdown-title">Recent Chats</span>
                                                <a href="#">Setting</a>
                                            </div>
                                            <div class="dropdown-body">
                                                <ul class="chat-list">
                                                    <li class="chat-item">
                                                        <a class="chat-link" href="html/apps-chats.php">
                                                            <div class="chat-media user-avatar">
                                                                <span>IH</span>
                                                                <span class="status dot dot-lg dot-gray"></span>
                                                            </div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">Iliash Hossain</div>
                                                                    <span class="time">Now</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">
                                                                        You: Please confrim if you got my last
                                                                        messages.
                                                                    </div>
                                                                    <div class="status delivered">
                                                                        <em class="icon ni ni-check-circle-fill"></em>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <!-- .chat-item -->
                                                    <li class="chat-item is-unread">
                                                        <a class="chat-link" href="html/apps-chats.php">
                                                            <div class="chat-media user-avatar bg-pink">
                                                                <span>AB</span>
                                                                <span class="status dot dot-lg dot-success"></span>
                                                            </div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">Othman Kharbouch</div>
                                                                    <span class="time">4:49 AM</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">
                                                                        Hi, I am Othman, can you help me with this
                                                                        problem ?
                                                                    </div>
                                                                    <div class="status unread">
                                                                        <em class="icon ni ni-bullet-fill"></em>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <!-- .chat-item -->
                                                    <li class="chat-item">
                                                        <a class="chat-link" href="html/apps-chats.php">
                                                            <div class="chat-media user-avatar">
                                                                <img src="./assets/images/avatar/b-sm.jpg" alt="" />
                                                            </div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">George Philips</div>
                                                                    <span class="time">6 Apr</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">
                                                                        Have you seens the claim from Rose?
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <!-- .chat-item -->
                                                    <li class="chat-item">
                                                        <a class="chat-link" href="html/apps-chats.php">
                                                            <div class="chat-media user-avatar user-avatar-multiple">
                                                                <div class="user-avatar">
                                                                    <img src="./assets/images/avatar/c-sm.jpg" alt="" />
                                                                </div>
                                                                <div class="user-avatar">
                                                                    <span>AB</span>
                                                                </div>
                                                            </div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">Softnio Group</div>
                                                                    <span class="time">27 Mar</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">
                                                                        You: I just bought a new computer but i am
                                                                        having some problem
                                                                    </div>
                                                                    <div class="status sent">
                                                                        <em class="icon ni ni-check-circle"></em>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <!-- .chat-item -->
                                                    <li class="chat-item">
                                                        <a class="chat-link" href="html/apps-chats.php">
                                                            <div class="chat-media user-avatar">
                                                                <img src="./assets/images/avatar/a-sm.jpg" alt="" />
                                                                <span class="status dot dot-lg dot-success"></span>
                                                            </div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">Larry Hughes</div>
                                                                    <span class="time">3 Apr</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">
                                                                        Hi Frank! How is you doing?
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <!-- .chat-item -->
                                                    <li class="chat-item">
                                                        <a class="chat-link" href="html/apps-chats.php">
                                                            <div class="chat-media user-avatar bg-purple">
                                                                <span>TW</span>
                                                            </div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">Tammy Wilson</div>
                                                                    <span class="time">27 Mar</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">
                                                                        You: I just bought a new computer but i am
                                                                        having some problem
                                                                    </div>
                                                                    <div class="status sent">
                                                                        <em class="icon ni ni-check-circle"></em>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <!-- .chat-item -->
                                                </ul>
                                                <!-- .chat-list -->
                                            </div>
                                            <!-- .nk-dropdown-body -->
                                            <div class="dropdown-foot center">
                                                <a href="html/apps-chats.php">View All</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown notification-dropdown">
                                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                                            <div class="icon-status icon-status-info">
                                                <em class="icon ni ni-bell"></em>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                            <div class="dropdown-head">
                                                <span class="sub-title nk-dropdown-title">Notifications</span>
                                                <a href="#">Mark All as Read</a>
                                            </div>
                                            <div class="dropdown-body">
                                                <div class="nk-notification">
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">
                                                                You have requested to <span>Widthdrawl</span>
                                                            </div>
                                                            <div class="nk-notification-time">
                                                                2 hrs ago
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">
                                                                Your <span>Deposit Order</span> is placed
                                                            </div>
                                                            <div class="nk-notification-time">
                                                                2 hrs ago
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">
                                                                You have requested to <span>Widthdrawl</span>
                                                            </div>
                                                            <div class="nk-notification-time">
                                                                2 hrs ago
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">
                                                                Your <span>Deposit Order</span> is placed
                                                            </div>
                                                            <div class="nk-notification-time">
                                                                2 hrs ago
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">
                                                                You have requested to <span>Widthdrawl</span>
                                                            </div>
                                                            <div class="nk-notification-time">
                                                                2 hrs ago
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">
                                                                Your <span>Deposit Order</span> is placed
                                                            </div>
                                                            <div class="nk-notification-time">
                                                                2 hrs ago
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- .nk-notification -->
                                            </div>
                                            <!-- .nk-dropdown-body -->
                                            <div class="dropdown-foot center">
                                                <a href="#">View All</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle me-n1" data-bs-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt"></em>
                                                </div>
                                                <div class="user-info d-none d-xl-block">
                                                    <div class="user-status user-status-unverified">
                                                        Unverified
                                                    </div>
                                                    <div class="user-name dropdown-indicator">
                                                        Othman Kharbouch
                                                    </div>
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
                                                        <span class="lead-text">Othman Kharbouch</span>
                                                        <span class="sub-text">otmankharbouch813@gmail.com</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li>
                                                        <a href="html/user-profile-regular.php"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="html/user-profile-setting.php"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="html/user-profile-activity.php"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a>
                                                    </li>
                                                    <li>
                                                        <a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li>
                                                        <a href="#"><em class="icon ni ni-signout"></em><span>Sign out</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- .nk-header-wrap -->
                    </div>
                    <!-- .container-fliud -->
                </div>
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="content-page wide-md m-auto">
                                    <div class="nk-block-head nk-block-head-lg mx-auto">
                                        <div class="nk-block-head-content text-center">
                                            <h2 class="nk-block-title fw-normal"><?php
                                                                                    $id = $_GET["courId"];

                                                                                    $sql = "SELECT * FROM cours JOIN administrateur ON cours.adminId = administrateur.adminId  WHERE courId = " . $_GET['courId'] . ";";
                                                                                    $stmt = $conn->prepare($sql);
                                                                                    $stmt->execute();
                                                                                    $result = $stmt->get_result();
                                                                                    $row = $result->fetch_assoc();
                                                                                    if ($row) {
                                                                                        echo $row['courName'];
                                                                                    } else {
                                                                                        echo "No course found with ID : $id";
                                                                                    }
                                                                                    ?></h2>
                                            <div class="nk-block-des">
                                                <p class="lead">
                                                    Category : <?php echo $row['category']; ?> , By <?php echo $row['adminName'] ?>
                                                </p>
                                            </div>
                                        </div>
                                        <!-- .nk-block-head -->
                                        <div class="nk-block">
                                            <div class="card">
                                                <div class="card-inner card-inner-xl">
                                                    <?php
                                                    $sql = "SELECT * FROM cour_chapters WHERE cour_id = " . $_GET['courId'] . ";";
                                                    $stmt = $conn->prepare($sql);
                                                    $stmt->execute();
                                                    $result = $stmt->get_result();
                                                    $rows = $result->fetch_all(MYSQLI_ASSOC);
                                                    ?>
                                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                        <?php foreach ($rows as $index => $row) {
                                                        ?>
                                                            <li class="nav-item">
                                                                <?php if ($index == 0) {
                                                                    $firstChapteId = $row['id'];
                                                                } ?>
                                                                <a onclick="chaptePassed(<?= $row['id'] ?>)" class="nav-link <?= ($index == 0) ? 'active' : '' ?>" id="home-tab" data-toggle="tab" href="#chapter-<?= $row['id'] ?>" role="tab" aria-controls="chapter-<?= $row['id'] ?>" aria-selected="true">
                                                                    <div class="passed <?= $row['passed'] == 1 ? 'show' : '' ?>" id="passed<?= $row['id'] ?>">
                                                                        <svg version="1.1" id="Layer_1" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve" width="22px" height="22px" fill="#087500" stroke="#087500">
                                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                                            <g id="SVGRepo_iconCarrier">
                                                                                <polyline fill="none" stroke="#0ecc00" stroke-width="2" stroke-miterlimit="10" points="28,8 16,20 11,15 "></polyline>
                                                                                <path d="M26.7,13.5c0.2,0.8,0.3,1.6,0.3,2.5c0,6.1-4.9,11-11,11S5,22.1,5,16S9.9,5,16,5c3,0,5.7,1.2,7.6,3.1l1.4-1.4 C22.7,4.4,19.5,3,16,3C8.8,3,3,8.8,3,16s5.8,13,13,13s13-5.8,13-13c0-1.4-0.2-2.8-0.7-4.1L26.7,13.5z"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <?= " " . $row['heading'] ?>
                                                                </a>
                                                            </li>

                                                        <?php } ?>
                                                    </ul>
                                                    <div class="tab-content" id="myTabContent">
                                                        <?php foreach ($rows as $index => $row) { ?>
                                                            <div class="tab-pane show fade <?= ($index == 0) ? 'active' : '' ?>" id="chapter-<?= $row['id'] ?>" role="tabpanel" aria-labelledby="chapter-<?= $row['id'] ?>-tab">
                                                                <h3> <?= $row['heading'] ?></h3>
                                                                <h5> <?= $row['subtitle'] ?></h5>
                                                                <br>
                                                                <p>
                                                                    <?php echo $row['description']; ?>
                                                                </p>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                                <div class="quiz-pass">
                                                    <form action="./passquiz.php?quizId=<?php echo $id; ?>" method="get">
                                                        <button class="submit-it" type="submit" id="go-quizz" disabled>Pass Quiz</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .nk-block -->
                                    </div>
                                    <!-- .content-page -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- content @e -->
                    <!-- footer @s -->
                    <div class="nk-footer">
                        <div class="container-fluid">
                            <div class="nk-footer-wrap">
                                <div class="nk-footer-copyright">
                                    &copy; 2023 DashLite. Template by
                                    <a href="https://softnio.com" target="_blank">Softnio</a>
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
                                        <li class="nav-item">
                                            <a data-bs-toggle="modal" href="#region" class="nav-link"><em class="icon ni ni-globe"></em><span class="ms-1">Select Region</span></a>
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
                                        <img src="./assets/images/flags/arg.png" alt="" class="country-flag" />
                                        <span class="country-name">Argentina</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="country-item">
                                        <img src="./assets/images/flags/aus.png" alt="" class="country-flag" />
                                        <span class="country-name">Australia</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="country-item">
                                        <img src="./assets/images/flags/bangladesh.png" alt="" class="country-flag" />
                                        <span class="country-name">Bangladesh</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="country-item">
                                        <img src="./assets/images/flags/canada.png" alt="" class="country-flag" />
                                        <span class="country-name">Canada <small>(English)</small></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="country-item">
                                        <img src="./assets/images/flags/china.png" alt="" class="country-flag" />
                                        <span class="country-name">Centrafricaine</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="country-item">
                                        <img src="./assets/images/flags/china.png" alt="" class="country-flag" />
                                        <span class="country-name">China</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="country-item">
                                        <img src="./assets/images/flags/french.png" alt="" class="country-flag" />
                                        <span class="country-name">France</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="country-item">
                                        <img src="./assets/images/flags/germany.png" alt="" class="country-flag" />
                                        <span class="country-name">Germany</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="country-item">
                                        <img src="./assets/images/flags/iran.png" alt="" class="country-flag" />
                                        <span class="country-name">Iran</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="country-item">
                                        <img src="./assets/images/flags/italy.png" alt="" class="country-flag" />
                                        <span class="country-name">Italy</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="country-item">
                                        <img src="./assets/images/flags/mexico.png" alt="" class="country-flag" />
                                        <span class="country-name">México</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="country-item">
                                        <img src="./assets/images/flags/philipine.png" alt="" class="country-flag" />
                                        <span class="country-name">Philippines</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="country-item">
                                        <img src="./assets/images/flags/portugal.png" alt="" class="country-flag" />
                                        <span class="country-name">Portugal</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="country-item">
                                        <img src="./assets/images/flags/s-africa.png" alt="" class="country-flag" />
                                        <span class="country-name">South Africa</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="country-item">
                                        <img src="./assets/images/flags/spanish.png" alt="" class="country-flag" />
                                        <span class="country-name">Spain</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="country-item">
                                        <img src="./assets/images/flags/switzerland.png" alt="" class="country-flag" />
                                        <span class="country-name">Switzerland</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="country-item">
                                        <img src="./assets/images/flags/uk.png" alt="" class="country-flag" />
                                        <span class="country-name">United Kingdom</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="country-item">
                                        <img src="./assets/images/flags/english.png" alt="" class="country-flag" />
                                        <span class="country-name">United State</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- .modal-content -->
            </div>
            <!-- .modla-dialog -->
        </div>
        <!-- .modal -->
        <!-- JavaScript -->
        <script src="./assets/js/bundle.js?ver=3.2.3"></script>
        <script src="./assets/js/scripts.js?ver=3.2.3"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOtvLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="./assets/js/cour-manager.js"></script>
        <script>
            chaptePassed(<?= $firstChapteId ?>);
        </script>
</body>

</html>