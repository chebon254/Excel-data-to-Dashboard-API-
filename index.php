<?php
require_once 'db.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Retrieve user information from the database
    $user = getUserByUsername($username);

    // Check if the user exists and the password is correct
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        $errorMessage = "Invalid username or password. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="icon shortcut" href="css/img/Cretiv Favicon White.png">
    <link rel="stylesheet" href="css/style.css">

    <!-- == Font == -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- == Icons == -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        crossorigin="anonymous" />
</head>
<body>
    <main>
        <div class="container">
            <div class="form">
                <form action="" method="POST">
                    <div class="form-control">
                        <h1>Login</h1>
                        <p>Access your account.</p>
                        <div class="message">
                          <span>
                            <?php if (isset($errorMessage)) : ?>
                                <p style="color: red;"><?php echo $errorMessage; ?></p>
                            <?php endif; ?>
                          </span>
                        </div>
                    </div>
                    <div class="form-control">
                        <label for="username">Username</label>
                        <br>
                        <br>
                        <input type="text" name="username" placeholder="Enter name">
                    </div>
                    <div class="form-control">
                        <label for="password">Password</label>
                        <br>
                        <br>
                        <input type="password" name="password" placeholder="Enter password">
                    </div>
                    <div class="form-control">
                        <button type="submit">Log In</button>
                    </div>
                    <div class="form-control">
                        <p class="account-related">Don't have an account?<a href="register.php">Create An Account</a></p>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <script src="js/script.js"></script>
</body>
</html>