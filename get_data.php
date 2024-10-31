<?php

include_once 'dbConnection.php';

header('Content-Type: application/json');
if (isset($_GET['username']) && isset($_GET["eid"]))
{
    $sql = "SELECT * FROM history WHERE `username` = '" . $_GET['username'] . "' AND  `eid` = '" . $_GET['eid'] . "'";

    $result = mysqli_query($con, $sql);

    $json = mysqli_fetch_array($result);
}

echo json_encode($json);
?>