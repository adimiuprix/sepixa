<?= $this->extend('partialls/layout') ?>
<?= $this->section('content') ?>
<main>
    <?= $this->include('fragment/slider');?>

    <!-- Category Section Start-->
    <section class="mb-lg-10 mt-lg-14 my-8">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-6">
                    <h3 class="mb-0">Categories</h3>
                </div>
            </div>
            <div class="category-slider">
                <?php foreach($categories as $category): ?>
                <div class="item">
                    <a href="<?= base_url('category/'.$category->slug) ; ?>" class="text-decoration-none text-inherit">
                        <div class="card card-product mb-lg-4">
                            <div class="card-body text-center py-8">
                                <img src="<?= render('category', $category->image) ?>" alt="category" class="mb-3 img-fluid" />
                                <div class="text-truncate">
                                    <?= $category->name; ?>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- Category Section End-->

    <!-- All Products Start-->
    <section class="my-lg-14 my-8">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-6">
                    <h3 class="mb-0">All Products</h3>
                </div>
            </div>
            <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-3">
                <?php foreach($products as $product): ?>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="card card-product">
                        <div class="card-body">
                            <div class="text-center position-relative">
                                <div class="position-absolute top-0 start-0">
                                    <span class="badge bg-danger">Sale</span>
                                </div>
                                <a href="">
                                    <img src="<?= render('product', $product->image) ; ?>" alt="image-pcs" class="mb-3 img-fluid" />
                                </a>
                                <div class="card-product-action">
                                    <a href="" class="btn-action">
                                        <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="text-small mb-1">
                                <a href="" class="text-decoration-none text-muted">
                                    <small><?= $product->category_name ; ?></small>
                                </a>
                            </div>
                            <h2 class="fs-6">
                                <a href="" class="text-inherit text-decoration-none">
                                <?= $product->product_name ; ?>
                                </a>
                            </h2>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div>
                                    <span class="text-dark"><?= $product->price ; ?></span>
                                </div>
                                <div>
                                    <a href="#!" class="btn btn-primary btn-sm">
                                        Buy
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- All Products End-->

    <section class="my-lg-14 my-8">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="mb-8 mb-xl-0">
                        <div class="mb-6"><img src="<?= theme(''); ?>images/icons/clock.svg" alt="" /></div>
                        <h3 class="h5 mb-3">10 minute grocery now</h3>
                        <p>Get your order delivered to your doorstep at the earliest from FreshCart pickup stores near you.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="mb-8 mb-xl-0">
                        <div class="mb-6"><img src="<?= theme(''); ?>images/icons/gift.svg" alt="" /></div>
                        <h3 class="h5 mb-3">Best Prices & Offers</h3>
                        <p>Cheaper prices than your local supermarket, great cashback offers to top it off. Get best pricess & offers.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="mb-8 mb-xl-0">
                        <div class="mb-6"><img src="<?= theme(''); ?>images/icons/package.svg" alt="" /></div>
                        <h3 class="h5 mb-3">Wide Assortment</h3>
                        <p>Choose from 5000+ products across food, personal care, household, bakery, veg and non-veg & other categories.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="mb-8 mb-xl-0">
                        <div class="mb-6"><img src="<?= theme(''); ?>images/icons/refresh-cw.svg" alt="" /></div>
                        <h3 class="h5 mb-3">Easy Returns</h3>
                        <p>
                            Not satisfied with a product? Return it at the doorstep & get a refund within hours. No questions asked
                            <a href="#!">policy</a>
                            .
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?= $this->endSection(); ?>