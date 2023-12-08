<?php
  $conn = new mysqli("localhost","root","","quizex");
   $query = "SELECT * FROM cours";
   $result = mysqli_query($your_db_connection, $query);

   if (!$result) {
     die("Database query failed.");
   }
?>
<!DOCTYPE html>
<html lang="zxx" class="js">
  <head>
    <base href="../../" />
    <meta charset="utf-8" />
    <meta name="author" content="Softnio" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta
      name="description"
      content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers."
    />
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png" />
    <!-- Page Title  -->
    <title>Courses | LMS | DashLite Admin Template</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="./assets/css/dashlite.css?ver=3.2.3" />
    <link
      id="skin-default"
      rel="stylesheet"
      href="./assets/css/theme.css?ver=3.2.3"
    />
  </head>

  <body class="nk-body bg-lighter npc-general has-sidebar">
    <div class="nk-app-root">
      <!-- main @s -->
      <div class="nk-main">
        <!-- sidebar @s -->
        <div
          class="nk-sidebar nk-sidebar-fixed is-light"
          data-content="sidebarMenu"
        >
          <div class="nk-sidebar-element nk-sidebar-head">
            <div class="nk-sidebar-brand">
              <a href="html/dashboard-u.php" class="logo-link nk-sidebar-logo">
                <img
                  class="logo-light logo-img"
                  src="./images/logo.svg"
                  srcset="./images/logo2x.png 2x"
                  alt="logo"
                />
                <img
                  class="logo-dark logo-img"
                  src="./images/logo-dark.png"
                  srcset="./images/logo-dark2x.png 2x"
                  alt="logo-dark"
                />
                <img
                  class="logo-small logo-img logo-img-small"
                  src="./images/logo-small.png"
                  srcset="./images/logo-small2x.png 2x"
                  alt="logo-small"
                />
              </a>
            </div>
            <div class="nk-menu-trigger me-n2">
              <a
                href="#"
                class="nk-nav-toggle nk-quick-nav-icon d-xl-none"
                data-target="sidebarMenu"
                ><em class="icon ni ni-arrow-left"></em
              ></a>
              <a
                href="#"
                class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex"
                data-target="sidebarMenu"
                ><em class="icon ni ni-menu"></em
              ></a>
            </div>
          </div>
          <!-- .nk-sidebar-element -->
          <div class="nk-sidebar-element">
            <div class="nk-sidebar-content">
              <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                  <li class="nk-menu-item">
                    <a href="html/lms/dashboard-u.php" class="nk-menu-link">
                      <span class="nk-menu-icon"
                        ><em class="icon ni ni-dashboard-fill"></em
                      ></span>
                      <span class="nk-menu-text">Dashboard</span>
                    </a>
                  </li>
                  <!-- .nk-menu-item -->
                  <li class="nk-menu-item has-sub">
                    <a href="#" class="nk-menu-link nk-menu-toggle">
                      <span class="nk-menu-icon"
                        ><em class="icon ni ni-book-fill"></em
                      ></span>
                      <span class="nk-menu-text">Courses</span>
                    </a>
                    <ul class="nk-menu-sub">
                      <li class="nk-menu-item">
                        <a href="html/lms/category.php" class="nk-menu-link"
                          ><span class="nk-menu-text">Catagories</span></a
                        >
                      </li>
                      <li class="nk-menu-item">
                        <a href="html/lms/courses.php" class="nk-menu-link"
                          ><span class="nk-menu-text">Course List</span></a
                        >
                      </li>
                    </ul>
                    <!-- .nk-menu-sub -->
                  </li>
                  <li class="nk-menu-item has-sub">
                    <a href="#" class="nk-menu-link nk-menu-toggle">
                      <span class="nk-menu-icon"
                        ><em class="icon ni ni-file-docs"></em
                      ></span>
                      <span class="nk-menu-text">Quizzes</span>
                    </a>
                    <ul class="nk-menu-sub">
                      <li class="nk-menu-item">
                        <a href="html/lms/category.php" class="nk-menu-link"
                          ><span class="nk-menu-text">Catagories</span></a
                        >
                      </li>
                      <li class="nk-menu-item">
                        <a href="html/lms/courses.php" class="nk-menu-link"
                          ><span class="nk-menu-text">Quizzes List</span></a
                        >
                      </li>
                    </ul>
                    <!-- .nk-menu-sub -->
                  </li>
                  <!-- .nk-menu-item -->
                  <li class="nk-menu-item">
                    <a
                      href="html/lms/instructor-list.html"
                      class="nk-menu-link"
                    >
                      <span class="nk-menu-icon"
                        ><em class="icon ni ni-users-fill"></em
                      ></span>
                      <span class="nk-menu-text">Instructors</span>
                    </a>
                  </li>
                  <li class="nk-menu-item">
                    <a href="html/lms/students.php" class="nk-menu-link">
                      <span class="nk-menu-icon"
                        ><em class="icon ni ni-users-fill"></em
                      ></span>
                      <span class="nk-menu-text">Students</span>
                    </a>
                  </li>
                  <li class="nk-menu-item">
                    <a href="html/lms/admin-profile.html" class="nk-menu-link">
                      <span class="nk-menu-icon"
                        ><em class="icon ni ni-account-setting-fill"></em
                      ></span>
                      <span class="nk-menu-text">Profile</span>
                    </a>
                  </li>
                  <!-- .nk-menu-item -->
                  <li class="nk-menu-item">
                    <a href="html/lms/settings.html" class="nk-menu-link">
                      <span class="nk-menu-icon"
                        ><em class="icon ni ni-setting-alt-fill"></em
                      ></span>
                      <span class="nk-menu-text">Settings</span>
                    </a>
                  </li>
                  <!-- .nk-menu-item -->
                </ul>
              </div>
              <!-- .nk-sidebar-menu -->
            </div>
            <!-- .nk-sidebar-content -->
          </div>
          <!-- .nk-sidebar-element -->
        </div>
        <!-- sidebar @e -->
        <!-- wrap @s -->
        <div class="nk-wrap">
          <!-- main header @s -->
          <div class="nk-header nk-header-fixed is-light">
            <div class="container-fluid">
              <div class="nk-header-wrap">
                <div class="nk-menu-trigger d-xl-none ms-n1">
                  <a
                    href="#"
                    class="nk-nav-toggle nk-quick-nav-icon"
                    data-target="sidebarMenu"
                    ><em class="icon ni ni-menu"></em
                  ></a>
                </div>
                <div class="nk-header-brand d-xl-none">
                  <a href="html/dashboard-u.php" class="logo-link">
                    <img
                      class="logo-light logo-img"
                      src="./images/logo.svg"
                      srcset="./images/logo2x.png 2x"
                      alt="logo"
                    />
                    <img
                      class="logo-dark logo-img"
                      src="./images/logo-dark.png"
                      srcset="./images/logo-dark2x.png 2x"
                      alt="logo-dark"
                    />
                  </a>
                </div>
                <!-- .nk-header-brand -->
                <div class="nk-header-search ms-3 ms-xl-0">
                  <em class="icon ni ni-search"></em>
                  <input
                    type="text"
                    class="form-control border-transparent form-focus-none"
                    placeholder="Search anything"
                  />
                </div>
                <!-- .nk-header-news -->
                <div class="nk-header-tools">
                  <ul class="nk-quick-nav">
                    <li
                      class="dropdown language-dropdown d-none d-sm-block me-n1"
                    >
                      <a
                        href="#"
                        class="dropdown-toggle nk-quick-nav-icon"
                        data-bs-toggle="dropdown"
                      >
                        <div class="quick-icon border border-light">
                          <img
                            class="icon"
                            src="./images/flags/english-sq.png"
                            alt=""
                          />
                        </div>
                      </a>
                      <div
                        class="dropdown-menu dropdown-menu-end dropdown-menu-s1"
                      >
                        <ul class="language-list">
                          <li>
                            <a href="#" class="language-item">
                              <img
                                src="./images/flags/english.png"
                                alt=""
                                class="language-flag"
                              />
                              <span class="language-name">English</span>
                            </a>
                          </li>
                          <li>
                            <a href="#" class="language-item">
                              <img
                                src="./images/flags/spanish.png"
                                alt=""
                                class="language-flag"
                              />
                              <span class="language-name">Español</span>
                            </a>
                          </li>
                          <li>
                            <a href="#" class="language-item">
                              <img
                                src="./images/flags/french.png"
                                alt=""
                                class="language-flag"
                              />
                              <span class="language-name">Français</span>
                            </a>
                          </li>
                          <li>
                            <a href="#" class="language-item">
                              <img
                                src="./images/flags/turkey.png"
                                alt=""
                                class="language-flag"
                              />
                              <span class="language-name">Türkçe</span>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <!-- .dropdown -->
                    <li class="dropdown chats-dropdown hide-mb-xs">
                      <a
                        href="#"
                        class="dropdown-toggle nk-quick-nav-icon"
                        data-bs-toggle="dropdown"
                      >
                        <div class="icon-status icon-status-na">
                          <em class="icon ni ni-comments"></em>
                        </div>
                      </a>
                      <div
                        class="dropdown-menu dropdown-menu-xl dropdown-menu-end"
                      >
                        <div class="dropdown-head">
                          <span class="sub-title nk-dropdown-title"
                            >Recent Chats</span
                          >
                          <a href="#">Setting</a>
                        </div>
                        <div class="dropdown-body">
                          <ul class="chat-list">
                            <li class="chat-item">
                              <a class="chat-link" href="html/lms/message.html">
                                <div class="chat-media user-avatar">
                                  <span>IH</span>
                                  <span
                                    class="status dot dot-lg dot-gray"
                                  ></span>
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
                                      <em
                                        class="icon ni ni-check-circle-fill"
                                      ></em>
                                    </div>
                                  </div>
                                </div>
                              </a>
                            </li>
                            <!-- .chat-item -->
                            <li class="chat-item is-unread">
                              <a class="chat-link" href="html/lms/message.html">
                                <div class="chat-media user-avatar bg-pink">
                                  <span>AB</span>
                                  <span
                                    class="status dot dot-lg dot-success"
                                  ></span>
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
                              <a class="chat-link" href="html/lms/message.html">
                                <div class="chat-media user-avatar">
                                  <img src="./images/avatar/b-sm.jpg" alt="" />
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
                              <a class="chat-link" href="html/lms/message.html">
                                <div
                                  class="chat-media user-avatar user-avatar-multiple"
                                >
                                  <div class="user-avatar">
                                    <img
                                      src="./images/avatar/c-sm.jpg"
                                      alt=""
                                    />
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
                              <a class="chat-link" href="html/lms/message.html">
                                <div class="chat-media user-avatar">
                                  <img src="./images/avatar/a-sm.jpg" alt="" />
                                  <span
                                    class="status dot dot-lg dot-success"
                                  ></span>
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
                              <a class="chat-link" href="html/lms/message.html">
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
                          <a href="html/lms/message.html">View All</a>
                        </div>
                      </div>
                    </li>
                    <li class="dropdown notification-dropdown">
                      <a
                        href="#"
                        class="dropdown-toggle nk-quick-nav-icon"
                        data-bs-toggle="dropdown"
                      >
                        <div class="icon-status icon-status-info">
                          <em class="icon ni ni-bell"></em>
                        </div>
                      </a>
                      <div
                        class="dropdown-menu dropdown-menu-xl dropdown-menu-end"
                      >
                        <div class="dropdown-head">
                          <span class="sub-title nk-dropdown-title"
                            >Notifications</span
                          >
                          <a href="#">Mark All as Read</a>
                        </div>
                        <div class="dropdown-body">
                          <div class="nk-notification">
                            <div class="nk-notification-item dropdown-inner">
                              <div class="nk-notification-icon">
                                <em
                                  class="icon icon-circle bg-warning-dim ni ni-curve-down-right"
                                ></em>
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
                                <em
                                  class="icon icon-circle bg-success-dim ni ni-curve-down-left"
                                ></em>
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
                                <em
                                  class="icon icon-circle bg-warning-dim ni ni-curve-down-right"
                                ></em>
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
                                <em
                                  class="icon icon-circle bg-success-dim ni ni-curve-down-left"
                                ></em>
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
                                <em
                                  class="icon icon-circle bg-warning-dim ni ni-curve-down-right"
                                ></em>
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
                                <em
                                  class="icon icon-circle bg-success-dim ni ni-curve-down-left"
                                ></em>
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
                      <a
                        href="#"
                        class="dropdown-toggle me-n1"
                        data-bs-toggle="dropdown"
                      >
                        <div class="user-toggle">
                          <div class="user-avatar sm">
                            <em class="icon ni ni-user-alt"></em>
                          </div>
                          <div class="user-info d-none d-xl-block">
                            <div class="user-status user-status-active">
                              Administator
                            </div>
                            <div class="user-name dropdown-indicator">
                              Othman Kharbouch
                            </div>
                          </div>
                        </div>
                      </a>
                      <div
                        class="dropdown-menu dropdown-menu-md dropdown-menu-end"
                      >
                        <div
                          class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block"
                        >
                          <div class="user-card">
                            <div class="user-avatar">
                              <span>AB</span>
                            </div>
                            <div class="user-info">
                              <span class="lead-text">Othman Kharbouch</span>
                              <span class="sub-text"
                                >otmankharbouch813@gmail.com</span
                              >
                            </div>
                          </div>
                        </div>
                        <div class="dropdown-inner">
                          <ul class="link-list">
                            <li>
                              <a href="html/lms/admin-profile.html"
                                ><em class="icon ni ni-user-alt"></em
                                ><span>View Profile</span></a
                              >
                            </li>
                            <li>
                              <a href="html/lms/admin-profile-setting.html"
                                ><em class="icon ni ni-setting-alt"></em
                                ><span>Account Setting</span></a
                              >
                            </li>
                            <li>
                              <a href="html/lms/admin-profile-activity.html"
                                ><em class="icon ni ni-activity-alt"></em
                                ><span>Login Activity</span></a
                              >
                            </li>
                            <li>
                              <a class="dark-switch" href="#"
                                ><em class="icon ni ni-moon"></em
                                ><span>Dark Mode</span></a
                              >
                            </li>
                          </ul>
                        </div>
                        <div class="dropdown-inner">
                          <ul class="link-list">
                            <li>
                              <a href="#"
                                ><em class="icon ni ni-signout"></em
                                ><span>Sign out</span></a
                              >
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
                  <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                      <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Courses</h3>
                        <div class="nk-block-des text-soft">
                          <p>You have total 20 Courses.</p>
                        </div>
                      </div>
                      <!-- .nk-block-head-content -->
                      <div class="nk-block-head-content">
                        <div class="toggle-wrap nk-block-tools-toggle">
                          <a
                            href="#"
                            class="btn btn-icon btn-trigger toggle-expand me-n1"
                            data-target="pageMenu"
                            ><em class="icon ni ni-menu-alt-r"></em
                          ></a>
                          <div
                            class="toggle-expand-content"
                            data-content="pageMenu"
                          >
                            <ul class="nk-block-tools g-3">
                              <li>
                                <div class="drodown">
                                  <a
                                    href="#"
                                    class="dropdown-toggle btn btn-white btn-dim btn-outline-light"
                                    data-bs-toggle="dropdown"
                                    ><em
                                      class="d-none d-sm-inline icon ni ni-filter-alt"
                                    ></em
                                    ><span>Filtered By</span
                                    ><em
                                      class="dd-indc icon ni ni-chevron-right"
                                    ></em
                                  ></a>
                                  <div class="dropdown-menu dropdown-menu-end">
                                    <ul class="link-list-opt no-bdr">
                                      <li>
                                        <a href="#"><span>Active</span></a>
                                      </li>
                                      <li>
                                        <a href="#"><span>Pending</span></a>
                                      </li>
                                      <li>
                                        <a href="#"><span>Rejected</span></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </li>
                              <li
                                class="nk-block-tools-opt d-none d-sm-block"
                                data-bs-toggle="modal"
                                data-bs-target="#modalCreate"
                              >
                                <a href="#" class="btn btn-primary"
                                  ><em class="icon ni ni-plus"></em
                                  ><span>Add Course</span></a
                                >
                              </li>
                              <li
                                class="nk-block-tools-opt d-block d-sm-none"
                                data-bs-toggle="modal"
                                data-bs-target="#modalCreate"
                              >
                                <a href="#" class="btn btn-icon btn-primary"
                                  ><em class="icon ni ni-plus"></em
                                ></a>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <!-- .toggle-wrap -->
                      </div>
                      <!-- .nk-block-head-content -->
                    </div>
                    <!-- .nk-block-between -->
                  </div>
                  <!-- .nk-block-head -->
                  <div class="nk-block">
                    <div class="card card-stretch">
                      <div class="card-inner-group">
                        <div class="card-inner p-0">
                          <table class="nk-tb-list nk-tb-ulist">
                            <thead>
                              <tr class="nk-tb-item nk-tb-head">
                                <th class="nk-tb-col nk-tb-col-check">
                                  <div
                                    class="custom-control custom-control-sm custom-checkbox notext"
                                  >
                                    <input
                                      type="checkbox"
                                      class="custom-control-input"
                                      id="pid-all"
                                    />
                                    <label
                                      class="custom-control-label"
                                      for="pid-all"
                                    ></label>
                                  </div>
                                </th>
                                <th class="nk-tb-col">
                                  <span class="sub-text">Course Name</span>
                                </th>
                                <th class="nk-tb-col tb-col-lg">
                                  <span class="sub-text">Category</span>
                                </th>
                                <th class="nk-tb-col tb-col-lg">
                                  <span class="sub-text">Instractor</span>
                                </th>
                                <th class="nk-tb-col tb-col-lg">
                                  <span class="sub-text">Lesson</span>
                                </th>
                                <th class="nk-tb-col tb-col-xxl">
                                  <span class="sub-text">Enrole Student</span>
                                </th>
                                <th class="nk-tb-col tb-col-md">
                                  <span class="sub-text">Status</span>
                                </th>
                                <th class="nk-tb-col tb-col-mb">
                                  <span class="sub-text">Price</span>
                                </th>
                                <th class="nk-tb-col tb-col-mb">
                                  <span class="sub-text">Deadline</span>
                                </th>
                                <th class="nk-tb-col nk-tb-col-tools text-end">
                                  <ul class="nk-tb-actions gx-1">
                                    <li>
                                      <div class="dropdown">
                                        <a
                                          href="#"
                                          class="btn btn-sm btn-trigger btn-icon dropdown-toggle"
                                          data-bs-toggle="dropdown"
                                          data-offset="0,5"
                                          ><em class="icon ni ni-more-h"></em
                                        ></a>
                                        <div
                                          class="dropdown-menu dropdown-menu-end"
                                        >
                                          <ul class="link-list-opt no-bdr">
                                            <li>
                                              <a href="#"
                                                ><em
                                                  class="icon ni ni-archive"
                                                ></em
                                                ><span>Mark As Archive</span></a
                                              >
                                            </li>
                                            <li>
                                              <a href="#"
                                                ><em
                                                  class="icon ni ni-trash"
                                                ></em
                                                ><span>Remove Category</span></a
                                              >
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </li>
                                  </ul>
                                </th>
                              </tr>
                              <!-- .nk-tb-item -->
                            </thead>
                            <tbody>
                            <?php

                              // Generate HTML dynamically based on the retrieved data
                              while ($row = mysqli_fetch_assoc($result)) {
                                echo '<tr class="nk-tb-item">
                                <td class="nk-tb-col nk-tb-col-check">
                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                <input type="checkbox" class="custom-control-input" id="pid-all" />
                                <label class="custom-control-label" for="pid-all"></label>
                                </div>
                                </td>
                                <td class="nk-tb-col"><span class="sub-text">' . $row['courName'] . '</span></td>
                                <td class="nk-tb-col tb-col-lg"><span class="sub-text">' . $row['category'] . '</span></td>
                                <td class="nk-tb-col tb-col-lg"><span class="sub-text">' . $row['adminId'] . '</span></td>
                                <td class="nk-tb-col tb-col-lg"><span class="sub-text">' . $row['lesson'] . '</span></td>
                                <td class="nk-tb-col tb-col-xxl"><span class="sub-text">' . $row['enrolled_students'] . '</span></td>
                                <td class="nk-tb-col tb-col-md"><span class="sub-text">' . $row['status'] . '</span></td>
                                <td class="nk-tb-col tb-col-mb"><span class="sub-text">' . $row['price'] . '</span></td>
                                <td class="nk-tb-col tb-col-mb"><span class="sub-text">' . $row['startTime'] . '</span></td>
                                <td class="nk-tb-col nk-tb-col-tools text-end">
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
                                </tr>';
                              }
                              ?>
                              <!-- .nk-tb-item -->
                              <tr class="nk-tb-item">
                                <td class="nk-tb-col nk-tb-col-check">
                                  <div
                                    class="custom-control custom-control-sm custom-checkbox notext"
                                  >
                                    <input
                                      type="checkbox"
                                      class="custom-control-input"
                                      id="pid-02"
                                    />
                                    <label
                                      class="custom-control-label"
                                      for="pid-02"
                                    ></label>
                                  </div>
                                </td>
                                <td class="nk-tb-col">
                                  <a href="#" class="project-title">
                                    <div class="user-avatar sq bg-info">
                                      <span>AD</span>
                                    </div>
                                    <div class="project-info">
                                      <h6 class="title">Android Development</h6>
                                    </div>
                                  </a>
                                </td>
                                <td class="nk-tb-col tb-col-lg">
                                  <span>Mobile Application</span>
                                </td>
                                <td class="nk-tb-col tb-col-lg">
                                  <span>Michael Wood</span>
                                </td>
                                <td class="nk-tb-col tb-col-lg">
                                  <span>Total lesson: 11</span>
                                </td>
                                <td class="nk-tb-col tb-col-xxl">
                                  <span>Total enrolment: 7</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                  <span class="badge badge-dim bg-warning"
                                    >Pending</span
                                  >
                                </td>
                                <td class="nk-tb-col tb-col-mb">
                                  <span>$65</span>
                                </td>
                                <td class="nk-tb-col tb-col-mb">
                                  <span>10.5.2021</span>
                                </td>
                                <td class="nk-tb-col nk-tb-col-tools">
                                  <ul class="nk-tb-actions gx-1">
                                    <li>
                                      <div class="drodown">
                                        <a
                                          href="#"
                                          class="dropdown-toggle btn btn-sm btn-icon btn-trigger"
                                          data-bs-toggle="dropdown"
                                          ><em class="icon ni ni-more-h"></em
                                        ></a>
                                        <div
                                          class="dropdown-menu dropdown-menu-end"
                                        >
                                          <ul class="link-list-opt no-bdr">
                                            <li>
                                              <a
                                                data-bs-toggle="modal"
                                                href="#modalEdit"
                                                ><em
                                                  class="icon ni ni-edit"
                                                ></em
                                                ><span>Edit Course</span></a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                data-bs-toggle="modal"
                                                href="#modalDelete"
                                                ><em
                                                  class="icon ni ni-delete"
                                                ></em
                                                ><span>Delete Course</span></a
                                              >
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </li>
                                  </ul>
                                </td>
                              </tr>
                              <!-- .nk-tb-item -->
                              <tr class="nk-tb-item">
                                <td class="nk-tb-col nk-tb-col-check">
                                  <div
                                    class="custom-control custom-control-sm custom-checkbox notext"
                                  >
                                    <input
                                      type="checkbox"
                                      class="custom-control-input"
                                      id="pid-03"
                                    />
                                    <label
                                      class="custom-control-label"
                                      for="pid-03"
                                    ></label>
                                  </div>
                                </td>
                                <td class="nk-tb-col">
                                  <a href="#" class="project-title">
                                    <div class="user-avatar sq bg-warning">
                                      <span>UD</span>
                                    </div>
                                    <div class="project-info">
                                      <h6 class="title">UI/UX Design</h6>
                                    </div>
                                  </a>
                                </td>
                                <td class="nk-tb-col tb-col-lg">
                                  <span>Graphics Design</span>
                                </td>
                                <td class="nk-tb-col tb-col-lg">
                                  <span>Abu Bin Istiak</span>
                                </td>
                                <td class="nk-tb-col tb-col-lg">
                                  <span>Total lesson: 12</span>
                                </td>
                                <td class="nk-tb-col tb-col-xxl">
                                  <span>Total enrolment: 8</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                  <span class="badge badge-dim bg-success"
                                    >Active</span
                                  >
                                </td>
                                <td class="nk-tb-col tb-col-mb">
                                  <span>$20</span>
                                </td>
                                <td class="nk-tb-col tb-col-mb">
                                  <span>15.4.2021</span>
                                </td>
                                <td class="nk-tb-col nk-tb-col-tools">
                                  <ul class="nk-tb-actions gx-1">
                                    <li>
                                      <div class="drodown">
                                        <a
                                          href="#"
                                          class="dropdown-toggle btn btn-sm btn-icon btn-trigger"
                                          data-bs-toggle="dropdown"
                                          ><em class="icon ni ni-more-h"></em
                                        ></a>
                                        <div
                                          class="dropdown-menu dropdown-menu-end"
                                        >
                                          <ul class="link-list-opt no-bdr">
                                            <li>
                                              <a
                                                data-bs-toggle="modal"
                                                href="#modalEdit"
                                                ><em
                                                  class="icon ni ni-edit"
                                                ></em
                                                ><span>Edit Course</span></a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                data-bs-toggle="modal"
                                                href="#modalDelete"
                                                ><em
                                                  class="icon ni ni-delete"
                                                ></em
                                                ><span>Delete Course</span></a
                                              >
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </li>
                                  </ul>
                                </td>
                              </tr>
                              <!-- .nk-tb-item -->
                              <tr class="nk-tb-item">
                                <td class="nk-tb-col nk-tb-col-check">
                                  <div
                                    class="custom-control custom-control-sm custom-checkbox notext"
                                  >
                                    <input
                                      type="checkbox"
                                      class="custom-control-input"
                                      id="pid-04"
                                    />
                                    <label
                                      class="custom-control-label"
                                      for="pid-04"
                                    ></label>
                                  </div>
                                </td>
                                <td class="nk-tb-col">
                                  <a href="#" class="project-title">
                                    <div class="user-avatar sq bg-purple">
                                      <span>WT</span>
                                    </div>
                                    <div class="project-info">
                                      <h6 class="title">
                                        WordPress Theme Development
                                      </h6>
                                    </div>
                                  </a>
                                </td>
                                <td class="nk-tb-col tb-col-lg">
                                  <span>Web Development</span>
                                </td>
                                <td class="nk-tb-col tb-col-lg">
                                  <span>Emily Smith</span>
                                </td>
                                <td class="nk-tb-col tb-col-lg">
                                  <span>Total lesson: 24</span>
                                </td>
                                <td class="nk-tb-col tb-col-xxl">
                                  <span>Total enrolment: 3</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                  <span class="badge badge-dim bg-success"
                                    >Active</span
                                  >
                                </td>
                                <td class="nk-tb-col tb-col-mb">
                                  <span>$50</span>
                                </td>
                                <td class="nk-tb-col tb-col-mb">
                                  <span>20.4.2021</span>
                                </td>
                                <td class="nk-tb-col nk-tb-col-tools">
                                  <ul class="nk-tb-actions gx-1">
                                    <li>
                                      <div class="drodown">
                                        <a
                                          href="#"
                                          class="dropdown-toggle btn btn-sm btn-icon btn-trigger"
                                          data-bs-toggle="dropdown"
                                          ><em class="icon ni ni-more-h"></em
                                        ></a>
                                        <div
                                          class="dropdown-menu dropdown-menu-end"
                                        >
                                          <ul class="link-list-opt no-bdr">
                                            <li>
                                              <a
                                                data-bs-toggle="modal"
                                                href="#modalEdit"
                                                ><em
                                                  class="icon ni ni-edit"
                                                ></em
                                                ><span>Edit Course</span></a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                data-bs-toggle="modal"
                                                href="#modalDelete"
                                                ><em
                                                  class="icon ni ni-delete"
                                                ></em
                                                ><span>Delete Course</span></a
                                              >
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </li>
                                  </ul>
                                </td>
                              </tr>
                              <!-- .nk-tb-item -->
                              <tr class="nk-tb-item">
                                <td class="nk-tb-col nk-tb-col-check">
                                  <div
                                    class="custom-control custom-control-sm custom-checkbox notext"
                                  >
                                    <input
                                      type="checkbox"
                                      class="custom-control-input"
                                      id="pid-05"
                                    />
                                    <label
                                      class="custom-control-label"
                                      for="pid-05"
                                    ></label>
                                  </div>
                                </td>
                                <td class="nk-tb-col">
                                  <a href="#" class="project-title">
                                    <div class="user-avatar sq bg-info">
                                      <span>AD</span>
                                    </div>
                                    <div class="project-info">
                                      <h6 class="title">Android Development</h6>
                                    </div>
                                  </a>
                                </td>
                                <td class="nk-tb-col tb-col-lg">
                                  <span>Mobile Application</span>
                                </td>
                                <td class="nk-tb-col tb-col-lg">
                                  <span>Jhon Doe</span>
                                </td>
                                <td class="nk-tb-col tb-col-lg">
                                  <span>Total lesson: 11</span>
                                </td>
                                <td class="nk-tb-col tb-col-xxl">
                                  <span>Total enrolment: 7</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                  <span class="badge badge-dim bg-warning"
                                    >Pending</span
                                  >
                                </td>
                                <td class="nk-tb-col tb-col-mb">
                                  <span>$65</span>
                                </td>
                                <td class="nk-tb-col tb-col-mb">
                                  <span>10.5.2021</span>
                                </td>
                                <td class="nk-tb-col nk-tb-col-tools">
                                  <ul class="nk-tb-actions gx-1">
                                    <li>
                                      <div class="drodown">
                                        <a
                                          href="#"
                                          class="dropdown-toggle btn btn-sm btn-icon btn-trigger"
                                          data-bs-toggle="dropdown"
                                          ><em class="icon ni ni-more-h"></em
                                        ></a>
                                        <div
                                          class="dropdown-menu dropdown-menu-end"
                                        >
                                          <ul class="link-list-opt no-bdr">
                                            <li>
                                              <a
                                                data-bs-toggle="modal"
                                                href="#modalEdit"
                                                ><em
                                                  class="icon ni ni-edit"
                                                ></em
                                                ><span>Edit Course</span></a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                data-bs-toggle="modal"
                                                href="#modalDelete"
                                                ><em
                                                  class="icon ni ni-delete"
                                                ></em
                                                ><span>Delete Course</span></a
                                              >
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </li>
                                  </ul>
                                </td>
                              </tr>
                              <!-- .nk-tb-item -->
                              <tr class="nk-tb-item">
                                <td class="nk-tb-col nk-tb-col-check">
                                  <div
                                    class="custom-control custom-control-sm custom-checkbox notext"
                                  >
                                    <input
                                      type="checkbox"
                                      class="custom-control-input"
                                      id="pid-06"
                                    />
                                    <label
                                      class="custom-control-label"
                                      for="pid-06"
                                    ></label>
                                  </div>
                                </td>
                                <td class="nk-tb-col">
                                  <a href="#" class="project-title">
                                    <div class="user-avatar sq bg-warning">
                                      <span>UD</span>
                                    </div>
                                    <div class="project-info">
                                      <h6 class="title">UI/UX Design</h6>
                                    </div>
                                  </a>
                                </td>
                                <td class="nk-tb-col tb-col-lg">
                                  <span>Graphics Design</span>
                                </td>
                                <td class="nk-tb-col tb-col-lg">
                                  <span> Abu Bin Istiak</span>
                                </td>
                                <td class="nk-tb-col tb-col-lg">
                                  <span>Total lesson: 12</span>
                                </td>
                                <td class="nk-tb-col tb-col-xxl">
                                  <span>Total enrolment: 8</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                  <span class="badge badge-dim bg-success"
                                    >Active</span
                                  >
                                </td>
                                <td class="nk-tb-col tb-col-mb">
                                  <span>$20</span>
                                </td>
                                <td class="nk-tb-col tb-col-mb">
                                  <span>15.4.2021</span>
                                </td>
                                <td class="nk-tb-col nk-tb-col-tools">
                                  <ul class="nk-tb-actions gx-1">
                                    <li>
                                      <div class="drodown">
                                        <a
                                          href="#"
                                          class="dropdown-toggle btn btn-sm btn-icon btn-trigger"
                                          data-bs-toggle="dropdown"
                                          ><em class="icon ni ni-more-h"></em
                                        ></a>
                                        <div
                                          class="dropdown-menu dropdown-menu-end"
                                        >
                                          <ul class="link-list-opt no-bdr">
                                            <li>
                                              <a
                                                data-bs-toggle="modal"
                                                href="#modalEdit"
                                                ><em
                                                  class="icon ni ni-edit"
                                                ></em
                                                ><span>Edit Course</span></a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                data-bs-toggle="modal"
                                                href="#modalDelete"
                                                ><em
                                                  class="icon ni ni-delete"
                                                ></em
                                                ><span>Delete Course</span></a
                                              >
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </li>
                                  </ul>
                                </td>
                              </tr>
                              <!-- .nk-tb-item -->
                              <tr class="nk-tb-item">
                                <td class="nk-tb-col nk-tb-col-check">
                                  <div
                                    class="custom-control custom-control-sm custom-checkbox notext"
                                  >
                                    <input
                                      type="checkbox"
                                      class="custom-control-input"
                                      id="pid-07"
                                    />
                                    <label
                                      class="custom-control-label"
                                      for="pid-07"
                                    ></label>
                                  </div>
                                </td>
                                <td class="nk-tb-col">
                                  <a href="#" class="project-title">
                                    <div class="user-avatar sq bg-purple">
                                      <span>RD</span>
                                    </div>
                                    <div class="project-info">
                                      <h6 class="title">Responsive Design</h6>
                                    </div>
                                  </a>
                                </td>
                                <td class="nk-tb-col tb-col-lg">
                                  <span>Web Development</span>
                                </td>
                                <td class="nk-tb-col tb-col-lg">
                                  <span>lara Ashley</span>
                                </td>
                                <td class="nk-tb-col tb-col-lg">
                                  <span>Total lesson: 22</span>
                                </td>
                                <td class="nk-tb-col tb-col-xxl">
                                  <span>Total enrolment: 29</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                  <span class="badge badge-dim bg-success"
                                    >Active</span
                                  >
                                </td>
                                <td class="nk-tb-col tb-col-mb">
                                  <span>$50</span>
                                </td>
                                <td class="nk-tb-col tb-col-mb">
                                  <span>22.5.2021</span>
                                </td>
                                <td class="nk-tb-col nk-tb-col-tools">
                                  <ul class="nk-tb-actions gx-1">
                                    <li>
                                      <div class="drodown">
                                        <a
                                          href="#"
                                          class="dropdown-toggle btn btn-sm btn-icon btn-trigger"
                                          data-bs-toggle="dropdown"
                                          ><em class="icon ni ni-more-h"></em
                                        ></a>
                                        <div
                                          class="dropdown-menu dropdown-menu-end"
                                        >
                                          <ul class="link-list-opt no-bdr">
                                            <li>
                                              <a
                                                data-bs-toggle="modal"
                                                href="#modalEdit"
                                                ><em
                                                  class="icon ni ni-edit"
                                                ></em
                                                ><span>Edit Course</span></a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                data-bs-toggle="modal"
                                                href="#modalDelete"
                                                ><em
                                                  class="icon ni ni-delete"
                                                ></em
                                                ><span>Delete Course</span></a
                                              >
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </li>
                                  </ul>
                                </td>
                              </tr>
                              <!-- .nk-tb-item -->
                              <tr class="nk-tb-item">
                                <td class="nk-tb-col nk-tb-col-check">
                                  <div
                                    class="custom-control custom-control-sm custom-checkbox notext"
                                  >
                                    <input
                                      type="checkbox"
                                      class="custom-control-input"
                                      id="pid-08"
                                    />
                                    <label
                                      class="custom-control-label"
                                      for="pid-08"
                                    ></label>
                                  </div>
                                </td>
                                <td class="nk-tb-col">
                                  <a href="#" class="project-title">
                                    <div class="user-avatar sq bg-info">
                                      <span>AD</span>
                                    </div>
                                    <div class="project-info">
                                      <h6 class="title">Android Development</h6>
                                    </div>
                                  </a>
                                </td>
                                <td class="nk-tb-col tb-col-lg">
                                  <span>Mobile Application</span>
                                </td>
                                <td class="nk-tb-col tb-col-lg">
                                  <span>Michael Wood</span>
                                </td>
                                <td class="nk-tb-col tb-col-lg">
                                  <span>Total lesson: 11</span>
                                </td>
                                <td class="nk-tb-col tb-col-xxl">
                                  <span>Total enrolment: 7</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                  <span class="badge badge-dim bg-warning"
                                    >Pending</span
                                  >
                                </td>
                                <td class="nk-tb-col tb-col-mb">
                                  <span>$65</span>
                                </td>
                                <td class="nk-tb-col tb-col-mb">
                                  <span>10.5.2021</span>
                                </td>
                                <td class="nk-tb-col nk-tb-col-tools">
                                  <ul class="nk-tb-actions gx-1">
                                    <li>
                                      <div class="drodown">
                                        <a
                                          href="#"
                                          class="dropdown-toggle btn btn-sm btn-icon btn-trigger"
                                          data-bs-toggle="dropdown"
                                          ><em class="icon ni ni-more-h"></em
                                        ></a>
                                        <div
                                          class="dropdown-menu dropdown-menu-end"
                                        >
                                          <ul class="link-list-opt no-bdr">
                                            <li>
                                              <a
                                                data-bs-toggle="modal"
                                                href="#modalEdit"
                                                ><em
                                                  class="icon ni ni-edit"
                                                ></em
                                                ><span>Edit Course</span></a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                data-bs-toggle="modal"
                                                href="#modalDelete"
                                                ><em
                                                  class="icon ni ni-delete"
                                                ></em
                                                ><span>Delete Course</span></a
                                              >
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </li>
                                  </ul>
                                </td>
                              </tr>
                              <!-- .nk-tb-item -->
                              <tr class="nk-tb-item">
                                <td class="nk-tb-col nk-tb-col-check">
                                  <div
                                    class="custom-control custom-control-sm custom-checkbox notext"
                                  >
                                    <input
                                      type="checkbox"
                                      class="custom-control-input"
                                      id="pid-09"
                                    />
                                    <label
                                      class="custom-control-label"
                                      for="pid-09"
                                    ></label>
                                  </div>
                                </td>
                                <td class="nk-tb-col">
                                  <a href="#" class="project-title">
                                    <div class="user-avatar sq bg-warning">
                                      <span>UD</span>
                                    </div>
                                    <div class="project-info">
                                      <h6 class="title">UI/UX Design</h6>
                                    </div>
                                  </a>
                                </td>
                                <td class="nk-tb-col tb-col-lg">
                                  <span>Graphics Design</span>
                                </td>
                                <td class="nk-tb-col tb-col-lg">
                                  <span>Lara Watson</span>
                                </td>
                                <td class="nk-tb-col tb-col-lg">
                                  <span>Total lesson: 22</span>
                                </td>
                                <td class="nk-tb-col tb-col-xxl">
                                  <span>Total enrolment: 17</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                  <span class="badge badge-dim bg-success"
                                    >Active</span
                                  >
                                </td>
                                <td class="nk-tb-col tb-col-mb">
                                  <span>$20</span>
                                </td>
                                <td class="nk-tb-col tb-col-mb">
                                  <span>15.4.2021</span>
                                </td>
                                <td class="nk-tb-col nk-tb-col-tools">
                                  <ul class="nk-tb-actions gx-1">
                                    <li>
                                      <div class="drodown">
                                        <a
                                          href="#"
                                          class="dropdown-toggle btn btn-sm btn-icon btn-trigger"
                                          data-bs-toggle="dropdown"
                                          ><em class="icon ni ni-more-h"></em
                                        ></a>
                                        <div
                                          class="dropdown-menu dropdown-menu-end"
                                        >
                                          <ul class="link-list-opt no-bdr">
                                            <li>
                                              <a
                                                data-bs-toggle="modal"
                                                href="#modalEdit"
                                                ><em
                                                  class="icon ni ni-edit"
                                                ></em
                                                ><span>Edit Course</span></a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                data-bs-toggle="modal"
                                                href="#modalDelete"
                                                ><em
                                                  class="icon ni ni-delete"
                                                ></em
                                                ><span>Delete Course</span></a
                                              >
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </li>
                                  </ul>
                                </td>
                              </tr>
                              <!-- .nk-tb-item -->
                              <tr class="nk-tb-item">
                                <td class="nk-tb-col nk-tb-col-check">
                                  <div
                                    class="custom-control custom-control-sm custom-checkbox notext"
                                  >
                                    <input
                                      type="checkbox"
                                      class="custom-control-input"
                                      id="pid-10"
                                    />
                                    <label
                                      class="custom-control-label"
                                      for="pid-10"
                                    ></label>
                                  </div>
                                </td>
                                <td class="nk-tb-col">
                                  <a href="#" class="project-title">
                                    <div class="user-avatar sq bg-purple">
                                      <span>WT</span>
                                    </div>
                                    <div class="project-info">
                                      <h6 class="title">
                                        WordPress Theme Development
                                      </h6>
                                    </div>
                                  </a>
                                </td>
                                <td class="nk-tb-col tb-col-lg">
                                  <span>Web Development</span>
                                </td>
                                <td class="nk-tb-col tb-col-lg">
                                  <span>Mark Smith</span>
                                </td>
                                <td class="nk-tb-col tb-col-lg">
                                  <span>Total lesson: 18</span>
                                </td>
                                <td class="nk-tb-col tb-col-xxl">
                                  <span>Total enrolment: 6</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                  <span class="badge badge-dim bg-success"
                                    >Active</span
                                  >
                                </td>
                                <td class="nk-tb-col tb-col-mb">
                                  <span>$50</span>
                                </td>
                                <td class="nk-tb-col tb-col-mb">
                                  <span>20.4.2021</span>
                                </td>
                                <td class="nk-tb-col nk-tb-col-tools">
                                  <ul class="nk-tb-actions gx-1">
                                    <li>
                                      <div class="drodown">
                                        <a
                                          href="#"
                                          class="dropdown-toggle btn btn-sm btn-icon btn-trigger"
                                          data-bs-toggle="dropdown"
                                          ><em class="icon ni ni-more-h"></em
                                        ></a>
                                        <div
                                          class="dropdown-menu dropdown-menu-end"
                                        >
                                          <ul class="link-list-opt no-bdr">
                                            <li>
                                              <a
                                                data-bs-toggle="modal"
                                                href="#modalEdit"
                                                ><em
                                                  class="icon ni ni-edit"
                                                ></em
                                                ><span>Edit Course</span></a
                                              >
                                            </li>
                                            <li>
                                              <a
                                                data-bs-toggle="modal"
                                                href="#modalDelete"
                                                ><em
                                                  class="icon ni ni-delete"
                                                ></em
                                                ><span>Delete Course</span></a
                                              >
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </li>
                                  </ul>
                                </td>
                              </tr>
                              <!-- .nk-tb-item -->
                            </tbody>
                          </table>
                          <!-- .nk-tb-list -->
                        </div>
                        <div class="card-inner">
                          <div class="nk-block-between-md g-3">
                            <div class="g">
                              <ul
                                class="pagination justify-content-center justify-content-md-start"
                              >
                                <li class="page-item">
                                  <a class="page-link" href="#">Prev</a>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                  <span class="page-link"
                                    ><em class="icon ni ni-more-h"></em
                                  ></span>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="#">6</a>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="#">7</a>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="#">Next</a>
                                </li>
                              </ul>
                              <!-- .pagination -->
                            </div>
                            <div class="g">
                              <div
                                class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3"
                              >
                                <div>Page</div>
                                <div>
                                  <select
                                    class="form-select js-select2"
                                    data-search="on"
                                    data-dropdown="xs center"
                                  >
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
                            </div>
                            <!-- .pagination-goto -->
                          </div>
                          <!-- .nk-block-between -->
                        </div>
                        <!-- .card-inner -->
                      </div>
                    </div>
                    <!-- .card -->
                  </div>
                  <!-- .nk-block -->
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
                      <a
                        href="#"
                        class="dropdown-toggle dropdown-indicator has-indicator nav-link text-base"
                        data-bs-toggle="dropdown"
                        data-offset="0,10"
                        ><span>English</span></a
                      >
                      <div
                        class="dropdown-menu dropdown-menu-sm dropdown-menu-end"
                      >
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
                      <a data-bs-toggle="modal" href="#region" class="nav-link"
                        ><em class="icon ni ni-globe"></em
                        ><span class="ms-1">Select Region</span></a
                      >
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
          <a href="#" class="close" data-bs-dismiss="modal"
            ><em class="icon ni ni-cross-sm"></em
          ></a>
          <div class="modal-body modal-body-md">
            <h5 class="title mb-4">Select Your Country</h5>
            <div class="nk-country-region">
              <ul class="country-list text-center gy-2">
                <li>
                  <a href="#" class="country-item">
                    <img
                      src="./images/flags/arg.png"
                      alt=""
                      class="country-flag"
                    />
                    <span class="country-name">Argentina</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="country-item">
                    <img
                      src="./images/flags/aus.png"
                      alt=""
                      class="country-flag"
                    />
                    <span class="country-name">Australia</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="country-item">
                    <img
                      src="./images/flags/bangladesh.png"
                      alt=""
                      class="country-flag"
                    />
                    <span class="country-name">Bangladesh</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="country-item">
                    <img
                      src="./images/flags/canada.png"
                      alt=""
                      class="country-flag"
                    />
                    <span class="country-name"
                      >Canada <small>(English)</small></span
                    >
                  </a>
                </li>
                <li>
                  <a href="#" class="country-item">
                    <img
                      src="./images/flags/china.png"
                      alt=""
                      class="country-flag"
                    />
                    <span class="country-name">Centrafricaine</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="country-item">
                    <img
                      src="./images/flags/china.png"
                      alt=""
                      class="country-flag"
                    />
                    <span class="country-name">China</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="country-item">
                    <img
                      src="./images/flags/french.png"
                      alt=""
                      class="country-flag"
                    />
                    <span class="country-name">France</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="country-item">
                    <img
                      src="./images/flags/germany.png"
                      alt=""
                      class="country-flag"
                    />
                    <span class="country-name">Germany</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="country-item">
                    <img
                      src="./images/flags/iran.png"
                      alt=""
                      class="country-flag"
                    />
                    <span class="country-name">Iran</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="country-item">
                    <img
                      src="./images/flags/italy.png"
                      alt=""
                      class="country-flag"
                    />
                    <span class="country-name">Italy</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="country-item">
                    <img
                      src="./images/flags/mexico.png"
                      alt=""
                      class="country-flag"
                    />
                    <span class="country-name">México</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="country-item">
                    <img
                      src="./images/flags/philipine.png"
                      alt=""
                      class="country-flag"
                    />
                    <span class="country-name">Philippines</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="country-item">
                    <img
                      src="./images/flags/portugal.png"
                      alt=""
                      class="country-flag"
                    />
                    <span class="country-name">Portugal</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="country-item">
                    <img
                      src="./images/flags/s-africa.png"
                      alt=""
                      class="country-flag"
                    />
                    <span class="country-name">South Africa</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="country-item">
                    <img
                      src="./images/flags/spanish.png"
                      alt=""
                      class="country-flag"
                    />
                    <span class="country-name">Spain</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="country-item">
                    <img
                      src="./images/flags/switzerland.png"
                      alt=""
                      class="country-flag"
                    />
                    <span class="country-name">Switzerland</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="country-item">
                    <img
                      src="./images/flags/uk.png"
                      alt=""
                      class="country-flag"
                    />
                    <span class="country-name">United Kingdom</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="country-item">
                    <img
                      src="./images/flags/english.png"
                      alt=""
                      class="country-flag"
                    />
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
    <div class="modal fade" id="modalCreate">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
          <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
            <em class="icon ni ni-cross-sm"></em
          ></a>
          <div class="modal-body modal-body-md">
            <h5 class="modal-title">Create Course</h5>
            <form action="#" class="pt-2">
              <div class="row gy-3 gx-gs">
                <div class="col-12">
                  <div class="form-group">
                    <label class="form-label" for="course-name"
                      >Course Name</label
                    >
                    <div class="form-control-wrap">
                      <input
                        type="text"
                        class="form-control"
                        id="course-name"
                        placeholder="e.g. Responsive Design"
                      />
                    </div>
                  </div>
                  <!-- .form-group -->
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label class="form-label" for="course-category"
                      >Course category</label
                    >
                    <div class="form-control-wrap">
                      <select
                        class="form-select js-select2"
                        id="course-category"
                      >
                        <option>Web Development</option>
                        <option>Mobile Application</option>
                        <option>Graphics Design</option>
                      </select>
                    </div>
                  </div>
                  <!-- .form-group -->
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label class="form-label" for="dificulties"
                      >Course Dificulties</label
                    >
                    <select class="form-select js-select2" id="dificulties">
                      <option>Beginners</option>
                      <option>Intermediate</option>
                      <option>Advanced</option>
                    </select>
                  </div>
                  <!-- .form-group -->
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label class="form-label" for="course-lesson"
                      >Total Lesson</label
                    >
                    <div class="form-control-wrap">
                      <input
                        type="number"
                        class="form-control"
                        id="course-lesson"
                        placeholder="40"
                      />
                    </div>
                  </div>
                  <!-- .form-group -->
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label class="form-label" for="thumb"
                      >Course thumbnail</label
                    >
                    <div class="form-control-wrap">
                      <div class="form-file">
                        <input
                          type="file"
                          multiple
                          class="form-file-input"
                          id="customFile-create"
                        />
                        <label class="form-file-label" for="customFile-create"
                          >Choose file</label
                        >
                      </div>
                    </div>
                  </div>
                  <!-- .form-group -->
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label class="form-label" for="thumb"
                      >Course Description</label
                    >
                    <div class="form-control-wrap">
                      <div class="quill-minimal"></div>
                    </div>
                  </div>
                  <!-- .form-group -->
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label class="form-label" for="thumb">Status</label>
                    <div class="form-control-wrap">
                      <ul
                        class="custom-control-group g-3 align-center flex-wrap"
                      >
                        <li>
                          <div class="custom-control custom-radio">
                            <input
                              type="radio"
                              class="custom-control-input"
                              checked
                              name="reg-public"
                              id="reg-enable"
                            />
                            <label class="custom-control-label" for="reg-enable"
                              >Active</label
                            >
                          </div>
                        </li>
                        <li>
                          <div class="custom-control custom-radio">
                            <input
                              type="radio"
                              class="custom-control-input"
                              name="reg-public"
                              id="reg-disable"
                            />
                            <label
                              class="custom-control-label"
                              for="reg-disable"
                              >Pending</label
                            >
                          </div>
                        </li>
                        <li>
                          <div class="custom-control custom-radio">
                            <input
                              type="radio"
                              class="custom-control-input"
                              name="reg-public"
                              id="reg-request"
                            />
                            <label
                              class="custom-control-label"
                              for="reg-request"
                              >Rejected</label
                            >
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!-- .form-group -->
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label class="form-label" for="course-price"
                      >Course Price</label
                    >
                    <div class="form-control-wrap">
                      <input
                        type="number"
                        class="form-control"
                        id="course-price"
                        placeholder="30"
                      />
                    </div>
                  </div>
                  <!-- .form-group -->
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label class="form-label">Deadline</label>
                    <div class="form-control-wrap">
                      <div class="form-icon form-icon-left">
                        <em class="icon ni ni-calendar-alt"></em>
                      </div>
                      <input
                        type="text"
                        class="form-control date-picker"
                        placeholder="mm/dd/yyyy"
                      />
                    </div>
                  </div>
                  <!-- .form-group -->
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <button
                      data-bs-dismiss="modal"
                      type="submit"
                      class="btn btn-primary"
                    >
                      Save Informations
                    </button>
                  </div>
                  <!-- .form-group -->
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
          <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
            <em class="icon ni ni-cross-sm"></em
          ></a>
          <div class="modal-body modal-body-md">
            <h5 class="title">Edit Course</h5>
            <form action="#" class="pt-2">
              <div class="row gy-3 gx-gs">
                <div class="col-12">
                  <div class="form-group">
                    <label class="form-label" for="edit-course-name"
                      >Course Name</label
                    >
                    <div class="form-control-wrap">
                      <input
                        type="text"
                        class="form-control"
                        id="edit-course-name"
                        value="Responsive Design"
                      />
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label class="form-label" for="edit-category"
                      >Course category</label
                    >
                    <select class="form-select js-select2" id="edit-category">
                      <option>Web Development</option>
                      <option>Mobile Application</option>
                      <option>Graphics Design</option>
                    </select>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label class="form-label" for="edit-dificulties"
                      >Course Dificulties</label
                    >
                    <select
                      class="form-select js-select2"
                      id="edit-dificulties"
                    >
                      <option>Beginners</option>
                      <option>Intermediate</option>
                      <option>Advanced</option>
                    </select>
                  </div>
                  <!-- .form-group -->
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label class="form-label" for="edit-lesson"
                      >Total Lesson</label
                    >
                    <div class="form-control-wrap">
                      <input
                        type="number"
                        class="form-control"
                        id="edit-lesson"
                        value="40"
                      />
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label class="form-label" for="thumb"
                      >Course thumbnail</label
                    >
                    <div class="form-control-wrap">
                      <div class="form-file">
                        <input
                          type="file"
                          multiple
                          class="form-file-input"
                          id="edit-customFile"
                        />
                        <label class="form-file-label" for="edit-customFile"
                          >Choose file</label
                        >
                      </div>
                    </div>
                  </div>
                  <!-- .form-group -->
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label class="form-label" for="edit-description"
                      >Course Description</label
                    >
                    <div class="form-control-wrap">
                      <div class="quill-minimal"></div>
                    </div>
                  </div>
                  <!-- .form-group -->
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label class="form-label" for="status">Status</label>
                    <div class="form-control-wrap">
                      <ul
                        class="custom-control-group g-3 align-center flex-wrap"
                      >
                        <li>
                          <div class="custom-control custom-radio">
                            <input
                              type="radio"
                              class="custom-control-input"
                              checked
                              name="reg-public"
                              id="edit-course-active"
                            />
                            <label
                              class="custom-control-label"
                              for="edit-course-active"
                              >Active</label
                            >
                          </div>
                        </li>
                        <li>
                          <div class="custom-control custom-radio">
                            <input
                              type="radio"
                              class="custom-control-input"
                              name="reg-public"
                              id="edit-course-pending"
                            />
                            <label
                              class="custom-control-label"
                              for="edit-course-pending"
                              >Pending</label
                            >
                          </div>
                        </li>
                        <li>
                          <div class="custom-control custom-radio">
                            <input
                              type="radio"
                              class="custom-control-input"
                              name="reg-public"
                              id="edit-course-reject"
                            />
                            <label
                              class="custom-control-label"
                              for="edit-course-reject"
                              >Rejected</label
                            >
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!-- .form-group -->
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label class="form-label" for="course-price-edit"
                      >Course Price</label
                    >
                    <div class="form-control-wrap">
                      <input
                        type="number"
                        class="form-control"
                        id="course-price-edit"
                        value="30"
                      />
                    </div>
                  </div>
                  <!-- .form-group -->
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label class="form-label">Deadline</label>
                    <div class="form-control-wrap">
                      <div class="form-icon form-icon-left">
                        <em class="icon ni ni-calendar-alt"></em>
                      </div>
                      <input
                        type="text"
                        class="form-control date-picker"
                        placeholder="mm/dd/yyyy"
                      />
                    </div>
                  </div>
                  <!-- .form-group -->
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <button
                      data-bs-dismiss="modal"
                      type="submit"
                      class="btn btn-primary"
                    >
                      Save Informations
                    </button>
                  </div>
                  <!-- .form-group -->
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
        <div class="modal-content">
          <a href="#" class="close" data-bs-dismiss="modal"
            ><em class="icon ni ni-cross-sm"></em
          ></a>
          <div class="modal-body modal-body-lg text-center">
            <div class="nk-modal py-4">
              <em
                class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-cross bg-danger"
              ></em>
              <h4 class="nk-modal-title">Are You Sure ?</h4>
              <div class="nk-modal-text mt-n2">
                <p class="text-soft">
                  This event data will be removed permanently.
                </p>
              </div>
              <ul class="d-flex justify-content-center gx-4 mt-4">
                <li>
                  <button
                    data-bs-dismiss="modal"
                    id="deleteEvent"
                    class="btn btn-success"
                  >
                    Yes, Delete it
                  </button>
                </li>
                <li>
                  <button
                    data-bs-dismiss="modal"
                    data-bs-toggle="modal"
                    data-bs-target="#editEventPopup"
                    class="btn btn-danger btn-dim"
                  >
                    Cancel
                  </button>
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
    <link rel="stylesheet" href="./assets/css/editors/quill.css?ver=3.2.3" />
    <script src="./assets/js/libs/editors/quill.js?ver=3.2.3"></script>
    <script src="./assets/js/editors.js?ver=3.2.3"></script>
  </body>
</html>
