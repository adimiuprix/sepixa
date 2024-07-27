<?= $this->extend('partialls/layout') ?>
<?= $this->section('content') ?>
<main>
    <section class="my-lg-12 my-8">
        <div class="container">
            <div class="col-12 col-md-12">
                <div class="mb-5">
                    <h1 class="mb-1 h2 fw-bold">Check product license</h1>
                </div>
                <form action="<?= base_url('cekval') ?>" method="post" class="needs-validation">
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label visually-hidden">Domain</label>
                            <input type="text" id="domain" name="domain" class="form-control" placeholder="Domain" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label visually-hidden">License</label>
                            <input type="text" id="license_key" name="license_key" class="form-control" placeholder="License" required>
                        </div>
                        <div class="col-12 d-grid">
                            <button type="submit" class="btn btn-primary">Check</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
<?= $this->endSection(); ?>