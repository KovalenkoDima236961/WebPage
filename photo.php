<?php include "configuration/config.php"; ?>


    <!DOCTYPE html>
    <html lang="en">

<head>
    <title><?php echo $lang['photo'] ?></title>
    <link rel="stylesheet" href="css/photo.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <meta name="viewport" content="width=device-width">
</head>
<body data-theme="<?php echo $theme; ?>">
<?php require 'nav.php'; ?>
<main>
    <section>
        <?php require 'galeria.php'; ?>
    </section>
</main>
<?php require 'footer.php'; ?>
<script src="scripts/main.js"></script>
</body>
</html>
