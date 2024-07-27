<?= $this->extend('partialls/layout') ?>
<?= $this->section('content') ?>
<main>
    <!-- section -->
    <section class="mb-lg-14 mb-8 mt-8">
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- col -->
                <div class="col-12">
                    <div>
                        <div class="mb-8">
                            <!-- text -->
                            <h1 class="fw-bold mb-0">Checkout</h1>
                            <?php if($session->logged_in != true):?>
                            <p class="mb-0">
                                Already have an account? Click here to
                                <a href="<?= base_url('login'); ?>">Sign in</a>.
                            </p>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <!-- row -->
                <div class="row">
                    <div class="col-xl-7 col-lg-6 col-md-12">
                        <!-- accordion -->
                        <form action="" method="post">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <!-- accordion item -->
                                <div class="accordion-item py-4">
                                    <a href="#" class="text-inherit h5 collapsed" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="true" aria-controls="flush-collapseThree">
                                        <i class="feather-icon icon-shopping-bag me-2 text-muted"></i>
                                        Delivery instructions
                                        <!-- collapse -->
                                    </a>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse show" data-bs-parent="#accordionFlushExample" style="">
                                        <div class="row g-2 p-5">
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Domain name</label>
                                                    <input type="text" name="domain-activation" class="form-control" placeholder="Input your domain name" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-5 d-flex justify-content-end">
                                            <a href="#" class="btn btn-outline-gray-400 text-muted collapsed" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                Prev
                                            </a>
                                            <a href="#" class="btn btn-primary ms-2 collapsed" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                                Next
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- accordion item -->
                                <div class="accordion-item py-4">
                                    <a href="#" class="text-inherit h5 collapsed" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                        <i class="feather-icon icon-credit-card me-2 text-muted"></i>
                                        Payment Method
                                        <!-- collapse -->
                                    </a>
                                    <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample" style="">
                                        <div class="mt-5">
                                            <div>
                                                <div class="card card-bordered shadow-none mb-2">
                                                    <!-- card body -->
                                                    <div class="card-body p-6">
                                                        <div class="d-flex">
                                                            <div class="form-check">
                                                                <!-- checkbox -->
                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="paypal">
                                                                <label class="form-check-label ms-2" for="paypal"></label>
                                                            </div>
                                                            <div>
                                                                <!-- title -->
                                                                <h5 class="mb-1 h6">Payment with Paypal</h5>
                                                                <p class="mb-0 small">You will be redirected to PayPal website to complete your purchase securely.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- card -->
                                                <div class="card card-bordered shadow-none mb-2">
                                                    <div class="card-body p-6">
                                                        <div class="d-flex">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="payoneer">
                                                                <label class="form-check-label ms-2" for="payoneer"></label>
                                                            </div>
                                                            <div>
                                                                <h5 class="mb-1 h6">Pay with Payoneer</h5>
                                                                <p class="mb-0 small">You will be redirected to Payoneer website to complete your purchase securely.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Button -->
                                                <div class="mt-5 d-flex justify-content-end">
                                                    <a href="#" class="btn btn-outline-gray-400 text-muted collapsed" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                                    Prev
                                                    </a>
                                                    <a href="#" class="btn btn-primary ms-2">Place Order</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-12 offset-xl-1 col-xl-4 col-lg-6">
                        <div class="mt-4 mt-lg-0">
                            <div class="card shadow-sm">
                                <h5 class="px-6 py-4 bg-transparent mb-0">Order Details</h5>
                                <ul class="list-group list-group-flush">
                                    <!-- list group item -->
                                    <li class="list-group-item px-4 py-3">
                                        <div class="row align-items-center">
                                            <div class="col-2 col-md-2">
                                                <img src="../assets/images/products/product-img-1.jpg" alt="Ecommerce" class="img-fluid">
                                            </div>
                                            <div class="col-5 col-md-5">
                                                <h6 class="mb-0">Haldiram's Sev Bhujia</h6>
                                                <span><small class="text-muted">.98 / lb</small></span>
                                            </div>
                                            <div class="col-2 col-md-2 text-center text-muted">
                                                <span>1</span>
                                            </div>
                                            <div class="col-3 text-lg-end text-start text-md-end col-md-3">
                                                <span class="fw-bold">$5.00</span>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- list group item -->
                                    <li class="list-group-item px-4 py-3">
                                        <div class="row align-items-center">
                                            <div class="col-2 col-md-2">
                                                <img src="../assets/images/products/product-img-2.jpg" alt="Ecommerce" class="img-fluid">
                                            </div>
                                            <div class="col-5 col-md-5">
                                                <h6 class="mb-0">NutriChoice Digestive</h6>
                                                <span><small class="text-muted">250g</small></span>
                                            </div>
                                            <div class="col-2 col-md-2 text-center text-muted">
                                                <span>1</span>
                                            </div>
                                            <div class="col-3 text-lg-end text-start text-md-end col-md-3">
                                                <span class="fw-bold">$20.00</span>
                                                <div class="text-decoration-line-through text-muted small">$26.00</div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- list group item -->
                                    <li class="list-group-item px-4 py-3">
                                        <div class="row align-items-center">
                                            <div class="col-2 col-md-2">
                                                <img src="../assets/images/products/product-img-3.jpg" alt="Ecommerce" class="img-fluid">
                                            </div>
                                            <div class="col-5 col-md-5">
                                                <h6 class="mb-0">Cadbury 5 Star Chocolate</h6>
                                                <span><small class="text-muted">1 kg</small></span>
                                            </div>
                                            <div class="col-2 col-md-2 text-center text-muted">
                                                <span>1</span>
                                            </div>
                                            <div class="col-3 text-lg-end text-start text-md-end col-md-3">
                                                <span class="fw-bold">$15.00</span>
                                                <div class="text-decoration-line-through text-muted small">$20.00</div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- list group item -->
                                    <li class="list-group-item px-4 py-3">
                                        <div class="row align-items-center">
                                            <div class="col-2 col-md-2">
                                                <img src="../assets/images/products/product-img-4.jpg" alt="Ecommerce" class="img-fluid">
                                            </div>
                                            <div class="col-5 col-md-5">
                                                <h6 class="mb-0">Onion Flavour Potato</h6>
                                                <span><small class="text-muted">250g</small></span>
                                            </div>
                                            <div class="col-2 col-md-2 text-center text-muted">
                                                <span>1</span>
                                            </div>
                                            <div class="col-3 text-lg-end text-start text-md-end col-md-3">
                                                <span class="fw-bold">$15.00</span>
                                                <div class="text-decoration-line-through text-muted small">$20.00</div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- list group item -->
                                    <li class="list-group-item px-4 py-3">
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <div>Item Subtotal</div>
                                            <div class="fw-bold">$70.00</div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                Service Fee
                                                <i class="feather-icon icon-info text-muted" data-bs-toggle="tooltip" aria-label="Default tooltip" data-bs-original-title="Default tooltip"></i>
                                            </div>
                                            <div class="fw-bold">$3.00</div>
                                        </div>
                                    </li>
                                    <!-- list group item -->
                                    <li class="list-group-item px-4 py-3">
                                        <div class="d-flex align-items-center justify-content-between fw-bold">
                                            <div>Subtotal</div>
                                            <div>$73.00</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?= $this->endSection(); ?>