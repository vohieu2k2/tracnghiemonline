<?php

include_once 'dbConnection.php';

header('Content-Type: application/json');
$json = array();

if (isset($_GET["username"]) && isset($_GET["eid"]) && isset($_GET["diem"]))
{
        $sql = "SELECT * FROM history WHERE `username` = '" . $_GET['username'] . "' AND  `eid` = '" . $_GET['eid'] . "'";

        $result = mysqli_query($con, $sql);

        $row = mysqli_fetch_array($result);
                $plusScore = $row['plusscore'];
                $totalScore = $row['totalscore'];

        $newplusScore = $plusScore + $_GET["diem"];
        $newtotalScore = $totalScore + $_GET["diem"];

        // $json['success'] = true;
        // $json['message'] = "Cập nhật điểm số thành công!";

        $sql = "UPDATE history SET plusscore = " . $newplusScore .", totalscore = " . $newtotalScore . " WHERE username = '" . $_GET['username'] . "'  AND  `eid` = '" . $_GET['eid'] . "'";

        mysqli_query($con, $sql);

} else {
}

echo json_encode($json);
?>