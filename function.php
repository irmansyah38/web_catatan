<?php

$conn = mysqli_connect("localhost",'root','',"catatan");
session_start();

function login($nama,$password){
    global $conn;

    $nama = strtolower(htmlspecialchars($nama));
    $password = password_hash($password,PASSWORD_DEFAULT);

    $user = mysqli_query($conn,"SELECT * FROM user WHERE nama = '$nama' ");
    $user = mysqli_fetch_assoc($user);

    if ($nama == $user['nama'] ) {
        
        if (password_verify($password,$user['password'])){
            $_SESSION['login'] = true;
        }

    }else{
        
        $false = 1;
        return $false;
    }

    

}


function userNew($nama,$password,$email){
    global $conn;
    $nama = strtolower(htmlspecialchars($nama));
    $password = htmlspecialchars($password);
    $email = htmlspecialchars($email);

    $password = password_hash($password, PASSWORD_DEFAULT);

    $tambah = "INSERT INTO user (nama,password,email) VALUES ('$nama','$password','$email')";

    mysqli_query($conn,$tambah);

    return mysqli_affected_rows($conn);
}
?>