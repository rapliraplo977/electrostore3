<?php
session_start();
include "koneksi.php";

$error = "";

if(isset($_POST['login'])){

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    $query = mysqli_query(
        $conn,
        "SELECT * FROM users WHERE email='$email'"
    );

    if(mysqli_num_rows($query) > 0){

        $user = mysqli_fetch_assoc($query);

        if($password == $user['password']){

            $_SESSION['user_id'] = $user['id'];
            $_SESSION['nama'] = $user['nama'];
            $_SESSION['email'] = $user['email'];

            header("Location: index.php");
            exit();

        } else {
            $error = "Password salah!";
        }

    } else {
        $error = "Email tidak ditemukan!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login User</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background:#f4f6f9;
}

.login-container{
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
}

.login-box{
    width:400px;
    background:white;
    padding:30px;
    border-radius:10px;
    box-shadow:0 0 15px rgba(0,0,0,0.1);
}
</style>

</head>
<body>

<div class="login-container">

    <div class="login-box">

        <h2 class="text-center mb-4">
            Login User
        </h2>

        <?php if($error != ""): ?>
            <div class="alert alert-danger">
                <?php echo $error; ?>
            </div>
        <?php endif; ?>

        <form method="POST">

            <div class="mb-3">
                <label>Email</label>
                <input
                    type="email"
                    name="email"
                    class="form-control"
                    required>
            </div>

            <div class="mb-3">
                <label>Password</label>
                <input
                    type="password"
                    name="password"
                    class="form-control"
                    required>
            </div>

            <button
                type="submit"
                name="login"
                class="btn btn-primary w-100">

                Login

            </button>

        </form>

        <div class="text-center mt-3">
            <a href="index.php">
                Kembali ke Beranda
            </a>
        </div>

    </div>

</div>

</body>
</html>