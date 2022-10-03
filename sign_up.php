<?php 
require 'function.php';

if(isset($_POST['submit'])){
    
    if($_POST['password'] == $_POST['password1']){
        userNew($_POST['nama'],$_POST['password'],$_POST['email']);
    }else {
        echo "<script>
            alert('password tidak sesuai');
        </script>";
    }


    if(mysqli_affected_rows($conn)>0){

      echo "<script>
        alert('antum berhasil membuat account');
         </script>";
    }else{
      echo "<script>
        alert('antum  gagal berhasil membuat account');
         </script>";
    }

}
if(mysqli_affected_rows($conn)>0){
      
  header("location: login.php");
  exit;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="boot/css/bootstrap.css">
</head>
<body class="bg-dark">
    <main class="container w-25 position-absolute top-50 start-50 translate-middle">
        <h1 class="text-center text-white">Sign Up</h1>
        <div>
            <form action="" method="post">
                <div class="form-group">
                  <label for="nama" class="text-white">nama</label>
                  <input type="text"class="form-control" name="nama" id="nama" aria-describedby="helpId" placeholder="your name" autocomplete="off" required>
                </div>
                <div class="form-group">
                  <label for="password" class="text-white">password</label>
                  <input type="password" class="form-control" name="password" id="password" placeholder=" your password" required>
                </div>
                <div class="form-group">
                  <label for="password1" class="text-white">confirm password</label>
                  <input type="password" class="form-control" name="password1" id="password1" placeholder="confirm password" required>
                </div>
                <div class="form-group">
                  <label for="email" class="text-white">email</label>
                  <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="your email" autocomplete="off" required>
                </div>
                <br>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </div>
    </main>
</body>
</html>