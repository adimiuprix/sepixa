<?= $this->extend('partialls/layout') ?>
<?= $this->section('content') ?>
<main>
    <!-- section -->
    <section class="mb-lg-14 mb-8 mt-8">
        <div class="container">
            <!-- row -->
            <div class="row">

                <?= $this->include('partialls/all_categories');?>

                <div class="col-12 col-lg-9 col-md-8">

                    <div class="d-md-flex justify-content-between mb-3 align-items-center">
                        <div>
                            <p class="mb-3 mb-md-0">24 Products found</p>
                        </div>
                    </div>
                    <!-- row -->
                    <div class="row g-4 row-cols-xl-4 row-cols-lg-3 row-cols-2 row-cols-md-2 mt-2">
                        <?php foreach($products as $product):?>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="card card-product">
                                <div class="card-body">
                                    <div class="text-center position-relative">
                                        <div class="position-absolute top-0 start-0">
                                            <span class="badge bg-danger">Sale</span>
                                        </div>
                                        <a href="<?= base_url('product/' . $product->slug) ; ?>">
                                            <img src="<?= render('product', $product->image) ; ?>" alt="image-pcs" class="mb-3 img-fluid" />
                                        </a>
                                        <div class="card-product-action">
                                            <a href="<?= base_url('product/' . $product->slug) ; ?>" class="btn-action">
                                                <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="text-small mb-1">
                                        <a href="<?= base_url('product/' . $product->slug) ; ?>" class="text-decoration-none text-muted">
                                            <small><?= $product->category_name ; ?></small>
                                        </a>
                                    </div>
                                    <h2 class="fs-6">
                                        <a href="<?= base_url('product/' . $product->slug) ; ?>" class="text-inherit text-decoration-none">
                                        <?= $product->product_name ; ?>
                                        </a>
                                    </h2>
                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <div>
                                            <span class="text-dark"><?= $product->price ; ?></span>
                                        </div>
                                        <div>
                                            <a href="<?= base_url('product/' . $product->slug) ; ?>" class="btn btn-primary btn-sm">
                                                Buy
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- row -->
                    <div class="row mt-8">
                        <div class="col">
                            <!-- nav -->
                            <nav>
                                <ul class="pagination">
                                    <li class="page-item disabled">
                                        <a class="page-link mx-1" href="#" aria-label="Previous">
                                        <i class="feather-icon icon-chevron-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link mx-1 active" href="#">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link mx-1" href="#">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link mx-1" href="#">...</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link mx-1" href="#">12</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link mx-1" href="#" aria-label="Next">
                                        <i class="feather-icon icon-chevron-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>
<?= $this->endSection(); ?>