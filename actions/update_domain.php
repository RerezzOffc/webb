<?php
// /actions/update_domain.php
session_start();
include('../includes/db.php');
include('../includes/config.php');

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $new_domain = $_POST['domain_custom'];
    $user_id = $_SESSION['user_id'];

    $sql = "UPDATE users SET domain_custom = '$new_domain' WHERE id = '$user_id'";

    if ($conn->query($sql) === TRUE) {
        echo "Domain custom berhasil diperbarui!";
        header('Location: profile.php');
    } else {
        echo "Terjadi kesalahan saat memperbarui domain.";
    }
}
?>

<form method="POST" action="">
    <input type="text" name="domain_custom" placeholder="Masukkan Domain Custom" required><br>
    <button type="submit">Perbarui</button>
</form>
