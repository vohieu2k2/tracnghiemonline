<?php
include_once 'dbConnection.php';

session_start();
$username = $_SESSION['username'];
// Xóa phản hồi (feedback) 
if (isset($_SESSION['key'])) {
    if (@$_GET['fdid'] && $_SESSION['key'] == '54585c506829293a2d4c3b68543b316e2e7a2d277858545a36362e5f39') {
        $id = @$_GET['fdid'];
        $result = mysqli_query($con, "DELETE FROM feedback WHERE id='$id' ") or die('Error');
        header("location:dash.php?q=3");
    }
}
//Vô hiệu hóa (ở đây là đóng bài thi) một bài quiz
if (isset($_SESSION['key'])) {
    if (@$_GET['deidquiz'] && $_SESSION['key'] == '54585c506829293a2d4c3b68543b316e2e7a2d277858545a36362e5f39') {
        $eid = @$_GET['deidquiz'];
        $r1 = mysqli_query($con, "UPDATE quiz SET status='disabled' WHERE eid='$eid' ") or die('Error');
        $q = mysqli_query($con, "SELECT * FROM history WHERE eid='$eid' AND status='ongoing' AND score_updated='false'");
        while($row = mysqli_fetch_array($q)){
            // $user = $row['username'];
            // $s = $row['score'];
            $r1 = mysqli_query($con, "UPDATE history SET status='finished',score_updated='true' WHERE eid='$eid' AND username='$user' ") or die('Error');
            // $q1 = mysqli_query($con, "SELECT * FROM rank WHERE username='$user'") or die('Error161');
            // $rowcount = mysqli_num_rows($q1);
            // if ($rowcount == 0) {
            //     $q2 = mysqli_query($con, "INSERT INTO rank VALUES(NULL,'$user','$s',NOW())") or die('Error165');
            // } else {
            //     while ($row = mysqli_fetch_array($q1)) {
            //         $sun = $row['score'];
            //     }
                        
            //     $sun = $s + $sun;
            //     $q3 = mysqli_query($con, "UPDATE `rank` SET `score`=$sun ,time=NOW() WHERE username= '$username'") or die('Error174');
            // }
        }
        header("location:dash.php?q=7");
    }
}
// Kích hoạt bài quiz (mở bài thi admin)
if (isset($_SESSION['key'])) {
    if (@$_GET['eeidquiz'] && $_SESSION['key'] == '54585c506829293a2d4c3b68543b316e2e7a2d277858545a36362e5f39') {
        $eid = @$_GET['eeidquiz'];
        $r1 = mysqli_query($con, "UPDATE quiz SET status='enabled' WHERE eid='$eid' ") or die('Error');
        header("location:dash.php?q=7");
    }
}
//Xóa Thông Tin Người Dùng
if (isset($_SESSION['key'])) {
    if (@$_GET['dusername'] && $_SESSION['key'] == '54585c506829293a2d4c3b68543b316e2e7a2d277858545a36362e5f39') {
        $dusername = @$_GET['dusername'];
        // $r1 = mysqli_query($con, "DELETE FROM rank WHERE username='$dusername' ") or die('Error');
        // Xóa bài kiểm tra người này làm
        $r2 = mysqli_query($con, "DELETE FROM history WHERE username='$dusername' ") or die('Error');
        // Xóa các bản ghi trong bảng user_answer
        $r3 = mysqli_query($con, "DELETE FROM user_answer WHERE username='$dusername' ") or die('Error');
        // Xóa người dùng
        $result = mysqli_query($con, "DELETE FROM user WHERE username='$dusername' ") or die('Error');
        header("location:dash.php?q=1");
    }
}
//Xóa bài thi khỏi CSDL
if (isset($_SESSION['key'])) {
    if (@$_GET['q'] == 'rmquiz' && $_SESSION['key'] == '54585c506829293a2d4c3b68543b316e2e7a2d277858545a36362e5f39') {
        $eid = @$_GET['eid'];
        $result = mysqli_query($con, "SELECT * FROM questions WHERE eid='$eid' ") or die('Error');
        while ($row = mysqli_fetch_array($result)) {
            $qid = $row['qid'];
            $r1 = mysqli_query($con, "DELETE FROM options WHERE qid='$qid'") or die('Error');
            $r2 = mysqli_query($con, "DELETE FROM answer WHERE qid='$qid' ") or die('Error');
        }

        // Xóa đáp án của người dùng cho bài thi này
        $r3 = mysqli_query($con, "DELETE FROM user_answer WHERE eid='$eid'") or die('Error');
        // Xóa lịch sử của bài thi
        $r4 = mysqli_query($con, "DELETE FROM history WHERE eid='$eid' ") or die('Error');
        //Xóa câu hỏi trắc nghiệm trong bài thi
        $r5 = mysqli_query($con, "DELETE FROM questions WHERE eid='$eid' ") or die('Error');
        // Xóa câu hỏi điền từ
        $r6 = mysqli_query($con, "DELETE FROM fill_questions WHERE eid='$eid' ") or die('Error');
        // Xóa bài thi
        $r7 = mysqli_query($con, "DELETE FROM quiz WHERE eid='$eid' ") or die('Error');
        header("location:dash.php?q=5");
    }
}
//Thêm bài thi vào CSDL(ở đây là số lượng câu, điểm số vào quiz)
if (isset($_SESSION['key'])) {
    if (@$_GET['q'] == 'addquiz' && $_SESSION['key'] == '54585c506829293a2d4c3b68543b316e2e7a2d277858545a36362e5f39') {
        $name    = $_POST['name'];
        $name    = ucwords(strtolower($name));
        $date    = $_POST['date'];
        $choicequestion   = $_POST['choicequestion'];
        $fillquestion = $_POST['fillquestion'];
        $total = $choicequestion + $fillquestion;
        $time    = $_POST['time'];
        $status  = "disabled";
        $id      = uniqid();
        $q3      = mysqli_query($con, "INSERT INTO quiz VALUES(NULL,'$id','$name','$total', '$choicequestion', '$fillquestion', '$time', 'NOW()','$status', '$date')");
        header("location:dash.php?q=4&step=2&eid=$id&n=$choicequestion&n1=$fillquestion");
    }
}
//Thêm câu hỏi và câu trả lời vào cơ sở dữ liệu
if (isset($_SESSION['key'])) {
    if (@$_GET['q'] == 'addqns' && $_SESSION['key'] == '54585c506829293a2d4c3b68543b316e2e7a2d277858545a36362e5f39') {
        $n   = @$_GET['n'];
        $n1  = @$_GET['n1']; 
        $eid = @$_GET['eid'];
        $ch  = @$_GET['ch'];
        for ($i = 1; $i <= $n; $i++) {
            $qid  = uniqid();
            $qns  = addslashes($_POST['qns' . $i]);
            $q3   = mysqli_query($con, "INSERT INTO questions VALUES  (NULL,'$eid','$qid','$qns' , '$ch' , '$i')") or die();
            $oaid = uniqid();
            $obid = uniqid();
            $ocid = uniqid();
            $odid = uniqid();
            $a    = addslashes($_POST[$i . '1']);
            $b    = addslashes($_POST[$i . '2']);
            $c    = addslashes($_POST[$i . '3']);
            $d    = addslashes($_POST[$i . '4']);
            $qa = mysqli_query($con, "INSERT INTO options VALUES  (NULL,'$qid','$a','$oaid')") or die('Error61');
            $qb = mysqli_query($con, "INSERT INTO options VALUES  (NULL,'$qid','$b','$obid')") or die('Error62');
            $qb = mysqli_query($con, "INSERT INTO options VALUES  (NULL,'$qid','$c','$ocid')") or die('Error63'.mysqli_error($con));
            $qd = mysqli_query($con, "INSERT INTO options VALUES  (NULL,'$qid','$d','$odid')") or die('Error64');
            $e = $_POST['ans' . $i];
            switch ($e) {
                case 'a':
                    $ansid = $oaid;
                    break;
                
                case 'b':
                    $ansid = $obid;
                    break;
                
                case 'c':
                    $ansid = $ocid;
                    break;
                
                case 'd':
                    $ansid = $odid;
                    break;
                
                default:
                    $ansid = $oaid;
            }
            
            $qans = mysqli_query($con, "INSERT INTO answer VALUES  (NULL,'$qid','$ansid')");
        }

        for ($i = $n + 1; $i <= $n + $n1; $i++) {
            $qid  = uniqid();
            $qns  = addslashes($_POST['qns' . $i]);
            $ans = strtolower(addslashes($_POST['ans' . $i]));
            $ans = preg_replace('/\s+/', ' ', trim($ans));
            $q3   = mysqli_query($con, "INSERT INTO fill_questions VALUES  (NULL,'$eid','$qid','$qns', '$ans' , '$i')") or die();
        }
        
        header("location:dash.php?q=0");
    }
}
//Khi nhấn vào nút chọn
if (@$_GET['q'] == 'quiz' && @$_GET['step'] == 2 && isset($_SESSION['6e447159425d2d']) && $_SESSION['6e447159425d2d'] == "6e447159425d2d" && isset($_POST['ans']) && (!isset($_GET['delanswer']))) {
    // Lấy các thông tin về câu trả lời
    $eid   = @$_GET['eid'];
    // Lấy câu hỏi thứ tự 
    $sn    = @$_GET['n'];
    $total = @$_GET['t'];
    $ans   = $_POST['ans'];
    $qid   = @$_GET['qid'];
    $choice = @$_GET['choice'];
    if($sn <= $choice){
        $q = mysqli_query($con, "SELECT * FROM history WHERE username='$username' AND eid='$_GET[eid]' ") or die('Error197');
        if (mysqli_num_rows($q) > 0) {
            $q = mysqli_query($con, "SELECT * FROM history WHERE username='$_SESSION[username]' AND eid='$_GET[eid]' ") or die('Error197');
            while ($row = mysqli_fetch_array($q)) {
                $time   = $row['timestamp'];
                $status = $row['status'];
            }
        
            $q = mysqli_query($con, "SELECT * FROM quiz WHERE eid='$_GET[eid]' ") or die('Error197');
            while ($row = mysqli_fetch_array($q)) {
                $ttime   = $row['time'];
                $qstatus = $row['status'];
            }
        
            $remaining = (($ttime * 60) - ((time() - $time)));
            // Khi bài thi còn
            if ($status == "ongoing" && $remaining > 0 && $qstatus == "enabled") {
                // Lấy câu trả lời cũ
                $q = mysqli_query($con, "SELECT * FROM user_answer WHERE eid='$_GET[eid]' AND username='$_SESSION[username]' AND qid='$qid' ") or die('Error115');
                while ($row = mysqli_fetch_array($q)) {
                    $prevans = $row['ans'];
                }
            // Lấy đáp án câu tl
            $q = mysqli_query($con, "SELECT * FROM answer WHERE qid='$qid' ");
            while ($row = mysqli_fetch_array($q)) {
                $ansid = $row['ansid'];
            }
            // Đưa câu tl mới vào
            $q = mysqli_query($con, "SELECT * FROM user_answer WHERE username='$_SESSION[username]' AND eid='$_GET[eid]' AND qid='$qid' ") or die('Error1977');
            if (mysqli_num_rows($q) != 0) {
                $q = mysqli_query($con, "UPDATE user_answer SET ans='$ans' WHERE username='$_SESSION[username]' AND eid='$_GET[eid]' AND qid='$qid' ") or die('Error197');
            } else {
                $q = mysqli_query($con, "INSERT INTO user_answer VALUES(NULL,'$qid','$ans','$ansid','$_GET[eid]','$_SESSION[username]')");
            }
            // Lấy các lựa chọn của câu hỏi
            $q = mysqli_query($con, "SELECT * FROM options WHERE qid='$qid' AND optionid='$ans'");
            while ($row = mysqli_fetch_array($q)) {
                $option = $row['option'];
            }
            
            // Nếu câu trả lời là đúng
            if ($ans == $ansid) {
                $q = mysqli_query($con, "SELECT * FROM quiz WHERE eid='$eid' ");
                while ($row = mysqli_fetch_array($q)) {
                    // $correct = $row['correct'];
                    // $wrong   = $row['wrong'];
                    $total = $row['total'];
                }
                // Lấy bài thi 
                $q = mysqli_query($con, "SELECT * FROM history WHERE eid='$eid' AND username='$username' ") or die('Error115');
                while ($row = mysqli_fetch_array($q)) {
                    $s = $row['score'];
                    $r = $row['correct'];
                    $w = $row['wrong'];
                }
                // Nếu tồn tại và câu trả lời trước giống câu đáp án
                if (isset($prevans) && $prevans == $ansid) {
                }
                // Nếu có câu trả lời trước và khác với câu trả lời cũ 
                else if (isset($prevans) && $prevans != $ansid) {
                    // Tăng câu đúng, giảm câu sai, cập nhật
                    $r++;
                    $w--;
                    $s = (10*$r)/$total;
                    // $s = $s + $correct;
                    // $s = $s + $correct + $wrong;
                    $q = mysqli_query($con, "UPDATE `history` SET `score`=$s,`level`=$sn,`correct`=$r,`wrong`=$w, date= NOW(), `totalscore`=$s  WHERE  username = '$username' AND eid = '$eid'") or die('Error13');
                }
                // Nếu không tồn tại câu trả lời trước đó 
                else {
                    $r++;
                    $s = (10*$r)/$total;
                    // $s = $s + $correct;
                    $q = mysqli_query($con, "UPDATE `history` SET `score`=$s,`level`=$sn,`correct`=$r, date= NOW(), `totalscore`=$s  WHERE  username = '$username' AND eid = '$eid'") or die('Error14');
                }
            }
            // Nếu câu trả lời mới là sai 
            else {
                $q = mysqli_query($con, "SELECT * FROM quiz WHERE eid='$eid' ") or die('Error129');
                while ($row = mysqli_fetch_array($q)) {
                    // $wrong   = $row['wrong'];
                    // $correct = $row['correct'];
                    $total = $row['total'];
                }
                
                $q = mysqli_query($con, "SELECT * FROM history WHERE eid='$eid' AND username='$username' ") or die('Error139');
                while ($row = mysqli_fetch_array($q)) {
                    $s = $row['score'];
                    $w = $row['wrong'];
                    $r = $row['correct'];
                }
                // Nếu có câu trả lời cũ và câu trả lời cũ bị sai
                if (isset($prevans) && $prevans != $ansid) {
                }
                // Nếu câu trả lời cũ là đúng 
                else if (isset($prevans) && $prevans == $ansid) {
                    $r--;
                    $w++;
                    $s = (10*$r)/$total;
                    // $s = $s - $correct;
                    // $s = $s - $correct - $wrong;
                    $q = mysqli_query($con, "UPDATE `history` SET `score`=$s,`level`=$sn,`wrong`=$w,`correct`=$r, date= NOW(), `totalscore`=$s  WHERE  username = '$username' AND eid = '$eid'") or die('Error11');
                }
                // Không có câu trả lời trước đó 
                else {
                    $w++;
                    // $s = $s - $wrong;
                    $q = mysqli_query($con, "UPDATE `history` SET `score`=$s,`level`=$sn,`wrong`=$w,date= NOW(), `totalscore`=$s  WHERE  username = '$username' AND eid = '$eid'") or die('Error12');
                }
            }
            if($sn < $total){
                $sn = $sn + 1;
            }
            header("location:account.php?q=quiz&step=2&eid=$eid&n=$sn&choice=$choice&t=$total") or die('Error152');
            
        } else {
            //Cập nhật lịch sử bài thi
            unset($_SESSION['6e447159425d2d']);
            $q = mysqli_query($con, "UPDATE history SET status='finished' WHERE username='$_SESSION[username]' AND eid='$_GET[eid]' ") or die('Error197');
            $q = mysqli_query($con, "SELECT * FROM history WHERE eid='$_GET[eid]' AND username='$_SESSION[username]'") or die('Error156');
                    while ($row = mysqli_fetch_array($q)) {
                        $s = $row['score'];
                        $scorestatus = $row['score_updated'];
                    }
                    if($scorestatus=="false"){
                        $q = mysqli_query($con, "UPDATE history SET score_updated='true' WHERE username='$_SESSION[username]' AND eid='$_GET[eid]' ") or die('Error197');
                        // $q = mysqli_query($con, "SELECT * FROM rank WHERE username='$username'") or die('Error161');
                        // $rowcount = mysqli_num_rows($q);
                        // if ($rowcount == 0) {
                        //     $q2 = mysqli_query($con, "INSERT INTO rank VALUES(NULL,'$username','$s',NOW())") or die('Error165');
                        // } else {
                        //     while ($row = mysqli_fetch_array($q)) {
                        //         $sun = $row['score'];
                        //     }
                        
                        //     $sun = $s + $sun;
                        //     $q = mysqli_query($con, "UPDATE `rank` SET `score`=$sun ,time=NOW() WHERE username= '$username'") or die('Error174');
                        // }
                }
            header('location:account.php?q=result&eid=' . $_GET[eid]);
        }
    } else {
        // Câp nhật trạng thấy người dùng trên bảng History
        unset($_SESSION['6e447159425d2d']);
        $q = mysqli_query($con, "UPDATE history SET status='finished' WHERE username='$_SESSION[username]' AND eid='$_GET[eid]' ") or die('Error197');
        $q = mysqli_query($con, "SELECT * FROM history WHERE eid='$_GET[eid]' AND username='$_SESSION[username]'") or die('Error156');
                while ($row = mysqli_fetch_array($q)) {
                    $s = $row['score'];
                    $scorestatus = $row['score_updated'];
                }
                if($scorestatus=="false"){
                    $q = mysqli_query($con, "UPDATE history SET score_updated='true' WHERE username='$_SESSION[username]' AND eid='$_GET[eid]' ") or die('Error197');
                    // $q = mysqli_query($con, "SELECT * FROM rank WHERE username='$username'") or die('Error161');
                    // $rowcount = mysqli_num_rows($q);
                    // if ($rowcount == 0) {
                    //     $q2 = mysqli_query($con, "INSERT INTO rank VALUES(NULL,'$username','$s',NOW())") or die('Error165');
                    // } else {
                    //     while ($row = mysqli_fetch_array($q)) {
                    //         $sun = $row['score'];
                    //     }
                        
                    //     $sun = $s + $sun;
                    //     $q = mysqli_query($con, "UPDATE `rank` SET `score`=$sun ,time=NOW() WHERE username= '$username'") or die('Error174');
                    // }
                }
            header('location:account.php?q=result&eid=' . $_GET[eid]);
    }
    //Câu hỏi điền từ
    } else if($sn > $choice){
        $ans = strtolower($ans);
        $ans = preg_replace('/\s+/', ' ', trim($ans));

        $q = mysqli_query($con, "SELECT * FROM history WHERE username='$username' AND eid='$_GET[eid]' ") or die('Error197');
        if (mysqli_num_rows($q) > 0) {
            $q = mysqli_query($con, "SELECT * FROM history WHERE username='$_SESSION[username]' AND eid='$_GET[eid]' ") or die('Error197');
            while ($row = mysqli_fetch_array($q)) {
                $time   = $row['timestamp'];
                $status = $row['status'];
            }
        
        $q = mysqli_query($con, "SELECT * FROM quiz WHERE eid='$_GET[eid]' ") or die('Error197');
        while ($row = mysqli_fetch_array($q)) {
            $ttime   = $row['time'];
            $qstatus = $row['status'];
        }
        
        $remaining = (($ttime * 60) - ((time() - $time)));
        // Khi bài thi còn
        if ($status == "ongoing" && $remaining > 0 && $qstatus == "enabled") {
            // Lấy câu trả lời cũ
            $q = mysqli_query($con, "SELECT * FROM user_answer WHERE eid='$_GET[eid]' AND username='$_SESSION[username]' AND qid='$qid' ") or die('Error115');
            while ($row = mysqli_fetch_array($q)) {
                $prevans = $row['ans'];
            }
            // Lấy đáp án câu tl
            $q = mysqli_query($con, "SELECT * FROM fill_questions WHERE qid='$qid' ");
            while ($row = mysqli_fetch_array($q)) {
                $ansid = strtolower($row['answer']);
                $ansid = preg_replace('/\s+/', ' ', trim($ansid));
            }

            // Đưa câu tl mới vào
            $q = mysqli_query($con, "SELECT * FROM user_answer WHERE username='$_SESSION[username]' AND eid='$_GET[eid]' AND qid='$qid' ") or die('Error1977');
            if (mysqli_num_rows($q) != 0) {
                $q = mysqli_query($con, "UPDATE user_answer SET ans='$ans' WHERE username='$_SESSION[username]' AND eid='$_GET[eid]' AND qid='$qid' ") or die('Error197');
            } else {
                $q = mysqli_query($con, "INSERT INTO user_answer VALUES(NULL,'$qid','$ans','$ansid','$_GET[eid]','$_SESSION[username]')");
            }
            
            // Nếu câu trả lời là đúng
            if ($ans == $ansid) {
                $q = mysqli_query($con, "SELECT * FROM quiz WHERE eid='$eid' ");
                while ($row = mysqli_fetch_array($q)) {
                    $total = $row['total'];
                }
                // Lấy bài thi
                $q = mysqli_query($con, "SELECT * FROM history WHERE eid='$eid' AND username='$username' ") or die('Error115');
                while ($row = mysqli_fetch_array($q)) {
                    $s = $row['score'];
                    $r = $row['correct'];
                    $w = $row['wrong'];
                }
                // Nếu tồn tại và câu trả lời trước giống câu đáp án
                if (isset($prevans) && $prevans == $ansid) {
                }
                // Nếu có câu trả lời trước và khác với câu trả lời cũ 
                else if (isset($prevans) && $prevans != $ansid) {
                    // Tăng câu đúng, giảm câu sai, cập nhật
                    $r++;
                    $w--;
                    $s = (10*$r)/$total;
                    // $s = $s + $correct;
                    // $s = $s + $correct + $wrong;
                    $q = mysqli_query($con, "UPDATE `history` SET `score`=$s,`level`=$sn,`correct`=$r,`wrong`=$w, date= NOW(), `totalscore`=$s  WHERE  username = '$username' AND eid = '$eid'") or die('Error13');
                }
                // Nếu không tồn tại câu trả lời trước đó 
                else {
                    $r++;
                    $s = (10*$r)/$total;
                    // $s = $s + $correct;
                    $q = mysqli_query($con, "UPDATE `history` SET `score`=$s,`level`=$sn,`correct`=$r, date= NOW(), `totalscore`=$s  WHERE  username = '$username' AND eid = '$eid'") or die('Error14');
                }
            }
            // Nếu câu trả lời mới là sai 
            else {
                $q = mysqli_query($con, "SELECT * FROM quiz WHERE eid='$eid' ") or die('Error129');
                while ($row = mysqli_fetch_array($q)) {
                    // $wrong   = $row['wrong'];
                    // $correct = $row['correct'];
                    $total = $row['total'];
                }
                
                $q = mysqli_query($con, "SELECT * FROM history WHERE eid='$eid' AND username='$username' ") or die('Error139');
                while ($row = mysqli_fetch_array($q)) {
                    $s = $row['score'];
                    $w = $row['wrong'];
                    $r = $row['correct'];
                }
                // Nếu có câu trả lời cũ và câu trả lời cũ bị sai
                if (isset($prevans) && $prevans != $ansid) {
                }
                // Nếu câu trả lời cũ là đúng 
                else if (isset($prevans) && $prevans == $ansid) {
                    $r--;
                    $w++;
                    $s = (10*$r)/$total;
                    // $s = $s - $correct;
                    // $s = $s - $correct - $wrong;
                    $q = mysqli_query($con, "UPDATE `history` SET `score`=$s,`level`=$sn,`wrong`=$w,`correct`=$r, date= NOW(), `totalscore`=$s  WHERE  username = '$username' AND eid = '$eid'") or die('Error11');
                }
                // Không có câu trả lời trước đó 
                else {
                    $w++;
                    // $s = $s - $wrong;
                    $q = mysqli_query($con, "UPDATE `history` SET `score`=$s,`level`=$sn,`wrong`=$w,date= NOW(), `totalscore`=$s  WHERE  username = '$username' AND eid = '$eid'") or die('Error12');
                }
            }
            if($sn < $total){
                $sn = $sn + 1;
            }
            header("location:account.php?q=quiz&step=2&eid=$eid&n=$sn&choice=$choice&t=$total") or die('Error152');
            
        } else {
            //Cập nhật lịch sử bài thi
            unset($_SESSION['6e447159425d2d']);
            $q = mysqli_query($con, "UPDATE history SET status='finished' WHERE username='$_SESSION[username]' AND eid='$_GET[eid]' ") or die('Error197');
            $q = mysqli_query($con, "SELECT * FROM history WHERE eid='$_GET[eid]' AND username='$_SESSION[username]'") or die('Error156');
                    while ($row = mysqli_fetch_array($q)) {
                        $s = $row['score'];
                        $scorestatus = $row['score_updated'];
                    }
                    if($scorestatus=="false"){
                        $q = mysqli_query($con, "UPDATE history SET score_updated='true' WHERE username='$_SESSION[username]' AND eid='$_GET[eid]' ") or die('Error197');
                        // $q = mysqli_query($con, "SELECT * FROM rank WHERE username='$username'") or die('Error161');
                        // $rowcount = mysqli_num_rows($q);
                        // if ($rowcount == 0) {
                        //     $q2 = mysqli_query($con, "INSERT INTO rank VALUES(NULL,'$username','$s',NOW())") or die('Error165');
                        // } else {
                        //     while ($row = mysqli_fetch_array($q)) {
                        //         $sun = $row['score'];
                        //     }
                        
                        //     $sun = $s + $sun;
                        //     $q = mysqli_query($con, "UPDATE `rank` SET `score`=$sun ,time=NOW() WHERE username= '$username'") or die('Error174');
                        // }
                }
            header('location:account.php?q=result&eid=' . $_GET[eid]);
        }
    } else {
        // Câp nhật trạng thấy người dùng trên bảng History
        unset($_SESSION['6e447159425d2d']);
        $q = mysqli_query($con, "UPDATE history SET status='finished' WHERE username='$_SESSION[username]' AND eid='$_GET[eid]' ") or die('Error197');
        $q = mysqli_query($con, "SELECT * FROM history WHERE eid='$_GET[eid]' AND username='$_SESSION[username]'") or die('Error156');
                while ($row = mysqli_fetch_array($q)) {
                    $s = $row['score'];
                    $scorestatus = $row['score_updated'];
                }
                if($scorestatus=="false"){
                    $q = mysqli_query($con, "UPDATE history SET score_updated='true' WHERE username='$_SESSION[username]' AND eid='$_GET[eid]' ") or die('Error197');
                    // $q = mysqli_query($con, "SELECT * FROM rank WHERE username='$username'") or die('Error161');
                    // $rowcount = mysqli_num_rows($q);
                    // if ($rowcount == 0) {
                    //     $q2 = mysqli_query($con, "INSERT INTO rank VALUES(NULL,'$username','$s',NOW())") or die('Error165');
                    // } else {
                    //     while ($row = mysqli_fetch_array($q)) {
                    //         $sun = $row['score'];
                    //     }
                        
                    //     $sun = $s + $sun;
                    //     $q = mysqli_query($con, "UPDATE `rank` SET `score`=$sun ,time=NOW() WHERE username= '$username'") or die('Error174');
                    // }
                }
            header('location:account.php?q=result&eid=' . $_GET[eid]);
    }
    }
}
    
// Quản lý quá trình người dùng tham gia quiz, bao gồm việc xóa câu trả lời đã chọn, cập nhật điểm số và trạng thái quiz.
// Khi nhấn bỏ chọn 
if (@$_GET['q'] == 'quiz' && @$_GET['step'] == 2 && isset($_SESSION['6e447159425d2d']) && $_SESSION['6e447159425d2d'] == "6e447159425d2d" && (!isset($_POST['ans'])) && (isset($_GET['delanswer'])) && $_GET['delanswer'] == "delanswer") {
    $eid   = @$_GET['eid'];
    // Này là lấy thứ tự câu hỏi
    $sn    = @$_GET['n'];
    $total = @$_GET['t'];
    $qid   = @$_GET['qid'];

    $q = mysqli_query($con, "SELECT * FROM history WHERE username='$username' AND eid='$_GET[eid]' ") or die('Error197');
    // Kiểm tra xem bài thi đã được làm chưa
    if (mysqli_num_rows($q) > 0) {
        $q = mysqli_query($con, "SELECT * FROM history WHERE username='$_SESSION[username]' AND eid='$_GET[eid]' ") or die('Error197');
        while ($row = mysqli_fetch_array($q)) {
            $time   = $row['timestamp'];
            $status = $row['status'];
        }
        
        $q = mysqli_query($con, "SELECT * FROM quiz WHERE eid='$_GET[eid]' ") or die('Error197');
        while ($row = mysqli_fetch_array($q)) {
            $ttime   = $row['time'];
            $qstatus = $row['status'];
        }
        
        $remaining = (($ttime * 60) - ((time() - $time)));
        // Nếu vẫn còn thi
        if ($status == "ongoing" && $remaining > 0 && $qstatus == "enabled") {
            // Lấy câu trả lời của câu hỏi
            $q = mysqli_query($con, "SELECT * FROM answer WHERE qid='$qid' ");
            while ($row = mysqli_fetch_array($q)) {
                $ansid = $row['ansid'];
            }

            // Lấy câu trả lời của người dùng trước đó
            $q = mysqli_query($con, "SELECT * FROM user_answer WHERE eid='$_GET[eid]' AND username='$_SESSION[username]' AND qid='$qid' ") or die('Error115');
            $row = mysqli_fetch_array($q);
            $ans = $row['ans'];
            //Xóa câu trả lời cũ (nếu có)
            $q = mysqli_query($con, "DELETE FROM user_answer WHERE qid='$qid' AND username='$_SESSION[username]' AND eid='$_GET[eid]' ") or die("Error2222");
            // Nếu câu trả lời trước đó đúng, cập nhật lại điểm
            if ($ans == $ansid) {
                $q = mysqli_query($con, "SELECT * FROM quiz WHERE eid='$eid' ") or die('Error129');
                while ($row = mysqli_fetch_array($q)) {
                    // $wrong   = $row['wrong'];
                    // $correct = $row['correct'];
                    $total = $row['total'];
                }
                
                $q = mysqli_query($con, "SELECT * FROM history WHERE eid='$eid' AND username='$username' ") or die('Error139');
                while ($row = mysqli_fetch_array($q)) {
                    $s = $row['score'];
                    $w = $row['wrong'];
                    $r = $row['correct'];
                }
                $r--;
                $s = (10*$r)/$total;
                // $s = $s - $correct;
                $q = mysqli_query($con, "UPDATE `history` SET `score`=$s,`level`=$sn,`correct`=$r, date= NOW(), `totalscore`=$s  WHERE  username = '$username' AND eid = '$eid'") or die('Error11');
            }
            // Nếu câu trả lời trước đó sai, cập nhât lại điểm
            else {
                // $q = mysqli_query($con, "SELECT * FROM quiz WHERE eid='$eid' ") or die('Error129');
                // while ($row = mysqli_fetch_array($q)) {
                //     $wrong   = $row['wrong'];
                //     $correct = $row['correct'];
                // }
                
                $q = mysqli_query($con, "SELECT * FROM history WHERE eid='$eid' AND username='$username' ") or die('Error139');
                while ($row = mysqli_fetch_array($q)) {
                    $s = $row['score'];
                    $w = $row['wrong'];
                    $r = $row['correct'];
                }
                $w--;
                // $s = $s + $wrong;
                $q = mysqli_query($con, "UPDATE `history` SET `score`=$s,`level`=$sn,`wrong`=$w, date= NOW(), `totalscore`=$s  WHERE  username = '$username' AND eid = '$eid'") or die('Error11');
            }
            header('location:account.php?q=quiz&step=2&eid=' . $_GET[eid] . '&n=' . $_GET[n] . '&t=' . $total);
            
        }
        //Nếu bài thi kết thúc 
        else {
            unset($_SESSION['6e447159425d2d']);
            $q = mysqli_query($con, "UPDATE history SET status='finished' WHERE username='$_SESSION[username]' AND eid='$_GET[eid]' ") or die('Error197');
            $q = mysqli_query($con, "SELECT * FROM history WHERE eid='$_GET[eid]' AND username='$_SESSION[username]'") or die('Error156');
            while ($row = mysqli_fetch_array($q)) {
                $s = $row['score'];
                $scorestatus = $row['score_updated'];
            }
            if($scorestatus=="false"){
               $q = mysqli_query($con, "UPDATE history SET score_updated='true' WHERE username='$_SESSION[username]' AND eid='$_GET[eid]' ") or die('Error197');
                    // $q = mysqli_query($con, "SELECT * FROM rank WHERE username='$username'") or die('Error161');
                    // $rowcount = mysqli_num_rows($q);
                    // if ($rowcount == 0) {
                    //     $q2 = mysqli_query($con, "INSERT INTO rank VALUES(NULL,'$username','$s',NOW())") or die('Error165');
                    // } else {
                    //     while ($row = mysqli_fetch_array($q)) {
                    //         $sun = $row['score'];
                    //     }
                        
                    //     $sun = $s + $sun;
                    //     $q = mysqli_query($con, "UPDATE `rank` SET `score`=$sun ,time=NOW() WHERE username= '$username'") or die('Error174');
                    // }
            }
            header('location:account.php?q=result&eid=' . $_GET[eid]);
        }
    }
    // Nếu không có bài thi 
    else {
        unset($_SESSION['6e447159425d2d']);
        $q = mysqli_query($con, "UPDATE history SET status='finished' WHERE username='$_SESSION[username]' AND eid='$_GET[eid]' ") or die('Error197');
        $q = mysqli_query($con, "SELECT * FROM history WHERE eid='$_GET[eid]' AND username='$_SESSION[username]'") or die('Error156');
        while ($row = mysqli_fetch_array($q)) {
            $s = $row['score'];
            $scorestatus = $row['score_updated'];
            }
            if($scorestatus=="false"){
                $q = mysqli_query($con, "UPDATE history SET score_updated='true' WHERE username='$_SESSION[username]' AND eid='$_GET[eid]' ") or die('Error197');
                    // $q = mysqli_query($con, "SELECT * FROM rank WHERE username='$username'") or die('Error161');
                    // $rowcount = mysqli_num_rows($q);
                    // if ($rowcount == 0) {
                    //     $q2 = mysqli_query($con, "INSERT INTO rank VALUES(NULL,'$username','$s',NOW())") or die('Error165');
                    // } else {
                    //     while ($row = mysqli_fetch_array($q)) {
                    //         $sun = $row['score'];
                    //     }
                        
                    //     $sun = $s + $sun;
                    //     $q = mysqli_query($con, "UPDATE `rank` SET `score`=$sun ,time=NOW() WHERE username= '$username'") or die('Error174');
                    // }
            }
        header('location:account.php?q=result&eid=' . $_GET[eid]);
    }
}

if(@$_GET['q'] == 'edit' && $_SERVER['REQUEST_METHOD'] == 'POST'){
        // Lặp qua tất cả các câu hỏi và cập nhật các trường dữ liệu
        foreach ($_POST as $key => $value) {
            // Kiểm tra nếu dữ liệu là câu hỏi hoặc đáp án
            if (strpos($key, 'qns_') === 0) {
                // Lấy qid câu hỏi và câu hỏi mới
                $qid = str_replace('qns_', '', $key);
                $new_question = mysqli_real_escape_string($con, $value); // Làm sạch dữ liệu đầu vào
                
                // Cập nhật câu hỏi mới vào cơ sở dữ liệu
                $update_question_query = "UPDATE questions SET qns='$new_question' WHERE qid='$qid'";
                mysqli_query($con, $update_question_query);

            } elseif (strpos($key, 'op1_') === 0 || strpos($key, 'op2_') === 0 || strpos($key, 'op3_') === 0 || strpos($key, 'op4_') === 0) {
                // Lấy qID câu hỏi và đáp án (op1, op2, op3, op4)
                $optionid = str_replace(['op1_', 'op2_', 'op3_', 'op4_'], '', $key);
                $new_answer = mysqli_real_escape_string($con, $value); // Làm sạch dữ liệu đầu vào
            
                // Cập nhật đáp án vào bảng options
                $update_answer_query = "UPDATE options SET `option` ='$new_answer' WHERE optionid='$optionid'";
                mysqli_query($con, $update_answer_query);
            } elseif (strpos($key, 'ans_') === 0) {
                $qid = str_replace('ans_', '', $key); // Lấy ID câu hỏi
                $correctAnswer = $_POST["ans_$qid"]; // Lấy đáp án đúng

                // Cập nhật cơ sở dữ liệu
                $query = "UPDATE answer SET ansid='$correctAnswer' WHERE qid='$qid'";
                mysqli_query($con, $query) or die('Error khi cập nhật đáp án');

            } elseif (strpos($key, 'fill_qns_') === 0) {
                // Xử lý câu hỏi điền từ
                $qid = str_replace('fill_qns_', '', $key); // Lấy qid câu hỏi điền từ
                $new_fill_question = mysqli_real_escape_string($con, $value); // Làm sạch dữ liệu câu hỏi điền từ
                
                // Cập nhật câu hỏi điền từ vào cơ sở dữ liệu
                $update_fill_question_query = "UPDATE fill_questions SET qns='$new_fill_question' WHERE qid='$qid'";
                mysqli_query($con, $update_fill_question_query);
        
            } elseif (strpos($key, 'fill_ans_') === 0) {
                // Xử lý đáp án đúng cho câu hỏi điền từ
                $qid = str_replace('fill_ans_', '', $key); // Lấy qid câu hỏi điền từ
                $correct_fill_answer = mysqli_real_escape_string($con, $value); // Lấy đáp án điền từ đúng và làm sạch
                
                // Cập nhật đáp án đúng vào bảng fill_answers
                $update_fill_answer_query = "UPDATE fill_questions SET answer='$correct_fill_answer' WHERE qid='$qid'";
                mysqli_query($con, $update_fill_answer_query);
            }
        }
        header("location: dash.php?q=7");
    }
?>
