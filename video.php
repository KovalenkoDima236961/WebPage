<?php include 'configuration/config.php'; ?>

    <!DOCTYPE html>
    <html lang="en">

<head>
    <title><?php echo $lang['video'] ?></title>
    <link rel="stylesheet" href="css/video-style.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <meta name="viewport" content="width=device-width">
</head>
<body data-theme="<?php echo $theme; ?>">
<?php require 'nav.php'; ?>
<main>
    <div class="header-content">
        <h1 class="header-content-title">Apple Iphone Xr 128 GB </h1>
    </div>
    <section class="section" style="background-color: pink">
        <div class="photo-phone">
            <img class="photo" src="/img/Photo-1.jpg" alt="mobil">
            <div class="price">
                <h4 class="price-color"><?php echo $lang['price'] ?></h4>
            </div>
            <div class="buttom"><a href="https://www.amazon.com/Apple-iPhone-Fully-Unlocked-128/dp/B07P976BBH" class="header-content-btn"><?php echo $lang['buy'] ?></a>
            </div>
        </div>
        <div>
            <iframe class="video" src="video/for-me.mp4" allowfullscreen></iframe>
        </div>

    </section>
</main>
<?php require 'footer.php'; ?>
<script src="scripts/main.js"></script>
</body>
</html>
