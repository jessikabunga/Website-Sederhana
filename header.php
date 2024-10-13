<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pameran Online</title>
    <style>
        .nav {
            background-color: #f2f2f2;
            padding: 10px;
        }
        .nav a {
            margin: 0 10px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="nav">
        <a href="index.php">Home</a>
        <a href="catalog.php">Catalog</a>
        <?php
        if (isset($_SESSION['username'])) {
            echo '<a href="logout.php">Logout</a>';
        } else {
            echo '<a href="login.php">Login</a>';
        }
        ?>
    </div>
