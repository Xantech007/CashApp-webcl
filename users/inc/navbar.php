<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="index.php" class="logo d-flex align-items-center">  
            <img src="../uploads/logo/logodark.png" alt="">
        </a>
    </div><!-- End Logo -->

    <div class="search-bar">
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <!-- Language Translator -->
            <li class="nav-item pe-3">
                <?php include('../includes/translate.php'); ?>
            </li>

            <!-- Hardcoded CSS Fix for Google Translate -->
            <style>
                #google_translate_element {
                    margin-top: 8px;
                }
                .goog-te-gadget-simple {
                    background: #ffffff !important;
                    border: 1px solid #ced4da !important;
                    border-radius: 6px !important;
                    padding: 6px 12px !important;
                    font-size: 14px !important;
                    box-shadow: 0 2px 5px rgba(0,0,0,0.08);
                }
                .goog-te-gadget-icon {
                    display: none !important;
                }
                .goog-te-gadget img {
                    display: none !important;
                }

                /* Hide the annoying Google Translate top bar */
                .goog-te-banner-frame.skiptranslate,
                iframe.goog-te-banner-frame {
                    display: none !important;
                    visibility: hidden !important;
                    height: 0 !important;
                }

                body {
                    top: 0 !important;
                }
            </style>

            <!-- Profile Dropdown -->
            <li class="nav-item dropdown pe-3">
                <?php 
                $email = $_SESSION['email'];
                $query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
                $query_run = mysqli_query($con, $query);
                if(mysqli_num_rows($query_run) > 0)
                {
                    $data = mysqli_fetch_array($query_run);
                    $image = $data['image'];
                    $name = $data['name'];

                    $profile_image = !empty($image) && file_exists("../uploads/profile-picture/$image") 
                        ? $image 
                        : 'ppdefault.png';
                } else {
                    $profile_image = 'ppdefault.png';
                    $name = 'Guest';
                }
                ?>
                
                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <img src="../uploads/profile-picture/<?= $profile_image ?>" alt="Profile" class="rounded-circle">
                    <span class="d-none d-md-block dropdown-toggle ps-2"><?= $name ?></span>
                </a>

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6><?= $name ?></h6>             
                    </li>
                    <li><hr class="dropdown-divider"></li>           
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="users-profile">
                            <i class="bi bi-person-lines-fill"></i>
                            <span>My Profile</span>
                        </a>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <i class="bi bi-box-arrow-left"></i>
                            <form action="../codes/logout.php" method="POST">
                                <button type="submit" name="logout" style="background:transparent;border:none;color:black">Logout</button>
                            </form>
                        </a>
                    </li>
                </ul>
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<div style="margin-top:60px;"></div>
