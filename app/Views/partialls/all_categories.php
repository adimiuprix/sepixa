<div class="col-12 col-lg-3 col-md-4 mb-4 mb-md-0">
                    <div>
                        <h3 class="mb-3">Other category</h3>
                        <ul class="nav flex-column nav-links">
                            <!-- nav item -->
                            <?php foreach($AllCategory as $alcat):?>
                            <li class="nav-item">
                                <a href="<?= base_url('category/' . $alcat->slug); ?>" class="nav-link"><?= $alcat->name; ?></a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>