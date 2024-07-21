<?= $this->extend('partialls/layout') ?>
<?= $this->section('content') ?>

<main>
    <!-- section -->
    <section class="mb-lg-14 mb-8 mt-8">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-12">
                    <!-- card -->
                    <div class="card py-1 border-0 mb-8">
                        <div>
                            <h1 class="fw-bold">Shop Cart</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row -->
            <div class="col-lg-12 col-md-12">
                <div class="py-3">

                    <ul class="list-group list-group-flush">
                        <?php foreach ($cart->contents() as $items): ?>
                        <input type="hidden" value="<?= $items['rowid'];?>" name="row_id">
                        <!-- list group -->
                        <li class="list-group-item py-3 ps-0 border-top">
                            <!-- row -->
                            <div class="row align-items-center">
                                <div class="col-6 col-md-6 col-lg-7">
                                    <div class="d-flex">
                                        <img src="<?= $imgcart . $items['image']; ?>" alt="Ecommerce" class="icon-shape icon-xxl">
                                        <div class="ms-3">
                                            <!-- title -->
                                            <a href="shop-single.html" class="text-inherit">
                                                <h6 class="mb-0"><?= $items['name']; ?></h6>
                                                <?php if ($cart->has_options($items['rowid']) == TRUE): ?>
                                                <p>
                                                    <?php foreach ($cart->product_options($items['rowid']) as $option_name => $option_value): ?> <strong><?php echo $option_name; ?>:</strong>
                                                    <?php echo $option_value; ?><br />
                                                    <?php endforeach; ?>
                                                </p>
                                                <?php endif; ?>
                                            </a>
                                            <!-- <span><small class="text-muted">.98 / lb</small></span> -->
                                            <!-- text -->
                                            <div class="mt-2 small lh-1">
                                                <a href="<?= base_url('remove_cart/' . $items['id']); ?>" data-id="<?= $items['id']; ?>" row-id="<?= $items['rowid']; ?>" class="remove-item text-decoration-none text-inherit">
                                                    <span class="me-1 align-text-bottom">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-success">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                                        </svg>
                                                    </span>
                                                    <span class="text-muted">Remove</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- input group -->

                                <!-- price -->
                                <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                                    <span class="fw-bold">$<?= $cart->format_number($items['subtotal'], 2); ?></span>
                                </div>
                            </div>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="d-flex justify-content-between mt-4">
                        <a href="<?= base_url('products')?>" class="btn btn-primary">Continue Shopping</a>
                        <form action="<?= base_url('checkout'); ?>" method="get">
                            <button type="submit" class="btn btn-dark">Checkout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?= $this->endSection(); ?>