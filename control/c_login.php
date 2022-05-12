<?php
ob_start();
session_start();
include 'connectDB.php';

if(isset($_POST['submit']) && $_POST["username"] != '' && $_POST["password"] != ''){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = $conn->prepare("SELECT * from user where username = ?");
    $sql-> bind_param("s", $username);
    $sql->execute();
    $data = $sql->get_result()->fetch_all();

    if(count($data) && $data[0][4] == md5($password)){
        $_SESSION['login'] = $data;
        header("location: ../index.php");
    }
    else{
        echo '<script> alert "Username or Password incorrect!"</script>';
        header("location: ../login.php");
    }
}
?> 