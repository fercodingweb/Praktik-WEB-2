<?php

if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    include 'connection.php';
    $result = mysqli_query($con, "SELECT * FROM user WHERE username = '$user'");
    $cek = mysqli_num_rows($result);
    if ($cek > 0) {
        session_start();
        $row = mysqli_fetch_assoc($result);
        if (password_verify($pass, $row["password"])) {
            $_SESSION['username'] = $row['username'];
            header('Location:admin/index.php');
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
    <title>Login Account</title>
    <style>
        .login h2 {
            font-size: 2rem;
            color: #ffffff;
        }
        body {
            background-color: rgb(9, 45, 50)
        }
        .login .inputBx {
            position: relative;
            width: 100%;
        }
        .login .inputBx input {
            position: relative;
            width: 100%;
            padding: 12px 20px;
            background: transparent;
            border: 2px solid #fff;
            border-radius: 40px;
            font-size: 1.2rem;
            color: #fff;
            box-shadow: none;
            outline: none;
        }
        .login .inputBx input[type="submit"] {
            width: 100%;
            background: #0078ff;
            background: linear-gradient(45deg, #ff357a, #fff172);
            border: none;
            cursor: pointer;
        }
        .login .inputBx input::placeholder {
            color: rgba(255, 255, 255, 0.75);
        }
        .login .links {
            position: relative;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
        }
        .login .links a {
            color: #fff;
            text-decoration: none;
        }
        .ring {
            position: absolute;
            width: 500px;
            height: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .ring i {
            position: absolute;
            inset: 0;
            border: 2px solid #fff;
            transition: 0.5s;
        }
        .ring i:nth-child(1) {
            border-radius: 38% 62% 63% 37% / 41% 44% 56% 59%;
            animation: animate 6s linear infinite;
        }
        .ring i:nth-child(2) {
            border-radius: 41% 44% 56% 59%/38% 62% 63% 37%;
            animation: animate 4s linear infinite
        }
        .ring i:nth-child(3) {
            border-radius: 41% 44% 56% 59%/38% 62% 63% 37%;
            animation: animate2 10s linear infinite;
        }
        .ring:hover i {
            border: 6px solid var(--clr);
            filter: drop-shadow(0 0 20px var(--clr));
        }
        .login {
            position: absolute;
            width: 300px;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 20px;
        }
        div {
            font-size: 20px;
            text-decoration: none;
            padding: 10px 15px;
            justify-content: center;
            font-family: sans-serif;
            list-style: none;
            text-align: center;
        }
        @keyframes animate {
            0% { transform: rotate(0deg);}
            100% { transform: rotate(360deg);}
        }
        @keyframes animate2 {
            0% { transform: rotate(360deg);}
            100% { transform: rotate(0deg);}
        }
        .alert {
            background: #ffb3b3;
            color: #900;
            border-radius: 10px;
            margin-bottom: 10px;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="ring">
        <i style="--clr:#60ff60;"></i>
        <i style="--clr:#a454ef;"></i>
        <i style="--clr:#ff0000;"></i>
        <div class="login">
            <h2>Login Account</h2>
            <?php if (isset($error)) : ?>
                <div class="alert">
                    <strong>Login gagal!</strong> Periksa kembali Username dan Password.
                </div>
            <?php endif; ?>
            <form action="" method="post" style="width:100%">
                <div class="inputBx">
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="inputBx">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="inputBx">
                    <input type="submit" name="login" value="Login">
                </div>
            </form>
         
        </div>