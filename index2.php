<?php

require_once 'db/conn.php';
function SingleQuery($queri)
{
    $conn = OpenCon();


    if ($conn->query($queri) === TRUE) {
        CloseCon($conn);
        return true;
    } else {
        return $conn->error;
    }
}
