<?php
include 'db.php';
include 'header.php';

if (isset($_SESSION['username'])){
    echo "<h2>Selamat datang di Pameran Online, " . $_SESSION['username'] . "!</h2>";
    
}