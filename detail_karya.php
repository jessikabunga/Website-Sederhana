<?php
include 'db.php';
include 'header.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = $conn->prepare("SELECT * FROM pameran WHERE id = ?");
    $sql->bind_param("i", $id);
    $sql->execute();
    $result = $sql->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Karya tidak ditemukan.";
        exit();
    }
} else {
    echo "Karya tidak memiliki ID.";
    exit();
}
?>

<h2>Detail Karya</h2>
<p><b>Judul: </b><?php echo $row["judul_karya"]; ?></p>
<p><b>Tahun: </b> <?php echo $row["tahun_dibuat"]; ?></p>
<p><b>Deskripsi: </b><br> <?php echo $row["deskripsi"]; ?></p>
<a href="catalog.php">Kembali ke catalog</a>

