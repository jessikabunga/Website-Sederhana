<?php
include 'header.php';
include 'db.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$sql = "SELECT * FROM pameran";
$result = $conn->query($sql);
?>

<h2>Pameran Online</h2>
<ul>
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<li><a href='detail_karya.php?id=" . $row["id"] . "'>" . $row["judul_karya"] . "</a></li>";
        }
    } else {
        echo "Catalog kosong.";
    }
    ?>
</ul>

