<header id="header">
    <nav class="nav">
        <div class="logo-container">
            <a class="logo-link" href="/myWebPage/mainPage.php">
                <img class="logo-img" src="img/logo.svg" alt="logo">
            </a>
        </div>
        <div class="burger" id="burger">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <ul class="nav-list" id="nav-list">
            <li>
                <a class="nav-list-link" href="/myWebPage/allaboutthephone.php"><?php echo $lang['all']; ?></a>
            </li>
            <li>
                <a class="nav-list-link" href="/myWebPage/characteristics.php"><?php echo $lang['characteristics']; ?></a>
            </li>
            <li>
                <a class="nav-list-link" href="/myWebPage/review.php"><?php echo $lang['reviews']; ?></a>
            </li>
            <li>
                <a class="nav-list-link" href="/myWebPage/photo.php"><?php echo $lang['photo']; ?></a>
            </li>
            <li>
                <a class="nav-list-link" href="/myWebPage/video.php"><?php echo $lang['video']; ?></a>
            </li>
            <li>
                <a class="nav-list-link" href="/myWebPage/comparison.php"><?php echo $lang['comparison']; ?></a>
            </li>
            <li>
                <a class="nav-list-link" href="/myWebPage/about.php"><?php echo $lang['about']; ?></a>
            </li>
            <li>
                <button class="language-toggle" id="language-toggle">Slovak</button>
            </li>
            <li>
                <a class="theme-toggle" id="theme-toggle"><?php echo $theme === 'dark' ? 'Light' : 'Dark'; ?></a>
            </li>
        </ul>
    </nav>
    </header>
