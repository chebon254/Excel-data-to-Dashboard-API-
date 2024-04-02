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
            <div class="breadcrumb" style="margin: 16px 0px !important;">
                <a href="dashboard.php" id="breadcrumb-link" style="font-size: 16px; font-weight: 600; color: #25213B; padding: 10px 0px !important;"><i class="fa-solid fa-arrow-left"></i>  Go back</a>
            </div>
            <div class="table">
                <h2>Unilevel Matrix</h2>
                <div id="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody data-sheetdb-url="https://sheetdb.io/api/v1/uzigdmdh0ipy5">
                            <tr>
                                <td>{{cell_one}}</td>
                                <td>{{cell_two}}</td>
                                <td>{{cell_three}}</td>
                                <td>{{cell_four}}</td>
                                <td>{{cell_five}}</td>
                                <td>{{cell_six}}</td>
                                <td>{{cell_seven}}</td>
                                <td>{{cell_eight}}</td>
                                <td>{{cell_nine}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <script src="js/script.js"></script>
    <script src="https://sheetdb.io/handlebars.js"></script>
</body>
</html>