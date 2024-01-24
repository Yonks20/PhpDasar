<?php 

//cek apakah tombol submit sudah ditekan atau belum

if(isset($_POST["submit"])){
    //cek username dan password
    if($_POST["username"]== "admin" && $_POST["password"]== "123") {
//jika benar, redirect ke halaman admin
header("Location:admin.php"); 
exit;       
    }
//jika salah, tampilkan kesalahan
else {
    $error = true;
}

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

    <h1>Login Admin</h1>

    <?php if (isset($error)): ?>
    <!-- Error dibi -->
    <p style="color: red">Username/Password Salah!</p>
    <?php endif; ?>
    <ul>

        <form action="" method="post">
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
            </li>

            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
            </li>
            <li>

                <button type="submit" name="submit">Login</button>
            </li>
        </form>
    </ul>
</body>

</html>