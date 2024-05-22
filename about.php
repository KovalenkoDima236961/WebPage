<?php include "configuration/config.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $lang['about'] ?></title>
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/nav.css">
    <meta name="viewport" content="width=device-width">
</head>

<body data-theme="<?php echo $theme; ?>">
<?php require 'nav.php';?>
<main>
    <section class="about">
        <h1 class="about-me"><?php echo $lang['titleabout'] ?></h1>
    </section>
    <section class="Who-am-i">
        <h2 class="Who-am-i-1"><?php echo $lang['who'] ?></h2>
    </section>
    <section class="My-name">
        <p class="My-name-1"><?php echo $lang['description1'] ?></p>
    </section>
    <div class="Objective">
        <h2 class="Objective-1"><?php echo $lang['objective'] ?></h2>
    </div>
    <div class="Objective-3">
        <p class="Objective-2"><?php echo $lang['description2'] ?></p>
    </div>
    <section class="skills">
        <h2 class="skills-title">Skills</h2>
        <div class="cards">
            <div class="card">
                <h3 class="card-title">Web Development</h3>
                <p class="card-description">HTML, CSS, JavaScript</p>
            </div>
            <div class="card">
                <h3 class="card-title">Backend</h3>
                <p class="card-description">Java, PHP</p>
            </div>
            <div class="card">
                <h3 class="card-title">Databases</h3>
                <p class="card-description">MongoDB, PostgreSQL</p>
            </div>
            <div class="card">
                <h3 class="card-title">Tools & Platforms</h3>
                <p class="card-description">Git, AWS</p>
            </div>
        </div>
    </section>
</main>
<?php require 'footer.php';?>
<script src="scripts/about.js"></script>

</body>

</html>
