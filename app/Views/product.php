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
                        <div class="col">
                            <!-- card -->
                            <div class="card card-product">
                                <div class="card-body">
                                    <div class="text-center position-relative">
                                        <!-- badge -->
                                        <div class="position-absolute top-0 start-0">
                                            <span class="badge bg-danger">Sale</span>
                                        </div>
                                        <a href="#!">
                                            <!-- img -->
                                            <img src="../assets/images/products/product-img-1.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" />
                                        </a>
                                        <!-- btn action -->
                                        <div class="card-product-action">
                                            <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                            <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                                            </a>
                                            <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                            <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="text-small mb-1">
                                        <a href="#!" class="text-decoration-none text-muted"><small>Snack & Munchies</small></a>
                                    </div>
                                    <h2 class="fs-6">
                                        <a href="#!" class="text-inherit text-decoration-none">Haldiram's Sev Bhujia</a>
                                    </h2>
                                    <div>
                                        <!-- rating -->
                                        <small class="text-warning">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                        </small>
                                        <!-- text -->
                                        <span class="text-muted small">4.5(149)</span>
                                    </div>
                                    <!-- price -->
                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <div>
                                            <span class="text-dark">$18</span>
                                            <span class="text-decoration-line-through text-muted">$24</span>
                                        </div>
                                        <div>
                                            <!-- btn -->
                                            <a href="#!" class="btn btn-primary btn-sm">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="16"
                                                    height="16"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-plus">
                                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                                </svg>
                                                Add
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