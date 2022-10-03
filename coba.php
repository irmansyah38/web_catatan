<?php
require 'function.php';

$user = mysqli_query($conn,"SELECT * FROM user WHERE nama = 'irmansyah'");

$user = mysqli_fetch_assoc($user);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php echo $user['nama']; ?></p>
    <p><?php echo $user['password']; ?></p>
    <p><?php echo $user['email']; ?></p>

</body>
</html>