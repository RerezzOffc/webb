<?php
// /views/profile.php
session_start();
include('../includes/db.php');
include('../includes/config.php');

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM users WHERE id = '$user_id'";
$result = $conn->query($sql);
$user = $result->fetch_assoc();
?>

<h1>Profil Pengguna</h1>
<p>Username: <?php echo $user['username']; ?></p>
<p>Email: <?php echo $user['email']; ?></p>
<p>Domain Custom: <?php echo $user['domain_custom']; ?></p>
