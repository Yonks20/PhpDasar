<?php
session_start();

//cek cookie
if(isset($_COOKIE['login'])){
    if($_COOKIE['login']=='true'){
        $_SESSION['login']= true;
    }
};

if(isset($_SESSION['login'])){
    header("Location: index.php");
    exit;
}


require'functions.php';

if(isset($_POST["login"])){

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn,"SELECT * FROM user WHERE username = '$username'" );

    if(mysqli_num_rows($result)===1){
        //cek password
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"] )){
            //set session terlebih dahulu
            $_SESSION["login"] = true;

            //cek remember me
            if (isset($_POST['remember'])) {
                //buat cookienya
                setcookie('login', 'true', time()+80);
            }


            header("location: index.php");
            exit;
        }
    }

    $error = true;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body>
    <h1>Halaman Login</h1>

    <?php if(isset($error)): ?>

        <p style="color:red">Username atau password error</p>

        <?php endif;?>

    <form action="" method="post">

<ul>
    <li>
    <label for="username">Username: </label>
    <input type="text" id="username" name="username">
    </li>

    <li>
    <label for="password">Password: </label>
    <input type="password" id="password" name="password">
    </li>

    <li>
    <input type="checkbox" id="remember" name="remember">

    <label for="remember">Remember Me</label>
    </li>
    
    <li>
    <button type="submit" name="login">login </button>
    </li>

</ul>
       
    </form>

</body>
</html>