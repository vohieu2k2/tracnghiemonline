<?php
include_once 'dbConnection.php';
date_default_timezone_set("Asia/Ho_Chi_Minh");

// Lấy thông tin từ session và POST
session_start();
$teacher_username = $_POST['teacher_username'];  // Tên người dùng giảng viên (giảng viên)
$student_username = $_POST['student_username'];  // Tên người dùng (người gửi phản hồi)
$reply = $_POST['reply'];  // Nội dung giảng viên trả lời

// Lấy thời gian hiện tại (bao gồm cả ngày, giờ, phút, giây)
$timestamp = date("Y-m-d H:i:s");  // Thời gian đầy đủ (ngày tháng giờ phút giây)

// Tạo ID duy nhất cho phản hồi
$id = uniqid();

// Thực hiện truy vấn để lưu thông tin phản hồi vào bảng feedbacks
$query = "INSERT INTO feedbacks (id, username, feedback, `date`, userType, recipient) 
          VALUES ('$id', '$teacher_username', '$reply', '$timestamp', 'admin', '$student_username')";

$q = mysqli_query($con, $query) or die ("Lỗi khi lưu phản hồi: " . mysqli_error($con));

// Chuyển hướng về trang gốc với thông báo thành công
header("Location: dash.php?q=8&username=$student_username");
?>
