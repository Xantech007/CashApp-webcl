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

                                                <!-- Language Translator + CSS Fix -->
                        <div class="d-flex align-items-center ms-3">
                            <?php include('includes/translate.php'); ?>
                        </div>

                        <style>
                            #google_translate_element { margin-top: 6px; }
                            .goog-te-gadget-simple {
                                background: #fff !important;
                                border: 1px solid #ddd !important;
                                border-radius: 4px !important;
                                padding: 5px 10px !important;
                                font-size: 14px;
                            }
                            .goog-te-gadget-icon, .goog-te-gadget img {
                                display: none !important;
                            }

                            /* Hide the annoying top translation bar */
                            .goog-te-banner-frame.skiptranslate,
                            iframe.goog-te-banner-frame {
                                display: none !important;
                                height: 0 !important;
                            }
                            body {
                                top: 0px !important;
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
