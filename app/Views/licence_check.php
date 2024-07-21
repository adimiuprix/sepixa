<?= $this->extend('partialls/layout') ?>
<?= $this->section('content') ?>
    <h1>Check License</h1>
    <form action="<?= base_url('cekval') ?>" method="post">
        <label for="domain">Domain:</label><br>
        <input type="text" id="domain" name="domain"><br>
        <label for="license_key">License Key:</label><br>
        <input type="text" id="license_key" name="license_key"><br><br>
        <button type="submit">Check</button>
    </form>
<?= $this->endSection(); ?>