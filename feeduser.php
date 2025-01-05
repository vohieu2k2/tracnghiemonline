<?php

include_once 'dbConnection.php';
date_default_timezone_set("Asia/Ho_Chi_Minh");

// Lấy thông tin từ session và POST
session_start();  // Bắt đầu phiên làm việc
$ref = @$_GET['q'];
$username = $_POST['username'];  // Lấy tên đăng nhập từ session
$feedback = $_POST['feedback'];  // Lấy nội dung phản hồi từ form

// Lấy thời gian hiện tại (bao gồm cả ngày, giờ, phút, giây)
$timestamp = date("Y-m-d H:i:s");  // Thời gian đầy đủ (ngày tháng giờ phút giây)

// Tạo ID duy nhất cho phản hồi
$id = uniqid();

// Thực hiện truy vấn để lưu thông tin phản hồi vào bảng feedbacks
$query = "INSERT INTO feedbacks (id, username, feedback, `date`, userType) 
          VALUES ('$id', '$username', '$feedback', '$timestamp', 'user')";
$q = mysqli_query($con, $query) or die ("Lỗi khi lưu phản hồi");
header("Location: account.php?q=3");

?>

