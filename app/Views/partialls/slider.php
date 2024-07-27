<section class="mt-8">
    <div class="container">
        <div class="hero-slider">
            <?php foreach($sliders as $slider): ?>
            <div style="background: url(<?= render('slider', $slider->image); ?>) no-repeat; background-size: cover; border-radius: 0.5rem; background-position: center">
                <div class="ps-lg-12 py-lg-16 col-xxl-5 col-md-7 py-14 px-8 text-xs-center">
                    <h2 class="text-dark display-5 fw-bold mt-4"><?= $slider->title; ?></h2>
                    <p class="lead"><?= $slider->content; ?></p>
                    <a href="<?= $slider->direct_to; ?>" class="btn btn-dark mt-3">
                        Shop Now
                        <i class="feather-icon icon-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>