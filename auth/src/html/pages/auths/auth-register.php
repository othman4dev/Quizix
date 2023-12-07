<?php
include("connect.php");

if (isset($_POST["submit"])) {
    $username = htmlspecialchars(strtolower(trim($_POST['username'])));
    $email = htmlspecialchars(strtolower(trim($_POST['email'])));
    $password = htmlspecialchars(strtolower(trim($_POST['password'])));

    // Hacher le mot de passe
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO utilisateur (userName, email, password_user) VALUES ('$username', '$email', '$hashedPassword')";

    if (mysqli_query($con, $query)) {
        echo "Bienvenue";
    } else {
        echo "Erreur d'inscription : " . mysqli_error($con);
    }
}
?>

<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Registration | Quizix Admin Template</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="./assets/css/dashlite.css?ver=3.2.3">
    <link id="skin-default" rel="stylesheet" href="./assets/css/theme.css?ver=3.2.3">
</head>

<body class="nk-body bg-white npc-default pg-auth">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-split nk-split-page nk-split-lg">
                        <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white w-lg-45">
                            <div class="absolute-top-right d-lg-none p-3 p-sm-5">
                                <a href="#" class="toggle btn btn-white btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a>
                            </div>
                            <div class="nk-block nk-block-middle nk-auth-body">
                                <div class="brand-logo pb-5">
                                    <a href="html/index.html" class="logo-link">
                                        <svg width="442" height="216" viewBox="0 0 442 216" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M187.28 162.2C172.16 162.2 164.6 151.92 164.6 131.36C164.6 125.84 165.52 116.76 167.36 104.12H190.64V130.04C190.64 139.32 193.24 143.96 198.44 143.96C203 143.96 205.28 139.8 205.28 131.48C205.28 130.84 205.28 130.16 205.28 129.44L204.2 104.12H231.2L228.68 161H208.4L207.08 149.96C206.92 150.28 206.72 150.72 206.48 151.28C206.24 151.84 205.56 152.84 204.44 154.28C203.4 155.64 202.2 156.88 200.84 158C199.48 159.04 197.6 160 195.2 160.88C192.8 161.76 190.16 162.2 187.28 162.2ZM266.988 105.8L269.028 105.08L264.948 161H242.268L238.428 105.08C242.988 106.92 247.828 107.84 252.948 107.84C258.148 107.84 262.828 107.16 266.988 105.8ZM253.668 102.56C249.668 102.56 246.308 101.36 243.588 98.96C240.868 96.56 239.508 93.44 239.508 89.6C239.508 85.68 240.828 82.56 243.468 80.24C246.188 77.84 249.548 76.64 253.548 76.64C257.628 76.64 261.028 77.84 263.748 80.24C266.468 82.64 267.828 85.76 267.828 89.6C267.828 93.44 266.468 96.56 263.748 98.96C261.028 101.36 257.668 102.56 253.668 102.56ZM276.76 161V150.92L298.96 119.96L276.28 124.64L279.28 104.12H331V114.8L310.12 147.08L330.64 140.84V161H276.76ZM366.715 105.8L368.755 105.08L364.675 161H341.995L338.155 105.08C342.715 106.92 347.555 107.84 352.675 107.84C357.875 107.84 362.555 107.16 366.715 105.8ZM353.395 102.56C349.395 102.56 346.035 101.36 343.315 98.96C340.595 96.56 339.235 93.44 339.235 89.6C339.235 85.68 340.555 82.56 343.195 80.24C345.915 77.84 349.275 76.64 353.275 76.64C357.355 76.64 360.755 77.84 363.475 80.24C366.195 82.64 367.555 85.76 367.555 89.6C367.555 93.44 366.195 96.56 363.475 98.96C360.755 101.36 357.395 102.56 353.395 102.56Z" fill="black"/>
                                            <path d="M398.326 146.12C394.406 150.84 392.446 155.8 392.446 161H374.806C374.806 150.2 379.966 140.16 390.286 130.88L376.246 104.12H406.126L412.846 116.96C413.806 116.24 414.726 114.64 415.606 112.16C416.486 109.6 416.926 106.92 416.926 104.12H434.566C434.566 115.72 430.166 125.4 421.366 133.16L436.006 161H406.246L398.326 146.12Z" fill="#9B55F6"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M47.5342 182.149C84.5276 188.566 123.612 173.783 146.587 141C169.563 108.218 170.121 66.4343 151.466 33.8512C114.472 27.4338 75.3876 42.2171 52.4126 74.9997C29.4375 107.782 28.8786 149.566 47.5342 182.149Z" fill="#9B55F6"/>
                                            <path d="M46.4453 104.785C46.4453 99.4336 47.5 94.3555 49.6094 89.5508C51.7188 84.707 54.7852 80.4688 58.8086 76.8359C62.8711 73.2031 67.8516 70.332 73.75 68.2227C79.6875 66.0742 86.4453 65 94.0235 65C101.953 65 108.828 65.9766 114.648 67.9297C120.469 69.8438 125.293 72.5195 129.121 75.957C132.949 79.3945 135.781 83.457 137.617 88.1445C139.492 92.832 140.43 97.9297 140.43 103.438C140.43 107.188 139.922 110.762 138.906 114.16C137.891 117.559 136.387 120.723 134.395 123.652C132.441 126.582 130 129.219 127.07 131.562C124.18 133.906 120.859 135.879 117.109 137.48L127.656 154.121H111.484L103.281 141.113C101.797 141.309 100.273 141.465 98.711 141.582C97.1485 141.699 95.5469 141.758 93.9063 141.758C89.6875 141.758 85.586 141.406 81.6016 140.703C77.6172 140 73.8672 138.965 70.3516 137.598C66.836 136.191 63.6133 134.473 60.6836 132.441C57.7539 130.371 55.2344 127.969 53.125 125.234C51.0157 122.461 49.375 119.375 48.2032 115.977C47.0313 112.578 46.4453 108.848 46.4453 104.785ZM135.977 158.223L123.32 138.301C126.445 136.66 129.316 134.648 131.934 132.266C134.551 129.883 136.797 127.207 138.672 124.238C140.547 121.23 142.012 117.988 143.066 114.512C144.121 110.996 144.648 107.305 144.648 103.438C144.648 100.195 144.199 96.9922 143.301 93.8281C142.402 90.625 141.113 87.5781 139.434 84.6875C137.793 81.7969 135.781 79.1016 133.398 76.6016C131.055 74.1016 128.398 71.9141 125.43 70.0391C128.828 71.6406 131.855 73.6133 134.512 75.957C137.207 78.3008 139.473 80.918 141.309 83.8086C143.184 86.6602 144.59 89.7656 145.527 93.125C146.504 96.4453 146.992 99.8828 146.992 103.438C146.992 107.383 146.484 111.133 145.469 114.688C144.492 118.242 143.105 121.543 141.309 124.59C139.512 127.598 137.363 130.332 134.863 132.793C132.363 135.254 129.609 137.383 126.602 139.18L140.137 160.449H115.234V158.223H135.977ZM61.0938 104.316C61.0938 108.77 61.9141 112.734 63.5547 116.211C65.1953 119.688 67.461 122.637 70.3516 125.059C73.2422 127.441 76.6407 129.258 80.5469 130.508C84.4922 131.758 88.7696 132.383 93.3789 132.383C94.8242 132.383 96.25 132.324 97.6563 132.207L87.9883 116.855H104.16L111.309 128.223C113.691 126.934 115.781 125.391 117.578 123.594C119.375 121.797 120.879 119.844 122.09 117.734C123.301 115.586 124.219 113.301 124.844 110.879C125.469 108.457 125.781 105.977 125.781 103.438C125.781 99.0234 125.039 95.0195 123.555 91.4258C122.07 87.832 119.941 84.7852 117.168 82.2852C114.434 79.7461 111.074 77.793 107.09 76.4258C103.145 75.0586 98.711 74.375 93.7891 74.375C89.0235 74.375 84.6289 75.0977 80.6055 76.543C76.6211 77.9492 73.1836 79.9609 70.293 82.5781C67.4024 85.1953 65.1367 88.3594 63.4961 92.0703C61.8946 95.7422 61.0938 99.8242 61.0938 104.316ZM65.3125 104.492C65.3125 100.898 65.9375 97.5195 67.1875 94.3555C68.4766 91.1914 70.3321 88.4375 72.7539 86.0938C75.1758 83.75 78.1446 81.8945 81.6602 80.5273C85.2149 79.1602 89.2578 78.4766 93.7891 78.4766C98.6719 78.4766 102.969 79.375 106.68 81.1719C110.43 82.9297 113.594 85.4688 116.172 88.7891C112.5 85.7812 108.848 83.6914 105.215 82.5195C101.582 81.3086 97.7735 80.7031 93.7891 80.7031C89.6485 80.7031 85.9571 81.3281 82.7149 82.5781C79.4727 83.8281 76.7383 85.5469 74.5117 87.7344C72.2852 89.8828 70.586 92.4023 69.4141 95.293C68.2422 98.1836 67.6563 101.25 67.6563 104.492C67.6563 107.07 68.1055 109.551 69.0039 111.934C69.9414 114.277 71.2696 116.465 72.9883 118.496C74.7461 120.488 76.8555 122.305 79.3164 123.945C81.7774 125.547 84.5508 126.895 87.6367 127.988C84.043 127.441 80.8594 126.465 78.086 125.059C75.3516 123.613 73.0274 121.855 71.1133 119.785C69.1992 117.715 67.7539 115.391 66.7774 112.812C65.8008 110.195 65.3125 107.422 65.3125 104.492ZM113.887 119.023L115.469 121.484L113.594 122.891L111.133 119.023H113.887ZM59.9805 136.016C61.9727 137.461 64.2383 138.789 66.7774 140C69.3164 141.172 72.0313 142.188 74.9219 143.047C77.8516 143.945 80.918 144.629 84.1211 145.098C87.3242 145.605 90.586 145.859 93.9063 145.859C95.7813 145.859 97.3828 145.801 98.711 145.684C100.039 145.605 101.445 145.449 102.93 145.215L104.277 147.324C103.301 147.52 101.875 147.695 100 147.852C98.1641 148.008 96.1328 148.086 93.9063 148.086C86.5235 148.086 79.961 147.09 74.2188 145.098C68.5157 143.145 63.7696 140.117 59.9805 136.016Z" fill="white"/>
                                            </svg>
                                    </a>
                                </div>
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title">Register</h5>
                                        <div class="nk-block-des">
                                            <p>Create New Quizix Account</p>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <form action="html/pages/auths/auth-register.php" method="POST">
                                    <div class="form-group">
                                        <label class="form-label" for="name">user</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control form-control-lg" id="name" placeholder="Enter your username"  name="username" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="email">Email</label>
                                        <div class="form-control-wrap">
                                            <input type="email" class="form-control form-control-lg" id="email" placeholder="Enter your email address " name="email" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="password">Password</label>
                                        <div class="form-control-wrap">
                                            <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input type="password" class="form-control form-control-lg" id="password" placeholder="Enter your password"  name="password" required>
                                        </div>
                                    </div>
                                    <!-- <div class="form-group">
                                         <label class="form-label" for="role">Role</label>
                                         <div class="form-control-wrap">
                                            <select class="form-select form-control-lg" id="role" name="role" required>
                                                <option value="admin">Admin</option>
                                                <option value="user">Utilisateur</option>
                                            </select>
                                         </div>
                                    </div> -->

                                    <div class="form-group">
                                        <div class="custom-control custom-control-xs custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkbox">
                                            <label class="custom-control-label" for="checkbox">I agree to Quizix <a tabindex="-1" href="#">Privacy Policy</a> &amp; <a tabindex="-1" href="#"> Terms.</a></label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="submit" class="btn btn-lg btn-primary btn-block">Register</button>
                                    </div>
                                </form><!-- form -->
                                <div class="form-note-s2 pt-4"> Already have an account ? <a href="html/pages/auths/auth-login.php"><strong>Sign in instead</strong></a>
                                </div>
                              
                            </div><!-- .nk-block -->
                            <div class="nk-block nk-auth-footer">
                                <div class="nk-block-between">
                                    <ul class="nav nav-sm">
                                        <li class="nav-item">
                                            <a class="link link-primary fw-normal py-2 px-3 fs-13px" href="#">Terms & Condition</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="link link-primary fw-normal py-2 px-3 fs-13px" href="#">Privacy Policy</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="link link-primary fw-normal py-2 px-3 fs-13px" href="#">Help</a>
                                        </li>
                                        <li class="nav-item dropup">
                                            <a class="dropdown-toggle dropdown-indicator has-indicator link link-primary fw-normal py-2 px-3 fs-13px" data-bs-toggle="dropdown" data-offset="0,10"><small>English</small></a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                <ul class="language-list">
                                                    <li>
                                                        <a href="#" class="language-item">
                                                            <img src="./images/flags/english.png" alt="" class="language-flag">
                                                            <span class="language-name">English</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="language-item">
                                                            <img src="./images/flags/spanish.png" alt="" class="language-flag">
                                                            <span class="language-name">Español</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="language-item">
                                                            <img src="./images/flags/french.png" alt="" class="language-flag">
                                                            <span class="language-name">Français</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="language-item">
                                                            <img src="./images/flags/turkey.png" alt="" class="language-flag">
                                                            <span class="language-name">Türkçe</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul><!-- nav -->
                                </div>
                                <div class="mt-3">
                                    <p>&copy; 2023 Quizix. All Rights Reserved.</p>
                                </div>
                            </div><!-- nk-block -->
                        </div><!-- nk-split-content -->
                        <div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right" data-toggle-body="true" data-content="athPromo" data-toggle-screen="lg" data-toggle-overlay="true">
                            <div class="slider-wrap w-100 w-max-550px p-3 p-sm-5 m-auto">
                                <div class="slider-init" data-slick='{"dots":true, "arrows":false}'>
                                    <div class="slider-item">
                                        <div class="nk-feature nk-feature-center">
                                            <div class="nk-feature-img">
                                                <img class="round" src="./images/slides/promo-a.png" srcset="./images/slides/promo-a2x.png 2x" alt="">
                                            </div>
                                            <div class="nk-feature-content py-4 p-sm-5">
                                                <h4>Quizix</h4>
                                                <p>You can start to create your products easily with its user-friendly design & most completed responsive layout.</p>
                                            </div>
                                        </div>
                                    </div><!-- .slider-item -->
                                    <div class="slider-item">
                                        <div class="nk-feature nk-feature-center">
                                            <div class="nk-feature-img">
                                                <img class="round" src="./images/slides/promo-b.png" srcset="./images/slides/promo-b2x.png 2x" alt="">
                                            </div>
                                            <div class="nk-feature-content py-4 p-sm-5">
                                                <h4>Quizix</h4>
                                                <p>You can start to create your products easily with its user-friendly design & most completed responsive layout.</p>
                                            </div>
                                        </div>
                                    </div><!-- .slider-item -->
                                    <div class="slider-item">
                                        <div class="nk-feature nk-feature-center">
                                            <div class="nk-feature-img">
                                                <img class="round" src="./images/slides/promo-c.png" srcset="./images/slides/promo-c2x.png 2x" alt="">
                                            </div>
                                            <div class="nk-feature-content py-4 p-sm-5">
                                                <h4>Quizix</h4>
                                                <p>You can start to create your products easily with its user-friendly design & most completed responsive layout.</p>
                                            </div>
                                        </div>
                                    </div><!-- .slider-item -->
                                </div><!-- .slider-init -->
                                <div class="slider-dots"></div>
                                <div class="slider-arrows"></div>
                            </div><!-- .slider-wrap -->
                        </div><!-- nk-split-content -->
                    </div><!-- nk-split -->
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="./assets/js/bundle.js?ver=3.2.3"></script>
    <script src="./assets/js/scripts.js?ver=3.2.3"></script>
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
                                    <img src="./images/flags/arg.png" alt="" class="country-flag">
                                    <span class="country-name">Argentina</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/aus.png" alt="" class="country-flag">
                                    <span class="country-name">Australia</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/bangladesh.png" alt="" class="country-flag">
                                    <span class="country-name">Bangladesh</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/canada.png" alt="" class="country-flag">
                                    <span class="country-name">Canada <small>(English)</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/china.png" alt="" class="country-flag">
                                    <span class="country-name">Centrafricaine</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/china.png" alt="" class="country-flag">
                                    <span class="country-name">China</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/french.png" alt="" class="country-flag">
                                    <span class="country-name">France</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/germany.png" alt="" class="country-flag">
                                    <span class="country-name">Germany</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/iran.png" alt="" class="country-flag">
                                    <span class="country-name">Iran</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/italy.png" alt="" class="country-flag">
                                    <span class="country-name">Italy</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/mexico.png" alt="" class="country-flag">
                                    <span class="country-name">México</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/philipine.png" alt="" class="country-flag">
                                    <span class="country-name">Philippines</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/portugal.png" alt="" class="country-flag">
                                    <span class="country-name">Portugal</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/s-africa.png" alt="" class="country-flag">
                                    <span class="country-name">South Africa</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/spanish.png" alt="" class="country-flag">
                                    <span class="country-name">Spain</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/switzerland.png" alt="" class="country-flag">
                                    <span class="country-name">Switzerland</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/uk.png" alt="" class="country-flag">
                                    <span class="country-name">United Kingdom</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/english.png" alt="" class="country-flag">
                                    <span class="country-name">United State</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div><!-- .modal -->

</html>