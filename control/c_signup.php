<?php
include 'connectDB.php';

if(isset($_POST['submit']) && $_POST["fullname"] != '' && $_POST["email"] != ''
&& $_POST["username"] != '' && $_POST["password"] != ''){
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    // kiem tra xem trong csdl ca tai khoan chua

    $sql = $conn->prepare("SELECT * from user where username = ?");
    $sql->bind_param("s", $email);
    $sql->execute();
    $old_user = $sql->get_result()->fetch_all();

    $password = md5($password);
    if(count($old_user) > 0){
        header("location: signup.php");
    }

    else{
    // them moi user vao db
    $sql = $conn->prepare("INSERT INTO user (fullname, email, username, password) VALUES (?,?,?,?)");
    $sql->bind_param("ssss", $fullname, $email, $username, $password);
    $sql->execute();

    // thong bao dang ky thanh cong
    $alert="<script>alert('Successful!')</script>";
	echo $alert;  
    header("location:../login.php");
    }
}
else{
    header("location:signup.php");
}
?>