<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate License</title>
</head>
<body>
    <h1>Generate License</h1>
    <form action="<?= base_url('generate') ?>" method="post">
        <label for="domain">Domain:</label><br>
        <input type="text" name="domain" required/><br>
        <button type="submit">Generate</button>
    </form>
</body>
</html>
