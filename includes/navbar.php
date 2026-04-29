<div class="mainmenu-area" style="background:linear-gradient(to bottom,#C4C4C3,#F5F5F5); border-bottom:none">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                   
                    <?php
                    $logo = "SELECT logo FROM settings";
                    $logo_query = mysqli_query($con ,$logo);
                    if($logo_query) {
                        $row = mysqli_fetch_array($logo_query);
                        $logo_image = $row['logo'];
                    }
                    ?>
                   
                    <a class="navbar-brand" href="index" style="display:flex;align-items:center;justify-content:center;flex-direction:column">
                        <img src="uploads/logo/<?= $logo_image ?>" alt="">
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_menu"
                            aria-controls="main_menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse fixed-height" id="main_menu">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index">Home
                                    <div class="mr-hover-effect"></div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about">About
                                    <div class="mr-hover-effect"></div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="faq">FAQ
                                    <div class="mr-hover-effect"></div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact">Contact
                                    <div class="mr-hover-effect"></div>
                                </a>
                            </li>
                        </ul>

                        <!-- Language Translator -->
                        <div class="d-flex align-items-center ms-3">
                            <?php include('includes/translate.php'); ?>
                        </div>

                        <!-- Hardcoded CSS: Orange Theme + Fixed Dropdown -->
                        <style>
                            /* Orange Theme for the Translate Button */
                            #google_translate_element {
                                margin-top: 6px;
                            }
                            .goog-te-gadget-simple {
                                background: linear-gradient(to bottom, #f7941d, #f76b1c) !important;
                                border: 1px solid #e67e00 !important;
                                border-radius: 4px !important;
                                padding: 6px 12px !important;
                                font-size: 14px !important;
                                color: white !important;
                                box-shadow: 0 2px 5px rgba(0,0,0,0.2);
                            }
                            .goog-te-gadget-simple .goog-te-menu-value {
                                color: white !important;
                                font-weight: 500;
                            }
                            .goog-te-gadget-icon,
                            .goog-te-gadget img {
                                display: none !important;
                            }

                            /* Hide only the top banner (safe version) */
                            .goog-te-banner-frame.skiptranslate,
                            iframe.goog-te-banner-frame {
                                display: none !important;
                                visibility: hidden !important;
                                height: 0 !important;
                                width: 0 !important;
                            }

                            /* Allow the language dropdown menu to show properly */
                            .goog-te-menu-frame.skiptranslate,
                            iframe.goog-te-menu-frame {
                                display: block !important;
                                visibility: visible !important;
                                z-index: 999999 !important;
                            }

                            /* Reset body shift */
                            body {
                                top: 0 !important;
                                margin-top: 0 !important;
                            }
                        </style>

                        <!-- Login / Dashboard Button -->
                        <?php
                        if(isset($_SESSION['admin'])) { ?>
                            <a href="admin/signin" class="base-btn2 ms-3"
                               style="background: linear-gradient(to bottom, #f7941d, #f76b1c);">Admin</a>
                        <?php }
                        else if(isset($_SESSION['auth'])) { ?>
                            <a href="signin" class="base-btn2 ms-3"
                               style="background: linear-gradient(to bottom, #f7941d, #f76b1c);">Dashboard</a>
                        <?php }
                        else { ?>
                            <a href="signin" class="base-btn2 ms-3"
                               style="background: linear-gradient(to bottom, #f7941d, #f76b1c);">Login</a>
                        <?php } ?>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
