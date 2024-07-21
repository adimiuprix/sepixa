<?= $this->extend('partialls/layout') ?>
<?= $this->section('content') ?>
<main>
    <!-- section -->
    <section class="my-lg-14 my-8">
        <div class="container">
            <!-- row -->
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-md-6 col-lg-4 order-lg-1 order-2">
                    <!-- img -->
                    <img src="<?= theme('images/svg-graphics/signin-g.svg')?>" alt="" class="img-fluid">
                </div>
                <!-- col -->
                <div class="col-12 col-md-6 offset-lg-1 col-lg-4 order-lg-2 order-1">
                    <div class="mb-lg-9 mb-5">
                        <h1 class="mb-1 h2 fw-bold">Sign in to FreshCart</h1>
                        <p>Welcome back to FreshCart! Enter your email to get started.</p>
                    </div>
                    <form action="login" method="post" class="needs-validation">
                        <div class="row g-3">
                            <!-- row -->
                            <div class="col-12">
                                <!-- input -->
                                <label class="form-label visually-hidden">Email address</label>
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                                <div class="invalid-feedback">Please enter email.</div>
                            </div>
                            <div class="col-12">
                                <!-- input -->
                                <div class="password-field position-relative">
                                    <label class="form-label visually-hidden">Password</label>
                                    <div class="password-field position-relative">
                                        <input type="password" name="password" class="form-control fakePassword" placeholder="*****" required>
                                        <div class="invalid-feedback">Please enter password.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    Forgot password?
                                    <a href="forgot-password">Reset It</a>
                                </div>
                            </div>
                            <!-- btn -->
                            <div class="col-12 d-grid">
                                <button type="submit" class="btn btn-primary">Sign In</button>
                            </div>
                            <!-- link -->
                            <div>
                                Don’t have an account?
                                <a href="signup">Sign Up</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<?= $this->endSection(); ?>