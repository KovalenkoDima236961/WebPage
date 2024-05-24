<?php include "configuration/config.php"; ?>
<?php include 'configuration/setup.php'; ?>

<?php
if (isset($_POST['post_comment'])) {
    global $pdo;

    $name = $_POST['name'];
    $message = $_POST['message'];

    $sql = "INSERT INTO comments (name, message) VALUES (:name, :message)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':message', $message);

    if ($stmt->execute()) {
//        echo "Comment posted successfully";
    } else {
        echo "Error: " . $stmt->errorInfo()[2];
    }
}
?>



<!DOCTYPE html>
    <html lang="en">

<head>
    <title><?php echo $lang['reviews'] ?></title>
    <link rel="stylesheet" href="css/reviews.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <meta name="viewport" content="width=device-width, intial-scale =1.0">
</head>
<body data-theme="<?php echo $theme; ?>">
<?php require 'nav.php'; ?>
<main>
    <section class="testimonials">
        <div class="testimonial-heading">
            <span><?php echo $lang['comments'] ?></span>
            <h1><?php echo $lang['clients'] ?></h1>
        </div>
        <div class="testimonial-box-container">
            <div class="testimonial-box">
                <div class="box-top">
                    <div class="profile">
                        <div class="profile-img">
                            <img src="img/orange.gif" alt="orange">
                        </div>
                        <div class="name-user">
                            <strong>Yevgeny Malushkov</strong>
                            <span>Yevgeny Malushkov@gmail.com</span>
                        </div>
                    </div>
                </div>
                <div class="client-comment">
                    <p><?php echo $lang['comment1'] ?>
                    </p>
                </div>
            </div>
            <div class="testimonial-box">
                <div class="box-top">
                    <div class="profile">
                        <div class="profile-img">
                            <img src="img/orange.gif" alt="orange">
                        </div>
                        <div class="name-user">
                            <strong>Arthur L</strong>
                            <span>Arthur L@gmail.com</span>
                        </div>
                    </div>
                </div>
                <div class="client-comment">
                    <p><?php echo $lang['comment2'] ?>
                    </p>
                </div>
            </div>
            <div class="testimonial-box">
                <div class="box-top">
                    <div class="profile">
                        <div class="profile-img">
                            <img src="img/orange.gif" alt="orange">
                        </div>
                        <div class="name-user">
                            <strong>Vladyslav Radutny</strong>
                            <span>Vladyslav Radutny@gmail.com</span>
                        </div>
                    </div>
                </div>
                <div class="client-comment">
                    <p><?php echo $lang['comment3'] ?>
                    </p>
                </div>
            </div>

            <div class="testimonial-box">
                <div class="box-top">
                    <div class="profile">
                        <div class="profile-img">
                            <img src="img/orange.gif" alt="orange">
                        </div>
                        <div class="name-user">
                            <strong>Andrey</strong>
                            <span>Andrey@gmail.com</span>
                        </div>
                    </div>
                </div>
                <div class="client-comment">
                    <p><?php echo $lang['comment4'] ?>
                    </p>
                </div>
            </div>

        </div>

    </section>
    <section class="section-2">
        <div class="wrapper">
            <form action="" method = "post" class="form">
                <input type="text" class="name" name="name" placeholder="<?php
                if(isset($_SESSION['user'])) {
                    echo $_SESSION['user']->getUsername();
                } else {
                    echo 'Enter name';
                } ?>">
                <br>
                <textarea name="message" cols="30" rows="10" class="message" placeholder="Message"></textarea>
                <br>
                <button type = "submit" class="btn" name = "post_comment">Post Comment</button>
            </form>
        </div>
        <div class="content">
            <?php
            global $pdo;

            $sql = "SELECT * FROM comments";
            $stmt = $pdo->query($sql);

            if ($stmt->rowCount() > 0) {
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                    <h3><?php echo htmlspecialchars($row['name']); ?></h3>
                    <p class="para"><?php echo htmlspecialchars($row['message']); ?></p>
                    <?php
                }
            }
            ?>
        </div>
    </section>
</main>
<?php require 'footer.php'; ?>
<script src="scripts/main.js"></script>
</body>
</html>
