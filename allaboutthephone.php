<?php include "configuration/config.php";?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $lang['all'] ?></title>
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/allAboutThePhoneStyle.css">
    <meta name="viewport" content="width=device-width">
</head>

<body data-theme="<?php echo $theme; ?>">
<?php require 'nav.php';?>
<main>
    <section class="carousel">
        <button class="carousel-button prev">&#10094;</button>
        <div class="carousel-track-container">
            <ul class="carousel-track">
                <li class="carousel-slide current-slide">
                    <div class="card">
                        <img src="img/Photo-1.jpg" alt="iPhone XR" class="card-img">
                        <div class="card-content">
                            <h2 class="card-title">Apple iPhone XR 128 GB</h2>
                            <p class="card-description">Experience the advanced features and sleek design of the iPhone XR.</p>
                            <div class="card-buttons">
                                <a href="https://www.apple.com/" class="header-content-btn">learn</a>
                                <a href="https://www.amazon.com/Apple-iPhone-Fully-Unlocked-128/dp/B07P976BBH" class="header-content-btn"><?php echo $lang['buy'] ?></a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="carousel-slide">
                    <div class="card">
                        <img src="img/Photo-2.jpg" alt="iPhone XR Colors" class="card-img">
                        <div class="card-content">
                            <h2 class="card-title">color</h2>
                            <p class="card-description">Available in a variety of colors to suit your style.</p>
                            <div class="card-buttons">
                                <a href="https://www.apple.com/" class="header-content-btn">learn</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="carousel-slide">
                    <div class="card">
                        <img src="img/Photo-3.jpg" alt="iPhone XR Price" class="card-img">
                        <div class="card-content">
                            <h2 class="card-title"><?php echo $lang['price'] ?></h2>
                            <p class="card-description">Get the best deals on the iPhone XR.</p>
                            <div class="card-buttons">
                                <a href="https://www.amazon.com/Apple-iPhone-Fully-Unlocked-128/dp/B07P976BBH" class="header-content-btn"><?php echo $lang['buy'] ?></a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="carousel-slide">
                    <div class="card">
                        <img src="img/Photo-4.jpg" alt="More Information" class="card-img">
                        <div class="card-content">
                            <h2 class="card-title"><?php echo $lang['information'] ?></h2>
                            <p class="card-description"><?php echo $lang['info'] ?></p>
                            <div class="card-buttons">
                                <a href="https://www.apple.com/" class="header-content-btn"><?php echo $lang['page'] ?></a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <button class="carousel-button next">&#10095;</button>
    </section>
    <div class="media-section">
        <audio controls="controls" src="audio/iphone-11-pro.mp3"></audio>
        <audio controls="controls" src="audio/Summit-1.mp3"></audio>
        <audio controls="controls" src="audio/iphone_x_ringtone.mp3"></audio>
    </div>
    <div>
        <iframe class="video" src="video/new.MP4" allowfullscreen></iframe>
    </div>
</main>
<?php require 'footer.php';?>
<script src="scripts/carousel.js"></script>
<script src="scripts/main.js"></script>
</body>

</html>
