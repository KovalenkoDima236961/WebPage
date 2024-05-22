<?php include "configuration/config.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $lang['title'] ?></title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/nav.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
</head>

<body data-theme="<?php echo $theme; ?>">
<?php  require 'nav.php';?>
<main>
    <section class="header-content">
        <h1 class="header-content-title">Iphone XR</h1>
        <p class="header-content-subtitle">Unbelievably thin. Incredibly powerful.</p>
        <div class="button">
            <a href="allaboutthephone.php" class="header-content-btn"><?php echo $lang['learn']?></a>
            <a href="#" class="header-content-btn">Buy</a>
        </div>
    </section>

    <section class="parallax">
        <div class="parallax-content">
            <h2>Discover the Iphone XR</h2>
            <p>Experience the parallax effect.</p>
        </div>
    </section>

    <section class="information">
        <p class="text"><?php echo $lang['description']; ?></p>
    </section>
</main>
<?php  require 'footer.php';?>
<script src="scripts/main.js"></script>
</body>
</html>
