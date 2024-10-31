<?php
include_once 'dbConnection.php';
ob_start();
//Tiến hành đăng kí lưu CSDL
$name     = $_POST['name'];
$name     = ucwords(strtolower($name));
$gender   = $_POST['gender'];
$username = $_POST['username'];
$phno     = $_POST['phno'];
$password = $_POST['password'];
$name     = stripslashes($name);
$name     = addslashes($name);
$name     = ucwords(strtolower($name));
$gender   = stripslashes($gender);
$gender   = addslashes($gender);
$username = stripslashes($username);
$username = addslashes($username);
$phno     = stripslashes($phno);
$phno     = addslashes($phno);
$password = stripslashes($password);
$password = addslashes($password);
$password = md5($password);

// Kiểm tra xem username đã tồn tại hay chưa
$q2 = mysqli_query($con, "SELECT * FROM user WHERE username='$username'");
if (mysqli_num_rows($q2) > 0) {
    // Nếu username đã tồn tại, chuyển hướng với thông báo lỗi
    header("location:index.php?q7=Tên đăng nhập đã tồn tại!");
} else {
    $q3 = mysqli_query($con, "INSERT INTO user VALUES  (NULL,'$name','$gender' ,'$username' ,'$phno', '$password')");
    if ($q3) {
        session_start();
        $_SESSION["username"] = $username;
        $_SESSION["name"]     = $name;
    
        header("location:account.php?q=1");
    }
}

ob_end_flush();
?>