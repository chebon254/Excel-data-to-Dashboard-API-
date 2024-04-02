<?php
session_start();

// Check if the user is not logged in, redirect to login page
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="icon shortcut" href="css/img/Cretiv Favicon White.png">
    <link rel="stylesheet" href="css/style.css">

    <!-- == Font == -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- == Icons == -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" crossorigin="anonymous" />
</head>
<body>
    <nav>
        <div class="container">
            <div class="logged-user">
                <span>Hi, </span>
                <span><?php echo $_SESSION['username']; ?></span>
            </div>
            <div class="logged-user">
                <a href="logout.php">Logout?</a>
            </div>
        </div>
    </nav>
    <main>
        <div class="container">
            <table class="dashboard-table">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Sheet</th>
                    <th>Link</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Binary MLM</td>
                    <td><a href="Binary MLM.php"><i class="fa-regular fa-eye"></i> View Sheet</a></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Forced_Matrix</td>
                    <td><a href="Forced_Matrix.php"><i class="fa-regular fa-eye"></i> View Sheet</a></td>
                  </tr>
                  <tr class="link-row">
                    <td>3</td>
                    <td>Unilevel Matrix</td>
                    <td><a href="Unilevel Matrix.php"><i class="fa-regular fa-eye"></i> View Sheet</a></td>
                  </tr>
                  <div class="last">
                    <td></td>
                    <td></td>
                    <td></td>
                  </div>
                </tbody>
              </table>
        </div>
    </main>
    <script src="js/script.js"></script>
</body>
</html>