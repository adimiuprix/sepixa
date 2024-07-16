        <!-- navbar -->
        <div class="border-bottom">
            <div class="py-5">
                <div class="container">
                    <div class="row w-100 align-items-center gx-lg-2 gx-0">
                        <div class="col-xxl-2 col-lg-3 col-md-6 col-5">
                            <a class="navbar-brand d-none d-lg-block" href="index.html">
                            <img src="<?= theme(''); ?>images/logo/freshcart-logo.svg" alt="eCommerce HTML Template" />
                            </a>
                            <div class="d-flex justify-content-between w-100 d-lg-none">
                                <a class="navbar-brand" href="index.html">
                                <img src="<?= theme(''); ?>images/logo/freshcart-logo.svg" alt="eCommerce HTML Template" />
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xxl-12 col-md-12 col-12 text-end">
                            <div class="list-inline">
                                <div class="list-inline-item me-5">
                                    <a href="pages/shop-wishlist.html" class="text-muted position-relative">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="20"
                                            height="20"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-heart">
                                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                        </svg>
                                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                                        5
                                        <span class="visually-hidden">unread messages</span>
                                        </span>
                                    </a>
                                </div>
                                <div class="list-inline-item me-5">
                                    <a href="#!" class="text-muted" data-bs-toggle="modal" data-bs-target="#userModal">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="20"
                                            height="20"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-user">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                    </a>
                                </div>
                                <div class="list-inline-item me-5 me-lg-0">
                                    <a class="text-muted position-relative" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" href="#offcanvasExample" role="button" aria-controls="offcanvasRight">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="20"
                                            height="20"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-shopping-bag">
                                            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                            <line x1="3" y1="6" x2="21" y2="6"></line>
                                            <path d="M16 10a4 4 0 0 1-8 0"></path>
                                        </svg>
                                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                                        1
                                        <span class="visually-hidden">unread messages</span>
                                        </span>
                                    </a>
                                </div>
                                <div class="list-inline-item d-inline-block d-lg-none">
                                    <!-- Button -->
                                    <button
                                        class="navbar-toggler collapsed"
                                        type="button"
                                        data-bs-toggle="offcanvas"
                                        data-bs-target="#navbar-default"
                                        aria-controls="navbar-default"
                                        aria-label="Toggle navigation">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-text-indent-left text-primary" viewBox="0 0 16 16">
                                            <path
                                                d="M2 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm.646 2.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L4.293 8 2.646 6.354a.5.5 0 0 1 0-.708zM7 6.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light navbar-default py-0 pb-lg-4" aria-label="Offcanvas navbar large">
                <div class="container">
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="navbar-default" aria-labelledby="navbar-defaultLabel">
                        <div class="offcanvas-header pb-1">
                            <a href="index.html"><img src="<?= theme(''); ?>images/logo/freshcart-logo.svg" alt="eCommerce HTML Template" /></a>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <div>
                                <ul class="navbar-nav align-items-center">
                                    <li class="nav-item dropdown w-100 w-lg-auto">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Home</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="index.html">Home 1</a></li>
                                            <li><a class="dropdown-item" href="pages/index-2.html">Home 2</a></li>
                                            <li><a class="dropdown-item" href="pages/index-3.html">Home 3</a></li>
                                            <li><a class="dropdown-item" href="pages/index-4.html">Home 4</a></li>
                                            <li>
                                                <a class="dropdown-item" href="pages/index-5.html">Home 5</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown w-100 w-lg-auto">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="pages/shop-grid.html">Shop Grid - Filter</a></li>
                                            <li><a class="dropdown-item" href="pages/shop-grid-3-column.html">Shop Grid - 3 column</a></li>
                                            <li><a class="dropdown-item" href="pages/shop-list.html">Shop List - Filter</a></li>
                                            <li><a class="dropdown-item" href="pages/shop-filter.html">Shop - Filter</a></li>
                                            <li><a class="dropdown-item" href="pages/shop-fullwidth.html">Shop Wide</a></li>
                                            <li><a class="dropdown-item" href="pages/shop-single.html">Shop Single</a></li>
                                            <li><a class="dropdown-item" href="pages/shop-single-2.html">Shop Single v2</a></li>
                                            <li><a class="dropdown-item" href="pages/shop-wishlist.html">Shop Wishlist</a></li>
                                            <li><a class="dropdown-item" href="pages/shop-cart.html">Shop Cart</a></li>
                                            <li><a class="dropdown-item" href="pages/shop-checkout.html">Shop Checkout</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown w-100 w-lg-auto">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Stores</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="pages/store-list.html">Store List</a></li>
                                            <li><a class="dropdown-item" href="pages/store-grid.html">Store Grid</a></li>
                                            <li><a class="dropdown-item" href="pages/store-single.html">Store Single</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown w-100 w-lg-auto dropdown-fullwidth">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Mega menu</a>
                                        <div class="dropdown-menu pb-0">
                                            <div class="row p-2 p-lg-4">
                                                <div class="col-lg-3 col-12 mb-4 mb-lg-0">
                                                    <h6 class="text-primary ps-3">Dairy, Bread & Eggs</h6>
                                                    <a class="dropdown-item" href="pages/shop-grid.html">Butter</a>
                                                    <a class="dropdown-item" href="pages/shop-grid.html">Milk Drinks</a>
                                                    <a class="dropdown-item" href="pages/shop-grid.html">Curd & Yogurt</a>
                                                    <a class="dropdown-item" href="pages/shop-grid.html">Eggs</a>
                                                    <a class="dropdown-item" href="pages/shop-grid.html">Buns & Bakery</a>
                                                    <a class="dropdown-item" href="pages/shop-grid.html">Cheese</a>
                                                    <a class="dropdown-item" href="pages/shop-grid.html">Condensed Milk</a>
                                                    <a class="dropdown-item" href="pages/shop-grid.html">Dairy Products</a>
                                                </div>
                                                <div class="col-lg-3 col-12 mb-4 mb-lg-0">
                                                    <h6 class="text-primary ps-3">Breakfast & Instant Food</h6>
                                                    <a class="dropdown-item" href="pages/shop-grid.html">Breakfast Cereal</a>
                                                    <a class="dropdown-item" href="pages/shop-grid.html">Noodles, Pasta & Soup</a>
                                                    <a class="dropdown-item" href="pages/shop-grid.html">Frozen Veg Snacks</a>
                                                    <a class="dropdown-item" href="pages/shop-grid.html">Frozen Non-Veg Snacks</a>
                                                    <a class="dropdown-item" href="pages/shop-grid.html">Vermicelli</a>
                                                    <a class="dropdown-item" href="pages/shop-grid.html">Instant Mixes</a>
                                                    <a class="dropdown-item" href="pages/shop-grid.html">Batter</a>
                                                    <a class="dropdown-item" href="pages/shop-grid.html">Fruit and Juices</a>
                                                </div>
                                                <div class="col-lg-3 col-12 mb-4 mb-lg-0">
                                                    <h6 class="text-primary ps-3">Cold Drinks & Juices</h6>
                                                    <a class="dropdown-item" href="pages/shop-grid.html">Soft Drinks</a>
                                                    <a class="dropdown-item" href="pages/shop-grid.html">Fruit Juices</a>
                                                    <a class="dropdown-item" href="pages/shop-grid.html">Coldpress</a>
                                                    <a class="dropdown-item" href="pages/shop-grid.html">Water & Ice Cubes</a>
                                                    <a class="dropdown-item" href="pages/shop-grid.html">Soda & Mixers</a>
                                                    <a class="dropdown-item" href="pages/shop-grid.html">Health Drinks</a>
                                                    <a class="dropdown-item" href="pages/shop-grid.html">Herbal Drinks</a>
                                                    <a class="dropdown-item" href="pages/shop-grid.html">Milk Drinks</a>
                                                </div>
                                                <div class="col-lg-3 col-12 mb-4 mb-lg-0">
                                                    <div class="card border-0">
                                                        <img src="<?= theme(''); ?>images/banner/menu-banner.jpg" alt="eCommerce HTML Template" class="img-fluid" />
                                                        <div class="position-absolute ps-6 mt-8">
                                                            <h5 class="mb-0">
                                                                Dont miss this
                                                                <br />
                                                                offer today.
                                                            </h5>
                                                            <a href="#" class="btn btn-primary btn-sm mt-3">Shop Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown w-100 w-lg-auto">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="pages/blog.html">Blog</a></li>
                                            <li><a class="dropdown-item" href="pages/blog-single.html">Blog Single</a></li>
                                            <li><a class="dropdown-item" href="pages/blog-category.html">Blog Category</a></li>
                                            <li><a class="dropdown-item" href="pages/about.html">About us</a></li>
                                            <li><a class="dropdown-item" href="pages/404error.html">404 Error</a></li>
                                            <li><a class="dropdown-item" href="pages/contact.html">Contact</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown w-100 w-lg-auto">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Account</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="pages/signin.html">Sign in</a></li>
                                            <li><a class="dropdown-item" href="pages/signup.html">Signup</a></li>
                                            <li><a class="dropdown-item" href="pages/forgot-password.html">Forgot Password</a></li>
                                            <li class="dropdown-submenu dropend">
                                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">My Account</a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="pages/account-orders.html">Orders</a></li>
                                                    <li><a class="dropdown-item" href="pages/account-settings.html">Settings</a></li>
                                                    <li><a class="dropdown-item" href="pages/account-address.html">Address</a></li>
                                                    <li><a class="dropdown-item" href="pages/account-payment-method.html">Payment Method</a></li>
                                                    <li><a class="dropdown-item" href="pages/account-notification.html">Notification</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item w-100 w-lg-auto">
                                        <a class="nav-link" href="dashboard/index.html">Dashboard</a>
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
        </div>