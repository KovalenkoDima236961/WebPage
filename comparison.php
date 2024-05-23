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
        <h1 class="header-content-title">Apple Iphone Xr 128 GB vs Samsung Galaxy M32</h1>
    </div>
    <section class="section">
        <div class="photo-comparison">
            <div class="photo-item">
                <img class="photo" src="img/Photo-1.jpg" alt="Apple Iphone Xr">
                <div class="price">
                    <h4 class="price-color"><?php echo $lang['price'] ?></h4>
                </div>
                <div class="buttom">
                    <a href="https://www.amazon.com/Apple-iPhone-Fully-Unlocked-128/dp/B07P976BBH" class="header-content-btn"><?php echo $lang['buy'] ?></a>
                </div>
            </div>
            <div class="photo-item">
                <img class="photo" src="img/Samsung-1.jpg" alt="Samsung Galaxy M32">
                <div class="price">
                    <h4 class="price-color-2">$260.00</h4>
                </div>
                <div class="buttom-2">
                    <a href="https://www.amazon.com/Samsung-Unlocked-Straight-SM-M325FV-DS/dp/B09Z6ZF9VS/ref=sr_1_2?crid=3Q579Q88329GQ&keywords=Samsung+m32&qid=1670782701&sprefix=samsung+m32%2Caps%2C354&sr=8-2" class="header-content-btn-2"><?php echo $lang['buy'] ?></a>
                </div>
            </div>
        </div>
        <table border="1" cellpadding="5">
            <thead>
            <tr>
                <th><?php echo $lang['characteristics'] ?></th>
                <th>Apple Iphone Xr 128 GB</th>
                <th>Samsung Galaxy M32</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th><?php echo $lang['display'] ?></th>
                <td><?php echo $lang['charac2'] ?></td>
                <td><?php echo $lang['charac7'] ?></td>
            </tr>
            <tr>
                <th><?php echo $lang['camera'] ?></th>
                <td><?php echo $lang['charac3'] ?></td>
                <td><?php echo $lang['charac13'] ?></td>
            </tr>
            <tr>
                <th><?php echo $lang['power'] ?></th>
                <td><?php echo $lang['charac4'] ?></td>
                <td><?php echo $lang['charac14'] ?></td>
            </tr>
            <tr>
                <th><?php echo $lang['memory'] ?></th>
                <td><?php echo $lang['charac5'] ?></td>
                <td><?php echo $lang['charac9'] ?></td>
            </tr>
            <tr>
                <th><?php echo $lang['selfie'] ?></th>
                <td><?php echo $lang['charac6'] ?></td>
                <td><?php echo $lang['charac11'] ?></td>
            </tr>
            <tr>
                <th><?php echo $lang['sim'] ?></th>
                <td><?php echo $lang['charac1'] ?></td>
                <td><?php echo $lang['charac8'] ?></td>
            </tr>
            <tr>
                <th><?php echo $lang['operatingsystem'] ?></th>
                <td><?php echo $lang['charac10'] ?></td>
                <td><?php echo $lang['charac10'] ?></td>
            </tr>
            <tr>
                <th><?php echo $lang['processor'] ?></th>
                <td><?php echo $lang['charac12'] ?></td>
                <td><?php echo $lang['charac12'] ?></td>
            </tr>
            </tbody>
        </table>
    </section>
</main>
<?php require 'footer.php'; ?>
<script src="scripts/main.js"></script>
</body>

</html>
