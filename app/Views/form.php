<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check License</title>
</head>
<body>
    <h1>Check License</h1>
    <form action="<?= base_url('cekval') ?>" method="post">
        <label for="domain">Domain:</label><br>
        <input type="text" id="domain" name="domain"><br>
        <label for="license_key">License Key:</label><br>
        <input type="text" id="license_key" name="license_key"><br><br>
        <button type="submit">Check</button>
    </form>
</body>
</html>
