<?php

session_start();

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}

?>

<h2>Selamat Datang</h2>

<p>
Nama:
<?php echo $_SESSION['nama']; ?>
</p>

<p>
Email:
<?php echo $_SESSION['email']; ?>
</p>

<a href="logout.php">Logout</a>