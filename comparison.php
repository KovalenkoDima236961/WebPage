<?php include "configuration/config.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $lang['comparison'] ?></title>
    <link rel="stylesheet" href="css/comparison.css">
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
    <section class="section">
        <div class="photo-phone">
            <img class="photo" src="img/Photo-1.jpg" alt="phone">
            <div class="price">
                <h4 class="price-color"><?php echo $lang['price'] ?></h4>
            </div>
            <div class="buttom">
                <a href="https://www.amazon.com/Apple-iPhone-Fully-Unlocked-128/dp/B07P976BBH" class="header-content-btn"><?php echo $lang['buy'] ?></a>
            </div>
        </div>
        <div>
            <table border = "1" cellpadding = "5">
                <tr>
                    <th>
                        <h1 class="char"><?php echo $lang['characteristics'] ?></h1>
                        <p><?php echo $lang['charac1'] ?>
                        </p>
                    </th>
                </tr>
                <tr>
                    <th>
                        <h2 class="char"><?php echo $lang['screen'] ?></h2>
                        <p><?php echo $lang['charac2'] ?>
                        </p>
                    </th>
                </tr>
                <tr>
                    <th>
                        <h2 class="char"><?php echo $lang['camera'] ?></h2>
                        <p><?php echo $lang['charac3'] ?>
                        </p>
                    </th>
                </tr>
                <tr>
                    <th>
                        <h2 class="char"><?php echo $lang['power'] ?></h2>
                        <p>
                            <?php echo $lang['charac4'] ?>
                        </p>
                    </th>
                </tr>
                <tr>
                    <th>
                        <h2 class="char"><?php echo $lang['memory'] ?></h2>
                        <p>
                            <?php echo $lang['charac5'] ?>
                        </p>
                    </th>
                </tr>
                <tr>
                    <th>
                        <h2 class="char"><?php echo $lang['selfie'] ?></h2>
                        <p>
                            <?php echo $lang['charac6'] ?>
                        </p>
                    </th>
                </tr>
            </table>
        </div>
    </section>
    <section class="section-2">
        <div class="photo-phone-2">
            <img class="photo-2" src="img/Samsung-1.jpg" alt="Samsung">
            <div class="price-2">
                <h4 class="price-color-2">$260.00</h4>
            </div>
            <div class="buttom-2">
                <a href="https://www.amazon.com/Samsung-Unlocked-Straight-SM-M325FV-DS/dp/B09Z6ZF9VS/ref=sr_1_2?crid=3Q579Q88329GQ&keywords=Samsung+m32&qid=1670782701&sprefix=samsung+m32%2Caps%2C354&sr=8-2" class="header-content-btn-2"><?php echo $lang['buy'] ?></a>
            </div>
        </div>
        <div>
            <h2>
                <?php echo $lang['characteristics'] ?>
            </h2>
            <h3><?php echo $lang['display'] ?></h3>
            <p><?php echo $lang['charac7'] ?></p>
            <h3><?php echo $lang['sim'] ?></h3>
            <p><?php echo $lang['charac8'] ?></p>
            <h3><?php echo $lang['memoryfunctions'] ?></h3>
            <p><?php echo $lang['charac9'] ?>
            </p>
            <h3><?php echo $lang['operatingsystem'] ?></h3>
            <p><?php echo $lang['charac10'] ?></p>
            <h3><?php echo $lang['front'] ?></h3>
            <p><?php echo $lang['charac11'] ?>
            </p>
            <h3><?php echo $lang['processor'] ?></h3>
            <p><?php echo $lang['charac12'] ?></p>
            <h3><?php echo $lang['camera'] ?></h3>
            <p><?php echo $lang['charac13'] ?></p>
            <h3><?php echo $lang['power'] ?></h3>
            <p><?php echo $lang['charac14'] ?></p>
        </div>
    </section>
</main>
<?php require 'footer.php'; ?>
<script src="scripts/main.js"></script>
</body>

</html>

