<?php include "configuration/config.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/nav.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body data-theme="<?php echo $theme; ?>">
<?php require 'nav.php'; ?>
<main>
    <section class="header-content">
        <h1 class="header-content-title">Login</h1>
        <p class="header-content-subtitle">login_subtitle</p>
        <div class="login-form">
            <form action="login.php" method="post">
                <input type="text" name="username" placeholder="username" required>
                <input type="password" name="password" placeholder="password" required>
                <button name="submit" type="submit" class="header-content-btn">login_btn</button>
            </form>
        </div>
    </section>
</main>
<?php require 'footer.php'; ?>
<script src="scripts/main.js"></script>
</body>
</html>


<?php
    require "configuration/setup.php";
    if (isset($_POST["submit"])) {
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
            $password = $_POST['password'];

            $sql = "SELECT * FROM users WHERE username = :username";
            $query = $pdo->prepare($sql);
            $query->bindParam(':username', $username);
            $query->execute();

            $user = $query->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($password, $user['password'])) {
                $user_current = new User($username,$password);
                $_SESSION['loggedIn'] = true;
                $_SESSION['user'] = $user_current;
                header("Location: mainPage.php");
                exit();
            } else {
                echo "<script>alert('Invalid username or password');</script>";
            }
        } else {
            echo "All fields are required";
        }
    }

?>