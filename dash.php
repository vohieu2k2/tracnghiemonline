<!-- Trang của admin -->
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <link rel="icon" href="favicon.ico" type="image/icon" sizes="16x16">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Admin || Phát hiện, phân tích, xử lý mã độc</title>
    <link  rel="stylesheet" href="css/bootstrap.min.css"/>
    <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
    <link rel="stylesheet" href="css/main.css">
    <link  rel="stylesheet" href="css/font.css">
    <script src="js/jquery.js" type="text/javascript"></script>

    <style>
        .arrow-button {
            cursor: pointer;
            padding: 5px;
            margin: 0 2px;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 16px;
        }
    </style>

    <script src="js/bootstrap.min.js"  type="text/javascript"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

    <script>
        $(function () {
            $(document).on( 'scroll', function(){
                console.log('scroll top : ' + $(window).scrollTop());
                if($(window).scrollTop()>=$(".logo").height())
                {
                   $(".navbar").addClass("navbar-fixed-top");
               }

               if($(window).scrollTop()<$(".logo").height())
               {
                   $(".navbar").removeClass("navbar-fixed-top");
               }
           });
       })

        function redirectToPage(eid) {
        window.location.href = "dash.php?q=2&eid=" + eid;
        }

        

   
    </script>
   </head>

   <body  style="background:#eee;">
    <body  style="background:#eee;">
        <div class="header">
            <div class="row">
                <div class="col-lg-6">
                    <span class="logo">Hệ thống đánh giá điểm quá trình học phần</span>
                </div>
                <?php
                    include_once 'dbConnection.php';
                    session_start();

                    if (!(isset($_SESSION['username']))  || ($_SESSION['key']) != '54585c506829293a2d4c3b68543b316e2e7a2d277858545a36362e5f39') {
                        session_destroy();
                        header("location:index.php");
                    } else {
                        $name     = $_SESSION['name'];
                        $username = $_SESSION['username'];

                        include_once 'dbConnection.php';
                        echo '<span class="pull-right top title1" ><span style="color:white"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Chào,</span> <span class="log log1" style="color:lightyellow">' . $name . '&nbsp;&nbsp;|&nbsp;&nbsp;<a href="logout.php?q=account.php" style="color:lightyellow"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Đăng xuất</button></a></span>';
                    }
                    ?>

                </div>
            </div>
                <nav class="navbar navbar-default title1">
                  <div class="container-fluid">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="dash.php?q=0"><b>Phát hiện, phân tích, xử lý mã độc</b></a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li <?php
                        if (@$_GET['q'] == 0)
                            echo 'class="active"';
                            ?>><a href="dash.php?q=0">Trang chủ<span class="sr-only"></span></a>
                        </li>
                    <li <?php
                    if (@$_GET['q'] == 7)
                        echo 'class="active"';
                    ?>><a href="dash.php?q=7">Các bài thi<span class="sr-only"></span></a></li>
                    <li <?php
                    if (@$_GET['q'] == 1)
                        echo 'class="active"';
                    ?>><a href="dash.php?q=1">Quản lý người dùng</a></li>
                    <li <?php
                    if (@$_GET['q'] == 2)
                        echo 'class="active"';
                    ?>><a href="dash.php?q=2">Điểm số bài thi</a></li>
                    <!-- <li <?php
                    // if (@$_GET['q'] == 7)
                    //     echo 'class="active"';
                    ?>><a href="dash.php?q=7">Điểm số lớp</a></li> -->
                    <li <?php
                    if (@$_GET['q'] == 3)
                        echo 'class="active"';
                    ?>><a href="dash.php?q=3">Phản hồi</a></li>
                    <li <?php
                    if (@$_GET['q'] == 4)
                        echo 'class="active"';
                    ?>><a href="dash.php?q=4">Thêm đề thi</a></li>
                    <li <?php
                    if (@$_GET['q'] == 5)
                        echo 'class="active"';
                    ?>><a href="dash.php?q=5">Xóa đề thi</a></li>
                    <li <?php
                    if (@$_GET['q'] == 6)
                        echo 'class="active"';
                    ?>><a href="dash.php?q=6">Tài liệu</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                //Trang xem đề thi
                if (@$_GET['q'] == 7) {

                    $result = mysqli_query($con, "SELECT * FROM quiz ORDER BY date DESC") or die('Error');
                    echo '<div class="panel"><table class="table table-striped title1"  style="vertical-align:middle">
                    <tr style="text-align: center">
                    <td style="vertical-align:middle"><b>STT</b></td>
                    <td style="vertical-align:middle"><b>Tên bài thi</b></td>
                    <td style="vertical-align:middle"><b>Tổng số câu hỏi</b></td>
                    <td style="vertical-align:middle"><b>Thời gian</b></td>
                    <td style="vertical-align:middle"><b>Trạng thái</b></td>
                    <td style="vertical-align:middle"><b>Tùy chỉnh</b></td>
                    </tr>';
                    $c = 1;
                    while ($row = mysqli_fetch_array($result)) {
                        $title   = $row['title'];
                        $total   = $row['total'];
                        $time    = $row['time'];
                        $eid     = $row['eid'];
                        $status  = $row['status'];
                        if ($status == "enabled") {
                            echo '<tr style="text-align: center">
                            <td style="vertical-align:middle">' . $c++ . '</td>
                            <td style="vertical-align:middle">' . $title . '</td>
                            <td style="vertical-align:middle">' . $total . '</td>
                            <td style="vertical-align:middle">' . $time . '&nbsp;phút</td>
                            <td style="vertical-align:middle">Kích hoạt</td>
                            <td style="vertical-align:middle">
                                <b>
                                    <a href="update.php?deidquiz=' . $eid . '" class="btn logb" style="color:#FFFFFF;background:#ff0000;font-size:12px;padding:5px;">&nbsp;<span><b>Đóng bài thi</b></span></a>
                                    <a href="dash.php?q=edit&eid=' . $eid . '" class="btn logb" style="color:#FFFFFF;background:#1E90FF;font-size:12px;padding:5px;">&nbsp;<span><b>Sửa bài thi</b></span></a>
                                </b>
                            </td>
                            </tr>';
                        } else {
                            echo '<tr style="text-align: center">
                            <td style="vertical-align:middle">' . $c++ . '</td>
                            <td style="vertical-align:middle">' . $title . '</td>
                            <td style="vertical-align:middle">' . $total . '</td>
                            <td style="vertical-align:middle">' . $time . '&nbsp;phút</td>
                            <td style="vertical-align:middle">Chưa kích hoạt</td>
                            <td style="vertical-align:middle">
                                <b>
                                    <a href="update.php?eeidquiz=' . $eid . '" class="btn logb" style="color:#FFFFFF;background:darkgreen;font-size:12px;padding:5px;">&nbsp;<span><b>Mở bài thi</b></span></a>
                                    <a href="dash.php?q=edit&eid=' . $eid . '" class="btn logb" style="color:#FFFFFF;background:#1E90FF;font-size:12px;padding:5px;">&nbsp;<span><b>Sửa bài thi</b></span></a>
                                </b>
                            </td>
                            </tr>';

                        }
                    }
                }
                // Trang quản lí điểm số bài thi
                if (@$_GET['q'] == 2 && !(@$_GET['eid'])) {
                    if(isset($_GET['show'])){
                        $show = $_GET['show'];
                        $showfrom = (($show-1)*10) + 1;
                        $showtill = $showfrom + 9;
                    }
                    else{
                        $show = 1;
                        $showfrom = 1;
                        $showtill = 10;
                    }

                    $q = mysqli_query($con, "SELECT * FROM quiz") or die('Error223');
                    echo '<div class="panel title">
                    <table class="table table-striped title1" >
                    <tr style="text-align: center">
                        <td style="vertical-align:middle"><b>STT</b></td>
                        <td style="vertical-align:middle"><b>Tên bài thi</b></td>
                        <td style="vertical-align:middle"><b>Ngày thi</b></td>
                        <td style="vertical-align:middle"><b>Trạng thái</b></td>
                        <td style="vertical-align:middle"><b>Số lượng thí sinh thi</b></td>
                        </tr>';
                    $c = $showfrom-1;
                    $total = mysqli_num_rows($q);
                    if($total >= $showfrom){
                        $q = mysqli_query($con, "SELECT * FROM quiz ORDER BY date ASC LIMIT ".($showfrom-1).",10") or die('Error223');
                        while ($row = mysqli_fetch_array($q)) {
                            $eid = $row['eid'];
                            $title = $row['title'];
                            $statusExam = $row['status'];
                            $dateExam = $row['examdate'];
                            $c++;

                            // Thực hiện truy vấn đến bảng history để đếm số lượng tham gia quiz này
                            $historyQuery = mysqli_query($con, "SELECT COUNT(*) AS total_attempts FROM history WHERE eid='".$eid."'") or die('Error in history query');
                            $historyRow = mysqli_fetch_array($historyQuery);
                            $total_attempts = $historyRow['total_attempts']; // Số lần quiz đã được tham gia

                            // Thực hiện truy vấn đến bảng user để đếm số lượng user
                            $userQuery = mysqli_query($con, "SELECT COUNT(*) AS total_users FROM user") or die('Error in history query');
                            $userRow = mysqli_fetch_array($userQuery);
                            $total_users = $userRow['total_users'];


                            if ($statusExam == "enabled") {
                                echo '<tr style="text-align: center">
                                    <td style="color:#99cc32"><b>' . $c . '</b></td>
                                    <td style="color:#99cc32">
                                        <a href="dash.php?q=2&eid='. $eid .'" style="color: black">' . $title . '</a>
                                    </td>
                                    <td style="vertical-align:middle"><b>' . $dateExam . '</b></td>
                                    <td style="vertical-align:middle">
                                        <b>Đã kích hoạt</b>
                                    </td>
                                    <td style="vertical-align:middle"><b>'.$total_attempts.'/'.$total_users.'</b></td>
                                    <td style="vertical-align:middle">';
                            } else if($statusExam == "disabled"){
                                echo '<tr style="text-align: center">
                                    <td style="color:#99cc32"><b>' . $c . '</b></td>
                                    <td style="color:#99cc32">
                                        <a href="dash.php?q=2&eid='. $eid .'" style="color: black">' . $title . '</a>
                                    </td>
                                    <td style="vertical-align:middle"><b>' . $dateExam . '</b></td>
                                    <td style="vertical-align:middle">
                                        <b>Chưa kích hoạt</b>
                                    </td>
                                    <td style="vertical-align:middle"><b>'.$total_attempts.'/'.$total_users.'</b></td>
                                    <td style="vertical-align:middle">';
                            }
                            
                        }
                    }
                    else{
                    }
                    echo '</table></div>';
                    echo '<div class="panel title"><table class="table table-striped title1"><tr style="text-align: center">';
                    $total = ceil($total/10);
                    if(isset($_GET['show'])){
                        $show = $_GET['show'];
                    }
                    else{
                        $show = 1;
                    }
                    if($show == 1 && $total==1){
                    }
                    else if($show == 1 && $total!=1){
                        $i = 1;
                        while($i<=$total){
                            echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.$i.'">&nbsp;'.$i.'&nbsp;</a></td>';
                            $i++;
                        }
                        echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.($show+1).'">&nbsp;>>&nbsp;</a></td>';
                    }
                    else if($show != 1 && $show==$total){
                        echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.($show-1).'">&nbsp;<<&nbsp;</a></td>';

                        $i = 1;
                        while($i<=$total){
                            echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.$i.'">&nbsp;'.$i.'&nbsp;</a></td>';
                            $i++;
                        }
                    }
                    else{
                        echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.($show-1).'">&nbsp;<<&nbsp;</a></td>';
                        $i = 1;
                        while($i<=$total){
                            echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.$i.'">&nbsp;'.$i.'&nbsp;</a></td>';
                            $i++;
                        }
                        echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.($show+1).'">&nbsp;>>&nbsp;</a></td>';
                    }
                    echo '</tr></table></div>';
                } else if(@$_GET['q'] == 2){
                    // Lấy giá trị của 'eid'
                    $eid = $_GET['eid'];

                    if(isset($_GET['show'])){
                        $show = $_GET['show'];
                        $showfrom = (($show-1)*10) + 1;
                        $showtill = $showfrom + 9;
                    }
                    else{
                        $show = 1;
                        $showfrom = 1;
                        $showtill = 10;
                    }
                    // Lấy tên bài thi
                    $q = mysqli_query($con, "SELECT * FROM quiz where eid = '$eid'") or die('Error223');
                    while ($row = mysqli_fetch_array($q)) {
                        echo '<h2 style="text-align: center; color: #99cc32;"> Bài thi ' . $row['title'] . '</h2>';
                    }

                    $q = mysqli_query($con, "SELECT * FROM history where eid = '$eid'") or die('Error223');
                    echo '<div class="panel title">
                    <table class="table table-striped title1" >
                    <tr>
                        <td style="vertical-align:middle; text-align: center"><b>STT</b></td>
                        <td style="vertical-align:middle"><b>Tên thí sinh</b></td>
                        <td style="vertical-align:middle; text-align: center"><b>Điểm tự học</b></td>
                        <td style="vertical-align:middle; text-align: center"><b>Điểm cộng trên lớp</b></td>
                        <td style="vertical-align:middle; text-align: center"><b>Tổng điểm</b></td>
                    </tr>';
                    $c = $showfrom-1;
                    $total = mysqli_num_rows($q);
                    if($total >= $showfrom){
                        $q = mysqli_query($con, "SELECT * FROM history WHERE eid = '$eid' ORDER BY score DESC LIMIT " . ($showfrom - 1) . ", 10") or die('Error223');
                        while ($row = mysqli_fetch_array($q)) {
                            $e = $row['username'];
                            $s = $row['score'];
                            $plusmark = $row['plusscore'];
                            $totalmark = $row['totalscore'];
                            if($totalmark >=10){
                                $totalmark = 10;
                            } else if($totalmark <=0){
                                $totalmark = 0;
                            }

                            $q12 = mysqli_query($con, "SELECT * FROM user WHERE username='$e' ") or die('Error231');
                                    while ($row = mysqli_fetch_array($q12)) {
                                        $name     = $row['name'];
                                    }
                                    $c++;
                                    echo '<tr>
                                    <td style="color:#99cc32; text-align: center"><b>' . $c . '</b></td>
                                    <td style="vertical-align:middle">
                                        <a href="dash.php?q=result&eid='. $eid .'&username='. $e .'" style="color: black">' . $name . '</a>
                                    </td>
                                    <td style="vertical-align:middle; text-align: center">' . $s . '</td>
                                    <td style="vertical-align:middle; text-align: center">
                                        <button class="arrow-button" type="button" onclick="changeScore(this,\''.$e.'\', \''.$eid.'\', -0.5)">-</button>
                                        <span class="number" align="center">'. $plusmark .'</span>
                                        <button class="arrow-button" type="button" onclick="changeScore(this,\'' . $e . '\', \''.$eid.'\', 0.5)">+</button>
                                    </td>
                                    
                                    <td style="vertical-align:middle; text-align: center">
                                        <span class="totalmark">'. $totalmark .'</span>
                                    </td>
                                    <td style="vertical-align:middle">';

                        }
                    }else{}

                    echo '</table></div>';
                    echo '<div class="panel title"><table class="table table-striped title1" ><tr style="text-align: center">';
                    $total = ceil($total/10);;
                    if(isset($_GET['show'])){
                        $show = $_GET['show'];
                    }
                    else{
                        $show = 1;
                    }
                    if($show == 1 && $total==1){
                    }
                    else if($show == 1 && $total!=1){
                        $i = 1;
                        while($i<=$total){
                            echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.$i.'">&nbsp;'.$i.'&nbsp;</a></td>';
                            $i++;
                        }
                        echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.($show+1).'">&nbsp;>>&nbsp;</a></td>';
                    }
                    else if($show != 1 && $show==$total){
                        echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.($show-1).'">&nbsp;<<&nbsp;</a></td>';

                        $i = 1;
                        while($i<=$total){
                            echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.$i.'">&nbsp;'.$i.'&nbsp;</a></td>';
                            $i++;
                        }
                    }
                    else{
                        echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.($show-1).'">&nbsp;<<&nbsp;</a></td>';
                        $i = 1;
                        while($i<=$total){
                            echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.$i.'">&nbsp;'.$i.'&nbsp;</a></td>';
                            $i++;
                        }
                        echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.($show+1).'">&nbsp;>>&nbsp;</a></td>';
                    }
                    echo '</tr></table></div>';
                    
                }
                // Trang quản lí người dùng
                if (@$_GET['q'] == 1) {

                    $result = mysqli_query($con, "SELECT * FROM user") or die('Error');
                    echo '<div class="panel"><table class="table table-striped title1">
                    <tr style="text-align:center">
                        <td style="vertical-align:middle"><b>STT</b></td>
                        <td style="vertical-align:middle"><b>Tên</b></td>
                        <td style="vertical-align:middle"><b>Giới tính</b></td>
                        <td style="vertical-align:middle"><b>Tên đăng nhập</b></td>
                        <td style="vertical-align:middle"><b>SĐT</b></td>
                        <td style="vertical-align:middle"><b>Xóa</b></td></tr>';
                    $c = 1;
                    while ($row = mysqli_fetch_array($result)) {
                        $name      = $row['name'];
                        $phno      = $row['phno'];
                        $gender    = $row['gender'];
                        $username1 = $row['username'];

                        echo '<tr>
                            <td style="vertical-align:middle; text-align:center">' . $c++ . '</td>
                            <td style="vertical-align:middle">' . $name . '</td>
                            <td style="vertical-align:middle; text-align:center">' . $gender . '</td>
                            <td style="vertical-align:middle; text-align:center">' . $username1 . '</td>
                            <td style="vertical-align:middle; text-align:center">' . $phno . '</td>
                        <td style="vertical-align:middle; text-align:center"><a title="Xóa tài khoản" href="update.php?dusername=' . $username1 . '"><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a></td></tr>';
                    }
                    $c = 0;
                    echo '</table></div>';

                }
                //Trang phản hồi
                if (@$_GET['q'] == 3) {
                    $result = mysqli_query($con, "SELECT * FROM `feedback` ORDER BY `feedback`.`date` DESC") or die('Error');
                    echo '<div class="panel"><table class="table table-striped title1">
                    <tr><td style="vertical-align:middle"><b>STT</b></td><td style="vertical-align:middle"><b>Nội dung</b></td><td style="vertical-align:middle"><b>Tài khoản</b></td><td style="vertical-align:middle"><b>Ngày</b></td><td style="vertical-align:middle"><b>Giờ</b></td><td style="vertical-align:middle"><b>Tác giả</b></td><td style="vertical-align:middle"></td><td style="vertical-align:middle"><b>Tùy chỉnh</b></td></tr>';
                    $c = 1;
                    while ($row = mysqli_fetch_array($result)) {
                        $date      = $row['date'];
                        $date      = date("d-m-Y", strtotime($date));
                        $time      = $row['time'];
                        $subject   = $row['subject'];
                        $name      = $row['name'];
                        $username1 = $row['username'];
                        $id        = $row['id'];
                        echo '<tr><td style="vertical-align:middle">' . $c++ . '</td>';
                        echo '<td style="vertical-align:middle"><a title="Click to open feedback" href="dash.php?q=3&fid=' . $id . '">' . $subject . '</a></td><td style="vertical-align:middle">' . $username1 . '</td><td style="vertical-align:middle">' . $date . '</td><td style="vertical-align:middle">' . $time . '</td><td style="vertical-align:middle">' . $name . '</td>
                        <td style="vertical-align:middle"><a title="Mở phản hồi" href="dash.php?q=3&fid=' . $id . '"><b><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span></b></a></td>';
                        echo '<td style="vertical-align:middle"><a title="Xóa phản hồi" href="update.php?fdid=' . $id . '"><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a></td>

                        </tr>';
                    }
                    echo '</table></div>';
                }
                // Lấy thông tin phản hồi từ bảng feedback trong cơ sở dữ liệu dựa trên id
                if (@$_GET['fid']) {
                    echo '<br />';
                    $id = @$_GET['fid'];
                    $result = mysqli_query($con, "SELECT * FROM feedback WHERE id='$id' ") or die('Error');
                    while ($row = mysqli_fetch_array($result)) {
                        $name     = $row['name'];
                        $subject  = $row['subject'];
                        $date     = $row['date'];
                        $date     = date("d-m-Y", strtotime($date));
                        $time     = $row['time'];
                        $feedback = $row['feedback'];

                        echo '<div class="panel"<a title="Quay lại" href="update.php?q1=2"><b><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span></b></a><h2 style="text-align:center; margin-top:-15px;font-family: "Ubuntu", sans-serif;"><b>' . $subject . '</b></h1>';
                        echo '<div class="mCustomScrollbar" data-mcs-theme="dark" style="margin-left:10px;margin-right:10px; max-height:450px; line-height:35px;padding:5px;"><span style="line-height:35px;padding:5px;">-&nbsp;<b>Ngày:</b>&nbsp;' . $date . '</span>
                        <span style="line-height:35px;padding:5px;">&nbsp;<b>Giờ:</b>&nbsp;' . $time . '</span><span style="line-height:35px;padding:5px;">&nbsp;<b>Tác giả:</b>&nbsp;' . $name . '</span><br />' . $feedback . '</div></div>';
                    }
                }
                // Trang thêm bài thi
                if (@$_GET['q'] == 4 && !(@$_GET['step'])) {
                    echo ' 
                    <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div style="text-align: center" class = "mt-3">
                            <span class="title1" style="font-size:30px"><b>Thêm đề thi</b></span><br /><br />
                        </div>
                           
                        <form class="form-horizontal title1" name="form" action="update.php?q=addquiz"  method="POST">
                            <fieldset>
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="name"></label>  
                                <div class="col-md-12">
                                <input id="name" name="name" placeholder="Tên đề thi" class="form-control input-md" type="text">

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12 control-label" for="name"></label>  
                                <div class="col-md-12">
                                <input id="date" name="date" placeholder="Ngày thi" class="form-control input-md" type="text">

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12 control-label" for="total"></label>  
                                <div class="col-md-12">
                                    <input id="choicequestion" name="choicequestion" placeholder="Số câu hỏi trắc nghiệm" class="form-control input-md" type="number">

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12 control-label" for="total"></label>  
                                <div class="col-md-12">
                                    <input id="fillquestion" name="fillquestion" placeholder="Số câu hỏi điền từ" class="form-control input-md" type="number">

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12 control-label" for="time"></label>  
                                <div class="col-md-12">
                                    <input id="time" name="time" placeholder="Thời gian của bài thi" class="form-control input-md" min="1" type="number">

                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-12 control-label" for=""></label>
                                <div class="col-md-12" style="text-align:center"> 
                                    <input  type="submit" class="btn btn-primary" value="Tạo bài thi" class="btn btn-primary"/>
                                </div>
                            </div>

                            </fieldset>
                        </form>
                    </div>
                    <div class="col-md-3"></div>';

                }
                // Thêm câu hỏi ở bước 2
                if (@$_GET['q'] == 4 && (@$_GET['step']) == 2) {
                    echo ' 
                    <div class="row">
                    <span class="title1" style="margin-left:40%;font-size:30px;"><b>Tạo câu hỏi</b></span><br /><br />
                    <div class="col-md-3"></div><div class="col-md-6"><form class="form-horizontal title1" name="form" action="update.php?q=addqns&n=' . @$_GET['n'] . '&n1='. @$_GET['n1'] .'&eid=' . @$_GET['eid'] . '&ch=4 "  method="POST">
                    <fieldset>
                    ';

                    $n = @$_GET['n'];
                    for ($i = 1; $i <= $n; $i++) {
                        echo '<b>Câu hỏi&nbsp;' . $i . '&nbsp;:</><br />
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="qns' . $i . ' "></label>  
                            <div class="col-md-12">
                            <textarea rows="3" cols="5" name="qns' . $i . '" class="form-control" placeholder="Điền câu hỏi số ' . $i . ' ở đây..."></textarea>  
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12 control-label" for="' . $i . '1"></label>  
                            <div class="col-md-12">
                                <input id="' . $i . '1" name="' . $i . '1" placeholder="Đáp án A" class="form-control input-md" type="text">

                            </div>
                        </div>
                        <div class="form-group">
                        <label class="col-md-12 control-label" for="' . $i . '2"></label>  
                        <div class="col-md-12">
                        <input id="' . $i . '2" name="' . $i . '2" placeholder="Đáp án B" class="form-control input-md" type="text">

                        </div>
                        </div>
                        <div class="form-group">
                        <label class="col-md-12 control-label" for="' . $i . '3"></label>  
                        <div class="col-md-12">
                        <input id="' . $i . '3" name="' . $i . '3" placeholder="Đáp án C" class="form-control input-md" type="text">

                        </div>
                        </div>
                        <div class="form-group">
                        <label class="col-md-12 control-label" for="' . $i . '4"></label>  
                        <div class="col-md-12">
                        <input id="' . $i . '4" name="' . $i . '4" placeholder="Đáp án D" class="form-control input-md" type="text">

                        </div>
                        </div>
                        <br />
                        <b>Đáp án đúng</b>:<br />
                        <select id="ans' . $i . '" name="ans' . $i . '" placeholder="Đáp án đúng " class="form-control input-md" >
                        <option value="a">Chọn câu trả lời cho câu hỏi ' . $i . '</option>
                        <option value="a">A</option>
                        <option value="b">B</option>
                        <option value="c">C</option>
                        <option value="d">D</option> </select><br /><br />';
                    }

                    $n1 = @$_GET['n1'];
                    for ($i = $n + 1; $i <= $n1 + $n; $i++) {
                        echo '<b>Câu hỏi&nbsp;' . $i . '&nbsp;:</><br />
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="qns' . $i . ' "></label>  
                            <div class="col-md-12">
                                <textarea rows="3" cols="5" name="qns' . $i . '" class="form-control" placeholder="Điền câu hỏi số ' . $i . ' ở đây..."></textarea>  
                            </div>
                        </div>

                        <div class="form-group"> 
                            <div class="col-md-12">
                                <textarea rows="3" cols="5" name="ans' . $i . '" class="form-control" placeholder="Điền đáp án câu ' . $i . ' ở đây..."></textarea>  
                            </div>
                        </div>';
                    }

                    echo '<div class="form-group">
                    <label class="col-md-12 control-label" for=""></label>
                    <div class="col-md-12"> 
                    <input  type="submit" style="margin-left:45%" class="btn btn-primary" value="Tạo đề" class="btn btn-primary"/>
                    </div>
                    </div>

                    </fieldset>
                    </form></div>';

                }
                // Trang xóa bài thi
                if (@$_GET['q'] == 5) {

                    $result = mysqli_query($con, "SELECT * FROM quiz ORDER BY date DESC") or die('Error');
                    echo '<div class="panel"><table class="table table-striped title1">
                    <tr style="text-align: center">
                    <td style="vertical-align:middle"><b>STT</b></td>
                    <td style="vertical-align:middle"><b>Đề</b></td>
                    <td style="vertical-align:middle"><b>Tổng số câu hỏi</b></td>
                    <td style="vertical-align:middle"><b>Thời gian</b></td>
                    <td style="vertical-align:middle"><b>Trạng thái</b></td>
                    </t>';
                    $c = 1;
                    while ($row = mysqli_fetch_array($result)) {
                        $title   = $row['title'];
                        $total   = $row['total'];
                        $time    = $row['time'];
                        $eid     = $row['eid'];
                        echo '<tr style="text-align: center">
                        <td style="vertical-align:middle">' . $c++ . '</td>
                        <td style="vertical-align:middle">' . $title . '</td>
                        <td style="vertical-align:middle">' . $total . '</td>
                        <td style="vertical-align:middle">' . $time . '&nbsp;phút</td>
                        <td style="vertical-align:middle"><b><a href="update.php?q=rmquiz&eid=' . $eid . '" class="btn" style="margin:0px;background:red;color:white">&nbsp;<span class="title1"><b>Xóa</b></span></a></b></td></tr>';
                    }
                    $c = 0;
                    echo '</table></div>';

                }
                // Trang tài liệu
                if (@$_GET['q'] == 6) {

                    $q = mysqli_query($con,"select * from upload order by id desc" )or die('Error231');
                    echo '<div class="panel"><table cellpadding="0" cellspacing="0" border="0" class="table table-bordered">
                    <tr><td><form enctype="multipart/form-data"  action="upload.php" id="wb_Form1" name="form" method="post">
                    <input type="file" name="photo" id="photo"  required="required"></td>
                    <td><input type="submit" class="btn btn-danger" value="Tải lên" name="submit">
                    </form> <strong>Tải file</strong></tr></td></table>
                    <div class="animated fadeIn"><table class="table table-striped title1">
                    <tr><td style="vertical-align:middle"><b>STT</b></td><td style="vertical-align:middle"><b> Tên file</b></td><td style="vertical-align:middle"><b>Thời gian</b></td><td style="vertical-align:middle"><b>Kích cỡ<b></td><td style="vertical-align:middle"><b>Loại file<b></td><td style="vertical-align:middle"><b>Tải xuống<b></td><td style="vertical-align:middle"><b>Xóa<b></td></tr>';
                    $c = 0;
                    while ($row = mysqli_fetch_array($q)) {
                        $id=$row['id'];
                        $name=$row['name'];
                        $date=$row['date'];
                        $size=$row['size'];
                        $txt=$row['txt'];

                        $c++;
                        echo '<tr><td style="vertical-align:middle">' . $c . '</td><td style="vertical-align:middle">' . $name . '</td><td style="vertical-align:middle">' .  $date . '</td><td style="vertical-align:middle">' . $size . '</td><td style="vertical-align:middle">' . $txt . '</td><td style="vertical-align:middle"><b><a href="download.php?filename='.$row['name'].'" title="click to download" class="btn" style="margin:0px;background:#BFFF00;color:white">&nbsp;<span class="title1"><b>Tải xuống</b></td><td style="vertical-align:middle"><b><a href="delete.php?del='.$row['id'].'" title="click to delete" class="btn" style="margin:0px;background:#FA5858;color:white">&nbsp;<span class="title1"><b>Xóa file</b></td><td>
                        </tr>';
                    }

                    echo '</table></div></div>';
                }
                //Trang chủ
                if ($_GET['q'] == 0 && !(@$_GET['username']) && !(@$_GET['sort'])){
                    
                    if(isset($_GET['show'])){
                        $show = $_GET['show'];
                        $showfrom = (($show-1)*10) + 1;
                        $showtill = $showfrom + 9;
                    }
                    else{
                        $show = 1;
                        $showfrom = 1;
                        $showtill = 10;
                    }          

                    echo '<div class="panel title">
                    <table class="table table-striped title1" >
                    <tr>
                        <td style="vertical-align:middle; text-align: center"><b>STT</b></td>
                        <td style="vertical-align:middle; text-align: center">
                            <a href="dash.php?q=0&sort=name" style="color: black; font-weight: bold">Tên học viên</a>
                        </td>
                        <td style="vertical-align:middle; text-align: center"><b>Số bài đã làm</b></td>
                        <td style="vertical-align:middle; text-align: center">
                            <a href="dash.php?q=0&sort=score" style="color: black; font-weight: bold">Tổng điểm trung bình</a>
                        </td>
                    </tr>';

                    $q1 = mysqli_query($con, "SELECT * FROM quiz") or die('Error223');
                    $total = mysqli_num_rows($q1);

                    $q = mysqli_query($con, "SELECT * FROM user LIMIT ".($showfrom-1).",10") or die('Error223');

                    // Khởi tạo mảng để chứa các đối tượng
                    $userArray = array();

                    // Duyệt qua từng dòng kết quả và thêm vào mảng
                    while($row = mysqli_fetch_assoc($q)) {
                        // Tạo một đối tượng mới với các thuộc tính name, username, examnumber, score
                        $userObject = new stdClass();
                        $userObject->name = $row['name'];
                        $userObject->username = $row['username'];
                        // Tìm số lượng bài thi đã làm
                        $q2 = mysqli_query($con, "SELECT * FROM history WHERE username ='" . $userObject->username . "'") or die('Error223');
                            $c = 0;
                            $sum = 0;
                            while ($row2 = mysqli_fetch_array($q2)){
                                $totalmark = $row2['totalscore'];
                                if($totalmark >= 10){
                                    $totalmark = 10;
                                }
                                $sum += $totalmark;
                                $c++;
                            }

                            $userObject->examnumber = $c;
                            
                            if($c > 0){
                                $userObject->score = round($sum/$c, 2);           
                            } else{
                                $userObject->score = 0;
                            }
                        // Thêm đối tượng vào mảng
                        $userArray[] = $userObject;
                    }

                    usort($userArray, function($a, $b) {
                        // Tách phần tên của $a và lấy phần cuối cùng
                        $namePartsA = explode(' ', $a->name);
                        $lastNameA = array_pop($namePartsA);  // Lưu kết quả của explode vào biến trước
                    
                        // Tách phần tên của $b và lấy phần cuối cùng
                        $namePartsB = explode(' ', $b->name);
                        $lastNameB = array_pop($namePartsB);  // Lưu kết quả của explode vào biến trước
                    
                        // So sánh phần tên cuối cùng
                        if ($lastNameA === $lastNameB) {
                            // Nếu phần cuối giống nhau, so sánh phần còn lại của tên
                            $firstPartA = implode(' ', $namePartsA);
                            $firstPartB = implode(' ', $namePartsB);
                            return strcmp($firstPartA, $firstPartB);
                        }
                    
                        // So sánh phần tên cuối nếu không trùng
                        return strcmp($lastNameA, $lastNameB);
                    });

                    $stt = 1;
                    foreach ($userArray as $userObject) {
                        // Truy cập và xử lý các thuộc tính của từng đối tượng trong mảng
                        if( $userObject->score > 0){
                            echo '<tr>
                            <td style="color:#99cc32; text-align: center"><b>' . $stt . '</b></td>
                            <td style="vertical-align:middle">
                                <a href="dash.php?q=0&username='. $userObject->username .'" style="color: black">' .  $userObject->name . '</a>
                            </td>
                            <td style="vertical-align:middle; text-align: center">' . $userObject->examnumber .'/' . $total .'</td>
                            <td style="vertical-align:middle; text-align: center">'. $userObject->score .'</td>
                            <td style="vertical-align:middle"> </tr>';
                        } else {
                            echo '<tr>
                                <td style="color:#99cc32; text-align: center"><b>' . $stt . '</b></td>
                                <td style="vertical-align:middle">
                                    <a href="dash.php?q=0&username='. $userObject->username .'" style="color: black">' .  $userObject->name . '</a>
                                </td>
                                <td style="vertical-align:middle; text-align: center">Chưa làm bài</td>
                                <td style="vertical-align:middle; text-align: center">'. $userObject->score .'</td>
                                <td style="vertical-align:middle"> </tr>';
                        }
                        $stt++;
                    }

                    echo '</table></div>';
                    echo '<div class="panel title"><table class="table table-striped title1" ><tr style="text-align: center">';
                    $total = ceil($total/10);;
                    if(isset($_GET['show'])){
                        $show = $_GET['show'];
                    }
                    else{
                        $show = 1;
                    }
                    if($show == 1 && $total==1){
                    }
                    else if($show == 1 && $total!=1){
                        $i = 1;
                        while($i<=$total){
                            echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.$i.'">&nbsp;'.$i.'&nbsp;</a></td>';
                            $i++;
                        }
                        echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.($show+1).'">&nbsp;>>&nbsp;</a></td>';
                    }
                    else if($show != 1 && $show==$total){
                        echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.($show-1).'">&nbsp;<<&nbsp;</a></td>';

                        $i = 1;
                        while($i<=$total){
                            echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.$i.'">&nbsp;'.$i.'&nbsp;</a></td>';
                            $i++;
                        }
                    }
                    else{
                        echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.($show-1).'">&nbsp;<<&nbsp;</a></td>';
                        $i = 1;
                        while($i<=$total){
                            echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.$i.'">&nbsp;'.$i.'&nbsp;</a></td>';
                            $i++;
                        }
                        echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.($show+1).'">&nbsp;>>&nbsp;</a></td>';
                    }
                    echo '</tr></table></div>';

                } else if($_GET['q'] == 0 && (@$_GET['username'])){
                    // Lấy giá trị của 'username'
                    $username = $_GET['username'];

                    if(isset($_GET['show'])){
                        $show = $_GET['show'];
                        $showfrom = (($show-1)*10) + 1;
                        $showtill = $showfrom + 9;
                    }
                    else{
                        $show = 1;
                        $showfrom = 1;
                        $showtill = 10;
                    }

                    $q = mysqli_query($con, "SELECT * FROM user where username = '$username'") or die('Error223');
                    while ($row = mysqli_fetch_array($q)) {
                        echo '<h2 style="text-align: center; color: #99cc32;"> Điểm số học viên '. $row['name'] .'</h2>';
                    }

                    $q = mysqli_query($con, "SELECT * FROM history where username = '$username'") or die('Error223');
                    echo '<div class="panel title">
                    <table class="table table-striped title1" >
                    <tr>
                        <td style="vertical-align:middle; text-align: center"><b>STT</b></td>
                        <td style="vertical-align:middle; text-align: center"><b>Tên bài thi</b></td>
                        <td style="vertical-align:middle; text-align: center"><b>Ngày thi</b></td>
                        <td style="vertical-align:middle; text-align: center"><b>Điểm tự học</b></td>
                        <td style="vertical-align:middle; text-align: center"><b>Điểm cộng trên lớp</b></td>
                        <td style="vertical-align:middle; text-align: center"><b>Tổng điểm</b></td>
                    </tr>';

                    $c = $showfrom-1;
                    $total = mysqli_num_rows($q);
                    if($total >= $showfrom){
                        $q = mysqli_query($con, "SELECT * FROM history WHERE username = '$username' ORDER BY date DESC LIMIT " . ($showfrom - 1) . ", 10") or die('Error223');
                        while ($row = mysqli_fetch_array($q)) {
                            $e = $row['eid'];
                            $s = $row['score'];
                            $plusmark = $row['plusscore'];
                            $totalmark = $row['totalscore'];
                            if($totalmark >=10){
                                $totalmark = 10;
                            } else if($totalmark <=0){
                                $totalmark = 0;
                            }

                            $q12 = mysqli_query($con, "SELECT * FROM quiz WHERE eid='$e' ") or die('Error231');
                                    while ($row = mysqli_fetch_array($q12)) {
                                        $title = $row['title'];
                                        $date  = $row['examdate'];
                                    }
                                    $c++;
                                    echo '<tr>
                                    <td style="color:#99cc32; text-align: center"><b>' . $c . '</b></td>
                                    <td style="vertical-align:middle">
                                        <a href="dash.php?q=result&eid='. $e . '&username='. $username .'" style="color: black">' . $title . '</a>
                                    </td>
                                    <td style="vertical-align:middle; text-align: center">' . $date . '</td>
                                    <td style="vertical-align:middle; text-align: center">' . $s . '</td>
                                    <td style="vertical-align:middle; text-align: center">
                                        <button class="arrow-button" type="button" onclick="changeScore(this,\''.$username.'\', \''.$e.'\', -0.5)">-</button>
                                        <span class="number" align="center">'. $plusmark .'</span>
                                        <button class="arrow-button" type="button" onclick="changeScore(this,\'' . $username . '\', \''.$e.'\', 0.5)">+</button>
                                    </td>
                                    
                                    <td style="vertical-align:middle; text-align: center">
                                        <span class="totalmark">'. $totalmark .'</span>
                                    </td>
                                    <td style="vertical-align:middle">';

                        }
                    }else{}

                    echo '</table></div>';
                    echo '<div class="panel title"><table class="table table-striped title1" ><tr style="text-align: center">';
                    $total = ceil($total/10);;
                    if(isset($_GET['show'])){
                        $show = $_GET['show'];
                    }
                    else{
                        $show = 1;
                    }
                    if($show == 1 && $total==1){
                    }
                    else if($show == 1 && $total!=1){
                        $i = 1;
                        while($i<=$total){
                            echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.$i.'">&nbsp;'.$i.'&nbsp;</a></td>';
                            $i++;
                        }
                        echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.($show+1).'">&nbsp;>>&nbsp;</a></td>';
                    }
                    else if($show != 1 && $show==$total){
                        echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.($show-1).'">&nbsp;<<&nbsp;</a></td>';

                        $i = 1;
                        while($i<=$total){
                            echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.$i.'">&nbsp;'.$i.'&nbsp;</a></td>';
                            $i++;
                        }
                    }
                    else{
                        echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.($show-1).'">&nbsp;<<&nbsp;</a></td>';
                        $i = 1;
                        while($i<=$total){
                            echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.$i.'">&nbsp;'.$i.'&nbsp;</a></td>';
                            $i++;
                        }
                        echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.($show+1).'">&nbsp;>>&nbsp;</a></td>';
                    }
                    echo '</tr></table></div>';
                } else if($_GET['q'] == 0 && (@$_GET['sort'])){
                    if (@$_GET['sort'] == 'name'){
                        if(isset($_GET['show'])){
                            $show = $_GET['show'];
                            $showfrom = (($show-1)*10) + 1;
                            $showtill = $showfrom + 9;
                        }
                        else{
                            $show = 1;
                            $showfrom = 1;
                            $showtill = 10;
                        }
    
                        echo '<div class="panel title">
                        <table class="table table-striped title1" >
                        <tr>
                            <td style="vertical-align:middle; text-align: center"><b>STT</b></td>
                            <td style="vertical-align:middle; text-align: center">
                                <a href="dash.php?q=0&sort=name" style="color: black; font-weight: bold">Tên học viên</a>
                            </td>
                            <td style="vertical-align:middle; text-align: center"><b>Số bài đã làm</b></td>
                            <td style="vertical-align:middle; text-align: center">
                                <a href="dash.php?q=0&sort=score" style="color: black; font-weight: bold;">Tổng điểm trung bình</a>
                            </td>
                        </tr>';
    
                        $q1 = mysqli_query($con, "SELECT * FROM quiz") or die('Error223');
                        $total = mysqli_num_rows($q1);
    
                        $q = mysqli_query($con, "SELECT * FROM user LIMIT ".($showfrom-1).",10") or die('Error223');
    
                        // Khởi tạo mảng để chứa các đối tượng
                        $userArray = array();
    
                        // Duyệt qua từng dòng kết quả và thêm vào mảng
                        while($row = mysqli_fetch_assoc($q)) {
                            // Tạo một đối tượng mới với các thuộc tính name, username, examnumber, score
                            $userObject = new stdClass();
                            $userObject->name = $row['name'];
                            $userObject->username = $row['username'];
                            // Tìm số lượng bài thi đã làm
                            $q2 = mysqli_query($con, "SELECT * FROM history WHERE username ='" . $userObject->username . "'") or die('Error223');
                                $c = 0;
                                $sum = 0;
                                while ($row2 = mysqli_fetch_array($q2)){
                                    $totalmark = $row2['totalscore'];
                                    if($totalmark >= 10){
                                        $totalmark = 10;
                                    }
                                    $sum += $totalmark;
                                    $c++;
                                }
    
                                $userObject->examnumber = $c;
                                
                                if($c > 0){
                                    $userObject->score = round($sum/$c, 2);           
                                } else{
                                    $userObject->score = 0;
                                }
                            // Thêm đối tượng vào mảng
                            $userArray[] = $userObject;
                        }
    
                        usort($userArray, function($a, $b) {
                            // Tách phần tên của $a và lấy phần cuối cùng
                            $namePartsA = explode(' ', $a->name);
                            $lastNameA = array_pop($namePartsA);  // Lưu kết quả của explode vào biến trước
                        
                            // Tách phần tên của $b và lấy phần cuối cùng
                            $namePartsB = explode(' ', $b->name);
                            $lastNameB = array_pop($namePartsB);  // Lưu kết quả của explode vào biến trước
                        
                            // So sánh phần tên cuối cùng
                            if ($lastNameA === $lastNameB) {
                                // Nếu phần cuối giống nhau, so sánh phần còn lại của tên
                                $firstPartA = implode(' ', $namePartsA);
                                $firstPartB = implode(' ', $namePartsB);
                                return strcmp($firstPartA, $firstPartB);
                            }
                        
                            // So sánh phần tên cuối nếu không trùng
                            return strcmp($lastNameA, $lastNameB);
                        });
    
                        $stt = 1;
                        foreach ($userArray as $userObject) {
                            // Truy cập và xử lý các thuộc tính của từng đối tượng trong mảng
                            if( $userObject->score > 0){
                                echo '<tr>
                                <td style="color:#99cc32; text-align: center"><b>' . $stt . '</b></td>
                                <td style="vertical-align:middle">
                                    <a href="dash.php?q=0&username='. $userObject->username .'" style="color: black">' .  $userObject->name . '</a>
                                </td>
                                <td style="vertical-align:middle; text-align: center">' . $userObject->examnumber .'/' . $total .'</td>
                                <td style="vertical-align:middle; text-align: center">'. $userObject->score .'</td>
                                <td style="vertical-align:middle"> </tr>';
                            } else {
                                echo '<tr>
                                    <td style="color:#99cc32; text-align: center"><b>' . $stt . '</b></td>
                                    <td style="vertical-align:middle">
                                        <a href="dash.php?q=0&username='. $userObject->username .'" style="color: black">' .  $userObject->name . '</a>
                                    </td>
                                    <td style="vertical-align:middle; text-align: center">Chưa làm bài</td>
                                    <td style="vertical-align:middle; text-align: center">'. $userObject->score .'</td>
                                    <td style="vertical-align:middle"> </tr>';
                            }
                            $stt++;
                        }
    
                        echo '</table></div>';
                        echo '<div class="panel title"><table class="table table-striped title1" ><tr style="text-align: center">';
                        $total = ceil($total/10);;
                        if(isset($_GET['show'])){
                            $show = $_GET['show'];
                        }
                        else{
                            $show = 1;
                        }
                        if($show == 1 && $total==1){
                        }
                        else if($show == 1 && $total!=1){
                            $i = 1;
                            while($i<=$total){
                                echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.$i.'">&nbsp;'.$i.'&nbsp;</a></td>';
                                $i++;
                            }
                            echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.($show+1).'">&nbsp;>>&nbsp;</a></td>';
                        }
                        else if($show != 1 && $show==$total){
                            echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.($show-1).'">&nbsp;<<&nbsp;</a></td>';
    
                            $i = 1;
                            while($i<=$total){
                                echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.$i.'">&nbsp;'.$i.'&nbsp;</a></td>';
                                $i++;
                            }
                        }
                        else{
                            echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.($show-1).'">&nbsp;<<&nbsp;</a></td>';
                            $i = 1;
                            while($i<=$total){
                                echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.$i.'">&nbsp;'.$i.'&nbsp;</a></td>';
                                $i++;
                            }
                            echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.($show+1).'">&nbsp;>>&nbsp;</a></td>';
                        }
                        echo '</tr></table></div>';
                    } else if(@$_GET['sort'] == 'score'){
                        if(isset($_GET['show'])){
                            $show = $_GET['show'];
                            $showfrom = (($show-1)*10) + 1;
                            $showtill = $showfrom + 9;
                        }
                        else{
                            $show = 1;
                            $showfrom = 1;
                            $showtill = 10;
                        }
    
                        echo '<div class="panel title">
                        <table class="table table-striped title1" >
                        <tr>
                            <td style="vertical-align:middle; text-align: center"><b>STT</b></td>
                            <td style="vertical-align:middle; text-align: center">
                                <a href="dash.php?q=0&sort=name" style="color: black; font-weight: bold">Tên học viên</a>
                            </td>
                            <td style="vertical-align:middle; text-align: center"><b>Số bài đã làm</b></td>
                            <td style="vertical-align:middle; text-align: center">
                                <a href="dash.php?q=0&sort=score" style="color: black; font-weight: bold">Tổng điểm trung bình</a>
                            </td>
                        </tr>';
    
                        $q1 = mysqli_query($con, "SELECT * FROM quiz") or die('Error223');
                        $total = mysqli_num_rows($q1);
    
                        $q = mysqli_query($con, "SELECT * FROM user LIMIT ".($showfrom-1).",10") or die('Error223');
    
                        // Khởi tạo mảng để chứa các đối tượng
                        $userArray = array();
    
                        // Duyệt qua từng dòng kết quả và thêm vào mảng
                        while($row = mysqli_fetch_assoc($q)) {
                            // Tạo một đối tượng mới với các thuộc tính name, username, examnumber, score
                            $userObject = new stdClass();
                            $userObject->name = $row['name'];
                            $userObject->username = $row['username'];
                            // Tìm số lượng bài thi đã làm
                            $q2 = mysqli_query($con, "SELECT * FROM history WHERE username ='" . $userObject->username . "'") or die('Error223');
                                $c = 0;
                                $sum = 0;
                                while ($row2 = mysqli_fetch_array($q2)){
                                    $totalmark = $row2['totalscore'];
                                    if($totalmark >= 10){
                                        $totalmark = 10;
                                    }
                                    $sum += $totalmark;
                                    $c++;
                                }
    
                                $userObject->examnumber = $c;
                                
                                if($c > 0){
                                    $userObject->score = round($sum/$c, 2);           
                                } else{
                                    $userObject->score = 0;
                                }
                            // Thêm đối tượng vào mảng
                            $userArray[] = $userObject;
                        }
    
                        usort($userArray, function ($a, $b) {
                            // Compare scores in descending order
                            if ($a->score !== $b->score) {
                                return $b->score <=> $a->score;
                            }
                        
                            // If scores are equal, compare names
                            // Extract the last name of $a
                            $namePartsA = explode(' ', $a->name);
                            $lastNameA = array_pop($namePartsA);
                        
                            // Extract the last name of $b
                            $namePartsB = explode(' ', $b->name);
                            $lastNameB = array_pop($namePartsB);
                        
                            // Compare the last names
                            if ($lastNameA !== $lastNameB) {
                                return $lastNameA <=> $lastNameB;
                            }
                        
                            // If last names are equal, compare the remaining part of the name
                            $firstPartA = implode(' ', $namePartsA);
                            $firstPartB = implode(' ', $namePartsB);
                            return $firstPartA <=> $firstPartB;
                        });                        
    
                        $stt = 1;
                        foreach ($userArray as $userObject) {
                            // Truy cập và xử lý các thuộc tính của từng đối tượng trong mảng
                            if( $userObject->score > 0){
                                echo '<tr>
                                <td style="color:#99cc32; text-align: center"><b>' . $stt . '</b></td>
                                <td style="vertical-align:middle">
                                    <a href="dash.php?q=0&username='. $userObject->username .'" style="color: black">' .  $userObject->name . '</a>
                                </td>
                                <td style="vertical-align:middle; text-align: center">' . $userObject->examnumber .'/' . $total .'</td>
                                <td style="vertical-align:middle; text-align: center">'. $userObject->score .'</td>
                                <td style="vertical-align:middle"> </tr>';
                            } else {
                                echo '<tr>
                                    <td style="color:#99cc32; text-align: center"><b>' . $stt . '</b></td>
                                    <td style="vertical-align:middle">
                                        <a href="dash.php?q=0&username='. $userObject->username .'" style="color: black">' .  $userObject->name . '</a>
                                    </td>
                                    <td style="vertical-align:middle; text-align: center">Chưa làm bài</td>
                                    <td style="vertical-align:middle; text-align: center">'. $userObject->score .'</td>
                                    <td style="vertical-align:middle"> </tr>';
                            }
                            $stt++;
                        }
    
                        echo '</table></div>';
                        echo '<div class="panel title"><table class="table table-striped title1" ><tr style="text-align: center">';
                        $total = ceil($total/10);;
                        if(isset($_GET['show'])){
                            $show = $_GET['show'];
                        }
                        else{
                            $show = 1;
                        }
                        if($show == 1 && $total==1){
                        }
                        else if($show == 1 && $total!=1){
                            $i = 1;
                            while($i<=$total){
                                echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.$i.'">&nbsp;'.$i.'&nbsp;</a></td>';
                                $i++;
                            }
                            echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.($show+1).'">&nbsp;>>&nbsp;</a></td>';
                        }
                        else if($show != 1 && $show==$total){
                            echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.($show-1).'">&nbsp;<<&nbsp;</a></td>';
    
                            $i = 1;
                            while($i<=$total){
                                echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.$i.'">&nbsp;'.$i.'&nbsp;</a></td>';
                                $i++;
                            }
                        }
                        else{
                            echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.($show-1).'">&nbsp;<<&nbsp;</a></td>';
                            $i = 1;
                            while($i<=$total){
                                echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.$i.'">&nbsp;'.$i.'&nbsp;</a></td>';
                                $i++;
                            }
                            echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.($show+1).'">&nbsp;>>&nbsp;</a></td>';
                        }
                        echo '</tr></table></div>';
                    }
                }

                //Xem kết quả
                if (@$_GET['q'] == 'result' && @$_GET['eid'] && @$_GET['username']) {
                    $eid = @$_GET['eid'];
                    $username = @$_GET['username'];
                    $q = mysqli_query($con, "SELECT * FROM quiz WHERE eid='$eid' ") or die('Error157');
                    while ($row = mysqli_fetch_array($q)) {
                        $total = $row['total'];
                    }
                    $q = mysqli_query($con, "SELECT * FROM history WHERE eid='$eid' AND username='$username' ") or die('Error157');
                    //Hiển thị tổng thể
                    while ($row = mysqli_fetch_array($q)) {
                        $s      = $row['score'];
                        $w      = $row['wrong'];
                        $r      = $row['correct'];
                        $status = $row['status'];
                    }

                    $q = mysqli_query($con, "SELECT * FROM quiz WHERE eid='$eid' ") or die('Error157');
                    while ($row = mysqli_fetch_array($q)) {
                        $total = $row['total'];
                    }
                    
                    if ($status == "finished") {
                        echo '<div class="panel">
                        <center><h1 class="title" style="color:#660033">Kết quả</h1><center><br />
                        <table class="table table-striped title1" style="font-size:20px;font-weight:1000;">';
                        echo '<tr style="color:darkblue">
                        <td style="vertical-align:middle">Tổng số câu hỏi</td>
                        <td style="vertical-align:middle">' . $total . '</td>
                        </tr>
                        <tr style="color:darkgreen">
                            <td style="vertical-align:middle">Câu trả lời đúng&nbsp;<span class="glyphicon glyphicon-ok-arrow" aria-hidden="true"></span></td>
                            <td style="vertical-align:middle">' . $r . '</td>
                        </tr> 
                        <tr style="color:red">
                            <td style="vertical-align:middle">Câu trả lời sai&nbsp;<span class="glyphicon glyphicon-remove-arrow" aria-hidden="true"></span></td>
                            <td style="vertical-align:middle">' . $w . '</td>
                        </tr>
                        <tr style="color:orange">
                            <td style="vertical-align:middle">Bỏ trống&nbsp;<span class="glyphicon glyphicon-ban-arrow" aria-hidden="true"></span></td>
                            <td style="vertical-align:middle">' . ($total - $r - $w) . '</td>
                        </tr>
                        <tr style="color:darkblue">
                            <td style="vertical-align:middle">Điểm&nbsp;<span class="glyphicon glyphicon-star" aria-hidden="true"></span></td>
                            <td style="vertical-align:middle">' . $s . '</td>
                        </tr>';
                        echo '<tr></tr></table></div>
                        <div class="panel"><br /><h3 align="center" style="font-family:calibri">:: Chi tiết ::</h3><br /><ol style="font-size:20px;font-weight:bold;font-family:calibri;margin-top:20px">';
                
                        //Hiển thị từng câu trắc nghiệm
                        $q = mysqli_query($con, "SELECT * FROM questions WHERE eid='$_GET[eid]'") or die('Error197');
                        while ($row = mysqli_fetch_array($q)) {
                            $question = $row['qns'];
                            $qid      = $row['qid'];
                            $q2 = mysqli_query($con, "SELECT * FROM user_answer WHERE eid='$_GET[eid]' AND qid='$qid' AND username='$_GET[username]'") or die('Error197');
                            if (mysqli_num_rows($q2) > 0) {
                                $row1         = mysqli_fetch_array($q2);
                                $ansid        = $row1['ans'];
                                $correctansid = $row1['correctans'];
                                $q3 = mysqli_query($con, "SELECT * FROM options WHERE optionid='$ansid'") or die('Error197');
                                $q4 = mysqli_query($con, "SELECT * FROM options WHERE optionid='$correctansid'") or die('Error197');
                                $row2       = mysqli_fetch_array($q3);
                                $row3       = mysqli_fetch_array($q4);
                                $ans        = $row2['option'];
                                $correctans = $row3['option'];
                            } else {
                                $q3 = mysqli_query($con, "SELECT * FROM answer WHERE qid='$qid'") or die('Error197');
                                $row1         = mysqli_fetch_array($q3);
                                $correctansid = $row1['ansid'];
                                $q4 = mysqli_query($con, "SELECT * FROM options WHERE optionid='$correctansid'") or die('Error197');
                                $row2       = mysqli_fetch_array($q4);
                                $correctans = $row2['option'];
                                $ans        = "Unanswered";
                            }
                            // Đoạn này hiển thị câu đúng và sai, bỏ trống
                            if ($correctans == $ans && $ans != "Unanswered") {
                                echo '<li><div style="font-size:16px;font-weight:bold;font-family:calibri;margin-top:20px;background-color:lightgreen;padding:10px;word-wrap:break-word;border:2px solid darkgreen;border-radius:10px;">' . $question . ' <span class="glyphicon glyphicon-ok" style="color:darkgreen"></span></div><br />';
                                echo '<font style="font-size:14px;color:darkgreen"><b>Câu trả lời của bạn: </b></font><font style="font-size:14px;">' . $ans . '</font><br />';
                                echo '<font style="font-size:14px;color:darkgreen"><b>Câu trả lời đúng: </b></font><font style="font-size:14px;">' . $correctans . '</font><br />';
                            } 
                            else if ($ans == "Unanswered") {
                                echo '<li><div style="font-size:16px;font-weight:bold;font-family:calibri;margin-top:20px;background-color:#f7f576;padding:10px;word-wrap:break-word;border:2px solid #b75a0e;border-radius:10px;">' . $question . ' </div><br />';
                                echo '<font style="font-size:14px;color:darkgreen"><b>Câu trả lời đúng: </b></font><font style="font-size:14px;">' . $correctans . '</font><br />';
                            } 
                            else {
                                echo '<li><div style="font-size:16px;font-weight:bold;font-family:calibri;margin-top:20px;background-color:#f99595;padding:10px;word-wrap:break-word;border:2px solid darkred;border-radius:10px;">' . $question . ' <span class="glyphicon glyphicon-remove" style="color:red"></span></div><br />';
                                echo '<font style="font-size:14px;color:darkgreen"><b>Câu trả lời của bạn: </b></font><font style="font-size:14px;">' . $ans . '</font><br />';
                                echo '<font style="font-size:14px;color:red"><b>Câu trả lời đúng: </b></font><font style="font-size:14px;">' . $correctans . '</font><br />';

                            }
                            echo "<br /></li>";
                        }

                        //Hiển thị từng câu điền từ
                        $q = mysqli_query($con, "SELECT * FROM fill_questions WHERE eid='$_GET[eid]'") or die('Error197');
                        while ($row = mysqli_fetch_array($q)) {
                            $question = $row['qns'];
                            $qid      = $row['qid'];
                            $q2 = mysqli_query($con, "SELECT * FROM user_answer WHERE eid='$_GET[eid]' AND qid='$qid' AND username='$_GET[username]'") or die('Error197');
                            if (mysqli_num_rows($q2) > 0) {
                                $row1         = mysqli_fetch_array($q2);
                                $ans        = $row1['ans'];
                                $correctans = $row1['correctans'];
                            } else {
                                $q3 = mysqli_query($con, "SELECT * FROM fill_questions WHERE qid='$qid'") or die('Error197');
                                $row1         = mysqli_fetch_array($q3);
                                $correctans = $row1['answer'];
                                $ans        = "Unanswered";
                            }
                            // Đoạn này hiển thị câu đúng và sai, bỏ trống
                            if ($correctans == $ans && $ans != "Unanswered") {
                                echo '<li><div style="font-size:16px;font-weight:bold;font-family:calibri;margin-top:20px;background-color:lightgreen;padding:10px;word-wrap:break-word;border:2px solid darkgreen;border-radius:10px;">' . $question . ' <span class="glyphicon glyphicon-ok" style="color:darkgreen"></span></div><br />';
                                echo '<font style="font-size:14px;color:darkgreen"><b>Câu trả lời của bạn: </b></font><font style="font-size:14px;">' . $ans . '</font><br />';
                                echo '<font style="font-size:14px;color:darkgreen"><b>Câu trả lời đúng: </b></font><font style="font-size:14px;">' . $correctans . '</font><br />';
                            } 
                            else if ($ans == "Unanswered") {
                                echo '<li><div style="font-size:16px;font-weight:bold;font-family:calibri;margin-top:20px;background-color:#f7f576;padding:10px;word-wrap:break-word;border:2px solid #b75a0e;border-radius:10px;">' . $question . ' </div><br />';
                                echo '<font style="font-size:14px;color:darkgreen"><b>Câu trả lời đúng: </b></font><font style="font-size:14px;">' . $correctans . '</font><br />';
                            } else {
                                echo '<li><div style="font-size:16px;font-weight:bold;font-family:calibri;margin-top:20px;background-color:#f99595;padding:10px;word-wrap:break-word;border:2px solid darkred;border-radius:10px;">' . $question . ' <span class="glyphicon glyphicon-remove" style="color:red"></span></div><br />';
                                echo '<font style="font-size:14px;color:darkgreen"><b>Câu trả lời của bạn: </b></font><font style="font-size:14px;">' . $ans . '</font><br />';
                                echo '<font style="font-size:14px;color:red"><b>Câu trả lời đúng: </b></font><font style="font-size:14px;">' . $correctans . '</font><br />';

                            }
                            echo "<br /></li>";
                        }

                        echo '</ol>';
                        echo "</div>";
                    } else {
                        die("Lỗi!!!");
                    }
                }

                if(@$_GET['q'] == 'edit' && @$_GET['eid']){
                    // lấy eid
                    $eid = @$_GET['eid'];
                    
                    // Lấy danh sách câu hỏi từ bảng questions
                    $q1 = mysqli_query($con, "SELECT * FROM questions WHERE eid='$eid'") or die('Error khi truy vấn bảng questions');

                    // Hiển thị các câu hỏi và đáp án
                    echo '<form method="POST" action="update.php?q=edit">'; // action cập nhật tất cả câu hỏi

                    while ($row = mysqli_fetch_assoc($q1)) {
                        $qid = $row['qid'];
                            echo '<div class="question-block">';
    
                        // Hiển thị câu hỏi hiện tại
                        echo '<b>Câu hỏi ' . $row['sn'] . ':</b> <textarea name="qns_' . $row['qid'] . '" class="form-control">' . $row['qns'] . '</textarea><br />';
    
                        // Hiển thị các đáp án A, B, C, D
                        $q2 = mysqli_query($con, "SELECT * FROM options WHERE qid='$qid'") or die('Error khi truy vấn bảng question');
                        $op = 1;
                        $option1 = '';
                        $option2 = '';
                        $option3 = '';
                        $option4 = '';
                        while ($row1 = mysqli_fetch_assoc($q2)) {
                        // Sử dụng biến $op để thay thế vào name="op1_", op2_, ...
                            echo '<b>Đáp án:</b> <input type="text" name="op' . $op . '_' . $row1['optionid'] . '" value="' . $row1['option'] . '" class="form-control"><br />';
                            if ($op == 1) {
                                $option1 = $row1['optionid'];
                            } elseif ($op == 2) {
                                $option2 = $row1['optionid'];
                            } elseif ($op == 3) {
                                $option3 = $row1['optionid'];
                            } elseif ($op == 4) {
                                $option4 = $row1['optionid'];
                            }
                            $op++;  // Tăng giá trị của $op
                        }

                        $q3 = mysqli_query($con, "SELECT * FROM answer WHERE qid='$qid'") or die('Error khi truy vấn bảng question');
                        $row2 = mysqli_fetch_assoc($q3);
                        // Hiển thị đáp án đúng
                        echo '<b>Đáp án đúng:</b>';
                            echo '<select name="ans_' . $row['qid'] . '" class="form-control">';
                                echo '<option value="' . $option1 . '" ' . ($row2['ansid'] == $option1 ? 'selected' : '') . '>A</option>';
                                echo '<option value="' . $option2 . '" ' . ($row2['ansid'] == $option2 ? 'selected' : '') . '>B</option>';
                                echo '<option value="' . $option3 . '" ' . ($row2['ansid'] == $option3 ? 'selected' : '') . '>C</option>';
                                echo '<option value="' . $option4 . '" ' . ($row2['ansid'] == $option4 ? 'selected' : '') . '>D</option>';
                            echo '</select><br />';
    
                        // Thêm câu hỏi ID để dễ dàng xác định câu hỏi nào đang được thay đổi
                        echo '<input type="hidden" name="qid_' . $row['qid'] . '" value="' . $row['qid'] . '">';
    
                        echo '</div><hr>';
                    }

                    // Lấy danh sách câu hỏi từ bảng fill_questions
                    $q4 = mysqli_query($con, "SELECT * FROM fill_questions WHERE eid='$eid'") or die('Error khi truy vấn bảng questions');

                    // Hiển thị câu hỏi điền từ
                    while ($row4 = mysqli_fetch_assoc($q4)) {
                        $qid = $row4['qid'];
                        echo '<div class="question-block">';

                        // Hiển thị câu hỏi điền từ
                        echo '<b>Câu hỏi ' . $row4['sn'] . ':</b> <textarea name="fill_qns_' . $row4['qid'] . '" class="form-control">' . $row4['qns'] . '</textarea><br />';

                         // Hiển thị đáp án đúng cho câu hỏi điền từ (nếu có)
                        echo '<b>Đáp án đúng:</b> <input type="text" name="fill_ans_' . $row4['qid'] . '" value="' . (isset($row4['answer']) ? $row4['answer'] : '') . '" class="form-control"><br />';

                        // Thêm câu hỏi ID để dễ dàng xác định câu hỏi điền từ đang được thay đổi
                        echo '<input type="hidden" name="qid_' . $row4['qid'] . '" value="' . $row4['qid'] . '">';
    
                        echo '</div><hr>';
                    }

                    // Bao bọc nút submit trong div và sử dụng flexbox để căn giữa
                        echo '<div style="display: flex; justify-content: center; margin-top: 20px;">';
                        echo '<input type="submit" value="Cập nhật toàn bộ bài" class="btn btn-primary" style="margin-bottom: 20px">';
                        echo '</div>';

                    echo '</form>';    
                }
                ?>
            </div>
        </div>
    </div>
    
    <script>
        function changeScore(button, username, eid, value) {
            $(button).prop('disabled', true);
            $.ajax({
                url: 'edit_data.php?username=' + username + '&eid=' + eid + '&diem=' + value,
                type: 'get',
                dataType: 'json',
                success: function (response) {

                    $.ajax({
                        url: 'get_data.php?username=' + username + '&eid=' + eid,
                        type: 'get',
                        dataType: 'json',
                        success: function (data) {

                            if(value == -0.5){
                                $(button).next().text(data['plusscore']);
                                if(data['totalscore'] >=10){
                                    $(button).parent().next().find('span').text(10);
                                } else if(data['totalscore'] <=0){
                                    $(button).parent().next().find('span').text(0);
                                } else{
                                    $(button).parent().next().find('span').text(data['totalscore']);
                                }

                            } else if(value == 0.5){

                                $(button).prev().text(data['plusscore']);
                                if(data['totalscore'] >=10){
                                    $(button).parent().next().find('span').text(10);
                                } else if(data['totalscore'] <=0){
                                    $(button).parent().next().find('span').text(0);
                                } else{
                                    $(button).parent().next().find('span').text(data['totalscore']);
                                }

                            }
                            $(button).prop('disabled', false);
                        }
                    })
                }
               
            });
        }
    </script>
    </body>
    </html>
