<?php
require 'function.php';

if(isset($_SESSION['nama'])){

    header("location: front-display.php");
}

if (isset($_POST['submit'])) {
    login($_POST['nama'],['password']);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="boot/css/bootstrap.css">
</head>
<body class="bg-dark">
    <main class="container w-25 position-absolute top-50 start-50 translate-middle">
        <h1 class="text-center text-white">LOGIN</h1>
        <div>
            <form action="" method="post">
                <div class="form-group">
                  <label for="nama" class="text-white">nama</label>
                  <input type="text"class="form-control" name="nama" id="nama" aria-describedby="helpId" placeholder="your name">
                </div>
                <div class="form-group">
                  <label for="password" class="text-white">password</label>
                  <input type="password" class="form-control" name="password" id="password" placeholder=" your password" >
                </div>
                <br>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </div>
    </main>
</body>
</html>