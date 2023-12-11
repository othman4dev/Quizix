<?php 
  session_start();
  if (!isset($_SESSION['userId']) || !isset($_SESSION['role'])) {
    header("Location: ../../../../../auth/src/html/pages/auths/auth-login.php");
  }
  include "connection.php";
  $role = $_SESSION['role'];
  if ($_SESSION['role'] == "user") {
    $role = "Student";
  }
  $userId = $_SESSION['userId'];
  $email = $_SESSION["email"];
  $fullname = $_SESSION["fullname"];
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
    <title>Category | LMS | DashLite Admin Template</title>
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
                  <li class="nk-menu-item">
                    <a href="html/lms/category.php" class="nk-menu-link">
                      <span class="nk-menu-icon"
                        ><em class="icon ni ni-book-fill"></em
                      ></span>
                      <span class="nk-menu-text">Courses</span>
                    </a>
                  </li>
                  <li class="nk-menu-item">
                    <a href="html/lms/quizzes.php" class="nk-menu-link">
                      <span class="nk-menu-icon"
                        ><em class="icon ni ni-file-docs"></em
                      ></span>
                      <span class="nk-menu-text">Quizzes</span>
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
                  <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                      <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Courses</h3>
                        <div class="nk-block-des text-soft">
                          <p>You have total 
                            <?php 
                              $sql = "SELECT * FROM cours";
                              $result = mysqli_query($conn, $sql);
                              $result = $conn->query($sql);
                              $rowcount=mysqli_num_rows($result);
                              echo $rowcount;
                            ?>
                          Courses</p>
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
                          ></div>
                        </div>
                        <!-- .toggle-wrap -->
                      </div>
                      <!-- .nk-block-head-content -->
                    </div>
                    <!-- .nk-block-between -->
                  </div>
                  <!-- .nk-block-head -->
                  <div class="nk-block">
                    <div class="row g-gs">
                      <?php 
                        include "../../simplehtmldom_1_9_1/simple_html_dom.php";
                        
                        $sql = "SELECT * FROM cours";
                        $result = mysqli_query($conn, $sql);
                        $result = $conn->query($sql);
                        while ($row = $result->fetch_assoc()) {
                          $description = $row['courDescription'];
                          $dom = new simple_html_dom();
                          $dom->load($description);
                          $heading = $dom->find('h1', 0)->innertext;
                          $dom->clear();
                            echo "
                            <div class='col-sm-6 col-lg-4 col-xxl-3'>
                            <div class='card h-100'>
                              <div class='card-inner'>
                                <div
                                  class='d-flex justify-content-between align-items-start mb-3'
                                >
                                  <a
                                    href='html/lms/passcour.php?courId=".$row["courId"]."'
                                    class='d-flex align-items-center'
                                  >
                                    <div class='user-avatar sq bg-purple'>
                                      <span>" .substr($row["courName"], 0, 2). "</span>
                                    </div>
                                    <div class='ms-3'>
                                      <h6 class='title mb-1'>".$row["courName"]."</h6>
                                      <span class='sub-text'>4 SubCategories</span>
                                    </div>
                                  </a>
                                </div>
                                <p>
                                  ".$heading."
                                </p>
                                <ul class='d-flex flex-wrap g-1'>
                                  <li>
                                    <span class='badge badge-dim bg-primary'
                                      >".$row["category"]."</span
                                    >
                                  </li>
                                  <li>
                                    <span class='badge badge-dim bg-danger'
                                      >".$row["category"]."</span
                                    >
                                  </li>
                                  <li>
                                    <span class='badge badge-dim bg-info'
                                      >".$row["category"]."</span
                                    >
                                  </li>
                                  <li>
                                    <span class='badge badge-dim bg-warning'
                                      >".$row["category"]."</span
                                    >
                                  </li>
                                  <li>
                                    <span class='badge badge-dim bg-secondary'
                                      >".$row["category"]."</span
                                    >
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                            ";
                        }
                      ?>
                    </div>
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
    <!-- @@ Category Modal @e -->
    <div class="modal fade" id="modalCreate">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
            <em class="icon ni ni-cross-sm"></em
          ></a>
          <div class="modal-body modal-body-md">
            <h5 class="title">Add Category</h5>
            <form action="#" class="pt-2">
              <div class="form-group">
                <label class="form-label" for="full-name">Category Name</label>
                <div class="form-control-wrap">
                  <input
                    type="text"
                    class="form-control"
                    id="full-name"
                    placeholder="e.g. Web Development"
                  />
                </div>
              </div>
              <div class="form-group">
                <label class="form-label" for="description">Description</label>
                <div class="form-control-wrap">
                  <textarea
                    class="form-control"
                    name="description"
                    id="description"
                    placeholder="Write Category Description"
                  ></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="form-label" for="thumb">Category thumbnail</label>
                <div class="form-control-wrap">
                  <div class="form-file">
                    <input
                      type="file"
                      multiple
                      class="form-file-input"
                      id="customFile"
                    />
                    <label class="form-file-label" for="thumb"
                      >Choose file</label
                    >
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="form-label">Subcategory</label>
                <div class="d-flex gx-3 mb-3">
                  <div class="g w-100">
                    <div class="form-control-wrap">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="e.g. Web Development"
                      />
                    </div>
                  </div>
                  <div class="g">
                    <button class="btn btn-icon btn-outline-light">
                      <em class="icon ni ni-plus"></em>
                    </button>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <button
                  data-bs-dismiss="modal"
                  type="submit"
                  class="btn btn-primary"
                >
                  Save Informations
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- .Edit Modal-Content -->
    <div class="modal fade" id="modalEdit">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
            <em class="icon ni ni-cross-sm"></em
          ></a>
          <div class="modal-body modal-body-md">
            <h5 class="title">Edit Category</h5>
            <form action="#" class="pt-2">
              <div class="form-group">
                <label class="form-label" for="edit-full-name"
                  >Category Name</label
                >
                <div class="form-control-wrap">
                  <input
                    type="text"
                    class="form-control"
                    id="edit-full-name"
                    value="Web Development"
                  />
                </div>
              </div>
              <div class="form-group">
                <label class="form-label" for="edit-description"
                  >Description</label
                >
                <div class="form-control-wrap">
                  <textarea
                    class="form-control"
                    name="description"
                    id="edit-description"
                    value="Website Design & Develop the website with web applications"
                  ></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="form-label" for="category-thumb"
                  >Category thumbnail</label
                >
                <div class="form-control-wrap">
                  <div class="form-file">
                    <input
                      type="file"
                      multiple
                      class="form-file-input"
                      id="edit-customFile"
                    />
                    <label class="form-file-label" for="category-thumb"
                      >Choose file</label
                    >
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="form-label">Subcategory</label>
                <div class="d-flex gx-3 mb-3">
                  <div class="g w-100">
                    <div class="form-control-wrap">
                      <input type="text" class="form-control" value="Figma" />
                    </div>
                  </div>
                  <div class="g">
                    <button class="btn btn-icon btn-outline-light">
                      <em class="icon ni ni-cross"></em>
                    </button>
                  </div>
                </div>
                <div class="d-flex gx-3 mb-3">
                  <div class="g w-100">
                    <div class="form-control-wrap">
                      <input
                        type="text"
                        class="form-control"
                        value="Responsive Design"
                      />
                    </div>
                  </div>
                  <div class="g">
                    <button class="btn btn-icon btn-outline-light">
                      <em class="icon ni ni-cross"></em>
                    </button>
                  </div>
                </div>
                <div class="d-flex gx-3 mb-3">
                  <div class="g w-100">
                    <div class="form-control-wrap">
                      <input
                        type="text"
                        class="form-control"
                        value="Adobe Photoshop"
                      />
                    </div>
                  </div>
                  <div class="g">
                    <button class="btn btn-icon btn-outline-light">
                      <em class="icon ni ni-cross"></em>
                    </button>
                  </div>
                </div>
                <div class="d-flex gx-3 mb-3">
                  <div class="g w-100">
                    <div class="form-control-wrap">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="e.g. Web Development"
                      />
                    </div>
                  </div>
                  <div class="g">
                    <button class="btn btn-icon btn-outline-light">
                      <em class="icon ni ni-plus"></em>
                    </button>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <button
                  data-bs-dismiss="modal"
                  type="submit"
                  class="btn btn-primary"
                >
                  Save Informations
                </button>
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
  </body>
</html>
