<?php include "configuration/config.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register_title</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/nav.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/registration.css">
</head>

<body data-theme="<?php echo $theme; ?>">
<?php require 'nav.php'; ?>
<main>
    <section class="header-content">
        <h1 class="header-content-title">register</h1>
        <p class="header-content-subtitle">register_subtitle</p>
        <div class="register-form">
            <form action="registration.php" method="post">
                <input type="text" name="username" placeholder="username" required>
                <input type="email" name="email" placeholder="email" required>
                <input type="password" name="password" placeholder="password" required>
                <input type="password" name="confirm_password" placeholder="confirm_password" required>
                <button type="submit" name="submit" class="header-content-btn">register_btn></button>
            </form>
        </div>
    </section>
</main>
<?php require 'footer.php'; ?>
<script src="scripts/main.js"></script>
</body>
</html>

<?php

global $pdo;

if(isset($_POST['submit'])){
    if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm_password'])){
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        if($password != $confirm_password){
            echo "<script>alert('Password did not match');</script>";
        } else {
            $hash = password_hash($password, PASSWORD_BCRYPT);
            $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
            $query = $pdo->prepare($sql);
            $query->bindParam(':username', $username);
            $query->bindParam(':email', $email);
            $query->bindParam(':password', $hash);

            if($query->execute()){
                $_SESSION['loggedIn'] = true;
                header("Location: mainPage.php");
                exit(); // Ensure no further code is executed
            } else {
                echo "Registration failed, please try again.";
            }
        }
    } else {
        echo "All fields are required";
    }
}

// Close the database connection
$pdo = null;

?>