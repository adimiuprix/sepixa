<nav class="navbar navbar-expand-lg navbar-light navbar-default py-0 pb-lg-4" aria-label="Offcanvas navbar large">
    <div class="container">
        <div class="offcanvas offcanvas-start" tabindex="-1" id="navbar-default" aria-labelledby="navbar-defaultLabel">
            <div class="offcanvas-header pb-1">
                <a href="<?= base_url('/'); ?>">
                    <img src="<?= theme('images/logo/freshcart-logo.svg'); ?>" alt="logo" />
                </a>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div>
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item w-100 w-lg-auto">
                            <a class="nav-link" href="<?= base_url('/');?>">Home</a>
                        </li>
                        <li class="nav-item w-100 w-lg-auto">
                            <a class="nav-link" href="<?= base_url('products');?>">Product</a>
                        </li>
                        <li class="nav-item w-100 w-lg-auto">
                            <a class="nav-link" href="<?= base_url('licence');?>">Check Licence</a>
                        </li>
                        <li class="nav-item w-100 w-lg-auto">
                            <a class="nav-link" href="<?= base_url('about');?>">About Us</a>
                        </li>
                        <li class="nav-item w-100 w-lg-auto">
                            <a class="nav-link" href="<?= base_url('therms_and_condition');?>">Therms & Conditions</a>
                        </li>
                        <li class="nav-item w-100 w-lg-auto">
                            <a class="nav-link" href="<?= base_url('contact');?>">Contact Us</a>
                        </li>
                        <li class="nav-item w-100 w-lg-auto">
                            <a class="nav-link" href="<?= base_url('news');?>">News</a>
                        </li>
                        <li class="nav-item dropdown w-100 w-lg-auto">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Account</a>
                            <ul class="dropdown-menu">
                                <?php if($session->logged_in != true):?>
                                <li><a class="dropdown-item" href="<?= base_url('login')?>">Sign in</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('registration')?>">Signup</a></li>
                                <li><a class="dropdown-item" href="#">Forgot Password</a></li>
                                <?php else:?>
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">My Account</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="<?= base_url('order')?>">Orders</a></li>
                                        <li><a class="dropdown-item" href="<?= base_url('settings')?>">Settings</a></li>
                                        <li><a class="dropdown-item" href="">Address</a></li>
                                        <li><a class="dropdown-item" href="">Payment Method</a></li>
                                        <li><a class="dropdown-item" href="">Notification</a></li>
                                    </ul>
                                </li>
                                <?php endif;?>
                            </ul>
                        </li>
                        <li class="nav-item w-100 w-lg-auto">
                            <a class="nav-link" href="<?= base_url('dashbaord')?>">Dashboard</a>
                        </li>
                        <li class="nav-item dropdown w-100 w-lg-auto dropdown-flyout">
                            <a class="nav-link" href="#" id="navbarDropdownDocs" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Docs</a>
                            <div class="dropdown-menu dropdown-menu-lg" aria-labelledby="navbarDropdownDocs">
                                <a class="dropdown-item align-items-start" href="docs/index.html">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-file-text text-primary" viewBox="0 0 16 16">
                                            <path
                                                d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z" />
                                            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z" />
                                        </svg>
                                    </div>
                                    <div class="ms-3 lh-1">
                                        <h6 class="mb-1">Documentations</h6>
                                        <p class="mb-0 small">Browse the all documentation</p>
                                    </div>
                                </a>
                                <a class="dropdown-item align-items-start" href="docs/changelog.html">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-layers text-primary" viewBox="0 0 16 16">
                                            <path
                                                d="M8.235 1.559a.5.5 0 0 0-.47 0l-7.5 4a.5.5 0 0 0 0 .882L3.188 8 .264 9.559a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882L12.813 8l2.922-1.559a.5.5 0 0 0 0-.882l-7.5-4zm3.515 7.008L14.438 10 8 13.433 1.562 10 4.25 8.567l3.515 1.874a.5.5 0 0 0 .47 0l3.515-1.874zM8 9.433 1.562 6 8 2.567 14.438 6 8 9.433z" />
                                        </svg>
                                    </div>
                                    <div class="ms-3 lh-1">
                                        <h6 class="mb-1">
                                            Changelog
                                            <span class="text-primary ms-1">v1.3.0</span>
                                        </h6>
                                        <p class="mb-0 small">See what's new</p>
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>