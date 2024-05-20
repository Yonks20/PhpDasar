<!-- Terdapat form login -->

<?php
// Jangan lupa require file function.php
require 'functions.php';

if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Cek dulu usernamenya
   $result = mysqli_query($conn, "SELECT * FROM USER WHERE username = '$username'");

    // Cek usernamenya
    if(mysqli_num_rows($result) === 1){
        // Cek passwordnya
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"])){
            header("location: index.php");
            exit;
        };
        // Password verify kebalikan dari password hash
        // Verify mengubah hash 
        // hash mengubah string jadi hash
    }
    $error = true;

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Halaman Login</h1>

    <?php if(isset($error)): ?>
<p style="color:red; font-style:italic">Username/Password Salah</p>
        <?php endif;?>
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="login">Login</button>
            </li>
        </ul>
    </form>
</body>
</html>