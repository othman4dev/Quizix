<?php include "./inc/connection.php" ?>
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
    <title>quizex</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="./assets/css/dashlite.css?ver=3.2.3" />
    <link rel="stylesheet" href="./assets/css/added.css" />
    <link id="skin-default" rel="stylesheet" href="./assets/css/theme.css?ver=3.2.3" />
    <link rel="stylesheet" href="./assets/css/editors/quill.css?ver=3.2.3" />
</head>

<body class="nk-body bg-lighter npc-general has-sidebar">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main">
            <!-- sidebar @s -->
            <div class="nk-sidebar nk-sidebar-fixed is-light" data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-sidebar-brand">
                        <a href="./index.php" class="logo-link nk-sidebar-logo">
                            <img class="logo-light logo-img" src="./assets/images/logo.png" srcset="./assets/images/logo2x.png 2x" alt="logo" />
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
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                            </div>
                            <div class="nk-header-brand d-xl-none">
                                <a href="./index.php" class="logo-link">
                                    <img class="logo-light logo-img" src="./assets/images/logo.png" srcset="./assets/images/logo2x.png 2x" alt="logo" />
                                    <img class="logo-dark logo-img" src="./assets/images/logo-dark.png" srcset="./assets/images/logo-dark2x.png 2x" alt="logo-dark" />
                                </a>
                            </div>
                            <!-- .nk-header-brand -->
                            <div class="nk-header-search ms-3 ms-xl-0"></div>
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
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle me-n1" data-bs-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt"></em>
                                                </div>
                                                <div class="user-info d-none d-xl-block">
                                                    <div class="user-status user-status-active">
                                                        Student
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
                                                        <a href="./admin-profile.php"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="./admin-profile.php"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a>
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
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Quiz Name</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>Cours name | Category name | Instructor</p>
                                            </div>
                                        </div>
                                        <!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu"></div>
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
                                                <form class="quiz" method="post" action="./controllers/addquiz.php">
                                                    <div class="row-table head">
                                                        <div class="question-num">N°</div>
                                                        <div class="question">Questions</div>
                                                        <input type="text" style="display:none" value="1" name="quizId">
                                                    </div>

                                                    <div class="row-table">
                                                        <div class="question">
                                                            <div class="question-num">1</div>
                                                            <div>Question :</div>

                                                            <label>
                                                                <input class="form-control" type="text" name="question1" placeholder="Add Question" required />
                                                            </label>
                                                        </div>
                                                        <div class="AllAnswers">
                                                            <div class="answers">
                                                                <input type="radio" name="status-1[]" value="1" />
                                                                <label for="customInput2">
                                                                    <input class="form-control" type="text" name="answer1-1" placeholder="Your custom answer" required />
                                                                </label>
                                                            </div>

                                                            <div class="answers">
                                                                <input type="radio" name="status-1[]" value="2" />
                                                                <label for="customInput2">
                                                                    <input class="form-control" type="text" name="answer1-2" placeholder="Your custom answer" required />
                                                                </label>
                                                            </div>
                                                            <div class="answers">
                                                                <input type="radio" name="status-1[]" value="3" />
                                                                <label for="customInput2">
                                                                    <input class="form-control" type="text" name="answer1-3" placeholder="Your custom answer" required />
                                                                </label>
                                                            </div>
                                                            <div class="answers">
                                                                <input type="radio" name="status-1[]" value="4" required />
                                                                <label for="customInput2">
                                                                    <input class="form-control" type="text" name="answer1-4" placeholder="Your custom answer" required />
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row-table">
                                                        <div class="question">
                                                            <div class="question-num">2</div>
                                                            <div>Question :</div>

                                                            <label for="customInput2">
                                                                <input class="form-control" type="text" name="question2" placeholder="Add Question" />
                                                            </label>
                                                        </div>
                                                        <div class="AllAnswers">
                                                            <div class="answers">
                                                                <input type="radio" name="status-2[]" value="1" required />
                                                                <label for="customInput2">
                                                                    <input class="form-control" type="text" name="answer2-1" placeholder="Your custom answer" required />
                                                                </label>
                                                            </div>

                                                            <div class="answers">
                                                                <input type="radio" name="status-2[]" value="2" />
                                                                <label for="customInput2">
                                                                    <input class="form-control" type="text" name="answer2-2" placeholder="Your custom answer" required />
                                                                </label>
                                                            </div>
                                                            <div class="answers">
                                                                <input type="radio" name="status-2[]" value="3" />
                                                                <label for="customInput2">
                                                                    <input class="form-control" type="text" name="answer2-3" placeholder="Your custom answer" required />
                                                                </label>
                                                            </div>
                                                            <div class="answers">
                                                                <input type="radio" name="status-2[]" value="4" required />
                                                                <label for="customInput2">
                                                                    <input class="form-control" type="text" name="answer2-4" placeholder="Your custom answer" required />
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row-table">
                                                        <div class="question">
                                                            <div class="question-num">3</div>
                                                            <div>Question :</div>

                                                            <label for="customInput2">
                                                                <input class="form-control" type="text" name="question3" placeholder="Add Question" required />
                                                            </label>
                                                        </div>
                                                        <div class="AllAnswers">
                                                            <div class="answers">
                                                                <input type="radio" name="status-3[]" value="1" />
                                                                <label for="customInput2">
                                                                    <input class="form-control" type="text" name="answer3-1" placeholder="Your custom answer" required />
                                                                </label>
                                                            </div>

                                                            <div class="answers">
                                                                <input type="radio" name="status-3[]" value="2" />
                                                                <label for="customInput2">
                                                                    <input class="form-control" type="text" name="answer3-2" placeholder="Your custom answer" required />
                                                                </label>
                                                            </div>
                                                            <div class="answers">
                                                                <input type="radio" name="status-3[]" value="3" />
                                                                <label for="customInput2">
                                                                    <input class="form-control" type="text" name="answer3-3" placeholder="Your custom answer" required />
                                                                </label>
                                                            </div>
                                                            <div class="answers">
                                                                <input type="radio" name="status-3[]" value="4" required />
                                                                <label for="customInput2">
                                                                    <input class="form-control" type="text" name="answer3-4" placeholder="Your custom answer" required />
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row-table">
                                                        <div class="question">
                                                            <div class="question-num">4</div>
                                                            <div>Question :</div>

                                                            <label for="customInput2">
                                                                <input class="form-control" type="text" name="question4" placeholder="Add Question" required />
                                                            </label>
                                                        </div>
                                                        <div class="AllAnswers">
                                                            <div class="answers">
                                                                <input type="radio" name="status-4[]" value="1" />
                                                                <label for="customInput2">
                                                                    <input class="form-control" type="text" name="answer4-1" placeholder="Your custom answer" required />
                                                                </label>
                                                            </div>

                                                            <div class="answers">
                                                                <input type="radio" name="status-4[]" value="2" />
                                                                <label for="customInput2">
                                                                    <input class="form-control" type="text" name="answer4-2" placeholder="Your custom answer" required />
                                                                </label>
                                                            </div>
                                                            <div class="answers">
                                                                <input type="radio" name="status-4[]" value="3" />
                                                                <label for="customInput2">
                                                                    <input class="form-control" type="text" name="answer4-3" placeholder="Your custom answer" required />
                                                                </label>
                                                            </div>
                                                            <div class="answers">
                                                                <input type="radio" name="status-4[]" value="4" required />
                                                                <label for="customInput2">
                                                                    <input class="form-control" type="text" name="answer4-4" placeholder="Your custom answer" required />
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row-table">
                                                        <div class="question">
                                                            <div class="question-num">5</div>
                                                            <div>Question :</div>

                                                            <label for="customInput2">
                                                                <input class="form-control" type="text" name="question5" placeholder="Add Question" required />
                                                            </label>
                                                        </div>
                                                        <div class="AllAnswers">
                                                            <div class="answers">
                                                                <input type="radio" name="status-5[]" value="1" />
                                                                <label for="customInput2">
                                                                    <input class="form-control" type="text" name="answer5-1" placeholder="Your custom answer" required />
                                                                </label>
                                                            </div>

                                                            <div class="answers">
                                                                <input type="radio" name="status-5[]" value="2" />
                                                                <label for="customInput2">
                                                                    <input class="form-control" type="text" name="answer5-2" placeholder="Your custom answer" required />
                                                                </label>
                                                            </div>
                                                            <div class="answers">
                                                                <input type="radio" name="status-5[]" value="3" />
                                                                <label for="customInput2">
                                                                    <input class="form-control" type="text" name="answer5-3" placeholder="Your custom answer" required />
                                                                </label>
                                                            </div>
                                                            <div class="answers">
                                                                <input type="radio" name="status-5[]" value="4" required />
                                                                <label for="customInput2">
                                                                    <input class="form-control" type="text" name="answer5-4" placeholder="Your custom answer" required />
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row-table">
                                                        <div class="question">
                                                            <div class="question-num">6</div>
                                                            <div>Question :</div>

                                                            <label for="customInput2">
                                                                <input class="form-control" type="text" name="question6" placeholder="Add Question" required />
                                                            </label>
                                                        </div>
                                                        <div class="AllAnswers">
                                                            <div class="answers">
                                                                <input type="radio" name="status-6[]" value="1" required />
                                                                <label for="customInput2">
                                                                    <input class="form-control" type="text" name="answer6-1" placeholder="Your custom answer" required />
                                                                </label>
                                                            </div>

                                                            <div class="answers">
                                                                <input type="radio" name="status-6[]" value="2" required />
                                                                <label for="customInput2">
                                                                    <input class="form-control" type="text" name="answer6-2" placeholder="Your custom answer" required />
                                                                </label>
                                                            </div>
                                                            <div class="answers">
                                                                <input type="radio" name="status-6[]" value="3" required />
                                                                <label for="customInput2">
                                                                    <input class="form-control" type="text" name="answer6-3" placeholder="Your custom answer" required />
                                                                </label>
                                                            </div>
                                                            <div class="answers">
                                                                <input type="radio" name="status-6[]" value="4" required />
                                                                <label for="customInput2">
                                                                    <input class="form-control" type="text" name="answer6-4" placeholder="Your custom answer" required />
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row-table">
                                                        <div class="question">
                                                            <div class="question-num">7</div>
                                                            <div>Question :</div>

                                                            <label for="customInput2">
                                                                <input class="form-control" type="text" name="question7" placeholder="Add Question" required />
                                                            </label>
                                                        </div>
                                                        <div class="AllAnswers">
                                                            <div class="answers">
                                                                <input type="radio" name="status-7[]" value="1" required />
                                                                <label for="customInput2">
                                                                    <input class="form-control" type="text" name="answer7-1" placeholder="Your custom answer" required />
                                                                </label>
                                                            </div>

                                                            <div class="answers">
                                                                <input type="radio" name="status-7[]" value="2" required <label for="customInput2">
                                                                <input class="form-control" type="text" name="answer7-2" placeholder="Your custom answer" required />
                                                                </label>
                                                            </div>
                                                            <div class="answers">
                                                                <input type="radio" name="status-7[]" value="3" required />
                                                                <label for="customInput2">
                                                                    <input class="form-control" type="text" name="answer7-3" placeholder="Your custom answer" required />
                                                                </label>
                                                            </div>
                                                            <div class="answers">
                                                                <input type="radio" name="status-7[]" value="4" required />
                                                                <label for="customInput2">
                                                                    <input class="form-control" type="text" name="answer7-4" placeholder="Your custom answer" required />
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row-table">
                                                        <div class="question">
                                                            <div class="question-num">8</div>
                                                            <div>Question :</div>

                                                            <label for="customInput2">
                                                                <input class="form-control" type="text" name="question8" placeholder="Add Question" required />
                                                            </label>
                                                        </div>
                                                        <div class="AllAnswers">
                                                            <div class="answers">
                                                                <input type="radio" name="status-8[]" value="1" required />
                                                                <label for="customInput2">
                                                                    <input class="form-control" type="text" name="answer8-1" placeholder="Your custom answer" required />
                                                                </label>
                                                            </div>

                                                            <div class="answers">
                                                                <input type="radio" name="status-8[]" value="2" required />
                                                                <label for="customInput2">
                                                                    <input class="form-control" type="text" name="answer8-2" placeholder="Your custom answer" required />
                                                                </label>
                                                            </div>
                                                            <div class="answers">
                                                                <input type="radio" name="status-8[]" value="3" required />
                                                                <label for="customInput2">
                                                                    <input class="form-control" type="text" name="answer8-3" placeholder="Your custom answer" required />
                                                                </label>
                                                            </div>
                                                            <div class="answers">
                                                                <input type="radio" name="status-8[]" value="4" required />
                                                                <label for="customInput2">
                                                                    <input class="form-control" type="text" name="answer8-4" placeholder="Your custom answer" required />
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row-table">
                                                        <div class="question">
                                                            <div class="question-num">9</div>
                                                            <div>Question :</div>

                                                            <label for="customInput2">
                                                                <input class="form-control" type="text" name="question9" placeholder="Add Question" required />
                                                            </label>
                                                        </div>
                                                        <div class="AllAnswers">
                                                            <div class="answers">
                                                                <input type="radio" name="status-9[]" value="1" required />
                                                                <label for="customInput2">
                                                                    <input class="form-control" type="text" name="answer9-1" placeholder="Your custom answer" required />
                                                                </label>
                                                            </div>

                                                            <div class="answers">
                                                                <input type="radio" name="status-9[]" value="2" required />
                                                                <label for="customInput2">
                                                                    <input class="form-control" type="text" name="answer9-2" placeholder="Your custom answer" required />
                                                                </label>
                                                            </div>
                                                            <div class="answers">
                                                                <input type="radio" name="status-9[]" value="3" required />
                                                                <label for="customInput2">
                                                                    <input class="form-control" type="text" name="answer9-3" placeholder="Your custom answer" required />
                                                                </label>
                                                            </div>
                                                            <div class="answers">
                                                                <input type="radio" name="status-9[]" value="4" required />
                                                                <label for="customInput2">
                                                                    <input class="form-control" type="text" name="answer9-4" placeholder="Your custom answer" required />
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row-table">
                                                        <div class="question">
                                                            <div class="question-num">10</div>
                                                            <div>Question :</div>

                                                            <label for="customInput2">
                                                                <input class="form-control" type="text" name="question10" placeholder="Add Question" required />
                                                            </label>
                                                        </div>
                                                        <div class="AllAnswers">
                                                            <div class="answers">
                                                                <input type="radio" name="status-10[]" value="1" required />
                                                                <label for="customInput2">
                                                                    <input class="form-control" type="text" name="answer10-1" placeholder="Your custom answer" required />
                                                                </label>
                                                            </div>

                                                            <div class="answers">
                                                                <input type="radio" name="status-10[]" value="2" required />
                                                                <label for="customInput2">
                                                                    <input class="form-control" type="text" name="answer10-2" placeholder="Your custom answer" required />
                                                                </label>
                                                            </div>
                                                            <div class="answers">
                                                                <input type="radio" name="status-10[]" value="3" required />
                                                                <label for="customInput2">
                                                                    <input class="form-control" type="text" name="answer10-3" placeholder="Your custom answer" required />
                                                                </label>
                                                            </div>
                                                            <div class="answers">
                                                                <input type="radio" name="status-10[]" value="4" required />
                                                                <label for="customInput2">
                                                                    <input class="form-control" type="text" name="answer10-4" placeholder="Your custom answer" required />
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-inner">
                                                        <div class="moreInfo">
                                                            <input type="date" name="creation" id="creation" value="<?php echo date('Y-m-d'); ?>" style="display:none">
                                                            Quiz Name * :
                                                            <input type="text" class="form-control" name="quizName" required placeholder="Quiz Name">
                                                            <input type="text" class="form-control" placeholder="Admin Name" value="1" style="display:none">
                                                            Cours Name *:
                                                            <select name="cour" id="" class="form-control">
                                                                <?php
                                                                $sql3 = "SELECT * FROM cours";
                                                                $result3 = mysqli_query($conn, $sql3);
                                                                while ($row3 = mysqli_fetch_assoc($result3)) {
                                                                    echo "<option value='" . $row3['courId'] . "'>" . $row3['courName'] . "</option>";
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="card-inner">
                                                        <div class="nk-block-between-md g-3">
                                                            <input type="submit" value="Cancel" class="cancel-it" />

                                                            <input type="submit" value="Submit" class="submit-it" name="submit" />
                                                        </div>
                                                    </div>
                                                </form>

                                                <!-- .nk-block-between -->
                                            </div>
                                            <!-- .card-inner -->
                                        </div>
                                        <!-- .card-inner-group -->
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
    <div class="modal fade" id="modalCreate">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="modal-title">Create Course</h5>
                    <form action="#" class="pt-2">
                        <div class="row gy-3 gx-gs">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="course-name">Course Name</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="course-name" placeholder="e.g. Responsive Design" />
                                    </div>
                                </div>
                                <!-- .form-group -->
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
                                </div>
                                <!-- .form-group -->
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="dificulties">Course Dificulties</label>
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
                                    <label class="form-label" for="course-lesson">Total Lesson</label>
                                    <div class="form-control-wrap">
                                        <input type="number" class="form-control" id="course-lesson" placeholder="40" />
                                    </div>
                                </div>
                                <!-- .form-group -->
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="thumb">Course thumbnail</label>
                                    <div class="form-control-wrap">
                                        <div class="form-file">
                                            <input type="file" multiple class="form-file-input" id="customFile-create" />
                                            <label class="form-file-label" for="customFile-create">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- .form-group -->
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="thumb">Course Description</label>
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
                                        <ul class="custom-control-group g-3 align-center flex-wrap">
                                            <li>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" checked name="reg-public" id="reg-enable" />
                                                    <label class="custom-control-label" for="reg-enable">Active</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="reg-public" id="reg-disable" />
                                                    <label class="custom-control-label" for="reg-disable">Pending</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="reg-public" id="reg-request" />
                                                    <label class="custom-control-label" for="reg-request">Rejected</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- .form-group -->
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="course-price">Course Price</label>
                                    <div class="form-control-wrap">
                                        <input type="number" class="form-control" id="course-price" placeholder="30" />
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
                                        <input type="text" class="form-control date-picker" placeholder="mm/dd/yyyy" />
                                    </div>
                                </div>
                                <!-- .form-group -->
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <button data-bs-dismiss="modal" type="submit" class="btn btn-primary">
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
                    <em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title">Edit Course</h5>
                    <form action="#" class="pt-2">
                        <div class="row gy-3 gx-gs">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="edit-course-name">Course Name</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="edit-course-name" value="Responsive Design" />
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
                                </div>
                                <!-- .form-group -->
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="edit-lesson">Total Lesson</label>
                                    <div class="form-control-wrap">
                                        <input type="number" class="form-control" id="edit-lesson" value="40" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="thumb">Course thumbnail</label>
                                    <div class="form-control-wrap">
                                        <div class="form-file">
                                            <input type="file" multiple class="form-file-input" id="edit-customFile" />
                                            <label class="form-file-label" for="edit-customFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- .form-group -->
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="edit-description">Course Description</label>
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
                                        <ul class="custom-control-group g-3 align-center flex-wrap">
                                            <li>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" checked name="reg-public" id="edit-course-active" />
                                                    <label class="custom-control-label" for="edit-course-active">Active</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="reg-public" id="edit-course-pending" />
                                                    <label class="custom-control-label" for="edit-course-pending">Pending</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="reg-public" id="edit-course-reject" />
                                                    <label class="custom-control-label" for="edit-course-reject">Rejected</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- .form-group -->
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="course-price-edit">Course Price</label>
                                    <div class="form-control-wrap">
                                        <input type="number" class="form-control" id="course-price-edit" value="30" />
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
                                        <input type="text" class="form-control date-picker" placeholder="mm/dd/yyyy" />
                                    </div>
                                </div>
                                <!-- .form-group -->
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <button data-bs-dismiss="modal" type="submit" class="btn btn-primary">
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
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg text-center">
                    <div class="nk-modal py-4">
                        <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-cross bg-danger"></em>
                        <h4 class="nk-modal-title">Are You Sure ?</h4>
                        <div class="nk-modal-text mt-n2">
                            <p class="text-soft">
                                This event data will be removed permanently.
                            </p>
                        </div>
                        <ul class="d-flex justify-content-center gx-4 mt-4">
                            <li>
                                <button data-bs-dismiss="modal" id="deleteEvent" class="btn btn-success">
                                    Yes, Delete it
                                </button>
                            </li>
                            <li>
                                <button data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#editEventPopup" class="btn btn-danger btn-dim">
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
    <script src="./assets/js/libs/editors/quill.js?ver=3.2.3"></script>
    <script src="./assets/js/editors.js?ver=3.2.3"></script>
    <script src="./assetsjs/added.js"></script>
</body>

</html>