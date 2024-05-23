<?php include "configuration/config.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $lang['characteristics'] ?></title>
    <link rel="stylesheet" href="css/characteristic.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/nav.css">
    <meta name="viewport" content="width=device-width">
</head>

<body data-theme="<?php echo $theme; ?>">
<?php require "nav.php" ?>
<main>
    <div class="header-content">
        <h1 class="header-content-title">Apple iPhone XR 128 GB</h1>
    </div>
    <section class="section">
        <div class="photo-phone">
            <img class="photo" src="gif/camera.gif" alt="Camera">
            <div class="price">
                <h4 class="price-color"><?php echo $lang['price'] ?></h4>
            </div>
            <div class="buttom">
                <a href="https://www.amazon.com/Apple-iPhone-Fully-Unlocked-128/dp/B07P976BBH" class="header-content-btn"><?php echo $lang['buy'] ?></a>
            </div>
        </div>
        <table border="1" cellpadding="4">
            <tr>
                <th>
                    <h1 class="char"><?php echo $lang['characteristics'] ?></h1>
                    <p style="color: black"><?php echo $lang['charac1'] ?></p>
                </th>
                <th>
                    <h2 class="char"><?php echo $lang['screen'] ?></h2>
                    <p style="color: black"><?php echo $lang['charac2'] ?></p>
                </th>
                <th>
                    <h2 class="char"><?php echo $lang['camera'] ?></h2>
                    <p style="color: black"><?php echo $lang['charac3'] ?></p>
                </th>
            </tr>
            <tr>
                <td>
                    <h2 class="char"><?php echo $lang['power'] ?></h2>
                    <p style="color: black"><?php echo $lang['charac4']?></p>
                </td>
                <td>
                    <h2 class="char"><?php echo $lang['memory'] ?></h2>
                    <p style="color: black"><?php echo $lang['charac5'] ?></p>
                </td>
                <td>
                    <h2 class="char"><?php echo $lang['selfie'] ?></h2>
                    <p style="color: black"><?php echo $lang['charac6'] ?></p>
                </td>
            </tr>
        </table>
    </section>
</main>
<?php require "footer.php";?>
<script src="scripts/main.js">
</script>
</body>

</html>
