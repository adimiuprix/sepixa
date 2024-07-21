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
             <div class="row">
                 <div class="col-lg-8 col-md-7">
                     <div class="py-3">
                         <ul class="list-group list-group-flush">
                             <?php foreach ($cart->contents() as $items): ?>
                             <input type="hidden" value="<?= $items['rowid'];?>" name="row_id">
                             <!-- list group -->
                             <li class="list-group-item py-3 ps-0 border-top">
                                 <!-- row -->
                                 <div class="row align-items-center">
                                    <form action="<?= base_url('update_cart/' . $items['rowid']);?>" method="get">
                                        <div class="row">
                                            <div class="col-4 col-md-6 col-lg-6">
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
                                            <div class="col-4 col-md-4 col-lg-3">
                                                <div class="input-group input-spinner">
                                                    <input type="button" value="-" class="button-minus btn btn-sm" data-field="quantity">
                                                    <input type="number" step="1" value="<?php echo $items['qty'] ?>" name="quantity" class="quantity-field form-control-sm form-input">
                                                    <input type="button" value="+" class="button-plus btn btn-sm" data-field="quantity">
                                                    <button type="submit" class="btn btn-primary btn-sm">Update</button>
                                                </div>
                                            </div>
                                            <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                                                <span class="fw-bold">$<?= $cart->format_number($items['subtotal'], 2); ?></span>
                                            </div>
                                        </div>
                                    </form>

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
                 <div class="col-12 col-lg-4 col-md-5">
                     <div class="mb-5 card mt-6">
                         <div class="card-body p-6">
                             <!-- heading -->
                             <h2 class="h5 mb-4">Summary</h2>
                             <div class="card mb-2">
                                 <!-- list group -->
                                 <ul class="list-group list-group-flush">
                                     <!-- list group item -->
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="me-auto">
                                            <div class="fw-bold">Total item</div>
                                        </div>
                                        <span class="fw-bold"><?php echo $tot_item_cart; ?> pcs</span>
                                    </li>

                                     <li class="list-group-item d-flex justify-content-between align-items-start">
                                         <div class="me-auto">
                                             <div class="fw-bold">Subtotal</div>
                                         </div>
                                         <span class="fw-bold">$<?php echo $cart->format_number($cart->total()); ?></span>
                                     </li>
                                 </ul>
                             </div>
                            <form action="<?= base_url('checkout'); ?>" method="get">
                                <div class="d-grid mb-1 mt-4">
                                    <button class="btn btn-primary btn-lg d-flex justify-content-between align-items-center" type="submit">
                                        Go to Checkout
                                        <span class="fw-bold">$<?php echo $cart->format_number($cart->total()); ?></span>
                                    </button>
                                </div>
                            </form>
                            <p>
                                 <small>
                                 By placing your order, you agree to be bound by the Freshcart
                                 <a href="#!">Terms of Service</a>
                                 and
                                 <a href="#!">Privacy Policy.</a>
                                 </small>
                            </p>
                             <!-- heading -->
                             <div class="mt-8">
                                 <h2 class="h5 mb-3">Add Promo or Gift Card</h2>
                                 <form>
                                     <div class="mb-2">
                                         <label class="form-label sr-only">Email address</label>
                                         <input type="text" class="form-control" id="giftcard" placeholder="Promo or Gift Card" readonly>
                                     </div>
                                     <!-- btn -->
                                     <div class="d-grid"><button type="submit" class="btn btn-outline-dark mb-1">Redeem</button></div>
                                     <p class="text-muted mb-0"><small>Terms &amp; Conditions apply</small></p>
                                 </form>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
        </div>
    </section>
</main>
<?= $this->endSection(); ?>