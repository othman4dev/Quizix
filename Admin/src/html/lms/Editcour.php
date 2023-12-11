<?php 
  session_start();
  if (!isset($_SESSION['adminId']) || !isset($_SESSION['role'])) {
    header("Location: ../../../../../auth/src/html/pages/auths/auth-login.php");
  }
  include "connection.php";
  $role = $_SESSION['role'];
  if ($_SESSION['role'] == "Student") {
    //header("Location: ../../../../../auth/src/html/pages/auths/auth-login.php");
  }
  $adminId = $_SESSION['adminId'];
  $email = $_SESSION["email"];
  $sqli = "SELECT * FROM administrateur WHERE adminId='$adminId'";
  $result = mysqli_query($conn, $sqli);
  $row = mysqli_fetch_assoc($result);
  $fullname = $row['adminName'];
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
    <title>Regular Page v1 | DashLite Admin Template</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="./assets/css/dashlite.css?ver=3.2.3" />
    <link rel="stylesheet" href="./assets/css/added.css" />
    <link
      id="skin-default"
      rel="stylesheet"
      href="./assets/css/theme.css?ver=3.2.3"
    />
    
  </head>

  <body class="nk-body bg-lighter npc-default has-sidebar">
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
              <a href="html/index.php" class="logo-link nk-sidebar-logo">
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
                      <a href="html/lms/index.php" class="nk-menu-link">
                          <span class="nk-menu-icon"><em class="icon ni ni-growth-fill"></em></span>
                          <span class="nk-menu-text">Statistics</span>
                      </a>
                  </li><!-- .nk-menu-item -->
                  <li class="nk-menu-item">
                      <a href="html/lms/courses.php" class="nk-menu-link">
                          <span class="nk-menu-icon"><em class="icon ni ni-book-fill"></em></span>
                          <span class="nk-menu-text">Courses</span>
                      </a>
                  </li><!-- .nk-menu-item -->
                  <li class="nk-menu-item">
                      <a href="html/lms/category.html" class="nk-menu-link">
                          <span class="nk-menu-icon"><em class="icon ni ni-file-docs"></em></span>
                          <span class="nk-menu-text">Quizzes</span>
                      </a>
                  </li>
                  <li class="nk-menu-item">
                      <a href="html/lms/instructor-list.php" class="nk-menu-link">
                          <span class="nk-menu-icon"><em class="icon ni ni-user-fill"></em></span>
                          <span class="nk-menu-text">Instructors</span>
                      </a>
                  </li><!-- .nk-menu-item -->
                  <li class="nk-menu-item">
                      <a href="html/lms/students.html" class="nk-menu-link">
                          <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                          <span class="nk-menu-text">Students</span>
                      </a>
                  </li>
                  <li class="nk-menu-item">
                      <a href="html/lms/admin-profile.php" class="nk-menu-link">
                        <span class="nk-menu-icon"
                          ><em class="icon ni ni-account-setting-fill"></em
                        ></span>
                        <span class="nk-menu-text">Profile</span>
                      </a>
                    </li>
              </ul>
                <!-- .nk-menu -->
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
                  <a href="html/index.php" class="logo-link">
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
                              <a class="chat-link" href="html/apps-chats.html">
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
                              <a class="chat-link" href="html/apps-chats.html">
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
                              <a class="chat-link" href="html/apps-chats.html">
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
                              <a class="chat-link" href="html/apps-chats.html">
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
                              <a class="chat-link" href="html/apps-chats.html">
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
                              <a class="chat-link" href="html/apps-chats.html">
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
                          <a href="html/apps-chats.html">View All</a>
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
                              <?php echo $role ?>
                            </div>
                            <div class="user-name dropdown-indicator">
                              <?php echo $fullname ?>
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
                                <span><?php echo substr($fullname, 0, 2); ?></span>
                            </div>
                            <div class="user-info">
                              <span class="lead-text"><?php echo $fullname ?></span>
                              <span class="sub-text"
                                ><?php echo $email ?></span
                              >
                            </div>
                          </div>
                        </div>
                        <div class="dropdown-inner">
                          <ul class="link-list">
                            <li>
                              <a href="html/lms/admin-profile.php"
                                ><em class="icon ni ni-user-alt"></em
                                ><span>View Profile</span></a
                              >
                            </li>
                            <li>
                              <a href="html/lms/admin-profile.php"
                                ><em class="icon ni ni-setting-alt"></em
                                ><span>Account Setting</span></a
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
                  <div class="content-page wide-md m-auto">
                    <div class="nk-block-head nk-block-head-lg wide-xs mx-auto">
                      <div class="nk-block-head-content text-center">
                        <h2 class="nk-block-title fw-normal">Add A New Course</h2>
                        <div class="nk-block-des">
                          <p class="lead">
                            Welcome Admin to the course creation page. Here you can create a new course and add content to it.
                          </p>
                        </div>
                      </div>
                    </div>
                    <!-- .nk-block-head -->
<?php

    include('../../simplehtmldom_1_9_1/simple_html_dom.php');
    $conn = new mysqli("localhost","root","","quizex");
    if(isset($_GET['id'])){
      $id=$_GET['id'];
      $sql="SELECT * FROM cours WHERE courId='$id'";
      $query=mysqli_query($conn,$sql);
      $row=mysqli_fetch_assoc($query);
      $courName = $row['courName'];
      $category = $row['category'];
      $description = $row['courDescription'];
      $dom = new simple_html_dom();
      $dom->load($description);
        $heading = $dom->find('h1', 0)->innertext;
        $subtitle = $dom->find('h3', 0)->innertext;
        $paragraph= $dom->find('p', 0)->innertext;

        // Clean up resources
        $dom->clear();
    }
  ?>
                    <div class="nk-block">
                      <div class="card">
                        <form action="html/lms/add_course.php?id=<?php echo $id?>" method="post" id="form-add-course" class="course-form">
                            <label>Course name :<input type="text" class="paragraph" name="courName" value="<?php if(isset($_GET['id'])){
                        echo $courName;
                      } ?>" required  ></label>
                            <label>Course category : <input type="text" name="category" id="" class="paragraph" value="<?php if(isset($_GET['id'])){
                        echo $category;
                      } ?>" required ></label>
                            <span>Part 1</span>
                            <input type="text" name="courDescription" class="heading" placeholder="Add Heading" autocomplete="off" spellcheck="false" value="<?php if(isset($_GET['id'])){
                        echo $heading;
                      } ?>" required >
                            <input type="text" name="courDescription" id="" class="sub-title" placeholder="Subtitle" autocomplete="off" spellcheck="false" value="<?php if(isset($_GET['id'])){
                        echo $subtitle;
                      } ?>" required >
                            <textarea name="courDescription" class="paragraph" rows="7" placeholder="Add a paragraph" autocomplete="off" spellcheck="false"><?php if(isset($_GET['id'])){
                        echo $paragraph;
                      } ?></textarea>
                            
                            <div class="quiz-pass" id="bottom">
                              <input class="submit-it" type="submit" value="Submit" name="submitupdate">
                            </div>
                        </form>
                        
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
              </div>
            </div>
          </div>
          <!-- footer @e -->
        </div>
        <!-- wrap @e -->
      </div>
      <!-- main @e -->
    </div>
    <!-- JavaScript -->
    <script src="./js/added.js"></script>

    <script src="./assets/js/bundle.js?ver=3.2.3"></script>
    <script src="./assets/js/scripts.js?ver=3.2.3"></script>
  </body>
</html>