<!-- navbar -->
<div class="border-bottom">
    <div class="py-5">
        <div class="container">
            <div class="row w-100 align-items-center gx-lg-2 gx-0">

                <div class="col-xxl-2 col-lg-3 col-md-6 col-5">
                    <!-- Logo width -->
                    <a class="navbar-brand d-none d-lg-block" href="<?= base_url('/'); ?>">
                        <img src="<?= theme('images/logo/freshcart-logo.svg'); ?>" alt="logo" />
                    </a>
                    <!-- Logo mobile -->
                    <div class="d-flex justify-content-between w-100 d-lg-none">
                        <a class="navbar-brand" href="<?= base_url('/'); ?>">
                            <img src="<?= theme('images/logo/freshcart-logo.svg'); ?>" alt="logo" />
                        </a>
                    </div>
                </div>

                <!-- Icon right -->
                <div class="col-lg-12 col-xxl-12 col-md-12 col-12 text-end">
                    <div class="list-inline">
                        <?php if($session->logged_in != true):?>
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
                        <?php endif;?>
                        <div class="list-inline-item me-5 me-lg-0">
                            <a class="text-muted position-relative" href="<?= base_url('cart');?>">
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
                                <?= cart(); ?>
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
    <?= $this->include('partialls/nav_menu'); ?>
</div>